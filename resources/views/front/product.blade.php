@extends('front.includes.container')
@section('title',  $product->metaname)
@section('meta_keywords',$product->metakeyword)
@section('meta_description', $product->metadescription)
@section('content')
<style>
.icon-name {
        font-size: 10px;
    }
</style>
<section class="banner-section">
	<div class="banner-inner">
		<div class="homeslider">
			<img src="{{URL::asset('assets/media/banner/0slider2.jpg')}}" class="img-responsive" alt="slider1">
			<div class="pagetitle-wraper">
				<div class="container">
					<div class="pagetitle">{{ $product->product_title }}</div>
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
					  <li><a href="#">{{ $product->product_title }}</a></li>
				    </ul>
  				</div>
  			</div>
  		</div>
  	</div>
	</section>
	
	<section class="product_topline">
		<div class="container">
			<div class="pro-details">
				<div class="pro_bestseller">
					<!--<img class="img-responsive center-block"  src="images/best_seller.png" data-origin="images/best_seller.png">-->
				</div>
				<div class="row mobmar0">
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 nopad">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 productdetail-imgwraper nopad">
							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 singleprd-sliderwraper nopad">
								<div class="singleprd-slider">
                                    @if($product->image1 != "")
									<div class="singleprd">
										<a class="products imgBox" data-fancybox="gallery"  href="{{URL::asset('assets/media/products/'.$product->image1)}}">										
										<img class="img-responsive center-block"  src="{{URL::asset('assets/media/products/'.$product->image1)}}" data-origin="{{URL::asset('assets/media/products/'.$product->image1)}}">										
										</a>
									</div>
                                    @endif
									@if($product->image2 != "")
									<div class="singleprd">
										<a class="products imgBox" data-fancybox="gallery"  href="{{URL::asset('assets/media/products/'.$product->image2)}}">										
										<img class="img-responsive center-block"  src="{{URL::asset('assets/media/products/'.$product->image2)}}" data-origin="{{URL::asset('assets/media/products/'.$product->image2)}}">										
										</a>
									</div>
                                    @endif
                                    @if($product->image3 != "")
									<div class="singleprd">
										<a class="products imgBox" data-fancybox="gallery"  href="{{URL::asset('assets/media/products/'.$product->image3)}}">										
										<img class="img-responsive center-block"  src="{{URL::asset('assets/media/products/'.$product->image3)}}" data-origin="{{URL::asset('assets/media/products/'.$product->image3)}}">										
										</a>
									</div>
                                    @endif
                                    @if($product->image4 != "")
									<div class="singleprd">
										<a class="products imgBox" data-fancybox="gallery"  href="{{URL::asset('assets/media/products/'.$product->image4)}}">										
										<img class="img-responsive center-block"  src="{{URL::asset('assets/media/products/'.$product->image4)}}" data-origin="{{URL::asset('assets/media/products/'.$product->image4)}}">										
										</a>
									</div>
                                    @endif
                                    @if($product->image5 != "")
									<div class="singleprd">
										<a class="products imgBox" data-fancybox="gallery"  href="{{URL::asset('assets/media/products/'.$product->image5)}}">										
										<img class="img-responsive center-block"  src="{{URL::asset('assets/media/products/'.$product->image5)}}" data-origin="{{URL::asset('assets/media/products/'.$product->image5)}}">										
										</a>
									</div>
                                    @endif
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad thumbnailprd-slider nopad">
                                @if($product->image1 != "")
								<div class="singleprd">
									<div class="singleprd-inner">
									<img class="img-responsive center-block"  src="{{URL::asset('assets/media/products/'.$product->image1)}}"></div>
								</div>
                                @endif
								@if($product->image2 != "")
								<div class="singleprd">
									<div class="singleprd-inner">
									<img class="img-responsive center-block"  src="{{URL::asset('assets/media/products/'.$product->image2)}}"></div>
								</div>
                                @endif
                                @if($product->image3 != "")
								<div class="singleprd">
									<div class="singleprd-inner">
									<img class="img-responsive center-block"  src="{{URL::asset('assets/media/products/'.$product->image3)}}"></div>
								</div>
                                @endif
                                @if($product->image4 != "")
								<div class="singleprd">
									<div class="singleprd-inner">
									<img class="img-responsive center-block"  src="{{URL::asset('assets/media/products/'.$product->image4)}}"></div>
								</div>
                                @endif
                                @if($product->image5  != "")
								<div class="singleprd">
									<div class="singleprd-inner">
									<img class="img-responsive center-block"  src="{{URL::asset('assets/media/products/'.$product->image5 )}}"></div>
								</div>
                                @endif
							</div>

						</div>
					</div>
                    @php
                        $price = $product->getproductPrice();
                    @endphp
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12  productright-wraper">
						<div class="product-topdetails">
							<div class="row mobmar0">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mobpad0">
									<div class="infotitle">
										<h3><span>{{ $product->product_title }}<br><small>SKU : {{$StoreConfig->productIdprefix}}{{sprintf('%03d',$product->product_sku)}}</small></span></h3>
									</div>
									<div class="detailsprice-wraper">
                                    {{-- @if ($price->isoffer) --}}
                                    <div class="detailsprice-wraper">
                                        <div class="prdprice-wraper">
                                            <span class="actual-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $price->price }}</span>
                                            @if(!empty($price->discount) || !empty($price->CustomerGroup) && $price->CustomerGroup->amount != 0)
                                            <span class="original-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $price->VendorPrice }}</span>
                                            @endif
                                            <span class="offer-percent">
                                                (@if(!empty($price->CustomerGroup)) 
                                                    @if($price->CustomerGroup->amount) 
                                                    Prime Customer offer {{$price->CustomerGroup->amount}}{{($price->CustomerGroup->type == 1)?'%':'Rs'}} applied already
                                                    @else
                                                        For Prime Customer - Get 5% off
                                                    @endif
                                                    @else
                                                    For Prime Customer - Get 5% off
                                                @endif
                                                
                                                @if(!empty($price->discount)) & Additional {{$price->discount->number}}{{($price->discount->type == '%')?'%':'Rs'}} off as a regular discount @endif )
                                            </span>
                                        </div>
                                    </div>
                                    {{-- @else
										<div class="prdprice-wraper">
											<span class="actual-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $price->price }}</span>
										</div>
									@endif --}}
									@if($price->tax)
									<div class="review_rating"><span>( {{$StoreConfig->include_tax}} :   {{$price->tax->tax_rate}}{{($price->tax->tax_type == 1)?" %":" -/Rs"}} )</span></div>
									@endif
									</div>
									@if ($price->isoffer)
									<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad">
										<div class="product-count">
										   <label>Off Ends In :</label>
											<p id="product-countdown"></p>
										</div>
									</div>
									@endif
                                    @php
                                        $rev = $product->reviewtotal();
                                        $star = $rev->reviewtotal/20;
                                    @endphp
									<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad mobhide">
										<div class="star_rating">
											<span class="fa fa-star {{($star >= 1)?'checked':''}}"></span>
											<span class="fa fa-star {{($star >= 2)?'checked':''}}"></span>
											<span class="fa fa-star {{($star >= 3)?'checked':''}}"></span>
											<span class="fa fa-star {{($star >= 4)?'checked':''}}"></span>
											<span class="fa fa-star {{($star >= 5)?'checked':''}}"></span>
										</div>
										<div class="review_rating" style="cursor: pointer;" id="seerating"><span>( {{$rev->total}} reviews )</span></div>
									</div>
									<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad">
										<p class="product-short-desc">Estimated Delivery (With in India) : {{$product->delivery_date}}</p>
										<p class="product-short-desc">For Internationl Delivery : <a href="{{route('front.Shipping_Policy')}}">Click Here</a></p>
										<p>5 Days <a href="{{route('front.returnandcancle')}}">Return Policy</a> & No Exchange</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad prodec-wraper">
							<div class="row prodetbg">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="detailsprice-wraper">
									
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ratingrev deskhide nopad stock-wraper">
										<div class="row mobbgcolor">
											<div class="dettit col-md-12 col-xs-12">
												Rating & Reviews
											</div>
											<div class="detcnt col-md-12">
												<div class="ratingno">{{$star}}</div>
											</div>
											<div class="col-md-12 star_rating">
                                                <span class="fa fa-star {{($star >= 1)?'checked':''}}"></span>
                                                <span class="fa fa-star {{($star >= 2)?'checked':''}}"></span>
                                                <span class="fa fa-star {{($star >= 3)?'checked':''}}"></span>
                                                <span class="fa fa-star {{($star >= 4)?'checked':''}}"></span>
                                                <span class="fa fa-star {{($star >= 5)?'checked':''}}"></span>
											</div>
											<div class="reviewcnt col-md-12">
											<span>{{$rev->total}} Reviews</span>
											</div>
										</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad stock-wraper">
										<div class="row mobbgcolor">
											<div class="dettit col-md-12 col-xs-12">
												Availability
											</div>
											<div class="detcnt col-md-12">
                                                @if ($product->soldout == 'off')
												    <span class="text-green" style="color: #560835">In Stock {{$product->quantity}} quantity</span>
                                                @else
                                                    <span style="color: red">Out Off Stock</span>
                                                @endif
											</div>
											@php
												$quantity = $product->minquantity;
												if(!empty(session()->get('cart')->items)){
													if(array_key_exists($product->id,session()->get('cart')->items)){
														$quantity = session()->get('cart')->items[$product->id]['quantity'];
													}
												}
											@endphp
											<input type="hidden" value="{{$product->id}}" id="id">
											@if ($product->soldout == 'off')
											<div class="col-lg-3 col-md-4 col-sm-12 quantity">										
												<div class="quantity-button quantity-down">
													-
												</div><input id="prices1" min="{{$product->minquantity}}" max='{{$product->quantity}}' readonly onblur="checkminqty()" onchange="" onkeypress="return validateQty(event);" onmousemove="" step="{{$product->minquantity}}" type="number" value="{{$quantity}}">
												<div class="quantity-button quantity-up">
													+
												</div>
											</div>
											@endif
											
											<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12  quantity detailbtn-wraper">
												<ul class="list-inline">
													<li><a href="" class="cart-btn common-btn {{($product->soldout != 'off')?'p-e-none':''}} btn-cart1" tabindex="0" data-toggle="tooltip" data-placement="top" title="{{($product->soldout != 'off')?'soldout':'Add to Cart'}}">{{($product->soldout != 'off')?'soldout':'Add to Cart'}}</a></li>
													@if (Auth::check())
													@php
														$array = \explode(',',Auth::user()->wishlist);
													@endphp
													<li>
														<a data-id="{{$product->id}}" href="" id="productWish" class="wishlist-btn common-btn btn-wishlist {{(in_array($product->id,$array)?'added':'')}}" tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">												
															<img class="img-responsive center-block"  src="{{URL::asset('assets/front/images/icons/wishlist.png')}}">
														</a>
													</li>
													
													<li class="like_all">
														<span class="cart-count like_count" id="likeCounts">@if($product->product_likes){{count(explode(',',$product->product_likes))}}@else{{0}}@endif</span>
														<a href="" class="wishlist-btn like_btn common-btn countClick" tabindex="0" data-toggle="tooltip" data-placement="top">																											
															<img class="img-responsive center-block"  src="{{URL::asset('assets/images/icons/like.png')}}">
														</a>
													</li>	
													@else
													@php
														$array = [];
													@endphp
													<li>
														<a href="{{route('front.loginBlade')}}" id="productWish" class="wishlist-btn common-btn" tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">												
															<img class="img-responsive center-block"  src="{{URL::asset('assets/front/images/icons/wishlist.png')}}">
														</a>
													</li>
													@endif											
												</ul>
											</div>
										</div>
										</div>
					                    <div class="col-lg-12 col-md-12 col-sm-12 detcateg col-xs- nopad categories-wraper">
										    <div class="row">
                                                  <div class="col-md-1 col-sm-1 col-xs-3 icon-single">
                                                     <a href="" class="icon-inner">
                                                        <div class="icon-img">
                                                           <span><img src="https://thesilkastic.com/public/assets/images/icons/i1.png" class="img-responsive center-block" alt="slider2"></span>
                                                        </div>
                                                        <div class="icon-name">
                                                           <span>Worldwide Shipping</span>
                                                        </div>
                                                     </a>
                                                  </div>
                                                  <div class="col-md-1 col-sm-1 col-xs-3 icon-single">
                                                     <a href="" class="icon-inner">
                                                        <div class="icon-img">
                                                           <span><img src="https://thesilkastic.com/public/assets/images/icons/tax.png" class="img-responsive center-block" alt="slider2"></span>
                                                        </div>
                                                        <div class="icon-name">
                                                           <span>Inclusive of Tax</span>
                                                        </div>
                                                     </a>
                                                  </div>
                                                  <div class="col-md-1 col-sm-1 col-xs-3 icon-single">
                                                     <a href="" class="icon-inner">
                                                        <div class="icon-img">
                                                           <span><img src="https://thesilkastic.com/public/assets/images/icons/i3.png" class="img-responsive center-block" alt="slider2"></span>
                                                        </div>
                                                        <div class="icon-name">
                                                           <span>Best Quality</span>
                                                        </div>
                                                     </a>
                                                  </div>
                                                  <div class="col-md-1 col-sm-1 col-xs-3 icon-single">
                                                     <a href="" class="icon-inner">
                                                        <div class="icon-img">
                                                           <span><img src="https://thesilkastic.com/public/assets/images/icons/i4.png" class="img-responsive center-block" alt="slider2"></span>
                                                        </div>
                                                        <div class="icon-name">
                                                           <span>Best Price</span>
                                                        </div>
                                                     </a>
                                                  </div>
                                                  <div class="col-md-1 col-sm-1 col-xs-4 icon-single">
                                                     <a href="" class="icon-inner">
                                                        <div class="icon-img">
                                                           <span><img src="https://thesilkastic.com/public/assets/images/icons/cod.jpg" class="img-responsive center-block" alt="slider2"></span>
                                                        </div>
                                                        <div class="icon-name">
                                                           <span>COD</span>
                                                        </div>
                                                     </a>
                                                  </div>
                                				  <div class="col-md-1 col-sm-1 col-xs-4 icon-single">
                                                     <a href="" class="icon-inner">
                                                        <div class="icon-img">
                                                           <span><img src="https://thesilkastic.com/public/assets/images/icons/return.png" class="img-responsive center-block" alt="slider2"></span>
                                                        </div>
                                                        <div class="icon-name">
                                                           <span>Return</span>
                                                        </div>
                                                     </a>
                                                  </div>
                                                  <div class="col-md-1 col-sm-1 col-xs-4 icon-single">
                                                     <a href="" class="icon-inner">
                                                        <div class="icon-img">
                                                           <span><img src="https://thesilkastic.com/public/assets/images/icons/return.png" class="img-responsive center-block" alt="slider2"></span>
                                                        </div>
                                                        <div class="icon-name">
                                                           <span>No Exchange</span>
                                                        </div>
                                                     </a>
                                                  </div>
                                               </div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 detcateg col-xs-12 nopad categories-wraper">
										<div class="row mobbgcolor mobmrbtm">
										<div class="col-xs-12">
											<div class="dettit">
												Categories
											</div>
											<div class="detcnt categs">
											    @foreach($product->getcategort() as $value)
											    @php
											    	$link = route('front.getCategory',['category'=>$value->Category_url]);
											    @endphp

											       <a href="{{ $link }}" style="color:#560835"><span>{{$value->category_name}}</span></a>
											    @endforeach
												<!--<span>{{$product->getcategort()}}</span>-->
											</div>
										</div>
										</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 detsocial col-xs-12 nopad categories-wraper ">
										<div class="row mobbgcolor">
										<div class="col-xs-12">
											<div class="dettit">
												Share Us
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 follow-us nopad">
												<ul class="list-inline social-links">
													<li>
														<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{route('product.item',['slug'=>$product->slug])}}"><i class="fa fa-facebook"></i></a>
													</li>
													<li>
														<a target="_blank" href="whatsapp://send?text={{route('product.item',['slug'=>$product->slug])}}"><i class="fa fa-whatsapp"></i></a>
													</li>
													<li>
														<a target="_blank" href="https://www.instagram.com/?url={{route('product.item',['slug'=>$product->slug])}}"><i class="fa fa-instagram"></i></a>
													</li>
												</ul>
											</div>
											</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 productspec-wraper ">
							<!-- Nav tabs -->
							  <ul class="nav nav-tabs nav-justified" role="tablist">
								<li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" aria-expanded="false">Product Description</a></li>
								<li role="presentation" ><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" aria-expanded="true">Product Specification</a></a></li>
								<li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab" aria-expanded="true" id="see">Review & Rating</a></li>
							  </ul>

						  <!-- Tab panes -->
						  <div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="tab1">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad dettab">
								<div class="content-para">
                                    {!! $product->product_description !!}
                            </div>
						</div>
						</div>
							<div role="tabpanel" class="tab-pane" id="tab2">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad dettab">
								    <div class="content-para">
									    <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 nopad proc-attr">
											<table class="table table-bordered">
                                                <colgroup>
                                                    <col width="30%">
                                                    <col width="70%">
                                                </colgroup>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p><strong>Weight</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>{{$product->weight}}</p>
                                                        </td>
                                                    </tr>
                                                    @foreach ($product->Methodattribute() as $attribute)
                                                    <tr>
                                                        <td>
                                                            <p><strong>{{$attribute[0]}}</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>{{$attribute[1]}}</p>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
									    </div>
                                    </div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="tab4">
                                @include('front.includes.review')
							</div>
						  </div>

						</div>
				</div>
			</div>
		</div>
	</section>
	<section class="trend-section common-section prorel-detail">
		<div class="container">
			@if(count($relateproduct)>0)
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
			<span>Related Products</span>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopad prdslider-wraper commontab-wraper">
			<div class="product-slider-detail">
            @foreach ( $relateproduct as $Sproduct)
			<div class="prd-single">
				<div class="prd-inner">
					<div class="prd-img">
						<a href="{{route('product.item',['slug'=>$Sproduct->slug])}}"><img src="{{URL::asset('assets/media/products/'.$Sproduct->image1)}}" class="img-responsive" alt="slider2"></a>
					</div>
                    @php
                        $result = $Sproduct->getproductPrice();
                    @endphp
					<div class="prdbtn-wraper">
						<ul class="list-inline">
							<li><a href="" data-id="{{$Sproduct->id}}" data-q="{{$Sproduct->minquantity}}" class="cart-btn common-btn btn-cart2 {{($Sproduct->soldout != 'off')?'p-e-none':''}}"  data-toggle="tooltip" data-placement="top" title="{{($Sproduct->soldout != 'off')?'soldout':'Add to Cart'}}">{{($Sproduct->soldout != 'off')?'soldout':'Add to Cart'}}</a></li>
							<li><a href="" data-id="{{$Sproduct->id}}" class="wishlist-btn common-btn btn-wishlist {{(in_array($Sproduct->id,$array)?'added':'')}}" tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
								<img class="img-responsive center-block"  src="{{URL::asset('assets/front/images/icons/wishlist.png')}}">
							</a></li>
							
						</ul>
					</div>
					<div class="prdname-wraper">
					<div class="prdname">
						{{ $Sproduct->product_title }}
					</div>
					<div class="plist comment-rating ratings-container mb-0">
					<div class="ratings-full">
						<span class="ratings" style="width:{{$Sproduct->reviewtotal()->reviewtotal}}%"></span>
						<span class="tooltiptext tooltip-top">
							<div class="star_rating">
                                @php
                                    $rev = $Sproduct->reviewtotal();
                                    $star = $rev->reviewtotal/20;
                                    $price = $Sproduct->getproductPrice();
                                @endphp
								<span class="fa fa-star {{($star >= 1)?'checked':''}}"></span>
                                    <span class="fa fa-star {{($star >= 2)?'checked':''}}"></span>
                                    <span class="fa fa-star {{($star >= 3)?'checked':''}}"></span>
                                    <span class="fa fa-star {{($star >= 4)?'checked':''}}"></span>
                                    <span class="fa fa-star {{($star >= 5)?'checked':''}}"></span>
							</div>
						</span>
					</div>
					</div>
				
									<div class="detailsprice-wraper">
										<div class="prdprice-wraper">
											<span class="actual-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $price->price }}</span>
											@if(!empty($price->discount) || !empty($price->CustomerGroup) && $price->CustomerGroup->amount != 0)
											<span class="original-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $price->VendorPrice }}</span>
											<span class="offer-percent">
											    (@if(!empty($price->discount)){{$price->discount->number}}{{($price->discount->type == '%')?'%':'Rs'}} OFF @endif
                                                    @if(!empty($price->CustomerGroup) && $price->CustomerGroup->amount != 0) @if(!empty($price->discount)) & @endif {{$price->CustomerGroup->amount}}{{($price->CustomerGroup->type == 1)?'%':'Rs'}} OFF  @endif)
                                                </span>
                                                @endif
										</div>
									</div>

					</div>
				</div>
			</div>
            @endforeach
		</div>
		@endif
		@if(count($similarproduct)>0)
        <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
			<span>Similar Products</span>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopad prdslider-wraper commontab-wraper">
			<div class="product-slider-detail">
            @foreach ( $similarproduct as $Sproduct)
			<div class="prd-single">
				<div class="prd-inner">
					<div class="prd-img">
						<a href="{{route('product.item',['slug'=>$Sproduct->slug])}}"><img src="{{URL::asset('assets/media/products/'.$Sproduct->image1)}}" class="img-responsive" alt="slider2"></a>
					</div>
                    @php
                        $result = $Sproduct->getproductPrice();
                    @endphp
					<div class="prdbtn-wraper">
						<ul class="list-inline">
							<li><a href=""  data-id="{{$Sproduct->id}}" data-q="{{$Sproduct->minquantity}}"  class="cart-btn common-btn btn-cart2 {{($Sproduct->soldout != 'off')?'p-e-none':''}}"  data-toggle="tooltip" data-placement="top" title="{{($Sproduct->soldout != 'off')?'soldout':'Add to Cart'}}">{{($Sproduct->soldout != 'off')?'soldout':'Add to Cart'}}</a></li>
							<li><a href="" data-id="{{$Sproduct->id}}" class="wishlist-btn common-btn btn-wishlist {{(in_array($Sproduct->id,$array)?'added':'')}}" tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
								<img class="img-responsive center-block"  src="{{URL::asset('assets/front/images/icons/wishlist.png')}}">
							</a></li>
							
						</ul>
					</div>
					<div class="prdname-wraper">
					<div class="prdname">
						{{ $Sproduct->product_title }}
					</div>
					<div class="plist comment-rating ratings-container mb-0">
					<div class="ratings-full">
						<span class="ratings" style="width:{{$Sproduct->reviewtotal()->reviewtotal}}%"></span>
						<span class="tooltiptext tooltip-top">
							<div class="star_rating">
                                @php
                                    $rev = $Sproduct->reviewtotal();
                                    $star = $rev->reviewtotal/20;
                                    $price = $Sproduct->getproductPrice();
                                @endphp
								<span class="fa fa-star {{($star >= 1)?'checked':''}}"></span>
                                    <span class="fa fa-star {{($star >= 2)?'checked':''}}"></span>
                                    <span class="fa fa-star {{($star >= 3)?'checked':''}}"></span>
                                    <span class="fa fa-star {{($star >= 4)?'checked':''}}"></span>
                                    <span class="fa fa-star {{($star >= 5)?'checked':''}}"></span>
							</div>
						</span>
					</div>
					</div>

									<div class="detailsprice-wraper">
										<div class="prdprice-wraper">
											<span class="actual-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $price->price }}</span>
											@if(!empty($price->discount) || !empty($price->CustomerGroup) && $price->CustomerGroup->amount != 0)
											<span class="original-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $price->VendorPrice }}</span>
											<span class="offer-percent">
											    (@if(!empty($price->discount)){{$price->discount->number}}{{($price->discount->type == '%')?'%':'Rs'}} OFF  @endif
                                                    @if(!empty($price->CustomerGroup) && $price->CustomerGroup->amount != 0) @if(!empty($price->discount)) & @endif {{$price->CustomerGroup->amount}}{{($price->CustomerGroup->type == 1)?'%':'Rs'}} OFF  @endif)
                                                </span>
                                                @endif
										</div>
									</div>

					</div>
				</div>
			</div>
            @endforeach
		</div>
	</div>
		</div>
		@endif
		</div>
	</section>
	

