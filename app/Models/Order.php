<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Order extends Model
{
    protected $fillable = ['shipping_street','shipping_country','delivery_status','payment_status','order_id','stripe_object','id','user_id' ,'card','first_name' ,'last_name' ,'apparment' ,'street' ,'city','state' ,'post_code' ,'phone' ,'email','reason' ,'shipping_first_name' ,'shipping_last_name' ,'shipping_address' ,'shipping_apparments' ,'shipping_city' ,'shipping_state' ,'shipping_post_code' ,'shipping_phone' ,'payment_method' ,'tax' ,'totalPrice','grandTotal','delivery_notes','country','Deliverydate'];
    
    public function getbillingaddress(){
         $address = [];
        $return = '';
        if($this->shipping_city) $address[] = $this->shipping_city;
        if($this->shipping_state) $address[] = $this->shipping_state;
        if($this->shipping_country) $address[] = $this->shipping_country;
        $return = \implode(',',$address);
        if($this->shipping_address) { $return = $this->shipping_address."<br>".$return;}
        if($this->shipping_post_code) { $return = $return."<br>".$this->shipping_post_code;}
        return $return;
    }
    
    public function getdialing(){
        $Country = Country::where('country_name',$this->shipping_country)->first();
        return str_replace('+','',$Country->dialing).''.$this->phone;
    }
    
}

