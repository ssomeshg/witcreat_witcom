<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Auth;
use DataTables;


class SalesController extends Controller
{
    public $Orders = null;

    public  function index(){
      return view('admin.sales.salesReport');
    }
    public function salesReport(Request $request){
      $help = new Helper();
    //   $this->Orders = Order::orderBy('id','desc')->whereBetween('Deliverydate',[$request->FromDate, $request->ToDate])->get();
    $this->Orders = Order::orderBy('id','desc')->whereDate('Deliverydate','>=',$request->FromDate)->whereDate('Deliverydate','<=',$request->ToDate)->get();
      if(Auth::user()->is_vendor != null){
        $this->Orders = $this->VendoeOrder($Orders);
      }
      //Convert to productWise
      $this->Orders = $this->ConvertToProduct($this->Orders);

      return DataTables::of($this->Orders)
      ->addIndexColumn()
      ->addColumn('Order_id', function(Order $data) use ($help) { 
        $help->getStore($data);
        return $help->storeConfig->OrderIDPrefix.''.sprintf('%03d',$data->id);
      })
      ->addColumn('Product_sku', function(Order $data) use ($help) { 
        return $help->getReportProductSKU($data);
      })
      ->addColumn('vendorsku', function(Order $data) use ($help) { 
        return $help->getReportvendorSKU($data);
      })
      ->addColumn('Product_name', function(Order $data) use ($help) { 
        return $data->ReportItem->product_title;
      })
      ->addColumn('vendorIDName', function(Order $data) use ($help) { 
        return $help->vendor($data);
      })
      ->addColumn('Cost', function(Order $data) use ($help) { 
        return $data->ReportItem->manufacturerPrice;
      })
      ->addColumn('markup', function(Order $data) use ($help) { 
        return $help->markup($data);
      })
      ->addColumn('markupprice', function(Order $data) use ($help) { 
        return $help->markupprice($data);
      })
      ->addColumn('PriceOne', function(Order $data) use ($help) { 
        return $help->PriceOne($data);
      })
      ->addColumn('Customer', function(Order $data) use ($help) { 
        return $help->Customer($data);
      })
      ->addColumn('CustomerPrice', function(Order $data) use ($help) { 
        return $help->CustomerPrice($data);
      })
      ->addColumn('PriceTwo', function(Order $data) use ($help) { 
        return $help->PriceTwo($data);
      })
      ->addColumn('discount', function(Order $data) use ($help) { 
        return $help->discount($data);
      })
      ->addColumn('DiscountPrice', function(Order $data) use ($help) { 
        return $help->DiscountPrice($data);
      })
      ->addColumn('PriceThree', function(Order $data) use ($help) { 
        return $help->PriceThree($data);
      })
      ->addColumn('Coupon', function(Order $data) use ($help) { 
        return $help->Coupon($data);
      })
      ->addColumn('CouponPrice', function(Order $data) use ($help) { 
        return $help->CouponPrice($data);
      })
      ->addColumn('Amount', function(Order $data) use ($help) { 
        return $help->PriceThree;
      })
      ->addColumn('ProductTax', function(Order $data) use ($help) { 
        return $help->ProductTax($data);
      })
      ->addColumn('ProductTaxAmount', function(Order $data) use ($help) { 
        return $help->ProductTaxAmount($data);
      })
      ->addColumn('Total', function(Order $data) use ($help) { 
        return $help->Total($data);
      })
      ->addColumn('Quantity', function(Order $data) use ($help) { 
        return $help->Quantity($data);
      })
      ->addColumn('TotalAmount', function(Order $data) use ($help) { 
        return $help->TotalAmount($data);
      })
      ->addColumn('CustomerPay', function(Order $data) use ($help) { 
        return $help->TotalAmount($data);
      })
      ->addColumn('ProfitLoss', function(Order $data) use ($help) { 
        return $help->ProfitLoss($data);
      })
      ->addColumn('status', function(Order $data) use ($help) { 
        return $help->status($data);
      })
      ->rawColumns(['Order_id','Product_sku','vendorsku','Product_name','vendorIDName','Cost','markup','markupprice','PriceOne','Customer','CustomerPrice','PriceTwo','dscount','DiscountPrice','PriceThree','Coupon','CouponPrice','Amount','ProductTax','ProductTaxAmount','Total','Quantity','TotalAmount','CustomerPay','ProfitLoss','status'])
      ->toJson();
    }

    
    function ConvertToProduct($Order){
      $newOrder = [];
      foreach ($Order as $key => $value) {
        $cartitem = unserialize(bzdecompress(utf8_decode($value->card)));
        
        foreach ($cartitem->items as $key1 => $value1) {
          if(array_key_exists($value1->id,$cartitem->ReturnItems)){
              
              $clone = clone $value;
              $sold = clone $value1;
              $sold['mainquantity'] = $sold->quantity;
              $sq = $sold->quantity - $cartitem->ReturnItems[$value1->id]->Returnquantity;
              $sold->quantity = $sq;
              $sold['status'] = 'Sold';
              if($sold->quantity > 0){ $clone['ReportItem'] = $sold; array_push($newOrder,$clone); }
              
              $clone = clone $value;
              $return = clone $value1;
              $return['mainquantity'] = $return->quantity;
              $return->quantity = $cartitem->ReturnItems[$value1->id]->Returnquantity;
              $return['status'] = 'Return';
              if($return->quantity > 0){ $clone['ReportItem'] =  $return; array_push($newOrder,$clone); }
              
          }else{
            $clone = clone $value;
            $value1 = clone $value1;
            $value1['status'] = 'Sold';
            $value1['mainquantity'] = $value1->quantity;
            $clone['ReportItem'] = $value1;
            array_push($newOrder,$clone);
          }
          
        }
      }
      return $newOrder;
    }

