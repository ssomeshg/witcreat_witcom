@extends('front.includes.container')
@section('content')
@php
    $date =  date('y:m:d',strtotime('now'));
@endphp
	<section class="banner-section">
	<div class="banner-inner">
		<div class="homeslider">
			<img src="{{URL::asset('assets/front/images/homeslider/0slider1.jpg')}}" class="img-responsive" alt="slider1">
			<div class="pagetitle-wraper">
				<div class="container">
					<div class="pagetitle">View Order</div>
				</div>
			</div>
		</div>	
	</div>	
	<div class="banner-breadcrumb">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12">
  					<ul class="breadcrumb">
					  <li><a href="{{route('front.index')}}">Home</a></li>					  
					  <li><a href="#">View Order</a></li>
				    </ul>
  				</div>
  			</div>
  		</div>
  	</div>
	</section>
<section class="myorder-section commonaccount-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile-leftwraper orderview">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  profile-leftinner">
                    <div class="profile-navbar mobhide">
                        <ul class="list-inline">
                            <li><a class="active" href="{{route('order')}}">My Orders</a></li>
                            <li><a href="{{route('front.account')}}">Addresses</a></li>
                            <li><a href="{{route('front.userprofile')}}">Account Settings</a></li>
                            <li><a href="{{route('profile')}}">Change Pin</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  changepwd-wraper nopad ordershow">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  orderlist-wraper orderslist">
                            <div class="row mobmar0">
                                @forelse ( $order as $Order)
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderlist-single ordercon">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ordertitle deskhide">
                                        <h3><span>My Orders</span></h3>
                                    </div>
                                    <div class="row orderrow">
                                        <div
                                            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 prdprice-detail prdorder-common">
                                            <h4 class="ordertit">Order Id</h4>
                                            <h5 class="orderval">{{$Store->OrderIDPrefix }}{{sprintf('%03d',$Order->id)}}</h5>
                                        </div>
                                        <div
                                            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 prdprice-detail prdorder-common">
                                            <h4 class="ordertit">Order Date</h4>
                                            <h5 class="orderval">{{ date_format($Order->created_at,'Y-M-d') }}</h5>
                                        </div>
                                        <div
                                            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 prdprice-detail prdorder-common">
                                            <h4 class="ordertit">Amount</h4>
                                            <h5 class="orderval">{{ $Order->grandTotal }}</h5>
                                        </div>
                                        <div
                                            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 prdprice-detail prdorder-common">
                                            <h4 class="ordertit">Payment Status</h4>
                                            <h5 class="orderval">{{$Order->payment_status}}</h5>
                                        </div>
                                        <div
                                            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 prdprice-detail prdorder-common">
                                            <h4 class="ordertit">Order Status</h4>
                                            <h5 class="orderval">{{$Order->delivery_status}}</h5>
                                        </div>
                                        <div
                                            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 prdprice-detail prdorder-common">
                                            <h4 class="ordertit">View: <a href="{{route('vieworder',[$Order->id])}}"> Invoice</a></h4>
                                            @php                    
                                                $updated_at3 = date('y:m:d',strtotime($Order->Deliverydate.'+3 days'));
                                                $cart = unserialize(bzdecompress(utf8_decode($Order->card)));
                                                // dd($cart->return);
                                            @endphp
                                            @if($Order->track_id && $Order->d_s_n)
                                                <h4 class="orderval">Track: <a href="{{$Order->d_s_n}}" target="_blank">{{$Order->track_id}}</a></h4>
                                            @endif
                                            @if (  $Order->Deliverydate != null)
                                                <h4 class="orderval"><a href="{{ route('front.return',$Order->id) }}">Return order</a></h4>
                                            @endif
                                            @if($Order->delivery_status == 'Confirmed' || $Order->delivery_status == 'placed')
                                                <form onsubmit="return Conformation(this,event);" action="{{route('view.CustomerCancelOrder',$Order->id)}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="reason" class="reason" value="">
                                                    <input type="submit" value="Cancel Order">
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                    @php
                                        $n = 1;
                                        if($Order->delivery_status == 'Confirmed'){$n = 2;}
                                        if($Order->delivery_status == 'Shipped'){$n = 3;}
                                        if($Order->delivery_status == 'Delivered'){$n = 4;}
                                    @endphp
                                    <article class="card mobhide">
                                        <div class="card-body">
                                            <div class="track " style="{{($Order->delivery_status == 'Canceled' || $Order->delivery_status == 'ReturnedByCustomer')?'display:none;':''}}">
                                                <div class="step active"> <span class="icon"><i class="fa fa-check"></i> </span> <span class="text">Order placed</span></div>
                                                <div class="step {{($n >= 2)?'active':''}}"> <span class="icon"> <i class="{{($n >= 2)?'fa fa-check':''}}"></i> </span> <span class="text">Order Confirmed</span></div>
                                                <div class="step {{($n >= 3)?'active':''}}"> <span class="icon"> <i class="{{($n >= 3)?'fa fa-check':''}}"></i> </span> <span class="text">Shipped</span> </div>
                                                <div class="step {{($n >= 4)?'active':''}}"> <span class="icon"> <i class="{{($n >= 4)?'fa fa-check':''}}"></i> </span> <span class="text">Delivered</span> </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                @empty
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderlist-single ordercon" style="text-align: center;">
                                        <h3><span>No order found</span></h3>
                                </div>
                                @endforelse
                            </div>
                            {{-- <nav class="product_pagination" aria-label="Page navigation">
                                <ul class="pagination pagination-mg">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script>
function Conformation(is,event){
    event.preventDefault();
    var input = document.createElement("input");
    input.setAttribute("type", "hidden");
    input.setAttribute("name", "reason");
    
    bootbox.prompt({title:"Confirmation to cancel order !", inputType:'textarea',message:'Cancel Reason  *',callback : function(result){
        if(result != null && result != ""){
                input.setAttribute("value", result);
            is.appendChild(input);
            is.submit(); 
            }
        }   
    });
}
</script>
@endpush