@endsection
@push('script')
<script src="{{URL::asset('assets/front/js/jquery.fancybox.min.js')}}"></script> 
<script>
    $(".detcateg").insertAfter(".detsocial");
     $('.quantity').each(function () {
          var spinner = $(this),
              input = spinner.find('input[type="number"]'),
              btnUp = spinner.find('.quantity-up'),
              btnDown = spinner.find('.quantity-down'),
              min = input.attr('min'),
              max = input.attr('max'),
              step = parseFloat(input.attr('step'));
          //	console.log(step);

          btnUp.click(function () {
              //console.log(step);
              var oldValue = parseFloat(input.val());
              if (oldValue >= max) {
                  var newVal = oldValue;
                  toastr["error"](`Only ${newVal} quantity available`);
              } else {
                  var newVal = oldValue + step;
              }
              spinner.find("input").val(newVal);
              spinner.find("input").trigger("change");
          });

          btnDown.click(function () {
              //	console.log(step);
              var oldValue = parseFloat(input.val());
              if (oldValue <= min) {
                  var newVal = oldValue;
              } else {
                  var newVal = oldValue - step;
              }
              spinner.find("input").val(newVal);
              spinner.find("input").trigger("change");
          });

      });
     
     /*produtdeatil slider*/
          $(".singleprd-slider").slick({
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: true,
              fade: true,
              speed: 300,
              autoplay:false,
              lazyLoad: 'ondemand',
              asNavFor: '.thumbnailprd-slider',
          });
          $(".thumbnailprd-slider").slick({				
              slidesToScroll: 1,
              slidesToShow: 6,
              infinite: true,				
              arrows: false,
              autoplay: false,
              //dots:true,
              vertical: false,
              verticalSwiping: true,
              //autoplaySpeed: 4000,
              asNavFor: '.singleprd-slider',
              focusOnSelect: true,
              //centerMode: false,
              responsive: [{
                      breakpoint: 1024,
                      settings: {
                          slidesToShow: 6,
                          slidesToScroll: 1
                      }
                  },
                  {
                      breakpoint: 767,
                      settings: {
                          
                          slidesToShow: 4,
                          vertical: false,
                          slidesToScroll: 1
                      }
                  },
                  {
                      breakpoint: 480,
                      settings: {
                          slidesToShow: 3,
                          vertical: false,
                          slidesToScroll: 1
                      }
                  }
              ]
          });
          /**/

          
          
   // Remove active class from all thumbnail slides
  $('.thumbnailprd-slider .slick-slide').removeClass('slick-active');
  $('.thumbnailprd-slider .slick-slide').eq(0).addClass('slick-active');
  $('.product_topline .slick-prev').prop('disabled', true);
  $('.singleprd-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
   var mySlideNumber = nextSlide;
  //alert(slick.slideCount);
  if(mySlideNumber==(slick.slideCount-1))
  {
     $('.product_topline .slick-next').prop('disabled', true);
     $('.product_topline .slick-next').fadeOut(100);
  }
  else if(mySlideNumber==0)
  {
   $('.product_topline .slick-prev').prop('disabled', true);
   $('.product_topline .slick-prev').fadeOut(100);
  }
  else
  {
   $('.product_topline .slick-next').prop('disabled', false);
   $('.product_topline .slick-prev').prop('disabled', false);
   $('.product_topline .slick-next').fadeIn(100);
   $('.product_topline .slick-prev').fadeIn(100);
  }
  
   $('.thumbnailprd-slider .slick-slide').removeClass('slick-active');
   $('.thumbnailprd-slider .slick-slide').eq(mySlideNumber).addClass('slick-active');
});


  if ($(window).width() > 767){
      $('.imgBox').imgZoom({
      boxWidth: 400,
      boxHeight: 400,
      marginLeft: 15,
      });
  }
  //$('.products').fancybox();


  $('.product_pagination li').click(function() {
  $(this).addClass('active').siblings().removeClass('active');
  return false;
  });
  /*sticky footer*/
       var width = $(window).width();
      var lastScrollTop = 0;
      $(window).scroll(function(event) {;
      var width = $(window).width();
      if (width <= 767) {
      function footer()
      {
              var st = $(this).scrollTop();
               if (st > lastScrollTop){
               $(".footer-nav").slideDown();
               } 
               else {
               $(".footer-nav").hide();
               }
               lastScrollTop = st;
      }
      footer();
      }
      });
      /*sticky footer ends*/
  </script>