    function VendoeOrder($Orders){
        $Orders = $Orders->filter(function($Order){
            $Amount = 0;
            $true = false;
            $cartitem = unserialize(bzdecompress(utf8_decode($Order->card)));
            $array = [];
            foreach ($cartitem->items as $key => $items) {
              if($items->vendor == Auth::user()->is_vendor){
                $true = true;
                $Amount += $items->total;
                $array[] = $items;
              }
            }
            if($true){
              $Order['amount'] = $Amount;
              $Order['vendorItems'] = $array;
              $array = [];
              return $Order;
            }
        });
        return $Orders;
    }
}

//  HELPER Class


class Helper {

  public $OrderID = null;
  public $Cart = null;
  public $storeConfig = null;
  public $vendor = null;
  public $OrderData = null;
  public $PriceOne = 0;
  public $PriceTwo = 0;
  public $PriceThree = 0;


  public function getStore(Order $Order){
    $this->OrderData = $Order;
    $this->PriceOne = 0;
    $this->PriceTwo = 0;
    $this->PriceThree = 0;
    if($Order->id == $this->OrderID){
      $this->OrderData = $Order;
      return $storeConfig;
    }else{
      $this->Cart = unserialize(bzdecompress(utf8_decode($Order->card)));
      $this->storeConfig = $this->Cart->storeConfig;
    }
  }

  public function getReportProductSKU(Order $order){
    //   return $order->ReportItem->vendorObject;
    return $this->storeConfig->productIdprefix."".sprintf('%03d',$order->ReportItem->product_sku);
  }

  public function getReportvendorSKU(Order $order){
    //   return $order->ReportItem->vendor;
    if($order->ReportItem->vendor != ""){
      $this->Vendor = Vendor::where('id',$order->ReportItem->vendor)->first();
      if(empty($this->Vendor)){
        return "vendor Not Found";
      }else{
        return $this->storeConfig->VendorIDPrefix.''.$this->Vendor->manufacturerID;
      }
    }else{
      return "Admin";
    }
  }

  public function vendor(Order $order){
    if($order->ReportItem->vendor != ""){
      if(empty($this->Vendor)){
        return "vendor Not Found";
      }else{
        return $this->Vendor->name.'<br>'.$this->storeConfig->VendorIDPrefix.''.$this->Vendor->id;
      }
    }else{
      return "Admin";
    }
  }

  public function markupprice(Order $order){
    if($order->ReportItem->vendor != ""){
      if(empty($this->Vendor)){
        return "vendor Not Found";
      }else{
        return ($order->ReportItem->manufacturerPrice/100)*$this->Vendor->vendorperscent;
      }
    }else{
      return 0;
    }
  }

  public function markup(Order $order){
    if($order->ReportItem->vendor != ""){
      if(empty($this->Vendor)){
        return "vendor Not Found";
      }else{
        return $this->Vendor->vendorperscent.'%';
      }
    }else{
      return '0%';
    }
  }

