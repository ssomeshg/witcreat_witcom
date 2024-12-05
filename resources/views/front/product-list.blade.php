<ul id="MixItUp2F266B">
    @php  $array = []; @endphp
    @if (Auth::check())
    @php
    
    $array = \explode(',',Auth::user()->wishlist);
    @endphp
    @endif
    @forelse($products as $productList)
    <li class="mix color-1 check1 radio2 option3 col-md-4 col-sm-6 col-xs-12 nopad" style="display: inline-block;">
        {{-- <div class="prd-single">
            <div class="hotsale">
                {{-- <a href="{{route('product.item',['slug'=>$productList->slug])}}"><img src="images/hot1.png"
                        class="img-responsive" alt="hot sale"></a> 
            </div>
            <div class="prd-inner">
                <div class="prd-img">
                    <a href="{{route('product.item',['slug'=>$productList->slug])}}"><img src="{{URL::asset('/assets/media/products/'.$productList->image1)}}" class="img-responsive"
                        alt="slider2"></a>
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
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.37187 9.59832C0.298865 6.24832 1.55287 2.41932 5.06987 1.28632C6.91987 0.689322 8.96187 1.04132 10.4999 2.19832C11.9549 1.07332 14.0719 0.693322 15.9199 1.28632C19.4369 2.41932 20.6989 6.24832 19.6269 9.59832C17.9569 14.9083 10.4999 18.9983 10.4999 18.9983C10.4999 18.9983 3.09787 14.9703 1.37187 9.59832Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M14.5 4.70001C15.57 5.04601 16.326 6.00101 16.417 7.12201" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                            </a></li>
                            @else 
                            <li><a href="{{route('front.loginBlade')}}" data-id="{{$productList->id}}"
                                class="wishlist-btn common-btn"
                                tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                               <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.37187 9.59832C0.298865 6.24832 1.55287 2.41932 5.06987 1.28632C6.91987 0.689322 8.96187 1.04132 10.4999 2.19832C11.9549 1.07332 14.0719 0.693322 15.9199 1.28632C19.4369 2.41932 20.6989 6.24832 19.6269 9.59832C17.9569 14.9083 10.4999 18.9983 10.4999 18.9983C10.4999 18.9983 3.09787 14.9703 1.37187 9.59832Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M14.5 4.70001C15.57 5.04601 16.326 6.00101 16.417 7.12201" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                            </a></li>
                            @endif

                    </ul>
                </div>
                 @php
                    $rev = $productList->reviewtotal();
                    $star = $rev->reviewtotal/20;
                    $price = $productList->getproductPrice();
                    @endphp
                <div class="prdname-wraper">
                    <div class="prdname">
                        <a href="{{route('product.item',['slug'=>$productList->slug])}}" style="color: #560835;">{{$productList->product_title}}</a>
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
                    {{-- @if ($price->isoffer) 
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
                    {{-- @else
                    <div class="detailsprice-wraper">
                        <div class="prdprice-wraper">
                            <span class="actual-price">{{($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'}} {{ $price->price }}</span>
                        </div>
                    </div>
                    @endif 
                </div>
            </div>
        </div> --}}
        <div class="arrival-content">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-xs-12" style="margin-top: 20px;">
                     <div class="arrival-items">
                        <div class="arrival-img prd-img">
                           <img src="{{ URL::asset('assets/media/products/a1.png') }}" alt="">
   
                           <div class="a-bg">
                              <a href="{{ route('product.item', ['slug' => $productList->slug]) }}">
                                 <img src="{{ URL::asset('/assets/media/products/' . $productList->image1) }}"
                                    alt="">
                              </a>
                           </div>
                           <div class="a-buttons">
                              <div class="btn-shows">
                                 <a href="">Most Bought</a>
                              </div>
                              <a href="{{route('front.loginBlade')}}" data-id="{{$productList->id}}"
                                 class=" common-btn"
                                 tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.37187 9.59832C0.298865 6.24832 1.55287 2.41932 5.06987 1.28632C6.91987 0.689322 8.96187 1.04132 10.4999 2.19832C11.9549 1.07332 14.0719 0.693322 15.9199 1.28632C19.4369 2.41932 20.6989 6.24832 19.6269 9.59832C17.9569 14.9083 10.4999 18.9983 10.4999 18.9983C10.4999 18.9983 3.09787 14.9703 1.37187 9.59832Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path d="M14.5 4.70001C15.57 5.04601 16.326 6.00101 16.417 7.12201"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>
                           </a>
                           </div>
                        </div>
   
                        <div class="arrival-price">
                           <p>{{ $productList->product_title }}</p>
                           <div class="price-sec">
                              <span
                                 class="price">{{ $StoreConfig->currencysymbol() ? $StoreConfig->currencysymbol() : 'Rs.' }}
                                 {{ $productList->getProductPrice()->price }}</span> <span
                                 class="delPrice"><del>1200</del></span><span class="offer-tag">50%
                                 OFF</span>
                           </div>
                        </div>
                        @php
                       $rev = $productList->reviewtotal();
                       $star = $rev->reviewtotal/20;
                       $price = $productList->getproductPrice();
                       @endphp
                        <div class="plist comment-rating ratings-container mb-0" style="display: flex; justify-content: center;">
                           <div class="ratings-full" style="color: #432207;">
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
                        <div class="cart-btn-show" style="padding-right:20px;">
                           <a href="" data-id="{{ $productList->id }}"
                              data-q="{{ $productList->minquantity }}"
                              class=" btn-cart2 {{ $productList->soldout != 'off' ? 'disabled' : '' }}"
                              data-toggle="tooltip" data-placement="top"
                              title="{{ $productList->soldout != 'off' ? 'soldout' : 'Add to Cart' }}">
                              {{ $productList->soldout != 'off' ? 'soldout' : 'Add to Cart' }}
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
   
            </div>
         </div>
    </li>
    <script>
     document.getElementById("productCounts").innerHTML= "( {{($products->total())?$products->total():0}} ) ";
    </script>
        @empty
        <script>
    document.getElementById("productCounts").innerHTML= "( 0 ) ";
</script>
    <h2 style="
    text-align: center;
    /* margin: 96px; */
    margin-top: 40px;
">No Product found</h2>
    @endforelse
</ul>
<div class="pagination-wrapper">
    {{ $products->links() }}
</div>
<script>
    console.log("{{($products->total())?$products->total():0}}");
    document.getElementById("productCounts").innerHTML= "( {{($products->total())?$products->total():0}} ) ";
</script>
<style>
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        background-color: #432207!important;
        border-color: #432207!important;
        color: white!important;
    }
    .pagination>li>a, .pagination>li>span {
        color: #432207!important;
    }
</style>