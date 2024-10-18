<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Address;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Pincode;
use App\Models\Storeconfiguration;
use Illuminate\Support\Facades\Mail;
use Razorpay\Api\Api;
use App\Models\MailTemplate;
use App\Mail\OrderMail;
use App\Models\CouponUsage;
use App\Models\Coupon;
use Session;
use Auth;
use Redirect;
use Stripe;

class CheckoutController extends Controller{

    public function CustomerCancelOrder(Request $request,Order $order){
        // $date = date('y:m:d', strtotime('+3 days'));
        // if($order->updated_at < $date && $order->delivery_status == 'Delivered'){
            $order->delivery_status = 'Canceled';
            $order->reason = $request->reason;
            $order->update();
            $cart = unserialize(bzdecompress(utf8_decode($order->card)));
            try{
            $mailTemplates = MailTemplate::where('template_name',4)->where('status','1')->first();
            $mailContents=[
            'title'=>$mailTemplates->subject_mail,
            'body'=>$mailTemplates->content_mail,
            'footer'=>$mailTemplates->footer_mail];
                Mail::to($order->email)->bcc($mailTemplates->bcc_mail)->send(new OrderMail($order,$cart,$mailContents));
            } catch(\Exception $e){
                $error = $e;
            }
        return Redirect::back(); 
    }
    public function deliveryaddress(Request $request){
        if(!Auth::check()){
            return Redirect::back(); 
        }
        $Cart = session()->get('cart');
        if(!$Cart){
            return redirect('/');
        }
        $Country = Country::where('status',1)->get();
        $Address = Address::where('user_id',Auth::user()->id)->get();
        $add = Address::where('user_id',Auth::user()->id)->latest()->first();
        $Cart = session()->get('cart');
        $productCheck = $Cart->checkout();
        if(!empty($productCheck)){
            return Redirect::back()->withErrors(['error'=>$productCheck]);
        }
        $Cart->total();
        $Cart->deliverycharge = 0;
        $weight = $Cart->weight;
        $deliveryCharge =($Address->count() < 1)? (object)['delivery'=>null,'msg'=>'Add Address','fastdelivery'=>null] :$add->delivery_charge($Cart->get_weight());
        $Cart->deliverycharge = ($deliveryCharge->delivery != null)? $deliveryCharge->delivery->price:0;
        $Cart->deliverytype = 0;
        $Cart->total();
        session()->put('cart',$Cart);
        session()->put('Address',$add);
        return view('front.deliveryaddress',compact('Cart','Address','Country','weight','deliveryCharge'));
    }
    public function Cart_render(Request $request){
        $Address = Address::where('user_id',Auth::user()->id)->where('id',$request->id)->first();
        $Cart = session()->get('cart');
        $store = Storeconfiguration::where('id',1)->first();
        
        if(empty($Address)){
            $Cart->deliverycharge = 0;
            $deliveryCharge = (object)['delivery'=>null,'msg'=>'Add Address','fastdelivery'=>null];
            $Cart->deliverytype = 0;
            $Cart->total();
            return view('front.includes.cart_summery',compact('Cart','store','deliveryCharge'));
        }
        
        $Address['fast'] = ($request->fast == 'fast')?true:false;
        $Cart->deliverycharge = 0;
        $deliveryCharge = $Address->delivery_charge($Cart->get_weight());
        if($request->fast == 'fast'){
            $Cart->deliverycharge = ($deliveryCharge->fastdelivery != null)? $deliveryCharge->fastdelivery->price:0;
            $Cart->deliverytype = 1;
        }else{
            $Cart->deliverycharge = ($deliveryCharge->delivery != null)? $deliveryCharge->delivery->price:0;
            $Cart->deliverytype = 0;
        }
        $Cart->total();
        session()->put('cart',$Cart);
        session()->put('Address',$Address);
        return view('front.includes.cart_summery',compact('Cart','store','deliveryCharge'));
    }
    public function Cart_render0(){
        return view('front.includes.cart_summery0');
    }
    public function fail(Request $request){
        if(!Auth::check()){
            return Redirect::back(); 
        }
        $checkout_session = \session()->get('stripe_object');
            \Stripe\Stripe::setApiKey(env('STRIPE_KEY'));
            $session = \Stripe\Checkout\Session::retrieve([
                'id' => $checkout_session->id,
                'expand' => ['customer','payment_intent.payment_method'],
              ]);
        $Order = new Order();
        $Cart = $request->session()->get('cart');
        $Address = $request->session()->get('Address');
        $request['card'] = utf8_encode(bzcompress(serialize($Cart), 9));
        $request['payment_method'] = "";
        $request['stripe_object'] = utf8_encode(bzcompress(serialize($checkout_session), 9));
        $request['order_id'] = "";
        $request['user_id'] = Auth::user()->id;
        $request['first_name'] = $Address->name;
        $request['last_name'] = $Address->last;
        $request['email'] = $Address->email;
        $request['phone'] = $Address->phone;
        $request['apparment'] = $Address->address1;
        $request['street'] = $Address->address2;
        $request['city'] = $Address->getcity();
        $request['state'] = $Address->getState();
        $request['post_code'] = $Address->getpincode();
        $request['country'] = $Address->getContry();
        $request['totalPrice'] = $Cart->totalPrice;
        $request['tax'] = $Cart->tax;
        $request['grandTotal'] = $Cart->grandTotal;
        $request['payment_status'] = "fail";
        $request['delivery_status'] = "fail";
        $Order->fill($request->all())->save();
        $Cart->deliverycharge = 0;
        $Cart->total();
        session()->put('cart',$Cart);
        $weight = $Cart->weight;
        $Address = Address::where('user_id',Auth::user()->id)->get();
        $Country = Country::where('status',1)->get();
        $add = Address::where('user_id',Auth::user()->id)->latest()->first();
        $deliveryCharge =($Address->count() < 1)? (object)['delivery'=>null,'msg'=>'Add Address','fastdelivery'=>null] :$add->delivery_charge($Cart->get_weight());
        $msg = "**  Payment Fail Try Again  **";
        return view('front.deliveryaddress',compact('Cart','Address','Country','msg','weight','deliveryCharge'));
    }
    // public function order(){
    //     return view('front.order');
    // }
    public function checkout(Request $request){
        $Coupon = $this->AvailableCoupon();
        $Address = session()->get('Address');
        if(!Auth::check() || $Address == null){
            return Redirect::back(); 
        }
       
        $Cart = session()->get('cart');
        if(!$Cart){
            return redirect('/');
        }
        $productCheck = $Cart->checkout();
        if(!empty($productCheck)){
            return Redirect::back()->withErrors(['error'=>$productCheck]);
        }
        $store = Storeconfiguration::where('id',1)->first();
        // $Address = Address::where('user_id',Auth::user()->id)->where('id',$id)->first();
        if(empty($Address->id)){
            $Address = Address::where('user_id',Auth::user()->id)->latest()->first();
        }
        $Cart->total();
        $deliveryCharge = $Address->delivery_charge($Cart->get_weight());
        if($deliveryCharge->fastdelivery != null && $Address->fast == 'true'){
            $Cart->deliverycharge = ($deliveryCharge->fastdelivery != null)? $deliveryCharge->fastdelivery->price:0;
            $Cart->CODAmount = ($deliveryCharge->fastdelivery != null)? $deliveryCharge->fastdelivery->CODAmount:0;
        }else{
            $Cart->deliverycharge = ($deliveryCharge->delivery != null)? $deliveryCharge->delivery->price:0;
            $Cart->CODAmount = ($deliveryCharge->delivery != null)? $deliveryCharge->delivery->CODAmount:0;
        }
        $Cart->deliveryextra = false;
        $Cart->total();
        session()->put('Address',$Address);
        session()->put('cart',$Cart);
        if($deliveryCharge->delivery == null && $Address->fast != 'true'){
            return Redirect::back()->withErrors(['msg'=>'Out of service']);
        }
        if($deliveryCharge->fastdelivery == null && $Address->fast == 'true'){
            return Redirect::back()->withErrors(['msg'=>'Out of service']);
        }
        return view('front.checkout',compact('Cart','Address','deliveryCharge','Coupon'));
    }
    
