@extends('front.includes.container')
@section('content')

                                <!-- Edit Modal HTML -->
                                <div id="view" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>coupon Code</th>
                                                        <th>Offer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($Coupon as $key => $item)
                                                   
                                                        <tr>
                                                            <td>{{$item->title}}</td>
                                                            <td>{{$item->code}}</td>
                                                            <td>{{$item->value}} {{($item->type == 1)?'%':'Rs'}}</td>
                                                        </tr>
                                                    @empty
                                                    <tr>
                                                            <td rowspan="3">NO Coupon found</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

<section class="banner-section">
    <div class="banner-inner">
        <div class="homeslider">
            <img src="{{URL::asset('assets/media/banner/0slider1.jpg')}}" class="img-responsive" alt="slider1">
            <div class="pagetitle-wraper">
                <div class="container">
                    <div class="pagetitle">Checkout</div>
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
                        <li><a href="#">Checkout</a></li>
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
					<li><a  class="active" href="#" >Checkout</a></li>
					<li><a  href="{{ route('view.payment') }}">Payment</a></li>
				</ul>
		</div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  changepwd-wraper nopad">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cartitem-lits ordersummary-list orderlist-wraper">
				<div class="row checkborder"  id="Shippingcard">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cartmobtitle deskhide">
                                    <a href="{{(Auth::user()?route('view.deliveryaddress'):route('front.loginBlade'))}}" class="mobback"><span class="fa fa-arrow-left"></span></a>
                                    <h3><span>Checkout</span></h3>
                                </div>
    @foreach (session()->get('cart')->items as $key=>$item)
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderlist-single mobpad0">
    <div class="row mobmar0">
        <div class="col-lg-2 col-md-2 col-sm-2 orderimg-wraper">
            <img src="{{asset('assets/media/products/'.$item->image1)}}" class="img-responsive" alt="slider2">
        </div>
        <div class="mobprqty">
            <div
                class="col-lg-4 col-md-4 col-sm-10 prdorder-detail prdorder-common prdmobname">
                <div class="productname">{{$item->product_title}}</div>
                <div class="productcode">({{($StoreConfig->include_tax != 'Exclusive')?'Inclusive':'Exclusive'}} of Tax {{($item->getproductPrice()->tax->tax_type == 1)?$item->getproductPrice()->tax->tax_rate.' %':'Rs/ '.$item->getproductPrice()->tax->tax_rate}})</div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 single-price prdorder-common">
                <div class="cartitem-caption">Price</div>
                <div class="cartitem-value"><span><i class="fa fa-inr"></i> {{($item->getproductPrice()->isoffer)?$item->getproductPrice()->offer:$item->getproductPrice()->price}}</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 quantity-wraper prdorder-common">
                <div class="cartitem-caption">Quantity</div>
								<div class="cartitem-value"><span> {{(int)$item->quantity}}</span></div>
            </div>
        </div>
        <div
            class="col-lg-2 col-md-2 col-sm-4 col-xs-12 singletotal-price prdorder-common carttot">
            <div class="cartitem-caption">Total</div>
            <div class="cartitem-value"><span><i class="fa fa-inr"></i>{{$item->total}}</span>
            </div>
        </div>
    </div>
</div>
					
@endforeach
    @foreach (session()->get('cart')->SoldoutItems as $key=>$item)
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderlist-single mobpad0">
    <div class="row mobmar0">
        <div class="col-lg-2 col-md-2 col-sm-2 orderimg-wraper">
            <img src="{{asset('assets/media/products/'.$item->image1)}}" class="img-responsive" alt="slider2">
        </div>
        <div class="mobprqty">
            <div
                class="col-lg-4 col-md-4 col-sm-10 prdorder-detail prdorder-common prdmobname">
                <div class="productname">{{$item->product_title}}</div>
                <div class="productcode">({{($StoreConfig->include_tax != 'Exclusive')?'Inclusive':'Exclusive'}} of Tax {{($item->getproductPrice()->tax->tax_type == 1)?$item->getproductPrice()->tax->tax_rate.' %':'Rs/ '.$item->getproductPrice()->tax->tax_rate}})</div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 single-price prdorder-common">
                <div class="cartitem-caption">Price</div>
                <div class="cartitem-value"><span><i class="fa fa-inr"></i> {{($item->getproductPrice()->isoffer)?$item->getproductPrice()->offer:$item->getproductPrice()->price}}</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 quantity-wraper prdorder-common">
                <div class="cartitem-caption">Quantity</div>
								<div class="cartitem-value"><span> {{(int)$item->quantity}}</span></div>
            </div>
        </div>
        <div
            class="col-lg-2 col-md-2 col-sm-4 col-xs-12 singletotal-price prdorder-common carttot">
            <div class="cartitem-caption"></div>
            <div class="cartitem-value"><span>Sold Out</span>
            </div>
        </div>
    </div>
