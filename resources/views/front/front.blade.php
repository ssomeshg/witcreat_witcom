@extends('front.includes.container') 
@section('content')
{{-- @php
   dd($StoreConfig->currencysymbol())
@endphp --}}
@if (Auth::check())
													@php
														$array = \explode(',',Auth::user()->wishlist);
													@endphp
                                       @else
                                       @php
                                          $array = [];
                                       @endphp
                                       @endif
@if(count($frontBanner) > 0)
<section class="homeslider-section">
    <div class="homeslider-inner mobileslidehide">
        @foreach($frontBanner as $front)
       <div class="homeslider one">
          <a href="{{ $front->bannerLink}}"><img src="{{asset('/assets/media/banner/'.$front->web_image)}}" class="img-responsive" alt="{{$front->web_image}}"></a>
       </div>
       @endforeach
    </div>
    <div class="homeslider-inner mobileslide">
        @foreach($frontBanner as $front)
       <div class="homeslider one">
          <a href="{{ $front->bannerLink}}"><img src="{{asset('/assets/media/banner/'.$front->mobile_image)}}" class="img-responsive" alt="{{$front->mobile_image}}"></a>
       </div>
       @endforeach
    </div>
</section>
 @endif
 {{-- <section class="featuredcat-section commontop-section mobhide">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
             <span>Featured Categories</span>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 nopad featuredcat-lister">
             <div class="row mobrow-0">
                <div class="featuredcat-single">
                   <a href="" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="images/featured/cat1.jpg" class="img-responsive" alt="slider2">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title">
                         Jute
                      </div>
                   </a>
                </div>
                <div class="featuredcat-single">
                   <a href="" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="images/featured/cat2.jpg" class="img-responsive" alt="slider2">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title">
                         Cotton
                      </div>
                   </a>
                </div>
                <div class="featuredcat-single">
                   <a href="" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="images/featured/cat3.jpg" class="img-responsive" alt="slider2">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title">
                         Soft silks
                      </div>
                   </a>
                </div>
                <div class="featuredcat-single">
                   <a href="" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="images/featured/cat4.jpg" class="img-responsive" alt="slider2">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title">
                         linen
                      </div>
                   </a>
                </div>
                <div class="featuredcat-single">
                   <a href="" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="images/featured/cat5.jpg" class="img-responsive" alt="slider2">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title">
                         georgette
                      </div>
                   </a>
                </div>
                <div class="featuredcat-single">
                   <a href="" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="images/featured/cat1.jpg" class="img-responsive" alt="slider2">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title">
                         Jute
                      </div>
                   </a>
                </div>
                <div class="featuredcat-single">
                   <a href="" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="images/featured/cat2.jpg" class="img-responsive" alt="slider2">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title">
                         Cotton
                      </div>
                   </a>
                </div>
                <div class="featuredcat-single">
                   <a href="" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="images/featured/cat3.jpg" class="img-responsive" alt="slider2">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title">
                         Soft silks
                      </div>
                   </a>
                </div>
                <div class="featuredcat-single">
                   <a href="" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="images/featured/cat4.jpg" class="img-responsive" alt="slider2">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title">
                         linen
                      </div>
                   </a>
                </div>
                <div class="featuredcat-single">
                   <a href="" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="images/featured/cat5.jpg" class="img-responsive" alt="slider2">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title">
                         georgette
                      </div>
                   </a>
                </div>
             </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 nopad btmcontainer text-center">
             <a class="readmore-btn" href="">
             <span class="readmore-inner">
             <span>view more</span>
             <span><i class="fa fa-angle-right"></i></span>
             </span>
             </a>
          </div>
       </div>
    </div>
 </section>
 
 <!--mobile category--->
 <div class="col-xs-12 nopad mobviewonly commontop-section mobcategory">
   <div class="col-xs-12 nopad">
       <div class="">
        <div class="col-xs-12 text-center text-uppercase section-title middle-liner">
             <span>Featured Categories</span>
          </div>
          </div>		
       <div class="col-xs-12 thumbnailcat-slider">
           <div class="singleprd">
                <a href="" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="images/featured/cat1.jpg">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title" style="white-space: nowrap;overflow: hidden;">
                         Jute
                  </div>
               </div>
               </a>
           </div>
           <div class="singleprd">
                <a href="" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="images/featured/cat2.jpg">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title">
                         Cotton
                  </div>
               </div>
               </a>
           </div>
           <div class="singleprd">
                <a href="" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="images/featured/cat3.jpg">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title">
                         Soft silks
                  </div>
               </div>
               </a>
           </div>
           <div class="singleprd">
                <a href="" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="images/featured/cat4.jpg">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title">
                         linen
                  </div>
               </div>
               </a>
           </div>
           <div class="singleprd">
                <a href="" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="images/featured/cat5.jpg">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title">
                         georgette
                  </div>
               </div>
               </a>
           </div>
           <div class="singleprd">
                <a href="" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="images/featured/cat1.jpg">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title">
                         Jute
                  </div>
               </div>
               </a>
           </div>
           <div class="singleprd">
                <a href="" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="images/featured/cat2.jpg">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title">
                         Cotton
                  </div>
               </div>
               </a>
           </div>
           <div class="singleprd">
                <a href="" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="images/featured/cat3.jpg">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title">
                         Soft silks
                  </div>
               </div>
               </a>
           </div>
           <div class="singleprd">
                <a href="" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="images/featured/cat4.jpg">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title">
                         linen
                  </div>
               </div>
               </a>
           </div>
           <div class="singleprd">
                <a href="" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="images/featured/cat5.jpg">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title">
                         georgette
                  </div>
               </div>
               </a>
           </div>
           <div class="col-md-12 col-sm-12 col-xs-12 nopad btmcontainer text-center">
             <a class="readmore-btn" href="#">
             <span class="readmore-inner">
             <span>view more</span>
             <span><i class="fa fa-angle-right"></i></span>
             </span>
             </a>
          </div>
           
       </div>

   </div>
</div>
<!--mobile category ends----> --}}


 @if(count($Homecat)>0)
 @foreach ($Homecat as $Home)
