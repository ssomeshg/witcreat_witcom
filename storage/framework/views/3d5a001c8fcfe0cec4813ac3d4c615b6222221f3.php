<ul id="MixItUp2F266B">
    <?php  $array = []; ?>
    <?php if(Auth::check()): ?>
    <?php
    
    $array = \explode(',',Auth::user()->wishlist);
    ?>
    <?php endif; ?>
    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li class="mix color-1 check1 radio2 option3 col-md-4 col-sm-6 col-xs-12 nopad" style="display: inline-block;">
        
        <div class="arrival-content">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-xs-12" style="margin-top: 20px;">
                     <div class="arrival-items">
                        <div class="arrival-img prd-img">
                           <img src="<?php echo e(URL::asset('assets/media/products/a1.png')); ?>" alt="">
   
                           <div class="a-bg">
                              <a href="<?php echo e(route('product.item', ['slug' => $productList->slug])); ?>">
                                 <img src="<?php echo e(URL::asset('/assets/media/products/' . $productList->image1)); ?>"
                                    alt="">
                              </a>
                           </div>
                           <div class="a-buttons">
                              <div class="btn-shows">
                                 <a href="">Most Bought</a>
                              </div>
                              <a href="<?php echo e(route('front.loginBlade')); ?>" data-id="<?php echo e($productList->id); ?>"
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
                           <p><?php echo e($productList->product_title); ?></p>
                           <div class="price-sec">
                              <span
                                 class="price"><?php echo e($StoreConfig->currencysymbol() ? $StoreConfig->currencysymbol() : 'Rs.'); ?>

                                 <?php echo e($productList->getProductPrice()->price); ?></span> <span
                                 class="delPrice"><del>1200</del></span><span class="offer-tag">50%
                                 OFF</span>
                           </div>
                        </div>
                        <?php
                       $rev = $productList->reviewtotal();
                       $star = $rev->reviewtotal/20;
                       $price = $productList->getproductPrice();
                       ?>
                        <div class="plist comment-rating ratings-container mb-0" style="display: flex; justify-content: center;">
                           <div class="ratings-full" style="color: #432207;">
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
                        <div class="cart-btn-show" style="padding-right:20px;">
                           <a href="" data-id="<?php echo e($productList->id); ?>"
                              data-q="<?php echo e($productList->minquantity); ?>"
                              class=" btn-cart2 <?php echo e($productList->soldout != 'off' ? 'disabled' : ''); ?>"
                              data-toggle="tooltip" data-placement="top"
                              title="<?php echo e($productList->soldout != 'off' ? 'soldout' : 'Add to Cart'); ?>">
                              <?php echo e($productList->soldout != 'off' ? 'soldout' : 'Add to Cart'); ?>

                           </a>
                        </div>
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
<div class="pagination-wrapper">
    <?php echo e($products->links()); ?>

</div>
<script>
    console.log("<?php echo e(($products->total())?$products->total():0); ?>");
    document.getElementById("productCounts").innerHTML= "( <?php echo e(($products->total())?$products->total():0); ?> ) ";
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
</style><?php /**PATH C:\xampp\htdocs\witcreat_witcom\resources\views/front/product-list.blade.php ENDPATH**/ ?>