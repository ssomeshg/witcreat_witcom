@extends('front.includes.container') 
@section('content')
<style>
    address {
        overflow: auto;
    }
</style>
<div class="container invoicefull" id="invoice">
    <div class="row">
	<div class="toolbar hidden-print">
	<div class="col-xs-12">
	<a href="{{route('order')}}" class="backbtn">Back</a>
	<div class="text-right">
            <button id="printInvoice" onclick="window.print()" class="btn btn-info btnprint"><i class="fa fa-print"></i> Print</button>
            <button id="printInvoice" onclick="window.print()" class="btn btn-info btnprint"><i class="fa fa-print"></i> Download</button>
            {{-- <button class="btn btn-info btnpdf"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> --}}
     </div>
	</div>
        <hr>
    </div>
        <div class="col-lg-12 col-md-12 col-xs-12">
    		<div class="invoice-title">
				<img src="{{URL::asset('assets/media/banner/'.$StoreConfig->logo)}}" class="img-responsive logo-image d-print" alt="logo">
    			<h2>Invoice</h2><h3 class="pull-right">Order ID : {{$Store->OrderIDPrefix }}{{sprintf('%03d',$order->id)}}</h3>
				{{-- <h2 class="pull-right">GST : {{$StoreConfig->GSTIN}}</h2> --}}
    		</div>
    		<hr>
    		<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
					<strong>Sold By:</strong>
					<address class="ptage">
						{!!$StoreConfig->store_address!!}<br>
						GSTIN : {{$StoreConfig->GSTIN}}
					</address>
					<address>
                        <strong>Payment Status : </strong>{{$order->payment_status}}<br>
                        <strong>Order Status : </strong>{{$order->delivery_status}}<br>
                        @if($order->track_id && $order->d_s_n)
                        <strong>TRACK ORDER : </strong><a href="{{$order->d_s_n}}" target="_blank">{{$order->track_id}}</a><br>
                        @endif
                    </address>

				</div>
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right mobleft">
    				<address>
    				<strong>Billed To :</strong><br>
					{{Auth::user()->name}}<br>
					{!! $order->getbillingaddress() !!}<br>
					Phone No : {{Auth::user()->Phone}}<br>
					Email : {{Auth::user()->email}}<br>
    				</address>
    				<address>
        			<strong>Shipped To:</strong><br>
                    {{$order->first_name.' '.$order->last_name}}<br>
                    {{$order->apparment.' '.$order->street}}<br>{{$order->city.', '.$order->state.', '.$order->country}}<br>Pincode : {{$order->post_code}}<br>
                    Phone No : {{$order->phone}}<br>
                    Email : {{$order->email}}
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				{{-- <address>
    					<strong>INVOICE:{{$Store->OrderIDPrefix }} - {{$order->id}}</strong><br>
    				</address> --}}
					<!--@if($order->track_id && $order->d_s_n && $order->delivery_status == 'Shipped')-->
					<!--	<address>-->
					<!--		<strong>TRACK ORDER :<a href="{{$order->d_s_n}}" target="_blank">{{$order->track_id}}</a></strong><br>-->
					<!--	</address>-->
     <!--               @endif-->
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right mobleft">
    				<address>
    					<strong>Order Date:</strong><br>
    					{{ date_format($order->created_at,'Y-M-d') }}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
		
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
									<td><strong>Image</strong></td>
        							<td class="text-center"><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Discount Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-center"><strong>Amount</strong></td>
        							@if($order->country == 'India' && $order->state == 'Tamil Nadu')
        							<td class="text-center"><strong>SGST</strong></td>
        							<td class="text-center"><strong>CGST</strong></td>
        							@else
        							<td class="text-center"><strong>IGST</strong></td>
        							@endif
									<!--<td class="text-center"><strong>Tax Amount</strong></td>-->
        							<td class="text-right"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>

                                @foreach ($items->items as $item)
								{{-- @php
									dd($item->VendorPrice);
								@endphp --}}
    							<tr>
									<td><img src="{{URL::asset('/assets/media/products/'.$item->image1)}}" class="img-responsive" alt="slider2" style="width: 50px;"></td>
    								<td class="text-center">{{ $item->product_title }}<br><small>SKU: {{$Store->productIdprefix." ".$item->product_sku }}</small></td>
    								<td class="text-center">{{(isset($item->VendorPrice))?$item->VendorPrice:'---'}}</td>
    								@if($items->storeConfig->include_tax == "Exclusive")
    								<td class="text-center">{{round(((float)$item['total'])/(float)$item->quantity,2)}}</td>
    								@else
    								<td class="text-center">{{round(((float)$item['total']-(float)$item['producttaaAmount'])/(float)$item->quantity,2)}}</td>
    								@endif
									<td class="text-center">{{(float)$item->quantity}}</td>
									@if($items->storeConfig->include_tax == "Exclusive")
    								<td class="text-center">{{round((float)$item['total'],2)}}</td>
    								@else
    								<td class="text-center">{{round((float)$item['total']-(float)$item['producttaaAmount'],2)}}</td>
    								@endif
									@if($order->country == 'India' && $order->state == 'Tamil Nadu')
    								<td class="text-center">{{round((float)$item['producttaaAmount']/2,2)}} ({{$item['producttax']->tax_rate/2}} {{($item['producttax']->tax_type == 1)?'%':'RS'}})</td>
    								<td class="text-center">{{round((float)$item['producttaaAmount']/2,2)}} ({{$item['producttax']->tax_rate/2}} {{($item['producttax']->tax_type == 1)?'%':'RS'}})</td>
    								@else
    								<td class="text-center">{{round((float)$item['producttaaAmount'],2)}} ({{$item['producttax']->tax_rate}} {{($item['producttax']->tax_type == 1)?'%':'RS'}})</td>
    								@endif
    								<!--<td class="text-right">{{(int)$item['total']}}</td>-->
									<!--<td class="text-center">{{(float)$item['producttaaAmount']}}</td>-->
									@if($items->storeConfig->include_tax == "Exclusive")
    								<td class="text-center">{{(float)$item['total']+(float)$item['producttaaAmount']}}</td>
    								@else
    									<td class="text-center">{{(float)$item['total']}}</td>
    								@endif
    							</tr>
                                @endforeach
         <!--                       <tr>-->
    					<!--			<td class="thick-line"></td>-->
    					<!--			<td class="thick-line"></td>-->
    					<!--			<td class="thick-line"></td>-->
    					<!--			@if($order->country == 'India' && $order->state == 'Tamil Nadu')-->
									<!--<td class="thick-line"></td>-->
									<!--@endif-->
    					<!--			<td class="thick-line"></td>-->
    								<!--<td class="thick-line"></td>-->
    					<!--			<td class="thick-line"></td>-->
    					<!--			<td class="thick-line text-center"><strong>(+) Tax<small>({{($items->storeConfig->include_tax == "Exclusive")?'Exclusive':'Inclusive'}})</small></strong></td>-->
    					<!--			<td class="thick-line text-right">{{$items->tax}}</td>-->
    					<!--		</tr>-->
    					    	<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								@if($order->country == 'India' && $order->state == 'Tamil Nadu')
									<td class="thick-line"></td>
									@endif
									<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<!--<td class="no-line"></td>-->
    								<td class="thick-line text-center"></td>
    								<td class="thick-line text-right"></td>
    							</tr>
    					@if($items->CouponClass)
    					    	<tr>
    							    <td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								@if($order->country == 'India' && $order->state == 'Tamil Nadu')
									<td class="no-line"></td>
									@endif
									<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<!--<td class="no-line"></td>-->
    								<td class="no-line text-center"><strong>(-) Coupon</strong></td>
    								<td class="no-line text-right">{{$items->coupen}}</td>
    							</tr>
    							@endif
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								@if($order->country == 'India' && $order->state == 'Tamil Nadu')
									<td class="no-line"></td>
									@endif
									<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<!--<td class="no-line"></td>-->
    								<td class="no-line text-center"><strong>(+) Delivery</strong></td>
    								<td class="no-line text-right">{{$items->deliverycharge}}</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<!--<td class="no-line"></td>-->
    								@if($order->country == 'India' && $order->state == 'Tamil Nadu')
									<td class="no-line"></td>
									@endif
									<td class="no-line"></td>
									<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">{{ $items->grandTotal }}</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<style>
    @media print {
        body * {
    	visibility: hidden;
  	}
	.invoicefull, .invoicefull * {
		visibility: visible;
	}
	a[href]:after {
    content: none !important;
  }
  .d-print{
	display: block !important;
}
}
.d-print{
	display: none;
}
.ptage p{
	margin-bottom: 0px !important;
}
</style>
@endsection
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	var opt = {
  margin:       1,
  filename:     'myfile.pdf',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 2 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
};
    function generatePDF() {
        const invoice = document.getElementById('invoice');
        html2pdf().set(opt).from(invoice).save();
    }
</script>
@endpush