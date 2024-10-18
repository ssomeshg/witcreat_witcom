<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Module;
use App\Models\Storeconfiguration;
use Auth;
use Validator;
use Illuminate\Support\Facades\Input;
use DataTables;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\MailTemplate;
use App\Mail\OrderMail;

class OrderController extends Controller{

 
  public function datatables(Request $request){
        $search=[];
        $store = Storeconfiguration::where('id',1)->first();
        $columns=$request->columns;
        foreach($columns as $colum){
            $search[] = $colum['search']['value'];
        }
        if(!empty($search[1])){
            $search[1] = str_replace($store->OrderIDPrefix,'',$search[1]);
        }
        
        $data = Order::when($search[0],function($query,$search){
            return $query->where('id',$search);  
        })
        ->when($search[1],function($query,$search){
            return $query->where('id','LIKE',"%{$search}%");
        })
        ->when($search[2],function($query,$search){
            $date = explode("|",$search);
            $date[0] = date('y-m-d',strtotime($date[0]." -1 days"));
            $date[1] = date('y-m-d',strtotime($date[1]." +1 days"));
            return $query->whereBetween('created_at',$date);
        })
        ->when($search[3],function($query,$search){
            return $query->orWhere('first_name','LIKE',"%{$search}%")
                        ->orWhere('last_name','LIKE',"%{$search}%")
                        ->orWhere('phone','LIKE',"%{$search}%")
                        ->orWhere('email','LIKE',"%{$search}%");
        })
        ->when($search[4],function($query,$search){
            return $query->where('totalPrice',$search);
        })
        ->when($search[5],function($query,$search){
            return $query->where('payment_method',$search);
        })
        ->when($search[6],function($query,$search){
            return $query->where('payment_status',$search);
        })
        ->when($search[7],function($query,$search){
            return $query->where('delivery_status',$search);
        })->orderBy('id','DESC')->skip($request->start)->take($request->length)->get();

        $data1 = Order::when($search[0],function($query,$search){
            return $query->where('id',$search);  
        })
        ->when($search[1],function($query,$search){
            return $query->where('order_id','LIKE',"%{$search}%");
        })
        ->when($search[2],function($query,$search){
            $date = explode("|",$search);
            $date[0] = date('y-m-d',strtotime($date[0]." -1 days"));
            $date[1] = date('y-m-d',strtotime($date[1]." +1 days"));
            return $query->whereBetween('created_at',$date);
        })
        ->when($search[3],function($query,$search){
            return $query->orWhere('first_name','LIKE',"%{$search}%")
                        ->orWhere('last_name','LIKE',"%{$search}%")
                        ->orWhere('phone','LIKE',"%{$search}%")
                        ->orWhere('email','LIKE',"%{$search}%");
        })
        ->when($search[4],function($query,$search){
            return $query->where('totalPrice',$search);
        })
        ->when($search[5],function($query,$search){
            return $query->where('payment_method',$search);
        })
        ->when($search[6],function($query,$search){
            return $query->where('payment_status',$search);
        })
        ->when($search[7],function($query,$search){
            return $query->where('delivery_status',$search);
        })->orderBy('id','DESC')->get();
        $recordsFiltered = count($data1);
        $recordsTotal = Order::count();
        return response()->json(['data'=>$data,'recordsFiltered'=>$recordsFiltered,'recordsTotal'=>$recordsTotal]);
    }
    
    public function index(){
        return view('admin.order.index');
    }

    public function paymentstatus($id1,$id2)
    {
        $data = Order::findOrFail($id1);
        $data->payment_status = $id2;
        $data->update();
    }

