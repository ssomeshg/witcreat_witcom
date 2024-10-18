<ul id="MixItUp2F266B">
    @php  $array = []; @endphp
    @if (Auth::check())
    @php
    
    $array = \explode(',',Auth::user()->wishlist);
    @endphp
    @endif
    @forelse($products as $productList)
    <li class="mix color-1 check1 radio2 option3 col-md-4 col-sm-6 col-xs-12 nopad" style="display: inline-block;">
        <div class="prd-single">
            <div class="hotsale">
                {{-- <a href="{{route('product.item',['slug'=>$productList->slug])}}"><img src="images/hot1.png"
                        class="img-responsive" alt="hot sale"></a> --}}
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
                    {{-- @if ($price->isoffer) --}}
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
                    @endif --}}
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
{!! $products->links() !!}
<script>
    console.log("{{($products->total())?$products->total():0}}");
    document.getElementById("productCounts").innerHTML= "( {{($products->total())?$products->total():0}} ) ";
</script>