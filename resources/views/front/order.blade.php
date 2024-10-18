@extends('front.includes.container')
@section('content')

<!-- main start -->
<section class=" commonaccount-section orderconf">
    <div class="container"> 
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  profile-leftinner">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderconfirmation-wraper">
						  <!--      @if (isset($error))-->
        <!--<div class="alert alert-danger alert-simple alert-inline " style="border-style: none;text-align: center;">-->
        <!--    ** order placed your. {{$Order->email}} was not valide pleace check before place order. **-->
        <!--</div>-->
        <!--@endif-->

						<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 ">
						<div class="username-container">
							<span class="font-light">Hey</span> &nbsp;<span class="font-medium">{{$Address->name}}</span>
						</div>
						<div class="orderconfirm-large text-success">
						 <i class="fa fa-check-circle-o" aria-hidden="true"></i> Your Order is placed successfully.
						</div>
						
						<div class="orderconfirm-content">
							Thank you for shopping with us. Your order will be confirmed shortly and we'll send you an email when it does
						</div>
						</div>
						
						
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  orderinfo-container">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
							
							<div class="orderinfo">
						
						
						<div class="amountsplit-single">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								Order Id:
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
								<div class="cartitem-value">{{$cart->storeConfig->OrderIDPrefix}}{{sprintf('%03d',$Order->id)}}</div>
							</div>

							<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
							<!--	Order Status:-->
							<!--</div>-->
							<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">-->
							<!--	<div class="cartitem-value">Order Placed</div>-->
							<!--</div>-->


							<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
							<!--	Date:-->
							<!--</div>-->
							<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">-->
							<!--	<div class="cartitem-value">{{$Order->created_at->format('d M Y')}}</div>-->
							<!--</div>-->


							<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
							<!--	Email:-->
							<!--</div>-->
							<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">-->
							<!--	<div class="cartitem-value">{{$Order->email}}</div>-->
							<!--</div>-->


							<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
							<!--	Total:-->
							<!--</div>-->
							<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">-->
							<!--	<div class="cartitem-value">{{$Order->grandTotal}}</div>-->
							<!--</div>-->
							


							<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
							<!--	Payment Status:-->
							<!--</div>-->
							<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">-->
							<!--	<div class="cartitem-value">{{$Order->payment_status}}</div>-->
							<!--</div>-->
						</div>
						</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad bottombtn-wraper">
							<a class="placeorder-btn" href="{{route('order')}}">View or Manage Order</a>
					</div>
						
					</div>
							</div>

							<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
								<div class="orderinfo-wraper">
						<div class="priceinfo-title">
								Order Details
						</div>
					
						<!--@foreach ($cart->items as $item)-->
						<!--<div class="amountsplit-single">-->
						<!--<div class="row">-->
						<!--	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">-->
						<!--		{{$item->product_title}} <span> <i class="fas fa-times"></i>-->
      <!--                              {{$item->quantity}}</span><small>({{($cart->storeConfig->include_tax != 'Exclusive')?'Inclusive':'Exclusive'}} of Tax {{($item->getproductPrice()->tax->tax_type == 1)?$item->getproductPrice()->tax->tax_rate.' %':'Rs/ '.$item->getproductPrice()->tax->tax_rate}}) </small>-->
						<!--	</div>-->
						<!--	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">-->
						<!--		<div class="cartitem-value"><span><i class="fa fa-inr"></i> {{$item->total}}</span></div>-->
						<!--	</div>-->
							
						<!--</div>-->
						<!--</div>-->
						<!--@endforeach-->
						<div class="amountsplit-single">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								Subtotal

							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
								<div class="cartitem-value"><span><i class="fa fa-inr"></i> {{$cart->totalPrice}}</span></div>
							</div>
							
						</div>
						</div>


                        @if($cart->storeConfig->include_tax == 'Exclusive')
						<div class="amountsplit-single">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								(+) Tax

							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
								<div class="cartitem-value"><span><i class="fa fa-inr"></i> {{$cart->tax}}</span></div>
							</div>
							
						</div>
						</div>
						@endif
						@if($cart->CouponClass)
					    <div class="amountsplit-single">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								(-) Coupon

							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
								<div class="cartitem-value"><span><i class="fa fa-inr"></i>{{$cart->coupen}}</span></div>
							</div>
							
						</div>
						</div>
					    @endif
						<div class="amountsplit-single">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								(+) Delivery Charges

							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
								<div class="cartitem-value"><span><i class="fa fa-inr"></i>{{$cart->deliverycharge}}</span></div>
							</div>
							
						</div>
						</div>
					
						
						<div class="totalamt-payable">
							<div class="amountsplit-single">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
								Total

							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right">
								<div class="cartitem-value"><span><i class="fa fa-inr"></i>{{$cart->grandTotal}}</span></div>
							</div>
							
						</div>
						</div>
						</div>	
							</div>
							</div>
						</div>
						</div>
						<!--<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 d-none">-->
						<!--<h2 class="title title-simple text-left pt-10 mb-2">Billing Address</h2>-->
      <!--      <div class="address-info pb-8 mb-6">-->
      <!--          <p class="address-detail pb-2">-->
      <!--              {{$Address->name}}<br>-->
      <!--              {{$Address->address1.' '.$Address->address2}},-->
      <!--              {{$Address->getcity()}},-->
      <!--              {{$Address->getState()}},-->
      <!--              {{$Address->getContry()}}<br>-->
      <!--              {{$Address->getpincode()}},-->
      <!--               Pincode: {{$Address->phone}}-->
      <!--          </p>-->
      <!--          <p class="email">Email: {{$Address->email}}</p>-->
      <!--      </div>-->
						<!--</div>-->
					</div>
          </div>
          </div>
  </section>
<!-- End of Main -->
<style>
    .product.product-cart .btn-close{
        display: none;
    }
</style>
@endsection
@push('script')
@endpush