<section class="featuredcat-section commontop-section mobhide">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
             <span>{{$Home['Homecat']->title}}</span>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 nopad featuredcat-lister">
             <div class="row mobrow-0">
                 
                @foreach ($Home['category'] as $category)
                <div class="featuredcat-single">
                   <a href="{{route('front.getCategory',['category'=>$category->Category_url])}}" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="{{URL::asset('assets/media/banner/'.$category->style_1)}}" class="img-responsive" alt="{{$category->category_name}}">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title" style="white-space: nowrap;overflow: hidden;text-align: center;">
                         {{$category->category_name}}
                      </div>
                   </a>
                </div>
                 @endforeach
             </div>
          </div>
          
               <div class="col-md-12 col-sm-12 col-xs-12 nopad btmcontainer text-center">
                  <a class="readmore-btn" href="{{route('front.getCategory')}}">
                  <span class="readmore-inner">
                  <span>view more</span>
                  <span><i class="fa fa-angle-right"></i></span>
                  </span>
                  </a>
               </div>
       </div>
    </div>
 </section>

 @endforeach
@foreach ($Homecat as $Home)
 <!--mobile category--->
 <div class="col-xs-12 nopad mobviewonly commontop-section mobcategory">
   <div class="col-xs-12 nopad">
       <div class="">
        <div class="col-xs-12 text-center text-uppercase section-title middle-liner">
             <span>{{$Home['Homecat']->title}}</span>
          </div>
          </div>		
       <div class="col-xs-12 thumbnailcat-slider">
            @foreach ($Home['category'] as $category)
           <div class="singleprd">
                <a href="{{route('front.getCategory',['category'=>$category->Category_url])}}" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="{{URL::asset('assets/media/banner/'.$category->style_1)}}" alt="{{$category->category_name}}">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title" style="white-space: nowrap;overflow: hidden;text-align: center;">
                         {{$category->category_name}}
                  </div>
               </div>
               </a>
           </div>
           @endforeach
           <div class="col-md-12 col-sm-12 col-xs-12 nopad btmcontainer text-center">
             <a class="readmore-btn" href="{{route('front.getCategory')}}">
             <span class="readmore-inner">
             <span>view more</span>
             <span><i class="fa fa-angle-right"></i></span>
             </span>
             </a>
          </div>
       </div>
   </div>
