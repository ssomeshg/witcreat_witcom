
<?php $__env->startSection('content'); ?>

<?php if(Auth::check()): ?>
<?php
$array = \explode(',', Auth::user()->wishlist);
?>
<?php else: ?>
<?php
$array = [];
?>
<?php endif; ?>
<?php if(count($frontBanner) > 0): ?>
<section class="homeslider-section">
   <div class="homeslider-inner mobileslidehide">
      <?php $__currentLoopData = $frontBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $front): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="homeslider one">
         <a href="<?php echo e($front->bannerLink); ?>"><img src="<?php echo e(asset('/assets/media/banner/' . $front->web_image)); ?>"
               class="img-responsive" alt="<?php echo e($front->web_image); ?>"></a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
   <div class="homeslider-inner mobileslide">
      <?php $__currentLoopData = $frontBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $front): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="homeslider one">
         <a href="<?php echo e($front->bannerLink); ?>"><img
               src="<?php echo e(asset('/assets/media/banner/' . $front->mobile_image)); ?>" class="img-responsive"
               alt="<?php echo e($front->mobile_image); ?>"></a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
</section>
<?php endif; ?>

<section class="marquee-section">
   <div class="marqueeScroll-Main">
      <div class="marqueeContent">
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
         <p>Enjoy FREE Delivery on Domestic Orders over Rs. 2,000! *T&C</p>
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
      </div>
      <div class="marqueeContent">
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
         <p>Enjoy FREE Delivery on Domestic Orders over Rs. 2,000! *T&C</p>
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
      </div>
      <div class="marqueeContent">
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
         <p>Enjoy FREE Delivery on Domestic Orders over Rs. 2,000! *T&C</p>
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
      </div>
      <div class="marqueeContent">
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
         <p>Enjoy FREE Delivery on Domestic Orders over Rs. 2,000! *T&C</p>
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
      </div>
      <div class="marqueeContent">
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
         <p>Enjoy FREE Delivery on Domestic Orders over Rs. 2,000! *T&C</p>
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
      </div>
      <!-- Duplicate content for seamless scrolling -->
      <div class="marqueeContent">
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
         <p>Enjoy FREE Delivery on Domestic Orders over Rs. 2,000! *T&C</p>
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
      </div>
      <div class="marqueeContent">
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
         <p>Enjoy FREE Delivery on Domestic Orders over Rs. 2,000! *T&C</p>
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
      </div>
      <div class="marqueeContent">
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
         <p>Enjoy FREE Delivery on Domestic Orders over Rs. 2,000! *T&C</p>
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
      </div>
      <div class="marqueeContent">
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
         <p>Enjoy FREE Delivery on Domestic Orders over Rs. 2,000! *T&C</p>
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
      </div>
      <div class="marqueeContent">
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
         <p>Enjoy FREE Delivery on Domestic Orders over Rs. 2,000! *T&C</p>
         <img src="<?php echo e(URL::asset('assets/media/banner/flower.png')); ?>" alt="">
      </div>
   </div>
</section>


