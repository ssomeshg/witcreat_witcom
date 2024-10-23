<ul id="MixItUp2F266B">
    <?php  $array = []; ?>
    <?php if(Auth::check()): ?>
    <?php
    
    $array = \explode(',',Auth::user()->wishlist);
    ?>
    <?php endif; ?>
    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li class="mix color-1 check1 radio2 option3 col-md-4 col-sm-6 col-xs-12 nopad" style="display: inline-block;">
        <div class="prd-single">
            <div class="hotsale">
                
            </div>
            <div class="prd-inner">
                <div class="prd-img">
                    <a href="<?php echo e(route('product.item',['slug'=>$productList->slug])); ?>"><img src="<?php echo e(URL::asset('/assets/media/products/'.$productList->image1)); ?>" class="img-responsive"
                        alt="slider2"></a>
                </div>
                <div class="prdbtn-wraper">
                    <ul class="list-inline fail" id="MixItUp725DA6">
                        <li><a href="" data-id="<?php echo e($productList->id); ?>" data-q="<?php echo e($productList->minquantity); ?>"
                                class="cart-btn common-btn btn-cart2 <?php echo e(($productList->soldout != 'off')?'p-e-none':''); ?>"
                                data-toggle="tooltip" data-placement="top" title="<?php echo e(($productList->soldout != 'off')?'soldout':'Add to Cart'); ?>"><?php echo e(($productList->soldout != 'off')?'soldout':'Add to Cart'); ?></a></li>
                         <?php if(Auth::check()): ?>
                        <li><a href="" data-id="<?php echo e($productList->id); ?>"
                                class="wishlist-btn common-btn btn-wishlist <?php echo e((in_array($productList->id,$array)?'added':'')); ?>"
                                tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                <img class="img-responsive center-block"
                                    src="<?php echo e(URL::asset('assets/front/images/icons/wishlist.png')); ?>">
                            </a></li>
                            <?php else: ?> 
                            <li><a href="<?php echo e(route('front.loginBlade')); ?>" data-id="<?php echo e($productList->id); ?>"
                                class="wishlist-btn common-btn"
                                tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                <img class="img-responsive center-block"
                                    src="<?php echo e(URL::asset('assets/front/images/icons/wishlist.png')); ?>">
                            </a></li>
                            <?php endif; ?>

                    </ul>
                </div>
                 <?php
                    $rev = $productList->reviewtotal();
                    $star = $rev->reviewtotal/20;
                    $price = $productList->getproductPrice();
                    ?>
                <div class="prdname-wraper">
                    <div class="prdname">
                        <a href="<?php echo e(route('product.item',['slug'=>$productList->slug])); ?>" style="color: #560835;"><?php echo e($productList->product_title); ?></a>
                    </div>
                   
                    <div class="plist comment-rating ratings-container mb-0">
                        <div class="ratings-full">
                            <span class="ratings" style="width:80%"></span>
                            <span class="tooltiptext tooltip-top">
                                <div class="star_rating">
                                    <span class="fa fa-star <?php echo e(($star >= 1)?'checked':''); ?>"></span>
                                    <span class="fa fa-star <?php echo e(($star >= 2)?'checked':''); ?>"></span>
                                    <span class="fa fa-star <?php echo e(($star >= 3)?'checked':''); ?>"></span>
                                    <span class="fa fa-star <?php echo e(($star >= 4)?'checked':''); ?>"></span>
                                    <span class="fa fa-star <?php echo e(($star >= 5)?'checked':''); ?>"></span>
                                </div>
                            </span>
                        </div>
                    </div>
                    
                    <div class="detailsprice-wraper">
                        <div class="prdprice-wraper">
                            <span class="actual-price"><?php echo e(($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'); ?> <?php echo e($price->price); ?></span>
                            <?php if(!empty($price->discount) || !empty($price->CustomerGroup) && $price->CustomerGroup->amount != 0): ?>
                            <span class="original-price"><?php echo e(($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'); ?> <?php echo e($price->VendorPrice); ?></span>
                            <span class="offer-percent">
                                (<?php if(!empty($price->discount)): ?><?php echo e($price->discount->number); ?><?php echo e(($price->discount->type == '%')?'%':'Rs'); ?> OFF <?php endif; ?>
                                <?php if(!empty($price->CustomerGroup) && $price->CustomerGroup->amount != 0): ?> <?php if(!empty($price->discount)): ?> & <?php endif; ?> <?php echo e($price->CustomerGroup->amount); ?><?php echo e(($price->CustomerGroup->type == 1)?'%':'Rs'); ?> OFF  <?php endif; ?>)
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </li>
    <script>
     document.getElementById("productCounts").innerHTML= "( <?php echo e(($products->total())?$products->total():0); ?> ) ";
    </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <script>
    document.getElementById("productCounts").innerHTML= "( 0 ) ";
</script>
    <h2 style="
    text-align: center;
    /* margin: 96px; */
    margin-top: 40px;
">No Product found</h2>
    <?php endif; ?>
</ul>
<?php echo $products->links(); ?>

<script>
    console.log("<?php echo e(($products->total())?$products->total():0); ?>");
    document.getElementById("productCounts").innerHTML= "( <?php echo e(($products->total())?$products->total():0); ?> ) ";
</script><?php /**PATH C:\xampp\htdocs\witcreat_witcom\resources\views/front/product-list.blade.php ENDPATH**/ ?>