</div>
<!--mobile category ends---->
 @endforeach
 @endif
<div class="row">
<div id="renderproduct">
 <ul id="MixItUp2F266B">
   @php $wishlist = []; @endphp
   @if (Auth::check())
       @php $wishlist = explode(',', Auth::user()->wishlist); @endphp
   @endif

   @forelse($trending as $productList)
       <li class="mix color-1 check1 radio2 option3 col-md-3 col-sm-4 col-xs-6 nopad" style="display: inline-block;">
           <div class="prd-single">
               <div class="prd-inner">
                   <div class="prd-img">
                       <a href="{{ route('product.item', ['slug' => $productList->slug]) }}">
                           <img src="{{ URL::asset('/assets/media/products/' . $productList->image1) }}" class="img-responsive" alt="{{ $productList->product_title }}">
                       </a>
                   </div>
                   <div class="prdbtn-wraper">
                     <ul class="list-inline fail" id="MixItUp725DA6">
                         <li><a href="" data-id="{{$productList->id}}" data-q="{{$productList->minquantity}}"
                                 class="cart-btn common-btn btn-cart2 {{($productList->soldout != 'off')?'p-e-none':''}}"
                                 data-toggle="tooltip" data-placement="top" title="{{($productList->soldout != 'off')?'soldout':'Add to Cart'}}">{{($productList->soldout != 'off')?'soldout':'Add to Cart'}}</a></li>
                          @if(Auth::check())
                         <li><a href="" data-id="{{$productList->id}}"
                                 class="wishlist-btn common-btn btn-wishlist {{(in_array($productList->id,$array)?'added':'')}}"
                                 tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                 <img class="img-responsive center-block"
                                     src="{{URL::asset('assets/front/images/icons/wishlist.png')}}">
                             </a></li>
                             @else 
                             <li><a href="{{route('front.loginBlade')}}" data-id="{{$productList->id}}"
                                 class="wishlist-btn common-btn"
                                 tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                 <img class="img-responsive center-block"
                                     src="{{URL::asset('assets/front/images/icons/wishlist.png')}}">
                             </a></li>
                             @endif
 
                     </ul>
                 </div>
                   <div class="prdname">
                       <a href="{{ route('product.item', ['slug' => $productList->slug]) }}" style="color: #560835;">{{ $productList->product_title }}</a>
                   </div>
                   <div class="detailsprice-wraper">
                       <div class="prdprice-wraper">
                           <span class="actual-price">{{ $store->currencysymbol() ? $store->currencysymbol() : 'Rs.' }} {{ $productList->getProductPrice()->price }}</span>
                            {{--Discount or Original Price --}}
                       </div>
                   </div>
               </div>
           </div>
       </li>
   @empty
       <h2 style="text-align: center; margin-top: 40px;">No Product found</h2>
   @endforelse