<!-- Product Section -->
<?php if(count($Homecat) > 0): ?>
<?php $__currentLoopData = $Homecat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section>
   <div class="product-section">
      <div class="container">
         <div class="product-title">
            <h1>Our Product</h1>
            <a href="<?php echo e(route('front.getCategory')); ?>">View All <img
                  src="<?php echo e(URL::asset('assets/media/banner/arrow.png')); ?>" alt=""></a>
         </div>
      </div>
      <div class="product-content">
         <div class="container">
            <div class="row">
               <?php $__currentLoopData = array_slice($Home['category'], 0, 4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <!-- Limit to 4 categories -->
               <div class="col-md-3">
                  <div class="products">
                     <a
                        href="<?php echo e(route('front.getCategory', ['category' => $category->Category_url])); ?>">
                        <img src="<?php echo e(URL::asset('assets/media/banner/' . $category->style_1)); ?>"
                           alt="">
                        <div class="product-bg">
                           <img src="<?php echo e(URL::asset('assets/media/products/p-gradient.png')); ?>"
                              alt="">
                        </div>
                        <p><?php echo e($category->category_name); ?></p>
                     </a>
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>



<!-- Arrival Section -->
<section class="arrival-bg arrival-section">
   <div class="">
      <div class="container">
         <div class="arrival-title">
            <h1>New Arrivals</h1>
            <a href="<?php echo e(route('front.getCategory')); ?>">View All <img
                  src="<?php echo e(URL::asset('assets/media/banner/arrow.png')); ?>" alt=""></a>

         </div>
      </div>
      <div class="arrival-content">
         <div class="container">
            <div class="row">
               <?php $wishlist = []; ?>
               <?php if(Auth::check()): ?>
               <?php $wishlist = explode(',', Auth::user()->wishlist); ?>
               <?php endif; ?>

               <?php $__empty_1 = true; $__currentLoopData = $trending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
               <div class="col-md-3">
                  <div class="arrival-items">
                     <div class="arrival-img">
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

                        </div>
                     </div>

                     <div class="arrival-price">
                        <p><?php echo e($productList->product_title); ?></p>
                        <div class="price-sec">
                           <span
                              class="price"><?php echo e($store->currencysymbol() ? $store->currencysymbol() : 'Rs.'); ?>

                              <?php echo e($productList->getProductPrice()->price); ?></span> <span
                              class="delPrice"><del>1200</del></span><span class="offer-tag">50%
                              OFF</span>
                        </div>
                     </div>
                     <div class="cart-btn-show">
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
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
               <h2 style="text-align: center; margin-top: 40px;">No Product found</h2>
               <?php endif; ?>

            </div>

         </div>
      </div>
</section>

<!-- Showcase Section -->

<section>
   <div class="showcase-section">
      <div class="container show-box">
         <div class="row">
            <div class="col-md-7">
               <div class="showImg">
                  <div class="shows-img1">
                     <img src="<?php echo e(URL::asset('assets/media/products/s1.png')); ?>" alt="">
                  </div>
                  <div class="shows-img2">
                     <img src="<?php echo e(URL::asset('assets/media/products/s2.png')); ?>" alt="">
                  </div>
                  <div class="shows-img3">
                     <img src="<?php echo e(URL::asset('assets/media/products/s3.png')); ?>" alt="">
                  </div>
               </div>
            </div>
            <div class="col-md-5">
               <div class="show-content">
                  <p>Fabulous Blue and Grey Silk Fabric Embroidered Lehenga Choli</p>
                  <a href="" class="show-Btn">Shop Now</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Collection Section -->

<section class="collection-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="c-title">
               <div class="arrival-title">
                  <h1>Collections</h1>
                  <a href="">View All <img src="<?php echo e(URL::asset('assets/media/banner/arrow.png')); ?>"
                        alt=""></a>

               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="row">
               <div class="col-md-6">
                  <div class="c-image">
                     <img src="<?php echo e(URL::asset('assets/media/products/c1.png')); ?>" alt="">
                     <div class="c-bg"></div>
                     <div class="c-content">
                        <p>Women Sarees</p>
                        <h2>Collection</h2>
                        <button>Shop Now</button>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="c-image">
                     <img src="<?php echo e(URL::asset('assets/media/products/c1.png')); ?>" alt="">
                     <div class="c-bg"></div>
                     <div class="c-content">
                        <p>Women Sarees</p>
                        <h2>Collection</h2>
                        <button>Shop Now</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 c-full">
                  <div class="c-image">
                     <img src="<?php echo e(URL::asset('assets/media/products/c1.png')); ?>" alt="">
                     <div class="c-bg"></div>
                     <div class="c-content">
                        <p>Women Sarees</p>
                        <h2>Collection</h2>
                        <button>Shop Now</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="row">
               <div class="col-md-6">
                  <div class="c-image">
                     <img src="<?php echo e(URL::asset('assets/media/products/c1.png')); ?>" alt="">
                     <div class="c-bg"></div>
                     <div class="c-button">

                        <svg width="11" height="15" viewBox="0 0 11 15" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M0 13.9635V1.03649C0 0.205807 0.954138 -0.262712 1.61145 0.24521L9.97598 6.70871C10.4941 7.10904 10.4941 7.89096 9.97598 8.29129L1.61145 14.7548C0.954137 15.2627 0 14.7942 0 13.9635Z"
                              fill="white" />
                        </svg>


                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="c-image">
                     <img src="<?php echo e(URL::asset('assets/media/products/c1.png')); ?>" alt="">
                     <div class="c-bg"></div>
                     <div class="c-button">
                        <svg width="11" height="15" viewBox="0 0 11 15" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M0 13.9635V1.03649C0 0.205807 0.954138 -0.262712 1.61145 0.24521L9.97598 6.70871C10.4941 7.10904 10.4941 7.89096 9.97598 8.29129L1.61145 14.7548C0.954137 15.2627 0 14.7942 0 13.9635Z"
                              fill="white" />
                        </svg>

                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 c-full">
                  <div class="c-image">
                     <img src="<?php echo e(URL::asset('assets/media/products/c1.png')); ?>" alt="">
                     <div class="c-bg"></div>
                     <div class="c-button">
                        <svg width="11" height="15" viewBox="0 0 11 15" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M0 13.9635V1.03649C0 0.205807 0.954138 -0.262712 1.61145 0.24521L9.97598 6.70871C10.4941 7.10904 10.4941 7.89096 9.97598 8.29129L1.61145 14.7548C0.954137 15.2627 0 14.7942 0 13.9635Z"
                              fill="white" />
                        </svg>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Our Shop Start -->
<section class="our-shop">
   <div class="container">
      <div class="row" style="position: relative; display: flex;">
         <div class="col-md-5">
            <div class="fashion-left">
               <div class="fs-shop">
                  <img src="<?php echo e(URL::asset('assets/media/fash.png')); ?>" alt="">
               </div>
               <img class="fs-logo" src="<?php echo e(URL::asset('assets/media/logo5.png')); ?>" alt="">
            </div>
         </div>
         <div class="col-md-7">
            <div class="fashion-right">
               <h1>Best Fashion Since 2014</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet itaque eaque saepe nihil doloribus, quaerat vero! Rem, perspiciatis omnis praesentium minima unde nihil ea in vitae! Illum eligendi ea ab.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quo temporibus repellat ut dolor, fuga illum accusantium obcaecati sapiente vitae at expedita iste quidem ab quisquam omnis cumque laudantium aliquid.</p>
            </div>
            <div class="fashion-counter">
               <div class="count-fashion"><h1>2024</h1><p>Fifash Founded</p></div>
               <div class="count-fashion"><h1>8900+</h1><p>Product Sold</p></div>
               <div class="count-fashion"><h1>3100+</h1><p>Best Reviews</p></div>
            </div>
         </div>
      </div>

   </div>
</section>
<!-- Our Shop End -->








                        <?php if(count($Homecat2) > 0): ?>
                        <?php $__currentLoopData = $Homecat2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Home2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <section class="featured-section commontop-section">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
                                    <span><?php echo e($Home2['Homecat']->title); ?></span>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12 nopad featuredslider-wraper homeslide">
                                    <div class="featured-slider">
                                       <?php $__currentLoopData = $Home2['category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <div class="featured-single">
                                          <div class="featureditem-inner">
                                             <div class="featuredsingle-img">
                                                <img src="<?php echo e(URL::asset('assets/media/banner/' . $category2->category_banner)); ?>"
                                                   class="img-responsive" alt="<?php echo e($category2->category_name); ?>">
                                                <div class="foverlay-content">
                                                   <div class="foverlay-outer">
                                                      <div class="foverlay-inner text-center">
                                                         <div class="shopnow-wrap">
                                                            <a class="shopnow-btn"
                                                               href="<?php echo e(route('front.getCategory', ['category' => $category2->Category_url])); ?>">
                                                               Shop Now</a>
                                                         </div>
                                                         <div class="fcatname">
                                                            <?php echo e($category2->category_name); ?>

                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <?php if(count($discount) > 0): ?>
                        <?php $__currentLoopData = $discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discounts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <section class="trend-section commontop-section hometrend">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
                                    <span><?php echo e($discounts['discount']->title); ?></span>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12 nopad prdslider-wraper commontab-wraper homeslide">
                                    <div class="product-slider">
                                       <?php $__currentLoopData = $discounts['product']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discountProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <div class="prd-single">
                                          <div class="prd-inner">
                                             <div class="prd-img">
                                                <a href="<?php echo e(route('product.item', ['slug' => $discountProduct->slug])); ?>"><img
                                                      src="<?php echo e(URL::asset('/assets/media/products/' . $discountProduct->image1)); ?>"
                                                      class="img-responsive" alt="<?php echo e($discountProduct->image1); ?>"></a>
                                             </div>
                                             <?php
                                             $data = $discountProduct->getproductPrice();
                                             $isoffer = $data->isoffer;
                                             $offer = $data->offer;
                                             $price = $data->price;
                                             $discount = $data->discount;
                                             $rev = $discountProduct->reviewtotal();
                                             $star = $rev->reviewtotal / 20;
                                             ?>
                                             <div class="prdbtn-wraper">
                                                <ul class="list-inline">
                                                   <li><a href="" data-id="<?php echo e($discountProduct->id); ?>"
                                                         data-q="<?php echo e($discountProduct->minquantity); ?>"
                                                         class="cart-btn common-btn btn-cart2 <?php echo e($discountProduct->soldout != 'off' ? 'p-e-none' : ''); ?>"
                                                         data-toggle="tooltip" data-placement="top"
                                                         title="<?php echo e($discountProduct->soldout != 'off' ? 'soldout' : 'Add to Cart'); ?>"><?php echo e($discountProduct->soldout != 'off' ? 'soldout' : 'Add to Cart'); ?></a>
                                                   </li>
                                                   <li><a href="" data-id="<?php echo e($discountProduct->id); ?>"
                                                         class="wishlist-btn common-btn  btn-wishlist <?php echo e(in_array($discountProduct->id, $array) ? 'added' : ''); ?>"
                                                         tabindex="0" data-toggle="tooltip" data-placement="top"
                                                         title="Add to Wishlist">
                                                         <img class="img-responsive center-block"
                                                            src="<?php echo e(URL::asset('assets/front/images/icons/wishlist.png')); ?>">
                                                      </a></li>
                                                </ul>
                                             </div>
                                             <div class="prdname-wraper">
                                                <div class="prdname">
                                                   <?php echo e($discountProduct->product_title); ?>

                                                </div>
                                                <div class="plist comment-rating ratings-container mb-0">
                                                   <div class="ratings-full">
                                                      <span class="ratings" style="width:80%"></span>
                                                      <span class="tooltiptext tooltip-top">
                                                         <div class="star_rating">
                                                            <span
                                                               class="fa fa-star <?php echo e($star >= 1 ? 'checked' : ''); ?>"></span>
                                                            <span
                                                               class="fa fa-star <?php echo e($star >= 2 ? 'checked' : ''); ?>"></span>
                                                            <span
                                                               class="fa fa-star <?php echo e($star >= 3 ? 'checked' : ''); ?>"></span>
                                                            <span
                                                               class="fa fa-star <?php echo e($star >= 4 ? 'checked' : ''); ?>"></span>
                                                            <span
                                                               class="fa fa-star <?php echo e($star >= 5 ? 'checked' : ''); ?>"></span>
                                                         </div>
                                                      </span>
                                                   </div>
                                                </div>
                                                <!--<?php if($data->isoffer): ?>-->
                                                <div class="detailsprice-wraper">
                                                   <div class="prdprice-wraper">
                                                      <span
                                                         class="actual-price"><?php echo e($StoreConfig->currencysymbol() ? $StoreConfig->currencysymbol() : 'Rs.'); ?>

                                                         <?php echo e($data->price); ?></span>
                                                      <?php if(!empty($data->discount) || (!empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0)): ?>
                                                      <span
                                                         class="original-price"><?php echo e($StoreConfig->currencysymbol() ? $StoreConfig->currencysymbol() : 'Rs.'); ?>

                                                         <?php echo e($data->VendorPrice); ?></span>
                                                      <span class="offer-percent">
                                                         (<?php if(!empty($data->discount)): ?>
                                                         <?php echo e($data->discount->number); ?><?php echo e($data->discount->type == '%' ? '%' : 'Rs'); ?>

                                                         OFF
                                                         <?php endif; ?>
                                                         <?php if(!empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0): ?>
                                                         <?php if(!empty($data->discount)): ?>
                                                         &
                                                         <?php endif; ?>
                                                         <?php echo e($data->CustomerGroup->amount); ?><?php echo e($data->CustomerGroup->type == 1 ? '%' : 'Rs'); ?>

                                                         OFF
                                                         <?php endif; ?>)
                                                      </span>
                                                      <?php endif; ?>
                                                   </div>
                                                </div>
                                                <!--         <?php else: ?>-->
                                                <!--         <div class="detailsprice-wraper">-->
                                                <!--   <div class="prdprice-wraper">-->
                                                <!--      <span class="actual-price"><?php echo e($StoreConfig->currencysymbol() ? $StoreConfig->currencysymbol() : 'Rs.'); ?> <?php echo e($data->price); ?></span>-->
                                                <!--   </div>-->
                                                <!--</div>-->
                                                <!--
    <?php endif; ?>-->
                                             </div>
                                          </div>
                                       </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <?php if(count($homeProduct) > 0): ?>
                        <?php $__currentLoopData = $homeProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeProducts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <section class="trend-section commontop-section hometrend">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
                                    <span><?php echo e($homeProducts['Homeslider']->title); ?></span>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12 nopad prdslider-wraper commontab-wraper homeslide">
                                    <div class="product-slider">
                                       <?php $__currentLoopData = $homeProducts['product']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discountProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <div class="prd-single">
                                          <div class="prd-inner">
                                             <div class="prd-img">
                                                <a href="<?php echo e(route('product.item', ['slug' => $discountProduct->slug])); ?>"><img
                                                      src="<?php echo e(URL::asset('/assets/media/products/' . $discountProduct->image1)); ?>"
                                                      class="img-responsive" alt="<?php echo e($discountProduct->image1); ?>"></a>
                                             </div>
                                             <?php
                                             $data = $discountProduct->getproductPrice();
                                             $isoffer = $data->isoffer;
                                             $offer = $data->offer;
                                             $price = $data->price;
                                             $discount = $data->discount;
                                             $rev = $discountProduct->reviewtotal();
                                             $star = $rev->reviewtotal / 20;
                                             ?>
                                             <div class="prdbtn-wraper">
                                                <ul class="list-inline">
                                                   <li><a href="" data-id="<?php echo e($discountProduct->id); ?>"
                                                         data-q="<?php echo e($discountProduct->minquantity); ?>"
                                                         class="cart-btn common-btn btn-cart2 <?php echo e($discountProduct->soldout != 'off' ? 'p-e-none' : ''); ?>"
                                                         data-toggle="tooltip" data-placement="top"
                                                         title="<?php echo e($discountProduct->soldout != 'off' ? 'soldout' : 'Add to Cart'); ?>"><?php echo e($discountProduct->soldout != 'off' ? 'soldout' : 'Add to Cart'); ?></a>
                                                   </li>
                                                   <li><a href="" data-id="<?php echo e($discountProduct->id); ?>"
                                                         class="wishlist-btn common-btn  btn-wishlist <?php echo e(in_array($discountProduct->id, $array) ? 'added' : ''); ?>"
                                                         tabindex="0" data-toggle="tooltip" data-placement="top"
                                                         title="Add to Wishlist">
                                                         <img class="img-responsive center-block"
                                                            src="<?php echo e(URL::asset('assets/front/images/icons/wishlist.png')); ?>">
                                                      </a></li>
                                                </ul>
                                             </div>
                                             <div class="prdname-wraper">
                                                <div class="prdname">
                                                   <?php echo e($discountProduct->product_title); ?>

                                                </div>
                                                <div class="plist comment-rating ratings-container mb-0">
                                                   <div class="ratings-full">
                                                      <span class="ratings" style="width:80%"></span>
                                                      <span class="tooltiptext tooltip-top">
                                                         <div class="star_rating">
                                                            <span
                                                               class="fa fa-star <?php echo e($star >= 1 ? 'checked' : ''); ?>"></span>
                                                            <span
                                                               class="fa fa-star <?php echo e($star >= 2 ? 'checked' : ''); ?>"></span>
                                                            <span
                                                               class="fa fa-star <?php echo e($star >= 3 ? 'checked' : ''); ?>"></span>
                                                            <span
                                                               class="fa fa-star <?php echo e($star >= 4 ? 'checked' : ''); ?>"></span>
                                                            <span
                                                               class="fa fa-star <?php echo e($star >= 5 ? 'checked' : ''); ?>"></span>
                                                         </div>
                                                      </span>
                                                   </div>
                                                </div>
                                                
                                                <div class="detailsprice-wraper">
                                                   <div class="prdprice-wraper">
                                                      <span
                                                         class="actual-price"><?php echo e($StoreConfig->currencysymbol() ? $StoreConfig->currencysymbol() : 'Rs.'); ?>

                                                         <?php echo e($data->price); ?></span>
                                                      <?php if(!empty($data->discount) || (!empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0)): ?>
                                                      <span
                                                         class="original-price"><?php echo e($StoreConfig->currencysymbol() ? $StoreConfig->currencysymbol() : 'Rs.'); ?>

                                                         <?php echo e($data->VendorPrice); ?></span>
                                                      <span class="offer-percent">
                                                         (<?php if(!empty($data->discount)): ?>
                                                         <?php echo e($data->discount->number); ?><?php echo e($data->discount->type == '%' ? '%' : 'Rs'); ?>

                                                         OFF
                                                         <?php endif; ?>
                                                         <?php if(!empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0): ?>
                                                         <?php if(!empty($data->discount)): ?>
                                                         &
                                                         <?php endif; ?>
                                                         <?php echo e($data->CustomerGroup->amount); ?><?php echo e($data->CustomerGroup->type == 1 ? '%' : 'Rs'); ?>

                                                         OFF
                                                         <?php endif; ?>)
                                                      </span>
                                                      <?php endif; ?>
                                                   </div>
                                                </div>
                                                
                                       </div>
                                    </div>
                                 </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                           </div>
                     </div>
                  </div>
                  </section>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                  <section class="shopbyprice-section commontop-section">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
                              <span>Shop by Price</span>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopad shopby-wraper commontab-wraper">
                              <div class="row mobileres">
                                 <div class="col-md-3 col-sm-3 col-xs-6 shopby-single mob-padr-5">
                                    <a href="<?php echo e(route('front.getCategory')); ?>?min=0&max=2000" class="shopby-inner">
                                       <div class="shopby-img">
                                          <img src="<?php echo e(URL::asset('assets/front/images/shopby1.jpg')); ?>"
                                             class="img-responsive" alt="slider2">
                                          <div class="shopby-price">
                                             <span>Less than 2K</span>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-3 col-sm-3 col-xs-6 shopby-single mob-padl-5">
                                    <a href="<?php echo e(route('front.getCategory')); ?>?min=2000&max=5000" class="shopby-inner">
                                       <div class="shopby-img">
                                          <img src="<?php echo e(URL::asset('assets/front/images/shopby2.jpg')); ?>"
                                             class="img-responsive" alt="slider2">
                                          <div class="shopby-price">
                                             <span>Rs. 2000 to 5000</span>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-3 col-sm-3 col-xs-6 shopby-single mob-padr-5">
                                    <a href="<?php echo e(route('front.getCategory')); ?>?min=5000&max=8000" class="shopby-inner">
                                       <div class="shopby-img">
                                          <img src="<?php echo e(URL::asset('assets/front/images/shopby3.jpg')); ?>"
                                             class="img-responsive" alt="slider2">
                                          <div class="shopby-price">
                                             <span>Rs. 5000 to 8000</span>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-3 col-sm-3 col-xs-6 shopby-single mob-padl-5">
                                    <a href="<?php echo e(route('front.getCategory')); ?>?min=8000&max=50000" class="shopby-inner">
                                       <div class="shopby-img">
                                          <img src="<?php echo e(URL::asset('assets/front/images/shopby4.jpg')); ?>"
                                             class="img-responsive" alt="slider2">
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

                  <?php if(count($Homecat3) > 0): ?>
                  <?php $__currentLoopData = $Homecat3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Home3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <section class="newarrival-section commontop-section mobhide">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
                              <span><?php echo e($Home3['Homecat']->title); ?></span>
                           </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-wraper commontab-wraper">
                           <div class="row mobileres">
                              <div class="col-md-3 col-sm-3 col-xs-12 newarrival-single">
                                 <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-thumb">
                                    <a href="<?php echo e(route('front.getCategory', ['category' => $Homecat3[0]['category'][0]->Category_url])); ?>"
                                       class="newarrival-inner overlay-wrap">
                                       <div class="newarrival-img">
                                          <img src="<?php echo e(URL::asset('assets/media/banner/' . $Homecat3[0]['category'][0]->style_3)); ?>"
                                             class="img-responsive"
                                             alt="<?php echo e($Homecat3[0]['category'][0]->category_name); ?>">

                                          <div class="new_arr_text">
                                             <h4><?php echo e($Homecat3[0]['category'][0]->category_name); ?></h4>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-thumb mobmgn">
                                    <a href="<?php echo e(route('front.getCategory', ['category' => $Homecat3[0]['category'][1]->Category_url])); ?>"
                                       class="newarrival-inner overlay-wrap">
                                       <div class="newarrival-img">
                                          <img src="<?php echo e(URL::asset('assets/media/banner/' . $Homecat3[0]['category'][1]->style_3)); ?>"
                                             class="img-responsive"
                                             alt="<?php echo e($Homecat3[0]['category'][1]->category_name); ?>">

                                          <div class="new_arr_text">
                                             <h4><?php echo e($Homecat3[0]['category'][1]->category_name); ?></h4>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12 newarrival-single newarrival-middle mobmgn">
                                 <a href="<?php echo e(route('front.getCategory', ['category' => $Homecat3[0]['category'][2]->Category_url])); ?>"
                                    class="newarrival-inner overlay-wrap">
                                    <div class="newarrival-img">
                                       <img src="<?php echo e(URL::asset('assets/media/banner/' . $Homecat3[0]['category'][2]->style_3)); ?>"
                                          class="img-responsive"
                                          alt="<?php echo e($Homecat3[0]['category'][2]->category_name); ?>">

                                       <div class="new_arr_text">
                                          <h4><?php echo e($Homecat3[0]['category'][2]->category_name); ?></h4>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-12 newarrival-single">
                                 <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-thumb">
                                    <a href="<?php echo e(route('front.getCategory', ['category' => $Homecat3[0]['category'][3]->Category_url])); ?>"
                                       class="newarrival-inner overlay-wrap">
                                       <div class="newarrival-img">
                                          <img src="<?php echo e(URL::asset('assets/media/banner/' . $Homecat3[0]['category'][3]->style_3)); ?>"
                                             class="img-responsive"
                                             alt="<?php echo e($Homecat3[0]['category'][3]->category_name); ?>">

                                          <div class="new_arr_text">
                                             <h4><?php echo e($Homecat3[0]['category'][3]->category_name); ?></h4>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-thumb">
                                    <a href="<?php echo e(route('front.getCategory', ['category' => $Homecat3[0]['category'][4]->Category_url])); ?>"
                                       class="newarrival-inner overlay-wrap">
                                       <div class="newarrival-img">
                                          <img src="<?php echo e(URL::asset('assets/media/banner/' . $Homecat3[0]['category'][4]->style_3)); ?>"
                                             class="img-responsive"
                                             alt="<?php echo e($Homecat3[0]['category'][4]->category_name); ?>">

                                          <div class="new_arr_text">
                                             <h4><?php echo e($Homecat3[0]['category'][4]->category_name); ?></h4>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                  <br>

                  <?php if(count($Homecat3) > 0): ?>
                  <?php $__currentLoopData = $Homecat3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Home3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <!--New arrival mobileview--->
                  <section class="newarrival-section mobviewonly commontop-section">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
                              <span><?php echo e($Home3['Homecat']->title); ?></span>
                           </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-wraper commontab-wraper">
                           <div class="row mobileres">
                              <div class="col-xs-6 newarrival-single newarrival-middle ">
                                 <a href="<?php echo e(route('front.getCategory', ['category' => $Homecat3[0]['category'][0]->Category_url])); ?>"
                                    class="newarrival-inner overlay-wrap">
                                    <div class="newarrival-img">
                                       <img src="<?php echo e(URL::asset('assets/media/banner/' . $Homecat3[0]['category'][0]->style_3)); ?>"
                                          class="img-responsive"
                                          alt="<?php echo e($Homecat3[0]['category'][0]->category_name); ?>">

                                       <div class="new_arr_text">
                                          <h4><?php echo e($Homecat3[0]['category'][0]->category_name); ?></h4>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-xs-6 newarrival-single">
                                 <div class="col-xs-6 newarrival-single arrivepad">
                                    <div class="newarrival-thumb nopad">
                                       <a href="<?php echo e(route('front.getCategory', ['category' => $Homecat3[0]['category'][1]->Category_url])); ?>"
                                          class="newarrival-inner overlay-wrap">
                                          <div class="newarrival-img">
                                             <img src="<?php echo e(URL::asset('assets/media/banner/' . $Homecat3[0]['category'][1]->style_3)); ?>"
                                                class="img-responsive"
                                                alt="<?php echo e($Homecat3[0]['category'][1]->category_name); ?>">

                                             <div class="new_arr_text">
                                                <h4><?php echo e($Homecat3[0]['category'][1]->category_name); ?></h4>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="newarrival-thumb nopad">
                                       <a href="<?php echo e(route('front.getCategory', ['category' => $Homecat3[0]['category'][2]->Category_url])); ?>"
                                          class="newarrival-inner overlay-wrap">
                                          <div class="newarrival-img">
                                             <img src="<?php echo e(URL::asset('assets/media/banner/' . $Homecat3[0]['category'][2]->style_3)); ?>"
                                                class="img-responsive" alt="slider2">

                                             <div class="new_arr_text">
                                                <h4><?php echo e($Homecat3[0]['category'][2]->category_name); ?></h4>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="col-xs-6 newarrival-single arrivepad">
                                    <div class="newarrival-thumb nopad">
                                       <a href="<?php echo e(route('front.getCategory', ['category' => $Homecat3[0]['category'][3]->Category_url])); ?>"
                                          class="newarrival-inner overlay-wrap">
                                          <div class="newarrival-img">
                                             <img src="<?php echo e(URL::asset('assets/media/banner/' . $Homecat3[0]['category'][3]->style_3)); ?>"
                                                class="img-responsive" alt="slider2">

                                             <div class="new_arr_text">
                                                <h4><?php echo e($Homecat3[0]['category'][3]->category_name); ?></h4>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="newarrival-thumb nopad">
                                       <a href="<?php echo e(route('front.getCategory', ['category' => $Homecat3[0]['category'][4]->Category_url])); ?>"
                                          class="newarrival-inner overlay-wrap">
                                          <div class="newarrival-img">
                                             <img src="<?php echo e(URL::asset('assets/media/banner/' . $Homecat3[0]['category'][4]->style_3)); ?>"
                                                class="img-responsive" alt="slider2">

                                             <div class="new_arr_text">
                                                <h4><?php echo e($Homecat3[0]['category'][4]->category_name); ?></h4>
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
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                  <!--New arrival mobileview ends-->
                  <section class="icons-section common-section">
                     <div class="container">
                        <div class="col-md-12 col-sm-12 col-xs-12 nopad icons-wraper commontab-wraper">
                           <div class="row">
                              <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                                 <a href="" class="icon-inner">
                                    <div class="icon-img">
                                       <span><img src="<?php echo e(URL::asset('assets/images/icons/i1.png')); ?>"
                                             class="img-responsive center-block" alt="slider2"></span>
                                    </div>
                                    <div class="icon-name">
                                       <span>Worldwide Shipping</span>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                                 <a href="" class="icon-inner">
                                    <div class="icon-img">
                                       <span><img src="<?php echo e(URL::asset('assets/images/icons/i2.png')); ?>"
                                             class="img-responsive center-block" alt="slider2"></span>
                                    </div>
                                    <div class="icon-name">
                                       <span>Customer Support</span>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                                 <a href="" class="icon-inner">
                                    <div class="icon-img">
                                       <span><img src="<?php echo e(URL::asset('assets/images/icons/i3.png')); ?>"
                                             class="img-responsive center-block" alt="slider2"></span>
                                    </div>
                                    <div class="icon-name">
                                       <span>Best Quality</span>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                                 <a href="" class="icon-inner">
                                    <div class="icon-img">
                                       <span><img src="<?php echo e(URL::asset('assets/images/icons/i4.png')); ?>"
                                             class="img-responsive center-block" alt="slider2"></span>
                                    </div>
                                    <div class="icon-name">
                                       <span>Best Price</span>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                                 <a href="" class="icon-inner">
                                    <div class="icon-img">
                                       <span><img src="<?php echo e(URL::asset('assets/images/icons/cod.jpg')); ?>"
                                             class="img-responsive center-block" alt="slider2"></span>
                                    </div>
                                    <div class="icon-name">
                                       <span>COD</span>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                                 <a href="" class="icon-inner">
                                    <div class="icon-img">
                                       <span><img src="<?php echo e(URL::asset('assets/images/icons/return.png')); ?>"
                                             class="img-responsive center-block" alt="slider2"></span>
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
                                 <form action="<?php echo e(route('Subscribes')); ?>" method="post" id="Subscribe">
                                    <?php echo csrf_field(); ?>
                                    <div class="input-group">
                                       <input type="email" name="email" class="form-control"
                                          placeholder="Your Email Address">
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
                  <?php $__env->stopSection(); ?>
                  <?php $__env->startPush('script'); ?>
                  <script type="text/javascript">
                     // $('.btn-wishlist').on('click',function(e){
                     //     e.preventDefault();
                     //         if(!$(this).hasClass("added")){
                     //         $.ajax({
                     //             method:"GET",
                     //             url:'<?php echo e(route('wishlistAdd')); ?>',
                     //             data:{id:$(this).data('id')},
                     //             success:function(data){
                     //              },
                     //             error:function(erroe){ }
                     //         });
                     //         }else{
                     //             $(this).removeClass("added");
                     //             $.ajax({
                     //                 method:"GET",
                     //                 url:'<?php echo e(route('wishlistremove')); ?>',
                     //                 data:{id:$(this).data('id')},
                     //                 success:function(data){ 
                     //                     toastr["error"]('Removed from wishlist');
                     //                 },
                     //                 error:function(erroe){ }
                     //             });
                     //         }
                     // });
                  </script>
                  <?php $__env->stopPush(); ?>
<?php echo $__env->make('front.includes.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\witcreat_witecom\resources\views/front/front.blade.php ENDPATH**/ ?>