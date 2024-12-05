
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
   <div class="marqueeScroll-Main" style="color: #560835;">
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
            <!-- Add 'slider' class here to initialize slick -->
            <div class="product-slider">
               <?php $__currentLoopData = array_slice($Home['category'], 0, 6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <!-- Limit to 4 categories -->
               <div class="col-md-3">
                  <div class="products">
                     <a href="<?php echo e(route('front.getCategory', ['category' => $category->Category_url])); ?>" class="overlay-wrap">
                        <img src="<?php echo e(URL::asset('assets/media/banner/' . $category->style_1)); ?>" alt="">
                        <div class="gradient-overlay">
                           <span class="plus-icon"></span>
                        </div>
                        <div class="product-bg">
                           <img src="<?php echo e(URL::asset('assets/media/products/p-gradient.png')); ?>" alt="">
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
                              class="price"><?php echo e($store->currencysymbol() ? $store->currencysymbol() : 'Rs.'); ?>

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
            <div class="col-md-7 col-12">
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
            <div class="col-md-5 col-12">
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
            <div class="row c-items">
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
            <div class="row c-items">
               <div class="col-md-6">
                  <div class="c-image">
                     <img src="<?php echo e(URL::asset('assets/media/products/c1.png')); ?>" alt="">
                     <div class="c-bg"></div>
                     <div class="c-button" onclick="playYouTubeVideo(this, '6Vc1XHrmxNA')">

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
                     <div class="c-button" onclick="playYouTubeVideo(this, '6Vc1XHrmxNA')">
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
                     <div class="c-button"  onclick="playYouTubeVideo(this, '6Vc1XHrmxNA')">
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
<script>
   function playYouTubeVideo(button, videoId) {
      const container = button.closest('.c-image');

      if (!container.querySelector('iframe')) {
         const iframe = document.createElement('iframe');
         iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&controls=1`;
         iframe.frameBorder = "0";
         iframe.allow = "autoplay; encrypted-media";
         iframe.allowFullscreen = true;
         iframe.style.position = "absolute";
         iframe.style.top = "0";
         iframe.style.left = "0";
         iframe.style.width = "100%";
         iframe.style.height = "100%";
         iframe.style.zIndex = "10";
         
         container.appendChild(iframe);
      }
   }
</script>

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
               <div class="count-fashion1"><h1>3100+</h1><p>Best Reviews</p></div>
            </div>
         </div>
      </div>

   </div>
</section>
<!-- Our Shop End -->
<section>
<div class="testimonial-section">
    <h2>What People Say About Us</h2>
    <div class="testimonial-slider">
        <div class="testimonial-card">
            <p class="testimonial-text">Amet minim mollit non deserunt ullamco</p>
            <div class="testimonial-author">
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                <img src="<?php echo e(asset('assets/front/images/t1.png')); ?>" alt="Customer Image">
                <p>Anisa Zahra</p>
                <span>Customer</span>
            </div>
        </div>
        <div class="testimonial-card">
            <p class="testimonial-text">Amet minim mollit non deserunt ullamco</p>
            <div class="testimonial-author">
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                <img src="<?php echo e(asset('assets/front/images/t2.png')); ?>" alt="Customer Image">
                <p>Anisa Zahra</p>
                <span>Customer</span>
            </div>
        </div>
        <div class="testimonial-card">
            <p class="testimonial-text">Amet minim mollit non deserunt ullamco</p>
            <div class="testimonial-author">
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                <img src="<?php echo e(asset('assets/front/images/t2.png')); ?>" alt="Customer Image">
                <p>Anisa Zahra</p>
                <span>Customer</span>
            </div>
        </div>
        <div class="testimonial-card">
            <p class="testimonial-text">Amet minim mollit non deserunt ullamco</p>
            <div class="testimonial-author">
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                <img src="<?php echo e(asset('assets/front/images/t2.png')); ?>" alt="Customer Image">
                <p>Anisa Zahra</p>
                <span>Customer</span>
            </div>
        </div>
        <div class="testimonial-card">
            <p class="testimonial-text">Amet minim mollit non deserunt ullamco</p>
            <div class="testimonial-author">
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                <img src="<?php echo e(asset('assets/front/images/t2.png')); ?>" alt="Customer Image">
                <p>Anisa Zahra</p>
                <span>Customer</span>
            </div>
        </div>
        <div class="testimonial-card">
            <p class="testimonial-text">Amet minim mollit non deserunt ullamco</p>
            <div class="testimonial-author">
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                <img src="<?php echo e(asset('assets/front/images/t2.png')); ?>" alt="Customer Image">
                <p>Anisa Zahra</p>
                <span>Customer</span>
            </div>
        </div>
        <!-- Add more testimonial cards as needed -->
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
<?php echo $__env->make('front.includes.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\witcreat_witcom\resources\views/front/front.blade.php ENDPATH**/ ?>