</ul>
</div>
</div>

 @if(count($Homecat2)>0)
 @foreach ($Homecat2 as $Home2)
 <section class="featured-section commontop-section">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
             <span>{{$Home2['Homecat']->title}}</span>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 nopad featuredslider-wraper homeslide">
             <div class="featured-slider">
                @foreach ($Home2['category'] as $category2)
                <div class="featured-single">
                   <div class="featureditem-inner">
                      <div class="featuredsingle-img">
                         <img src="{{URL::asset('assets/media/banner/'.$category2->category_banner)}}" class="img-responsive" alt="{{$category2->category_name}}">
                         <div class="foverlay-content">
                            <div class="foverlay-outer">
                               <div class="foverlay-inner text-center">
                                  <div class="shopnow-wrap">
                                     <a class="shopnow-btn" href="{{route('front.getCategory',['category'=>$category2->Category_url])}}"> Shop Now</a>
                                  </div>
                                  <div class="fcatname">
                                    {{$category2->category_name}}
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                @endforeach
             </div>
          </div>
       </div>
    </div>
 </section>
 @endforeach
 @endif

 @if(count($discount)>0)
 @foreach($discount as $discounts)
 <section class="trend-section commontop-section hometrend">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
            <span>{{$discounts['discount']->title}}</span>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12 nopad prdslider-wraper commontab-wraper homeslide">
            <div class="product-slider">
               @foreach($discounts['product'] as $key => $discountProduct)
               <div class="prd-single">
                  <div class="prd-inner">
                     <div class="prd-img">
                        <a href="{{route('product.item',['slug'=>$discountProduct->slug])}}"><img src="{{URL::asset('/assets/media/products/'.$discountProduct->image1)}}" class="img-responsive" alt="{{$discountProduct->image1}}"></a>
                     </div>
                                 @php
                                    $data = $discountProduct->getproductPrice();
                                    $isoffer = $data->isoffer;
                                    $offer = $data->offer;
                                    $price = $data->price;
                                    $discount = $data->discount;                                 
                                    $rev = $discountProduct->reviewtotal();
                                    $star = $rev->reviewtotal/20;                                 
                                @endphp
                     <div class="prdbtn-wraper">
                        <ul class="list-inline">
                           <li><a href=""  data-id="{{$discountProduct->id}}" data-q="{{$discountProduct->minquantity}}"  class="cart-btn common-btn btn-cart2 {{($discountProduct->soldout != 'off')?'p-e-none':''}}"  data-toggle="tooltip" data-placement="top" title="{{($discountProduct->soldout != 'off')?'soldout':'Add to Cart'}}">{{($discountProduct->soldout != 'off')?'soldout':'Add to Cart'}}</a></li>
                           <li><a href="" data-id="{{$discountProduct->id}}" class="wishlist-btn common-btn  btn-wishlist {{(in_array($discountProduct->id,$array)?'added':'')}}" tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <img class="img-responsive center-block"  src="{{URL::asset('assets/front/images/icons/wishlist.png')}}">
                           </a></li>
                        </ul>
                     </div>
                     <div class="prdname-wraper">
                        <div class="prdname">
                           {{$discountProduct->product_title}}
                        </div>
                      <div class="plist comment-rating ratings-container mb-0">
                      <div class="ratings-full">
                          <span class="ratings" style="width:80%"></span>
                          <span class="tooltiptext tooltip-top">
                           <div class="star_rating">
                              <span class="fa fa-star {{($star >= 1)?'checked':''}}"></span>
                              <span class="fa fa-star {{($star >= 2)?'checked':''}}"></span>
                              <span class="fa fa-star {{($star >= 3)?'checked':''}}"></span>
                              <span class="fa fa-star {{($star >= 4)?'checked':''}}"></span>
                              <span class="fa fa-star {{($star >= 5)?'checked':''}}"></span>
                           </div>
                          </span>
                      </div>
                    </div>
                    <!--@if ($data->isoffer)-->
                    <div class="detailsprice-wraper">
                        <div class="prdprice-wraper">
                            <span class="actual-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $data->price }}</span>
                            @if(!empty($data->discount) || !empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0)
                            <span class="original-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $data->VendorPrice }}</span>
                            <span class="offer-percent">
                                (@if(!empty($data->discount)){{$data->discount->number}}{{($data->discount->type == '%')?'%':'Rs'}} OFF @endif
                                 @if(!empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0) @if(!empty($data->discount)) & @endif {{$data->CustomerGroup->amount}}{{($data->CustomerGroup->type == 1)?'%':'Rs'}} OFF  @endif )
                            </span>
                            @endif
                        </div>
                    </div>
                    <!--         @else-->
                    <!--         <div class="detailsprice-wraper">-->
                    <!--   <div class="prdprice-wraper">-->
                    <!--      <span class="actual-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $data->price }}</span>-->
                    <!--   </div>-->
                    <!--</div>-->
                    <!--@endif-->
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
@endforeach
@endif