</div>
					
@endforeach
					
					</div>
					<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
					<div class="title-wrapper text-left shipping">
					    <h4 class="title title-simple text-left text-normal">Shipping Address</h4>
						<h5 class="card-title text-uppercase">{{$Address->name.' '.$Address->last}}</h5>
                        <p>{{$Address->address1}}<br>
                        {{$Address->getcity().', '.$Address->getState().','}}<br>
                        {{$Address->getContry().'-'.$Address->getpincode()}}<br>
                        Phone NO : {{$Address->phone}}<br>Email ID : {{$Address->email}}<br>
                        </p>
					</div>
					</div>
					</div>
					</div>
				</div>
					
					
					
          </div>
          </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile-rightwraper mobpricedet">
              <div class="profileright-inner" id='checksummery'>
                    @include('front.includes.checksummery')
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
</style>
@endsection
@push('script')
<script>

    $('body').on('click', '.quantity-up', async function (t) {
        t.preventDefault();
            var spinner = $(this).parent(),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max'),
            id = input.attr('pid'),
            step = parseFloat(input.attr('step'));
            var oldValue = parseFloat(input.val());
               if (oldValue >= max) {
                   var newVal = oldValue;
               } else {
                   var newVal = oldValue + step;
               }
               spinner.find("input").val(newVal);
               spinner.find("input").trigger("change");
        $.ajax({
            method: "GET",
            url: "{{route('user.add.card')}}",
            data: {
                quantity: newVal,
                id: id
            },
            success: function (data) {
                calculatedate(data);
                $('.dropdown-box').load("{{route('user.render.card')}}");
                $('#Shippingcard').load("{{route('user.rendershippig.cart')}}");
            },
            error: function (erroe) {

            }
        });
    });
    $('body').on('click', '.quantity-down', async function (t) {
        t.preventDefault();
            var spinner = $(this).parent(),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max'),
            id = input.attr('pid'),
            step = parseFloat(input.attr('step'));
            var oldValue = parseFloat(input.val());
               if (oldValue <= min) {
                   var newVal = oldValue;
               } else {
                   var newVal = oldValue - step;
               }
               spinner.find("input").val(newVal);
               spinner.find("input").trigger("change");
        $.ajax({
            method: "GET",
            url: "{{route('user.reducecard.card')}}",
            data: {
                quantity: newVal,
                id: id
            },
            success: function (data) {
                calculatedate(data);
                $('.dropdown-box').load("{{route('user.render.card')}}");
                $('#Shippingcard').load("{{route('user.rendershippig.cart')}}");
            },
            error: function (erroe) {

            }
        });
    });
$('body').on('click','.product-remove',function(t){
    t.preventDefault();
    var url = "{{route('user.remove.card')}}/"+$(this).data('id');
    $.ajax({
        method: "GET",
        url: url,
        success: function (data) {
            calculatedate(data);
            $('.dropdown-box').load("{{route('user.render.card')}}");
            $('#Shippingcard').load("{{route('user.rendershippig.cart')}}");
        },
        error: function (erroe) {

        }
    });
});
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
               $("#checksummery").load('{{ route('user.checkoutsummery') }}');
               $('#COD , #upi').toggle();
                console.log(data);
            }
        },
        error: function (erroe) {
        }
    });
}

 function removecoupon(e){
        e.preventDefault();
        $.ajax({
            method:"GET",
            url:'{{ route('user.remove.coupon') }}',
            success:function(data){
                if(!data.status){
                    toastr["success"](data.msg);
                }
                toastr["success"](data.msg);
            $("#checksummery").load('{{ route('user.checkoutsummery') }}');
            },
            error:function(erroe){
                alert("Something is wrong");
            }
        });
    }

    function applycoupon(e){
        e.preventDefault();
        const formData = new FormData(e.target);
        $.ajax({
            method:"POST",
            url:'{{ route('user.applycoupon') }}',
            data:formData,
            cache: false,
            processData: false,
            contentType: false,
            success:function(data){
                if(!data.status){
                    toastr["success"](data.msg);
                    return false;
                }
                toastr["success"](data.msg);
            $("#checksummery").load('{{ route('user.checkoutsummery') }}');
            },
            error:function(erroe){
                alert("Something is wrong");
            }
        });
    }
    
    	$(document).ready(function(){
    		$('body').on('click','#addnewcoupon',function(){
    		
    		if ($("body #couponform").css('display') == 'none') {
    			$("body #couponform").slideDown();
    		}
    		else if($("body #couponform").css('display') == 'block') {
    			$("body #couponform").slideUp();
    		}
		});
    	});



function calculatedate(data){
    $(".summary-subtotal-price").text(data.totalPrice);
    $('.summary-total-price').text(data.grandTotal);
}
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
