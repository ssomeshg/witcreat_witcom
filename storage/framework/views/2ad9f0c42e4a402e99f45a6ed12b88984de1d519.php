 
<?php $__env->startSection('content'); ?>

<?php if(Auth::check()): ?>
													<?php
														$array = \explode(',',Auth::user()->wishlist);
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
          <a href="<?php echo e($front->bannerLink); ?>"><img src="<?php echo e(asset('/assets/media/banner/'.$front->web_image)); ?>" class="img-responsive" alt="<?php echo e($front->web_image); ?>"></a>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="homeslider-inner mobileslide">
        <?php $__currentLoopData = $frontBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $front): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="homeslider one">
          <a href="<?php echo e($front->bannerLink); ?>"><img src="<?php echo e(asset('/assets/media/banner/'.$front->mobile_image)); ?>" class="img-responsive" alt="<?php echo e($front->mobile_image); ?>"></a>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
 <?php endif; ?>
 


 <?php if(count($Homecat)>0): ?>
 <?php $__currentLoopData = $Homecat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="featuredcat-section commontop-section mobhide">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center text-uppercase section-title middle-liner">
             <span><?php echo e($Home['Homecat']->title); ?></span>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 nopad featuredcat-lister">
             <div class="row mobrow-0">
                 
                <?php $__currentLoopData = $Home['category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="featuredcat-single">
                   <a href="<?php echo e(route('front.getCategory',['category'=>$category->Category_url])); ?>" class="featuredsingle-inner overlay-wrap">
                      <div class="featuredsingle-img">
                         <img src="<?php echo e(URL::asset('assets/media/banner/'.$category->style_1)); ?>" class="img-responsive" alt="<?php echo e($category->category_name); ?>">
                         <div class="gradient-overlay">
                            <span class="plus-icon"></span>
                         </div>
                      </div>
                      <div class="featuredsingle-title" style="white-space: nowrap;overflow: hidden;text-align: center;">
                         <?php echo e($category->category_name); ?>

                      </div>
                   </a>
                </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </div>
          </div>
          
               <div class="col-md-12 col-sm-12 col-xs-12 nopad btmcontainer text-center">
                  <a class="readmore-btn" href="<?php echo e(route('front.getCategory')); ?>">
                  <span class="readmore-inner">
                  <span>view more</span>
                  <span><i class="fa fa-angle-right"></i></span>
                  </span>
                  </a>
               </div>
       </div>
    </div>
 </section>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $Homecat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <!--mobile category--->
 <div class="col-xs-12 nopad mobviewonly commontop-section mobcategory">
   <div class="col-xs-12 nopad">
       <div class="">
        <div class="col-xs-12 text-center text-uppercase section-title middle-liner">
             <span><?php echo e($Home['Homecat']->title); ?></span>
          </div>
          </div>		
       <div class="col-xs-12 thumbnailcat-slider">
            <?php $__currentLoopData = $Home['category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="singleprd">
                <a href="<?php echo e(route('front.getCategory',['category'=>$category->Category_url])); ?>" class="featuredsingle-inner overlay-wrap"><div class="singleprd-inner">
               <img class="img-responsive center-block"  src="<?php echo e(URL::asset('assets/media/banner/'.$category->style_1)); ?>" alt="<?php echo e($category->category_name); ?>">
               <div class="gradient-overlay">
                   <span class="plus-icon"></span>
                </div>
                 <div class="featuredsingle-title" style="white-space: nowrap;overflow: hidden;text-align: center;">
                         <?php echo e($category->category_name); ?>

                  </div>
               </div>
               </a>
           </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           <div class="col-md-12 col-sm-12 col-xs-12 nopad btmcontainer text-center">
             <a class="readmore-btn" href="<?php echo e(route('front.getCategory')); ?>">
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
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php endif; ?>
 

 <?php if(count($Homecat2)>0): ?>
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
                         <img src="<?php echo e(URL::asset('assets/media/banner/'.$category2->category_banner)); ?>" class="img-responsive" alt="<?php echo e($category2->category_name); ?>">
                         <div class="foverlay-content">
                            <div class="foverlay-outer">
                               <div class="foverlay-inner text-center">
                                  <div class="shopnow-wrap">
                                     <a class="shopnow-btn" href="<?php echo e(route('front.getCategory',['category'=>$category2->Category_url])); ?>"> Shop Now</a>
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

 <?php if(count($discount)>0): ?>
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
                        <a href="<?php echo e(route('product.item',['slug'=>$discountProduct->slug])); ?>"><img src="<?php echo e(URL::asset('/assets/media/products/'.$discountProduct->image1)); ?>" class="img-responsive" alt="<?php echo e($discountProduct->image1); ?>"></a>
                     </div>
                                 <?php
                                    $data = $discountProduct->getproductPrice();
                                    $isoffer = $data->isoffer;
                                    $offer = $data->offer;
                                    $price = $data->price;
                                    $discount = $data->discount;                                 
                                    $rev = $discountProduct->reviewtotal();
                                    $star = $rev->reviewtotal/20;                                 
                                ?>
                     <div class="prdbtn-wraper">
                        <ul class="list-inline">
                           <li><a href=""  data-id="<?php echo e($discountProduct->id); ?>" data-q="<?php echo e($discountProduct->minquantity); ?>"  class="cart-btn common-btn btn-cart2 <?php echo e(($discountProduct->soldout != 'off')?'p-e-none':''); ?>"  data-toggle="tooltip" data-placement="top" title="<?php echo e(($discountProduct->soldout != 'off')?'soldout':'Add to Cart'); ?>"><?php echo e(($discountProduct->soldout != 'off')?'soldout':'Add to Cart'); ?></a></li>
                           <li><a href="" data-id="<?php echo e($discountProduct->id); ?>" class="wishlist-btn common-btn  btn-wishlist <?php echo e((in_array($discountProduct->id,$array)?'added':'')); ?>" tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <img class="img-responsive center-block"  src="<?php echo e(URL::asset('assets/front/images/icons/wishlist.png')); ?>">
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
                              <span class="fa fa-star <?php echo e(($star >= 1)?'checked':''); ?>"></span>
                              <span class="fa fa-star <?php echo e(($star >= 2)?'checked':''); ?>"></span>
                              <span class="fa fa-star <?php echo e(($star >= 3)?'checked':''); ?>"></span>
                              <span class="fa fa-star <?php echo e(($star >= 4)?'checked':''); ?>"></span>
                              <span class="fa fa-star <?php echo e(($star >= 5)?'checked':''); ?>"></span>
                           </div>
                          </span>
                      </div>
                    </div>
                    <!--<?php if($data->isoffer): ?>-->
                    <div class="detailsprice-wraper">
                        <div class="prdprice-wraper">
                            <span class="actual-price"><?php echo e(($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'); ?> <?php echo e($data->price); ?></span>
                            <?php if(!empty($data->discount) || !empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0): ?>
                            <span class="original-price"><?php echo e(($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'); ?> <?php echo e($data->VendorPrice); ?></span>
                            <span class="offer-percent">
                                (<?php if(!empty($data->discount)): ?><?php echo e($data->discount->number); ?><?php echo e(($data->discount->type == '%')?'%':'Rs'); ?> OFF <?php endif; ?>
                                 <?php if(!empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0): ?> <?php if(!empty($data->discount)): ?> & <?php endif; ?> <?php echo e($data->CustomerGroup->amount); ?><?php echo e(($data->CustomerGroup->type == 1)?'%':'Rs'); ?> OFF  <?php endif; ?> )
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--         <?php else: ?>-->
                    <!--         <div class="detailsprice-wraper">-->
                    <!--   <div class="prdprice-wraper">-->
                    <!--      <span class="actual-price"><?php echo e(($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'); ?> <?php echo e($data->price); ?></span>-->
                    <!--   </div>-->
                    <!--</div>-->
                    <!--<?php endif; ?>-->
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

<?php if(count($homeProduct)>0): ?>
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
                        <a href="<?php echo e(route('product.item',['slug'=>$discountProduct->slug])); ?>"><img src="<?php echo e(URL::asset('/assets/media/products/'.$discountProduct->image1)); ?>" class="img-responsive" alt="<?php echo e($discountProduct->image1); ?>"></a>
                     </div>
                                 <?php
                                    $data = $discountProduct->getproductPrice();
                                    $isoffer = $data->isoffer;
                                    $offer = $data->offer;
                                    $price = $data->price;
                                    $discount = $data->discount;                                 
                                    $rev = $discountProduct->reviewtotal();
                                    $star = $rev->reviewtotal/20;                                 
                                ?>
                     <div class="prdbtn-wraper">
                        <ul class="list-inline">
                           <li><a href=""  data-id="<?php echo e($discountProduct->id); ?>" data-q="<?php echo e($discountProduct->minquantity); ?>"  class="cart-btn common-btn btn-cart2 <?php echo e(($discountProduct->soldout != 'off')?'p-e-none':''); ?>"  data-toggle="tooltip" data-placement="top" title="<?php echo e(($discountProduct->soldout != 'off')?'soldout':'Add to Cart'); ?>"><?php echo e(($discountProduct->soldout != 'off')?'soldout':'Add to Cart'); ?></a></li>
                           <li><a href="" data-id="<?php echo e($discountProduct->id); ?>" class="wishlist-btn common-btn  btn-wishlist <?php echo e((in_array($discountProduct->id,$array)?'added':'')); ?>" tabindex="0" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <img class="img-responsive center-block"  src="<?php echo e(URL::asset('assets/front/images/icons/wishlist.png')); ?>">
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
                            <span class="actual-price"><?php echo e(($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'); ?> <?php echo e($data->price); ?></span>
                            <?php if(!empty($data->discount) || !empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0): ?>
                            <span class="original-price"><?php echo e(($StoreConfig->currencysymbol())?$StoreConfig->currencysymbol():'Rs.'); ?> <?php echo e($data->VendorPrice); ?></span>
                            <span class="offer-percent">
                                (<?php if(!empty($data->discount)): ?><?php echo e($data->discount->number); ?><?php echo e(($data->discount->type == '%')?'%':'Rs'); ?> OFF <?php endif; ?>
                                 <?php if(!empty($data->CustomerGroup) && $data->CustomerGroup->amount != 0): ?><?php if(!empty($data->discount)): ?> & <?php endif; ?><?php echo e($data->CustomerGroup->amount); ?><?php echo e(($data->CustomerGroup->type == 1)?'%':'Rs'); ?> OFF  <?php endif; ?> )
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
                         <img src="<?php echo e(URL::asset('assets/front/images/shopby1.jpg')); ?>" class="img-responsive" alt="slider2">
                         <div class="shopby-price">
                            <span>Less than 2K</span>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 shopby-single mob-padl-5">
                   <a href="<?php echo e(route('front.getCategory')); ?>?min=2000&max=5000" class="shopby-inner">
                      <div class="shopby-img">
                         <img src="<?php echo e(URL::asset('assets/front/images/shopby2.jpg')); ?>" class="img-responsive" alt="slider2">
                         <div class="shopby-price">
                            <span>Rs. 2000 to 5000</span>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 shopby-single mob-padr-5">
                   <a href="<?php echo e(route('front.getCategory')); ?>?min=5000&max=8000" class="shopby-inner">
                      <div class="shopby-img">
                         <img src="<?php echo e(URL::asset('assets/front/images/shopby3.jpg')); ?>" class="img-responsive" alt="slider2">
                         <div class="shopby-price">
                            <span>Rs. 5000 to 8000</span>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 shopby-single mob-padl-5">
                   <a href="<?php echo e(route('front.getCategory')); ?>?min=8000&max=50000" class="shopby-inner">
                      <div class="shopby-img">
                         <img src="<?php echo e(URL::asset('assets/front/images/shopby4.jpg')); ?>" class="img-responsive" alt="slider2">
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
 
 <?php if(count($Homecat3)>0): ?>
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
                   <a href="<?php echo e(route('front.getCategory',['category'=>$Homecat3[0]['category'][0]->Category_url])); ?>" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="<?php echo e(URL::asset('assets/media/banner/'.$Homecat3[0]['category'][0]->style_3)); ?>" class="img-responsive" alt="<?php echo e($Homecat3[0]['category'][0]->category_name); ?>">
                         
                         <div class="new_arr_text">
                            <h4><?php echo e($Homecat3[0]['category'][0]->category_name); ?></h4>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-thumb mobmgn">
                   <a href="<?php echo e(route('front.getCategory',['category'=>$Homecat3[0]['category'][1]->Category_url])); ?>" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="<?php echo e(URL::asset('assets/media/banner/'.$Homecat3[0]['category'][1]->style_3)); ?>" class="img-responsive" alt="<?php echo e($Homecat3[0]['category'][1]->category_name); ?>">
                         
                         <div class="new_arr_text">
                            <h4><?php echo e($Homecat3[0]['category'][1]->category_name); ?></h4>
                         </div>
                      </div>
                   </a>
                </div>
             </div>
             <div class="col-md-6 col-sm-6 col-xs-12 newarrival-single newarrival-middle mobmgn">
                <a href="<?php echo e(route('front.getCategory',['category'=>$Homecat3[0]['category'][2]->Category_url])); ?>" class="newarrival-inner overlay-wrap">
                   <div class="newarrival-img">
                      <img src="<?php echo e(URL::asset('assets/media/banner/'.$Homecat3[0]['category'][2]->style_3)); ?>" class="img-responsive" alt="<?php echo e($Homecat3[0]['category'][2]->category_name); ?>">
                      
                      <div class="new_arr_text">
                         <h4><?php echo e($Homecat3[0]['category'][2]->category_name); ?></h4>
                      </div>
                   </div>
                </a>
             </div>
             <div class="col-md-3 col-sm-3 col-xs-12 newarrival-single">
                <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-thumb">
                   <a href="<?php echo e(route('front.getCategory',['category'=>$Homecat3[0]['category'][3]->Category_url])); ?>" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="<?php echo e(URL::asset('assets/media/banner/'.$Homecat3[0]['category'][3]->style_3)); ?>" class="img-responsive" alt="<?php echo e($Homecat3[0]['category'][3]->category_name); ?>">
                         
                         <div class="new_arr_text">
                            <h4><?php echo e($Homecat3[0]['category'][3]->category_name); ?></h4>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 nopad newarrival-thumb">
                   <a href="<?php echo e(route('front.getCategory',['category'=>$Homecat3[0]['category'][4]->Category_url])); ?>" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="<?php echo e(URL::asset('assets/media/banner/'.$Homecat3[0]['category'][4]->style_3)); ?>" class="img-responsive" alt="<?php echo e($Homecat3[0]['category'][4]->category_name); ?>">
                         
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
      
       <?php if(count($Homecat3)>0): ?>
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
                <a href="<?php echo e(route('front.getCategory',['category'=>$Homecat3[0]['category'][0]->Category_url])); ?>" class="newarrival-inner overlay-wrap">
                   <div class="newarrival-img">
                      <img src="<?php echo e(URL::asset('assets/media/banner/'.$Homecat3[0]['category'][0]->style_3)); ?>" class="img-responsive" alt="<?php echo e($Homecat3[0]['category'][0]->category_name); ?>">
                      
                      <div class="new_arr_text">
                         <h4><?php echo e($Homecat3[0]['category'][0]->category_name); ?></h4>
                      </div>
                   </div>
                </a>
             </div>
             <div class="col-xs-6 newarrival-single">
             <div class="col-xs-6 newarrival-single arrivepad">
                <div class="newarrival-thumb nopad">
                   <a href="<?php echo e(route('front.getCategory',['category'=>$Homecat3[0]['category'][1]->Category_url])); ?>" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="<?php echo e(URL::asset('assets/media/banner/'.$Homecat3[0]['category'][1]->style_3)); ?>" class="img-responsive" alt="<?php echo e($Homecat3[0]['category'][1]->category_name); ?>">
                         
                         <div class="new_arr_text">
                            <h4><?php echo e($Homecat3[0]['category'][1]->category_name); ?></h4>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="newarrival-thumb nopad">
                   <a href="<?php echo e(route('front.getCategory',['category'=>$Homecat3[0]['category'][2]->Category_url])); ?>" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="<?php echo e(URL::asset('assets/media/banner/'.$Homecat3[0]['category'][2]->style_3)); ?>" class="img-responsive" alt="slider2">
                         
                         <div class="new_arr_text">
                            <h4><?php echo e($Homecat3[0]['category'][2]->category_name); ?></h4>
                         </div>
                      </div>
                   </a>
                </div>
                </div>
                <div class="col-xs-6 newarrival-single arrivepad">
                <div class="newarrival-thumb nopad">
                   <a href="<?php echo e(route('front.getCategory',['category'=>$Homecat3[0]['category'][3]->Category_url])); ?>" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="<?php echo e(URL::asset('assets/media/banner/'.$Homecat3[0]['category'][3]->style_3)); ?>" class="img-responsive" alt="slider2">
                         
                         <div class="new_arr_text">
                            <h4><?php echo e($Homecat3[0]['category'][3]->category_name); ?></h4>
                         </div>
                      </div>
                   </a>
                </div>
                <div class="newarrival-thumb nopad">
                   <a href="<?php echo e(route('front.getCategory',['category'=>$Homecat3[0]['category'][4]->Category_url])); ?>" class="newarrival-inner overlay-wrap">
                      <div class="newarrival-img">
                         <img src="<?php echo e(URL::asset('assets/media/banner/'.$Homecat3[0]['category'][4]->style_3)); ?>" class="img-responsive" alt="slider2">
                         
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
                           <span><img src="<?php echo e(URL::asset('assets/images/icons/i1.png')); ?>" class="img-responsive center-block" alt="slider2"></span>
                        </div>
                        <div class="icon-name">
                           <span>Worldwide Shipping</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                     <a href="" class="icon-inner">
                        <div class="icon-img">
                           <span><img src="<?php echo e(URL::asset('assets/images/icons/i2.png')); ?>" class="img-responsive center-block" alt="slider2"></span>
                        </div>
                        <div class="icon-name">
                           <span>Customer Support</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                     <a href="" class="icon-inner">
                        <div class="icon-img">
                           <span><img src="<?php echo e(URL::asset('assets/images/icons/i3.png')); ?>" class="img-responsive center-block" alt="slider2"></span>
                        </div>
                        <div class="icon-name">
                           <span>Best Quality</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                     <a href="" class="icon-inner">
                        <div class="icon-img">
                           <span><img src="<?php echo e(URL::asset('assets/images/icons/i4.png')); ?>" class="img-responsive center-block" alt="slider2"></span>
                        </div>
                        <div class="icon-name">
                           <span>Best Price</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                     <a href="" class="icon-inner">
                        <div class="icon-img">
                           <span><img src="<?php echo e(URL::asset('assets/images/icons/cod.jpg')); ?>" class="img-responsive center-block" alt="slider2"></span>
                        </div>
                        <div class="icon-name">
                           <span>COD</span>
                        </div>
                     </a>
                  </div>
				  <div class="col-md-2 col-sm-2 col-xs-12 icon-single">
                     <a href="" class="icon-inner">
                        <div class="icon-img">
                           <span><img src="<?php echo e(URL::asset('assets/images/icons/return.png')); ?>" class="img-responsive center-block" alt="slider2"></span>
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

<?php echo $__env->make('front.includes.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/witcreat/public_html/THESILKASTIC.COM/resources/views/front/front.blade.php ENDPATH**/ ?>