@if(count($homeProduct)>0)
@foreach($homeProduct as $homeProducts)
<section class="trend-section commontop-section hometrend">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
            <span>{{$homeProducts['Homeslider']->title}}</span>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12 nopad prdslider-wraper commontab-wraper homeslide">
            <div class="product-slider">
               @foreach($homeProducts['product'] as $key => $discountProduct)
               <div class="prd-single">
                  <div class="prd-inner">
                     <div class="prd-img">
                        <a href="{{route('product.item',['slug'=>$discountProduct->slug])}}"><img src="{{URL::asset('/assets/media/products/'.$discountProduct->image1)}}" class="img-responsive" alt="{{$discountProduct->image1}}"></a>
                     </div>
                                 @php
                                    $data = $discountProduct->getproductPrice();
                                    $isoffer = $data->isoffer;
                                    $offer = $data->offer;
                                    $price = $data->price;
                                    $discount = $data->discount;                                 
                                    $rev = $discountProduct->reviewtotal();
                                    $star = $rev->reviewtotal/20;                                 
                                @endphp
                     <div class="prdbtn-wraper">
                        <ul class="list-inline">
                           <li><a href=""  data-id="{{$discountProduct->id}}" data-q="{{$discountProduct->minquantity}}"  class="cart-btn common-btn btn-cart2 {{($discountProduct->soldout != 'off')?'p-e-none':''}}"  data-toggle="tooltip" data-placement="top" title="{{($discountProduct->soldout != 'off')?'soldout':'Add to Cart'}}">{{($discountProduct->soldout != 'off')?'soldout':'Add to Cart'}}</a></li>
                           <li><a href="" data-id="{{$discountProduct->id}}" class="wishlist-btn common-btn  btn-wishlist {{(in_array($discountProduct->id,$array)?'added':'')}}" tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <img class="img-responsive center-block"  src="{{URL::asset('assets/front/images/icons/wishlist.png')}}">
                           </a></li>
                        </ul>
                     </div>
                     <div class="prdname-wraper">
                        <div class="prdname">
                           {{$discountProduct->product_title}}
                        </div>
                      <div class="plist comment-rating ratings-container mb-0">
                      <div class="ratings-full">
                          <span class="ratings" style="width:80%"></span>
                          <span class="tooltiptext tooltip-top">
                           <div class="star_rating">
                              <span class="fa fa-star {{($star >= 1)?'checked':''}}"></span>
                              <span class="fa fa-star {{($star >= 2)?'checked':''}}"></span>
                              <span class="fa fa-star {{($star >= 3)?'checked':''}}"></span>
                              <span class="fa fa-star {{($star >= 4)?'checked':''}}"></span>
                              <span class="fa fa-star {{($star >= 5)?'checked':''}}"></span>
                           </div>
                          </span>
                      </div>
                    </div>
                    {{-- @if ($data->isoffer) --}}
                    <div class="detailsprice-wraper">
                        <div class="prdprice-wraper">
                            <span class="actual-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $data->price }}</span>
                            @if(!empty($data->discount) || !empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0)
                            <span class="original-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $data->VendorPrice }}</span>
                            <span class="offer-percent">
                                (@if(!empty($data->discount)){{$data->discount->number}}{{($data->discount->type == '%')?'%':'Rs'}} OFF @endif
                                 @if(!empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0)@if(!empty($data->discount)) & @endif{{$data->CustomerGroup->amount}}{{($data->CustomerGroup->type == 1)?'%':'Rs'}} OFF  @endif )
                            </span>
                            @endif
                        </div>
                    </div>
                    {{-- @else
                    <div class="detailsprice-wraper">
                       <div class="prdprice-wraper">
                          <span class="actual-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $data->price }}</span>
                       </div>
                    </div>
                    @endif --}}
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
@endforeach
@endif
<section class="shopbyprice-section commontop-section">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
             <span>Shop by Price</span>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 nopad shopby-wraper commontab-wraper">
             <div class="row mobileres">
                <div class="col-md-3 col-sm-3 col-xs-6 shopby-single mob-padr-5">
                   <a href="{{route('front.getCategory')}}?min=0&max=2000" class="shopby-inner">
                      <div class="shopby-img">
                         <img src="{{URL::asset('assets/front/images/shopby1.jpg')}}" class="img-responsive" alt="slider2">
                         <div class="shopby-price">
                            <span>Less than 2K</span>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 shopby-single mob-padl-5">
                   <a href="{{route('front.getCategory')}}?min=2000&max=5000" class="shopby-inner">
                      <div class="shopby-img">
                         <img src="{{URL::asset('assets/front/images/shopby2.jpg')}}" class="img-responsive" alt="slider2">
                         <div class="shopby-price">
                            <span>Rs. 2000 to 5000</span>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 shopby-single mob-padr-5">
                   <a href="{{route('front.getCategory')}}?min=5000&max=8000" class="shopby-inner">
                      <div class="shopby-img">
                         <img src="{{URL::asset('assets/front/images/shopby3.jpg')}}" class="img-responsive" alt="slider2">
                         <div class="shopby-price">
                            <span>Rs. 5000 to 8000</span>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 shopby-single mob-padl-5">
                   <a href="{{route('front.getCategory')}}?min=8000&max=50000" class="shopby-inner">
                      <div class="shopby-img">
                         <img src="{{URL::asset('assets/front/images/shopby4.jpg')}}" class="img-responsive" alt="slider2">
                         <div class="shopby-price">
                            <span>Rs. 8000 to 50000</span>
                         </div>
                      </div>
                   </a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 
 @if(count($Homecat3)>0)
 @foreach ($Homecat3 as $Home3)
 
 <section class="newarrival-section commontop-section mobhide">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
             <span>{{$Home3['Homecat']->title}}</span>
          </div>
       </div>
       <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-wraper commontab-wraper">
          <div class="row mobileres">
             <div class="col-md-3 col-sm-3 col-xs-12 newarrival-single">
                <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-thumb">
                   <a href="{{route('front.getCategory',['category'=>$Homecat3[0]['category'][0]->Category_url])}}" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="{{URL::asset('assets/media/banner/'.$Homecat3[0]['category'][0]->style_3)}}" class="img-responsive" alt="{{$Homecat3[0]['category'][0]->category_name}}">
                         
                         <div class="new_arr_text">
                            <h4>{{$Homecat3[0]['category'][0]->category_name}}</h4>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-thumb mobmgn">
                   <a href="{{route('front.getCategory',['category'=>$Homecat3[0]['category'][1]->Category_url])}}" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="{{URL::asset('assets/media/banner/'.$Homecat3[0]['category'][1]->style_3)}}" class="img-responsive" alt="{{$Homecat3[0]['category'][1]->category_name}}">
                         
                         <div class="new_arr_text">
                            <h4>{{$Homecat3[0]['category'][1]->category_name}}</h4>
                         </div>
                      </div>
                   </a>
                </div>
             </div>
             <div class="col-md-6 col-sm-6 col-xs-12 newarrival-single newarrival-middle mobmgn">
                <a href="{{route('front.getCategory',['category'=>$Homecat3[0]['category'][2]->Category_url])}}" class="newarrival-inner overlay-wrap">
                   <div class="newarrival-img">
                      <img src="{{URL::asset('assets/media/banner/'.$Homecat3[0]['category'][2]->style_3)}}" class="img-responsive" alt="{{$Homecat3[0]['category'][2]->category_name}}">
                      
                      <div class="new_arr_text">
                         <h4>{{$Homecat3[0]['category'][2]->category_name}}</h4>
                      </div>
                   </div>
                </a>
             </div>
             <div class="col-md-3 col-sm-3 col-xs-12 newarrival-single">
                <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-thumb">
                   <a href="{{route('front.getCategory',['category'=>$Homecat3[0]['category'][3]->Category_url])}}" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="{{URL::asset('assets/media/banner/'.$Homecat3[0]['category'][3]->style_3)}}" class="img-responsive" alt="{{$Homecat3[0]['category'][3]->category_name}}">
                         
                         <div class="new_arr_text">
                            <h4>{{$Homecat3[0]['category'][3]->category_name}}</h4>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-thumb">
                   <a href="{{route('front.getCategory',['category'=>$Homecat3[0]['category'][4]->Category_url])}}" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="{{URL::asset('assets/media/banner/'.$Homecat3[0]['category'][4]->style_3)}}" class="img-responsive" alt="{{$Homecat3[0]['category'][4]->category_name}}">
                         
                         <div class="new_arr_text">
                            <h4>{{$Homecat3[0]['category'][4]->category_name}}</h4>
                         </div>
                      </div>
                   </a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 @endforeach