  public function PriceOne(Order $order){
    if($order->ReportItem->vendor != ""){
      if(empty($this->Vendor)){
        return "vendor Not Found";
      }else{
        $this->PriceOne = (($order->ReportItem->manufacturerPrice/100)*$this->Vendor->vendorperscent)+$order->ReportItem->manufacturerPrice;
        return $this->PriceOne;
      }
    }else{
      $this->PriceOne = 0+$order->ReportItem->manufacturerPrice;
      return $this->PriceOne;
    }
  }

  
  public function Customer(Order $order){
    if($order->ReportItem->CustomerGroup->type == 1){
      $this->PriceTwo = $order->ReportItem->CustomerGroup->amount;
      return $this->PriceTwo.' %';
    }else{
      $this->PriceTwo = (float)$order->ReportItem->CustomerGroup->amount;
      return  $this->PriceTwo.' RS';
    }
  }
  
  public function CustomerPrice(Order $order){
    if($order->ReportItem->CustomerGroup->type == 1){
      $this->PriceTwo = ((float)($this->PriceOne/100)*(float)$order->ReportItem->CustomerGroup->amount);
      return $this->PriceTwo;
    }else{
      $this->PriceTwo = (float)$order->ReportItem->CustomerGroup->amount;
      return  $this->PriceTwo;
    }
  }


  public function PriceTwo(Order $order){
      $this->PriceTwo = $this->PriceOne - $this->PriceTwo;
      return $this->PriceTwo;
  }

  public function discount(Order $order){
    if(!$order->ReportItem->discount){ return "No Discount"; }
    if($order->ReportItem->discount->type == 'RS'){
        return (float)$order->ReportItem->discount->number.' RS';
    }else{
        return (float)$order->ReportItem->discount->number.' %';
    }
  }

  public function DiscountPrice(Order $order){
    if(!$order->ReportItem->discount){ return "No Discount"; }
    if($order->ReportItem->discount->type == 'RS'){
      $this->PriceThree = (float)$order->ReportItem->discount->number;
      return $this->PriceThree;
    }else{
        $this->PriceThree =$this->PriceTwo - ((float)$this->PriceTwo-((float)$this->PriceTwo/100)*(float)$order->ReportItem->discount->number);
        return $this->PriceThree;
    }
  }

  public function PriceThree(Order $order){
    $this->PriceThree = $this->PriceTwo - $this->PriceThree;
    return $this->PriceThree;
  }

  public function Coupon(Order $order){
    return 0;
  }

  public function CouponPrice(Order $order){
    return 0;
  }
  public function ProductTax(Order $order){
    if($order->ReportItem->producttax->tax_type == 1){
       return $order->ReportItem->producttax->tax_rate. '%';
    }else{
      return $order->ReportItem->producttax->tax_rate . 'Rs';
    }
  }
  public function ProductTaxAmount(Order $order){
    if($order->ReportItem->producttax->tax_type == 1){
       return ($this->PriceThree*$order->ReportItem->quantity/100)*$order->ReportItem->producttax->tax_rate;
    }else{
      return $order->ReportItem->producttax->tax_rate*$order->ReportItem->quantity;
    }
  }
  public function Total(Order $order){
    return $this->PriceThree*$order->ReportItem->quantity;
  }
  public function Quantity(Order $order){
    return $order->ReportItem->quantity;
  }
  public function TotalAmount(Order $order){
 
      if($this->storeConfig->include_tax == 'Exclusive'){
        return round((($order->ReportItem->total + $order->ReportItem->producttaaAmount)/$order->ReportItem->mainquantity)*$order->ReportItem->quantity,2);   
      }else{
         return round(($order->ReportItem->total/$order->ReportItem->mainquantity)*$order->ReportItem->quantity,2);
      }
  }
  public function ProfitLoss(Order $order){
    if($this->storeConfig->include_tax == 'Exclusive'){
        return round($order->ReportItem->total + $order->ReportItem->producttaaAmount - ($order->ReportItem->manufacturerPrice*$order->ReportItem->quantity),2);
      }else{
         return round($order->ReportItem->total - ($order->ReportItem->manufacturerPrice*$order->ReportItem->quantity),2);
      }
  }
  public function status(Order $order){
      return $order->ReportItem->status;
  }
  
}