<script>

$('body .countClick').click(function(e){
e.preventDefault();
    var userid={{(Auth::check())?Auth::id():0}};
    var prodid={{$product->id}};
    $.ajax({
    method:"post",
    url:'{{url('likes')}}',
    data: {
        "_token": "{{ csrf_token() }}",
        userid: userid,
        prodid:prodid
        },
    success:function(data){
        console.log(data.data);
        $('#likeCounts').text(data.data);
        
            },
    error:function(error){

    }
});
});

    $('body #star_rating span').click(function(e){
		var star = $(this).data('star');
		$('#rating').val(star);
		$('body #star_rating span').each((i,e) =>{
			if(e.dataset.star <= star){
				e.classList.add("checked");
			}else{
				e.classList.remove("checked");
			}
		})
    });
$('body #reviewSubmit').submit(function(e){
e.preventDefault();
const formData = new FormData(e.target);
formData.set('rating', $("#rating").val());
$.ajax({
    method:"POST",
    url:$(this).prop('action'),
    data:formData,
    cache: false,
    processData: false,
    contentType: false,
    success:function(data){
        $('#tab4').load('{{route('load.review',['id'=>$product->id])}}');
    },
    error:function(erroe){

    }
});
});
$("#seerating").on('click',function() {
    $('html,body').animate({ scrollTop: $("#see").offset().top},'slow');
    $( "#see" ).trigger( "click" );

});


// Set the date we're counting down to

var countDownDate = {{($price->discount)?strtotime("+1 day", strtotime($price->discount->expiry_date))*1000:strtotime("now")}};

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("product-countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("product-countdown").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
@endpush  