@endif
<br>
      
       @if(count($Homecat3)>0)
 @foreach ($Homecat3 as $Home3)
       <!--New arrival mobileview--->
  <section class="newarrival-section mobviewonly commontop-section">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
             <span>{{$Home3['Homecat']->title}}</span>
          </div>
       </div>
       <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-wraper commontab-wraper">
          <div class="row mobileres">
          <div class="col-xs-6 newarrival-single newarrival-middle ">
                <a href="{{route('front.getCategory',['category'=>$Homecat3[0]['category'][0]->Category_url])}}" class="newarrival-inner overlay-wrap">
                   <div class="newarrival-img">
                      <img src="{{URL::asset('assets/media/banner/'.$Homecat3[0]['category'][0]->style_3)}}" class="img-responsive" alt="{{$Homecat3[0]['category'][0]->category_name}}">
                      
                      <div class="new_arr_text">
                         <h4>{{$Homecat3[0]['category'][0]->category_name}}</h4>
                      </div>
                   </div>
                </a>
             </div>
             <div class="col-xs-6 newarrival-single">
             <div class="col-xs-6 newarrival-single arrivepad">
                <div class="newarrival-thumb nopad">
                   <a href="{{route('front.getCategory',['category'=>$Homecat3[0]['category'][1]->Category_url])}}" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="{{URL::asset('assets/media/banner/'.$Homecat3[0]['category'][1]->style_3)}}" class="img-responsive" alt="{{$Homecat3[0]['category'][1]->category_name}}">
                         
                         <div class="new_arr_text">
                            <h4>{{$Homecat3[0]['category'][1]->category_name}}</h4>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="newarrival-thumb nopad">
                   <a href="{{route('front.getCategory',['category'=>$Homecat3[0]['category'][2]->Category_url])}}" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="{{URL::asset('assets/media/banner/'.$Homecat3[0]['category'][2]->style_3)}}" class="img-responsive" alt="slider2">
                         
                         <div class="new_arr_text">
                            <h4>{{$Homecat3[0]['category'][2]->category_name}}</h4>
                         </div>
                      </div>
                   </a>
                </div>
                </div>
                <div class="col-xs-6 newarrival-single arrivepad">
                <div class="newarrival-thumb nopad">
                   <a href="{{route('front.getCategory',['category'=>$Homecat3[0]['category'][3]->Category_url])}}" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="{{URL::asset('assets/media/banner/'.$Homecat3[0]['category'][3]->style_3)}}" class="img-responsive" alt="slider2">
                         
                         <div class="new_arr_text">
                            <h4>{{$Homecat3[0]['category'][3]->category_name}}</h4>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="newarrival-thumb nopad">
                   <a href="{{route('front.getCategory',['category'=>$Homecat3[0]['category'][4]->Category_url])}}" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="{{URL::asset('assets/media/banner/'.$Homecat3[0]['category'][4]->style_3)}}" class="img-responsive" alt="slider2">
                         
                         <div class="new_arr_text">
                            <h4>{{$Homecat3[0]['category'][4]->category_name}}</h4>
                         </div>
                      </div>
                   </a>
                </div>
             </div>
             </div>
          </div>
       </div>
    </div>
 </section>
  @endforeach