    public function orderststus($id1,$id2){
        $data = Order::findOrFail($id1);
        $store = Storeconfiguration::where('id',1)->first();
        $data->delivery_status = $id2;
        if($id2 == 'Delivered'){
            $data->Deliverydate = now();
        }
        $data->update();
        $cart = unserialize(bzdecompress(utf8_decode($data->card)));
        try{
            if($id2=="placed"){
                    try {
                        $order_no = $store->OrderIDPrefix.sprintf('%03d',$data->id);
                        $data = ['flow_id'=>'Order_Placed','mobile'=>$data->getdialing(),'data'=>['order_no'=>$order_no]];
                        $this->sentsms($data);
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
                 $mailTemplates = MailTemplate::where('template_name',4)->where('status','1')->first();
            }elseif($id2=="Confirmed"){
                try {
                        $order_no = $store->OrderIDPrefix.sprintf('%03d',$data->id);
                        $data = ['flow_id'=>'Order_Confirmed','mobile'=>$data->getdialing(),'data'=>['order_no'=>$order_no]];
                        $this->sentsms($data);
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
                 $mailTemplates = MailTemplate::where('template_name',7)->where('status','1')->first();
                
            }elseif($id2=="Delivered"){
                try {
                        $order_no = $store->OrderIDPrefix.sprintf('%03d',$data->id);
                        $data = ['flow_id'=>'Order_Delivered','mobile'=>$data->getdialing(),'data'=>['order_no'=>$order_no]];
                        $this->sentsms($data);
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
                 $mailTemplates = MailTemplate::where('template_name',9)->where('status','1')->first();
            }elseif($id2=="Canceled"){
                try {
                        $order_no = $store->OrderIDPrefix.sprintf('%03d',$data->id);
                        $data = ['flow_id'=>'Order_Canceled','mobile'=>$data->getdialing(),'data'=>['order_no'=>$order_no]];
                        $this->sentsms($data);
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
                 $mailTemplates = MailTemplate::where('template_name',10)->where('status','1')->first();
            }elseif($id2=="Shipped"){
               
            }elseif($id2=="fail"){
                try {
                        $order_no = $store->OrderIDPrefix.sprintf('%03d',$data->id);
                        $data = ['flow_id'=>'Order_Failed','mobile'=>$data->getdialing(),'data'=>['order_no'=>$order_no]];
                        $this->sentsms($data);
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
            }
      $mailContents=[
        'title'=>$mailTemplates->subject_mail,
        'body'=>$mailTemplates->content_mail,
        'footer'=>$mailTemplates->footer_mail];
                Mail::to($data->email)->bcc($mailTemplates->bcc_mail)->send(new OrderMail($data,$cart,$mailContents));
                
            } catch(\Exception $e){
                echo $e;
                $error = $e;
            }
    }
    public function view($id){
        $order = Order::findOrFail($id);
        $Store = Storeconfiguration::findOrFail(1);
        $items = unserialize(bzdecompress(utf8_decode($order->card)));
        $user = User::where('id',$order->user_id)->first();
        $user = ($user?$user:null);
        return view('admin.order.view', compact('order','Store','items','user'));
    }
    public function shippinfnodes($id,$model){
        $order = Order::findOrFail($id);
       return view('admin.order.Shipppedmodel', compact('order','model'))->render();
    }
    public function updatenotes(Request $request,$id){
        $store = Storeconfiguration::where('id',1)->first();
        $data = Order::findOrFail($id);
        $data->track_id = $request->track_id;
        $data->d_s_n = $request->d_s_n;
        $data->update();
         try {
                        $order_no = $store->OrderIDPrefix.sprintf('%03d',$data->id);
                        $data1 = ['flow_id'=>'Order_Shipped','mobile'=>$data->getdialing(),'data'=>['order_no'=>$order_no,'URL'=>$data->track_id]];
                        $this->sentsms($data1);
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
        $cart = unserialize(bzdecompress(utf8_decode($data->card)));
        $mailTemplates = MailTemplate::where('template_name',8)->where('status','1')->first();
      $mailContents=[
        'title'=>$mailTemplates->subject_mail,
        'body'=>$mailTemplates->content_mail,
        'footer'=>$mailTemplates->footer_mail];
                Mail::to($data->email)->bcc($mailTemplates->bcc_mail)->send(new OrderMail($data,$cart,$mailContents));
        return response()->json(['msg'=>'Updated ']);
    }
    public function updateReject(Request $request,$id){
        $data = Order::findOrFail($id);
        $data->d_r_n = $request->d_r_n;
        $data->update();
        return response()->json(['msg'=>'Updated ']);
    }
}