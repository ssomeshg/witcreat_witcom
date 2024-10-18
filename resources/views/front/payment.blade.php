@extends('front.includes.container')
@section('content')


<section class="banner-section">
    <div class="banner-inner">
        <div class="homeslider">
            <img src="{{URL::asset('assets/media/banner/0slider1.jpg')}}" class="img-responsive" alt="slider1">
            <div class="pagetitle-wraper">
                <div class="container">
                    <div class="pagetitle">Payment</div>
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
                        <li><a href="#">Payment</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="myorder-section commonaccount-section orderstyle">
    <div class="container">
		<div class="row">
            <div class="col-md-12">
                @if($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Error!</strong> {{ $message }}
                    </div>
                @endif
                {!! Session::forget('error') !!}
            </div>
        </div>
      <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 profile-leftwraper checkfull mobpad0">
            
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  profile-leftinner">
		  <div class="profile-navbar mobhide">
				<ul class="list-inline">
					<li><a href="{{route('view.cart')}}">My Cart</a></li>
					<li><a href="{{route('view.deliveryaddress')}}">Delivery Address</a></li>
					<li><a href="{{(Auth::user()?route('view.checkout'):route('front.loginBlade'))}}">Checkout</a></li>
					<li><a class="active" href="{{ route('view.payment') }}">Payment</a></li>
				</ul>
		</div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  changepwd-wraper nopad">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cartitem-lits ordersummary-list orderlist-wraper">
                 
                 <div class="row mobrow0">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cartmobtitle deskhide">
                                    <a href="{{(Auth::user()?route('view.checkout'):route('front.loginBlade'))}}" class="mobback"><span class="fa fa-arrow-left"></span></a>
                                    <h3><span>Payment</span></h3>
                                </div>
					<div class="col-lg-12 mx-auto mobpad0">
					<div class="card mobrow0">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3 navmob">
                            @if($Address->country_id == 100)
						<label class="container1" for="CODradio">Cash On Delivery + ₹ {{ $Cart->CODAmount}}
						  <input type="radio" name="radio" id="CODradio" value="COD" onchange='paymenttype(event);'>
						  <span class="checkmark"></span>
						</label>
						@endif
						<label class="container1" for="Netbanking">Net Banking
						  <input type="radio" name="radio" id="Netbanking" value="upi" onchange='paymenttype(event);'>
						  <span class="checkmark"></span>
						</label>
						<label class="container1" for="upiradio">Visa / Debit card
						  <input type="radio" name="radio" id="upiradio" value="upi" onchange='paymenttype(event);'>
						  <span class="checkmark"></span>
						</label>
						</ul>
                    </div> 
                    <!-- End -->
                    <!-- Credit card form content -->
			</div>
			</div>
		   </div>
		</div>
					
          </div>
          </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile-rightwraper mobpricedet">
              <div class="profileright-inner">
					<div class="priceinfo-wraper">
                        <div id='checksummery'>
                            @include('front.includes.paymentsummery')
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad bottombtn-wraper">
                           
                            <form action="{{route('user.cash')}}" method="post" style="display: none"  id="COD">
                                @csrf
                                <input type="submit" value="Cash On Delivery ₹ {{$Cart->grandTotal + $Cart->CODAmount}}"  class="placeorder-btn btn-block">
                            </form>
                            
                            <form action="{!!route('user.razorpayReturn')!!}" method="POST" id="upi">
                                @csrf
                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="{{ env('RAZOR_KEY') }}"
                                        data-amount="{{$Cart->grandTotal*100}}"
                                        data-buttontext="Pay ₹ {{$Cart->grandTotal}}"
                                        data-name="{{$Address->name.' '.$Address->last}}"
                                        data-description="Payment with Silkastic"
                                        data-image="{{URL::asset('assets/media/banner/'.$StoreConfig->logo)}}"
                                        data-prefill.name="{{$Address->name.' '.$Address->last}}"
                                        data-prefill.email="{{$Address->email}}"
                                        data-prefill.contact="{{$Address->phone}}">
                                </script>
                            </form>
                            
                       </div>
					</div>
			  </div>
          </div>
		  
    </div>
    </div>
    </div>
  </section>
  <style>
    .product.product-cart .btn-close{
        display: none;
    }
    .cartmobtitle {
        z-index: 12;
    }
    @media screen and (max-width: 767px){
        .razorpay-payment-button {
            margin-bottom: 3rem;
        }
        .navmob{
            display: flex;
            flex-direction: column;
            align-content: flex-start;
        }
        .card{
            align-items: center;
        }
    }
</style>
@endsection
@push('script')
<script>

$('body').on('click','.btn-checkout', function (t) {
    t.preventDefault();
    $.ajax({
        method: "GET",
        url: "{{route('user.checkCart')}}",
        success: function (data) {
            if(data.length >0){
                data.forEach(e =>{
                    toastr["error"](e);
                });
            }else{
                var url = "{{route('view.order')}}";
                window.location.href = url;
            }
          console.log(data);
        },
        error: function (erroe) {
        }
    });
});

function paymenttype(t) {
    t.preventDefault();
    var type = t.target.value;
  
    $.ajax({
        method: "GET",
        data: {'type':type},
        url: "{{route('user.deliveryextraxharge')}}",
        success: function (data) {
            if(data.status){
               $("#checksummery").load('{{ route('user.paymentsummery') }}');
               if(type == "upi"){
                   $('#COD').hide();
                   $('#upi').show();
               }else{
                   $('#COD').show();
                   $('#upi').hide();
               }
            //   $('#COD , #upi').toggle();
                console.log(data);
            }
        },
        error: function (erroe) {
        }
    });
}


function calculatedate(data){
    $(".summary-subtotal-price").text(data.totalPrice);
    $('.summary-total-price').text(data.grandTotal);
    
}
document.getElementById("upiradio").checked = true;
</script>
@if (session()->has('cart'))
@if(count(session()->get('cart')->items) <= 0)
    <script>
        window.location.href = "{{URL::to('/')}}"
    </script>
@endif
@else
<script>
    window.location.href = "{{URL::to('/')}}"
</script>       
@endif
@endpush