@endif
 <!--New arrival mobileview ends-->
 <section class="icons-section common-section">
         <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 nopad icons-wraper commontab-wraper">
               <div class="row">
                  <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                     <a href="" class="icon-inner">
                        <div class="icon-img">
                           <span><img src="{{URL::asset('assets/images/icons/i1.png')}}" class="img-responsive center-block" alt="slider2"></span>
                        </div>
                        <div class="icon-name">
                           <span>Worldwide Shipping</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                     <a href="" class="icon-inner">
                        <div class="icon-img">
                           <span><img src="{{URL::asset('assets/images/icons/i2.png')}}" class="img-responsive center-block" alt="slider2"></span>
                        </div>
                        <div class="icon-name">
                           <span>Customer Support</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                     <a href="" class="icon-inner">
                        <div class="icon-img">
                           <span><img src="{{URL::asset('assets/images/icons/i3.png')}}" class="img-responsive center-block" alt="slider2"></span>
                        </div>
                        <div class="icon-name">
                           <span>Best Quality</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                     <a href="" class="icon-inner">
                        <div class="icon-img">
                           <span><img src="{{URL::asset('assets/images/icons/i4.png')}}" class="img-responsive center-block" alt="slider2"></span>
                        </div>
                        <div class="icon-name">
                           <span>Best Price</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                     <a href="" class="icon-inner">
                        <div class="icon-img">
                           <span><img src="{{URL::asset('assets/images/icons/cod.jpg')}}" class="img-responsive center-block" alt="slider2"></span>
                        </div>
                        <div class="icon-name">
                           <span>COD</span>
                        </div>
                     </a>
                  </div>
				  <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                     <a href="" class="icon-inner">
                        <div class="icon-img">
                           <span><img src="{{URL::asset('assets/images/icons/return.png')}}" class="img-responsive center-block" alt="slider2"></span>
                        </div>
                        <div class="icon-name">
                           <span>Return</span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
 <section class="newsletter-section common-section">
         <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title">
               <span>News Letter</span>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 nopad newsletter-wraper commontab-wraper">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12 newsletter-left">
                     <div class="content-para text-uppercase">
                        <p>Get all the latest information on Events, and Offers. Sign up for our newsletter today!</p>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 newsletter-right">
                     <form action="{{route('Subscribes')}}" method="post" id="Subscribe">
                        @csrf
                     <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email Address">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Submit</button>
                        </span>
                     </div>
                     </form>
                     <!-- /input-group -->
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection
@push('script')
<script type="text/javascript">
    // $('.btn-wishlist').on('click',function(e){
    //     e.preventDefault();
    //         if(!$(this).hasClass("added")){
    //         $.ajax({
    //             method:"GET",
    //             url:'{{route('wishlistAdd')}}',
    //             data:{id:$(this).data('id')},
    //             success:function(data){
    //              },
    //             error:function(erroe){ }
    //         });
    //         }else{
    //             $(this).removeClass("added");
    //             $.ajax({
    //                 method:"GET",
    //                 url:'{{route('wishlistremove')}}',
    //                 data:{id:$(this).data('id')},
    //                 success:function(data){ 
    //                     toastr["error"]('Removed from wishlist');
    //                 },
    //                 error:function(erroe){ }
    //             });
    //         }
    // });
</script>
@endpush
