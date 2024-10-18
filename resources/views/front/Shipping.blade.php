@extends('front.includes.container')
@section('content')
<div id="dummyheader"></div>
	<section class="banner-section">
	<div class="banner-inner">
		<div class="homeslider">
			<img src="{{URL::asset('assets/front/images/homeslider/0slider1.jpg')}}" class="img-responsive" alt="slider1">
			<div class="pagetitle-wraper">
				<div class="container">
					<div class="pagetitle">Shipping Policy</div>
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
					  <li><a href="#">Shipping Policy</a></li>
				    </ul>
  				</div>
  			</div>
  		</div>
  	</div>
	</section>
    <section class="common-section">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 common-content privacy-content">
            <div class="form-group">
                <p>1. Shipping are available to both domestic (India) and international customers.</br>2. 
In Silkastic.com, All prices are inclusive of GST and it may vary according to govern laws.</br>3. 
Customer can check there shipping rates/charges at the time of checkout. However for international customer additional charges such as VAT/Import Duties/Local taxes are collected directly from customer and to be paid at the time of delivery to our courier partner. These charges will be over and above the product/order price you pay. These charges may vary from country to country according to government rules & regulations.<br>4. 
Shipping charges will be calculated based on product quantity, weight and based on shipping location or volumetric whichever is higher.<br>5. 
Shipping address refers to the address where the order has to be delivered and billing address is nothing but where the customer receives bills.<br>6. 
Customers are solely responsible to provide valid, correct/accurate and complete information when they are creating/modifying the shipping or delivery and billings addresses.<br>7. 
Billings and shipping address cannot be changed once the order has been placed. Or else they need to cancel the order and re-order for the same if incase.<br>8. 
To track order status, customer can visit our site and check the status in order sections. Customer will get intimated via email on order status. Customer can also reach via email <a href="mailto:support@thesilkastic.com" target="_newtab">support@thesilkastic.com</a> for any queries related to order and delivery.<br>9. Estimated delivery date for the customers within India can be normally 3 to 7 business days from the date of shipment. For international customers, it can be 10 to 15 business days from the date of shipment.<br>10.Order cannot be canceled once the product/order is shipped.<br>11. 
Delivery can be delayed due to some unforeseen reason like weather, covid, transportation issues etc.<br>12. 
Order cannot be cancel once the product/order is shipped.
</p>
            </div>
        </div>
    </div>
</div>
</section>
@endsection