    public function paymentpage(Request $request){
        $Address = session()->get('Address');
        if(!Auth::check() || $Address == null){
            return Redirect::back(); 
        }
       
        $Cart = session()->get('cart');
        if(!$Cart){
            return redirect('/');
        }
        $productCheck = $Cart->checkout();
        if(!empty($productCheck)){
            return Redirect::back()->withErrors(['error'=>$productCheck]);
        }
        $store = Storeconfiguration::where('id',1)->first();
        // $Address = Address::where('user_id',Auth::user()->id)->where('id',$id)->first();
        if(empty($Address->id)){
            $Address = Address::where('user_id',Auth::user()->id)->latest()->first();
        }
        $Cart->total();
        $deliveryCharge = $Address->delivery_charge($Cart->get_weight());
        if($deliveryCharge->fastdelivery != null && $Address->fast == 'true'){
            $Cart->deliverycharge = ($deliveryCharge->fastdelivery != null)? $deliveryCharge->fastdelivery->price:0;
            $Cart->CODAmount = ($deliveryCharge->fastdelivery != null)? $deliveryCharge->fastdelivery->CODAmount:0;
        }else{
            $Cart->deliverycharge = ($deliveryCharge->delivery != null)? $deliveryCharge->delivery->price:0;
            $Cart->CODAmount = ($deliveryCharge->delivery != null)? $deliveryCharge->delivery->CODAmount:0;
        }
        $Cart->deliveryextra = false;
        $Cart->total();
        session()->put('Address',$Address);
        session()->put('cart',$Cart);
        if($deliveryCharge->delivery == null && $Address->fast != 'true'){
            return Redirect::back()->withErrors(['msg'=>'Out of service']);
        }
        if($deliveryCharge->fastdelivery == null && $Address->fast == 'true'){
            return Redirect::back()->withErrors(['msg'=>'Out of service']);
        }
        return view('front.payment',compact('Cart','Address','deliveryCharge'));
    }
    public function india(Request $request){
        $Address = Address::where('user_id',Auth::user()->id)->get();
        return view('front.includes.wasttemplate',compact('Address')); 
    }
    public function india1(Request $request){
        if($request->id == "100"){
            $State = State::where('status',1)->where('country_id',$request->id)->get();
            return view('front.includes.wasretemplate2',compact('State'));
            }else{
                return view('front.includes.wasretemplate2');
            }   
    }
    public function addAddress(Request $request){
        $Address = new Address();
        $Address->fill($request->all());
        $Address->save();
        $data['msg'] = "Updates";
        return response()->json($data);
    }
    public function update(Request $request){
        $Address = Address::findOrFail($request->id);
        $Address->fill($request->all());
        $Address->update();
        $data['msg'] = "Updates";
        return response()->json($data);
    }
    public function checkorder(){
        $Cart = session()->get('cart');
        return $Cart->checkout();
    }
    public function order(Request $request){
        if(!Auth::check()){
            return Redirect::back(); 
        }
        $store = Storeconfiguration::where('id',1)->first();
        $cart = $request->session()->get('cart');
        $cart->checkout();
        $cart->total();
            \Stripe\Stripe::setApiKey(env('STRIPE_KEY'));
            $checkout_session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                  'price_data' => [
                    'currency' => 'INR',
                    'unit_amount' => (int)$cart->grandTotal*100,
                    'product_data' => [
                      'name' => $store->store_name,
                      'images' => [],
                    ],
                  ],
                  'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('user.Paymentreturn'),
                'cancel_url' => route('user.paymentfail'),
              ]);
              session()->put('stripe_object',$checkout_session);
         return Redirect::to($checkout_session->url);
    }

        public function Paymentreturn(Request $request){
            $checkout_session = \session()->get('stripe_object');
            \Stripe\Stripe::setApiKey(env('STRIPE_KEY'));
            $session = \Stripe\Checkout\Session::retrieve([
                'id' => $checkout_session->id,
                'expand' => ['customer','payment_intent.payment_method'],
              ]);
            // dd($session->payment_intent->payment_method->type);
        $Order = new Order();
        $temp = utf8_encode(bzcompress(serialize($checkout_session), 9));
        // dd($session->payment_intent->id);
        $cart = $request->session()->get('cart');
        $cart->productreducr();
        $Address = $request->session()->get('Address');
        $request['card'] = utf8_encode(bzcompress(serialize($cart), 9));
        $request['payment_method'] = $session->payment_intent->payment_method->type;
        $request['stripe_object'] = utf8_encode(bzcompress(serialize($checkout_session), 9));
        $request['order_id'] = $session->payment_intent->id;
        $request['user_id'] = Auth::user()->id;
        $request['first_name'] = $Address->name;
        $request['last_name'] = $Address->last;
        $request['email'] = $Address->email;
        $request['phone'] = $Address->phone;
        $request['apparment'] = $Address->address1;
        $request['street'] = $Address->address2;
        $request['city'] = $Address->getcity();
        $request['state'] = $Address->getState();
        $request['post_code'] = $Address->getpincode();
        $request['country'] = $Address->getContry();
        $request['totalPrice'] = $cart->totalPrice;
        $request['tax'] = $cart->tax;
        $request['grandTotal'] = $cart->grandTotal;
        if($Order->fill($request->all())->save()){
            $request->session()->forget('cart');
            $request->session()->forget('stripe_object');
            $Order = Order::findOrFail($Order->id);
            $error = "";
            try{
                 $mailTemplates = MailTemplate::where('template_name',4)->where('status','1')->first();
      $mailContents=[
        'title'=>$mailTemplates->subject_mail,
        'body'=>$mailTemplates->content_mail,
        'footer'=>$mailTemplates->footer_mail];
                Mail::to($Order->email)->bcc($mailTemplates->bcc_mail)->send(new OrderMail($Order,$cart,$mailContents));
            } catch(\Exception $e){
                $error = $e;
            }
            return view('front.order',compact('Order','cart','Address','error'));
        }else{
            return Redirect::back(); 
        }
        return "Some thin was wrong";
    }
    public function razorpay(){
        
    }
    public function COD(Request $request){
        $store = Storeconfiguration::where('id',1)->first();
        $Order = new Order();
        $cart = $request->session()->get('cart');
        $cart->productreducr();
        $Address = $request->session()->get('Address');
        $request['card'] = utf8_encode(bzcompress(serialize($cart), 9));
        $request['payment_method'] = "Cash On Delivery";
        $request['user_id'] = Auth::user()->id;
        $request['first_name'] = $Address->name;
        $request['last_name'] = $Address->last;
        $request['email'] = $Address->email;
        $request['phone'] = $Address->phone;
        $request['apparment'] = $Address->address1;
        $request['street'] = $Address->address2;
        $request['city'] = $Address->getcity();
        $request['state'] = $Address->getState();
        $request['post_code'] = $Address->getpincode();
        $request['country'] = $Address->getContry();
        $request['totalPrice'] = $cart->totalPrice;
        $request['tax'] = $cart->tax;
        $request['grandTotal'] = $cart->grandTotal;
        $request['payment_status'] = 'Pending';
        $request['grandTotal'] = $cart->grandTotal;


                $request['shipping_first_name'] = Auth::user()->name;
                $request['shipping_last_name'] =  Auth::user()->last_name;
                $request['shipping_address'] =  Auth::user()->address;
                $request['shipping_city'] =  Auth::user()->getcity();
                $request['shipping_state'] =  Auth::user()->getState();
                $request['shipping_post_code'] =  Auth::user()->getpincode();
                $request['shipping_phone'] =  Auth::user()->Phone;
                $request['shipping_street'] =  Auth::user()->street;
                $request['shipping_country'] =  Auth::user()->getContry();
        
        if($Order->fill($request->all())->save()){
            if($cart->CouponClass){
                $this->CouponUsed($cart->CouponClass,$Order->id);
            }
            $request->session()->forget('cart');
            $Order = Order::findOrFail($Order->id);
            $error = "";
            try{
                 $mailTemplates = MailTemplate::where('template_name',4)->where('status','1')->first();
                    $mailContents=[
                        'title'=>$mailTemplates->subject_mail,
                        'body'=>$mailTemplates->content_mail,
                        'footer'=>$mailTemplates->footer_mail];
                Mail::to($Order->email)->bcc($mailTemplates->bcc_mail)->send(new OrderMail($Order,$cart,$mailContents));
            } catch(\Exception $e){
                $error = $e;
            }
            try {
                $order_no = $store->OrderIDPrefix.sprintf('%03d',$Order->id);
                $data = ['flow_id'=>'Order_Placed','mobile'=>$Order->getdialing(),'data'=>['order_no'=>$order_no]];
                $this->sentsms($data);
            } catch (\Throwable $th) {
                //throw $th;
            }
            return view('front.order',compact('Order','cart','Address','error'));
        }else{
            \Session::put('success', 'try again to place order');
            return Redirect::back();
        }
    }
    
    public function razorpayReturn(Request $request)
    {        
        $input = $request->all();        
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) 
        {
            try 
            {
                $response = $api->payment->fetch($input['razorpay_payment_id']);
                $Order = new Order();
                $cart = $request->session()->get('cart');
                $cart->productreducr();
                $Address = $request->session()->get('Address');
                $request['card'] = utf8_encode(bzcompress(serialize($cart), 9));
                $request['payment_method'] = $response->method;
                $request['stripe_object'] = utf8_encode(bzcompress(serialize($response), 9));
                $request['order_id'] = $response->id;
                $request['user_id'] = Auth::user()->id;
                $request['first_name'] = $Address->name;
                $request['last_name'] = $Address->last;
                $request['email'] = $Address->email;
                $request['phone'] = $Address->phone;
                $request['apparment'] = $Address->address1;
                $request['street'] = $Address->address2;
                $request['city'] = $Address->getcity();
                $request['state'] = $Address->getState();
                $request['post_code'] = $Address->getpincode();
                $request['country'] = $Address->getContry();
                $request['totalPrice'] = $cart->totalPrice;
                $request['tax'] = $cart->tax;
                $request['grandTotal'] = $cart->grandTotal;

                $request['shipping_first_name'] = Auth::user()->name;
                $request['shipping_last_name'] =  Auth::user()->last_name;
                $request['shipping_address'] =  Auth::user()->address;
                $request['shipping_city'] =  Auth::user()->getcity();
                $request['shipping_state'] =  Auth::user()->getState();
                $request['shipping_post_code'] =  Auth::user()->getpincode();
                $request['shipping_phone'] =  Auth::user()->Phone;
                $request['shipping_street'] =  Auth::user()->street;
                $request['shipping_country'] =  Auth::user()->getContry();
                
                if($Order->fill($request->all())->save()){
                    if($cart->CouponClass){
                        $this->CouponUsed($cart->CouponClass,$Order->id);
                    }
                    $request->session()->forget('cart');
                    $Order = Order::findOrFail($Order->id);
                    $error = "";
                    try{
                         $mailTemplates = MailTemplate::where('template_name',4)->where('status','1')->first();
                            $mailContents=[
                                'title'=>$mailTemplates->subject_mail,
                                'body'=>$mailTemplates->content_mail,
                                'footer'=>$mailTemplates->footer_mail];
                        Mail::to($Order->email)->bcc($mailTemplates->bcc_mail)->send(new OrderMail($Order,$cart,$mailContents));
                    } catch(\Exception $e){
                        $error = $e;
                    }
                    return view('front.order',compact('Order','cart','Address','error'));
                }else{
                    return Redirect::back(); 
                }
            } 
            catch (\Exception $e) 
            {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }            
        }
        \Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        return redirect()->back();
    }
    public function edit($id){
        $Address = Address::where('id',$id)->first();
        $Country = Country::where('status',1)->get();
        $State = State::where('status',1)->where('country_id',$Address->country_id)->get();
        $City = City::where('status',1)->where('state_id',$Address->state_id)->get();
        $Pincode = Pincode::where('status',1)->where('city_id',$Address->city_id)->get();
        return view('front.includes.edituseraddress',compact('Address','Country','State','City','Pincode'));
    }
    public function delete($id){
        Address::where('id', $id)->delete();
        session()->put('Address',null);
        return true;
    }
    public function state(Request $request){
        $State = State::where('status',1)->where('country_id',$request->id)->get();
        return response()->json($State);
    }
    public function city(Request $request){
        $City = City::where('status',1)->where('state_id',$request->id)->get();
        return response()->json($City);
    }
    public function pincode(Request $request){
        $Pincode = Pincode::where('status',1)->where('city_id',$request->id)->get();
        return response()->json($Pincode);
    }
    public function render(){
        $Address = Address::where('user_id',Auth::user()->id)->get();
        $Cart = session()->get('cart');
        $weight = $Cart->weight;
        return view('front.includes.userAddress',compact('Address','weight'));
    }
        public function checkmail(){
        $Order  = Order::where('id',11)->first();
        $cart = unserialize(bzdecompress(utf8_decode($Order->card)));
        try{
                
            $mailTemplates = MailTemplate::where('template_name',4)->where('status','1')->first();
            $mailContents=[
              'title'=>$mailTemplates->subject_mail,
              'body'=>$mailTemplates->content_mail,
              'footer'=>$mailTemplates->footer_mail,
          ];
                      Mail::to("arunp894.squaredotssolutions@gmail.com")->bcc($mailTemplates->bcc_mail)->send(new OrderMail($Order,$cart,$mailContents));
                  } catch(\Exception $e){
                      $error = $e;
                  }
    }
    
    
     // ********************* coupon *********************** //

    public function removecoupon(Request $request){
        $cart = $request->session()->get('cart');
        $cart->CouponClass = null;
        $cart->total();
        session()->put('cart',$cart);
        return response()->json(['status'=>true,'msg'=>'Coupon Removed']);
    }

    public function applycoupon(Request $request){
        $user = Auth::user()->id;
        $cart = $request->session()->get('cart');
        $date = today()->format('Y-m-d');
        if($cart->storeConfig->include_tax == "Exclusive"){
            $price = $cart->totalPrice + $cart->tax;
        }else{
            $price = $cart->totalPrice;
        }
  
        $Coupon = Coupon::where('status',1)->where('code','=',$request->code)->whereRaw("FIND_IN_SET('$user',userid)")->where('expirydate', '>=', $date)->where('OrderValue','<=',(int)$price)->first();
        
        if(!$Coupon){
            $Coupon = Coupon::where('status',1)->where('code','=',$request->code)->where('userid',null)->where('expirydate', '>=', $date)->where('OrderValue','<=',(int)$price)->first(); 
        }
    
        if($Coupon){
            if($Coupon->count != 0){
                if($this->checkvalicoupon($Coupon,$user)){
                    return response()->json(['status'=>false,'msg'=>'Coupon expired']);
                }   
            }
            if($Coupon->user == 0){
                $createdate = Auth::user()->created_at;
                if($createdate->gte($Coupon->created_at)){
                    return response()->json(['status'=>false,'msg'=>'Coupon expired']);
                }
            }

            $cart->CouponClass = $Coupon;
            if($Coupon->type == 1){
                $cart->coupen = $price / ( 100/$Coupon->value);
            }else{
                $cart->coupen = $Coupon->value;
            }
            $cart->total();
            session()->put('cart',$cart);
            return response()->json(['status'=>true,'msg'=>'Coupon updated']);

        }else{
            return response()->json(['status'=>false,'msg'=>'Invalid Coupon']);
        }
    }
    function checkvalicoupon($Coupon,$user){
        $CouponUsage = CouponUsage::where('coupenid',$Coupon->id)->where('code',$Coupon->code)->where('userid',$user)->count();
        if($CouponUsage >= (int)$Coupon->count){
            return true;
        }
    }

    public function CouponUsed($object,$orderid){
        $CouponUsage = new CouponUsage();
        $CouponUsage->code = $object->code;
        $CouponUsage->orderid = $orderid;
        $CouponUsage->userid = Auth::user()->id;
        $CouponUsage->count = 1;
        $CouponUsage->coupenid = $object->id;
        $CouponUsage->save();
    }

    // ******************************** summery ***************************** //

    public function checkoutsummery(Request $request){
        $Cart = $request->session()->get('cart');
        $Address = session()->get('Address');
        return view('front.includes.checksummery',compact('Cart','Address'));
    }
    
        public function paymentsummery(Request $request){
        $Cart = $request->session()->get('cart');
        $Address = session()->get('Address');
        return view('front.includes.paymentsummery',compact('Cart','Address'));
    }

    public function deliveryextraxharge(Request $request){
        $cart = $request->session()->get('cart');
        if($request->type == 'COD'){
            $cart->addextecharge();
        }else{
            $cart->reduceextecharge();
        }
        session()->put('cart',$cart);
        return response()->json(['status'=>true,'msg'=>' Updated']);
    }

    public function AvailableCoupon(){
        $Cart = session()->get('cart');
        $price = $Cart->totalPrice;
        $user = Auth::user()->id;
        $createdate = Auth::user()->created_at;
        $date = today()->format('Y-m-d');
        $valideCoupon = [];

        $Coupon = Coupon::where('status',1)->where('OrderValue','<=',(int)$price)->where('expirydate', '>=', $date)->get();
        // $Coupon2 = Coupon::where('status',1)->where('userid',null)->where('OrderValue','<=',$price)->where('expirydate', '>=', $date)->get();

        foreach ($Coupon as $key => $value) {
            # code...
            $CouponUsage = CouponUsage::where('coupenid',$value->id)->where('code',$value->code)->where('userid',$user)->count();

            if($CouponUsage >= (int)$value->count){
                continue;
            }

            if($value->user == 0){
                $createdate = Auth::user()->created_at;
                if($createdate->gte($value->created_at)){
                    continue;
                }
            }

            $valideCoupon[] = $value;
        }
        
        // foreach ($Coupon2 as $key => $value) {
        //     # code...
        //     $CouponUsage = CouponUsage::where('coupenid',$value->id)->where('code',$value->code)->where('userid',$user)->count();

        //     if($CouponUsage >= (int)$value->count){
        //         continue;
        //     }

        //     if($value->user == 0){
        //         $createdate = Auth::user()->created_at;
        //         if($createdate->gte($value->created_at)){
        //             continue;
        //         }
        //     }

        //     $valideCoupon[] = $value;
        // }
        
        return $valideCoupon;
      }
}


