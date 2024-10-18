@extends('front.includes.container')
@section('content')
<div id="dummyheader"></div>
	<section class="banner-section">
	<div class="banner-inner">
		<div class="homeslider">
			<img src="{{URL::asset('assets/front/images/homeslider/0slider1.jpg')}}" class="img-responsive" alt="slider1">
			<div class="pagetitle-wraper">
				<div class="container">
					<div class="pagetitle">Returns, Exchange & Cancellation</div>
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
					  <li><a href="#">Returns, Exchange & Cancellation</a></li>
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
                <p><b>Returns</b></p>
                <p>1. All products are undergoing with quality check from SILKASTIC QA team before shipped to customers.</p>
                <p>2. Silkastic still accepts product/order returns from customers with terms & criteria mentioned below.</p>
                <p>3. Products which are eligible for returns are as follows<br>
Defective or Damaged product<br>
Received wrong product
</p>    
                <p>4. Products that are not eligible for returns as below
	Damaged or washed or used by the customer
	Color/shade differs from the image shown
, Patterns and thread/jari related defects (For handlooms)</p>
                <p>5. In order to raise return request, customer can do it from our website in my account under order section against the product or write us mail to <a href="support@thesilkastic.com" target="_newtab">support@thesilkastic.com</a> with order id and product SKU for reference.</p>
                <p>6. Customer can raise a return request within 3 days from the date of product/order is delivered.</p>
                <p>7. If customer fails to raise the return request within the specific period, later SILKASTIC will not accept any return from customer.</p>
                <p>8. On receiving the request, our customer support team will immediately contact the customers to understand the issue/reason behind the product return and if the mentioned facts are true by customer, then we will facilitate the customer to collect the product for return with the help of shipping partners.</p>
                <p>9. Customer should properly wrap up with original box along with the bill, tag, and handover in original condition to our courier partners or else return will not be accepted by them. For international customers, shipping charges need to be borne on their own when they return the goods/product to the delivery partner.</p>
                <!--<p>10. In case of bill is lost, return can’t be taken.</p>-->
                <p>10. On receiving the goods, our team will review the defect/damage claimed by customer and if it seems to be valid then the return will be accepted and same will be intimated to customer over Email or SMS.</p>
                <p>11. Money will be transferred to customer account within 10 to 15 business days. (Only product amount will be paid and not shipping charges)</p>
                <p>12. Customer should capture the video when un-boxing/un-wrapping the product. If fails to do then return can’t be claimed by customer.</p>
                <p><b>Exchange</b></p>
                <p>No Exchange.</p>
                <p><b>Cancellation</b></p>
                <p>Customer can raise cancel request before product/order has been shipped. After that it doesn’t allow to cancel.</p>
                <p>Customer can do cancellation within our website under order section or write mail to <a href="support@thesilkastic.com" target="_newtab">support@thesilkastic.com</a>.</p>
                <p>Customer will get refund amount within 5 to 10 business days from the date of cancellation.</p>
                <p>unt within 5 to 10 business days from the date of cancellation.</p>
            </div>
        </div>
    </div>
</div>
</section>
@endsection