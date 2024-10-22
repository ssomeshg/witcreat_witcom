      <header class="common-header navbar-fixed-top">
         <nav class="navbar navbar-default">
            <div class="menu-wraper">
               <div class="container nopad">
                  <div class="navBar-container">


                     <div class="navMenu">
                        <div class="collapse navbar-collapse nav-menu" id="navbarSupportedContent">
                           <ul class="nav navbar-nav">
                              <?php $__currentLoopData = $headMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $headmenus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php $__currentLoopData = $headmenus['menu_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $menuName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($headmenus['menu_type'][$keys] == 1): ?>
                              <li class="mainmenu_li">
                                 <a class="nav-link" data-hover="<?php echo e($menuName); ?>" href="<?php echo e(route($headmenus['page_link'][$keys])); ?>"><?php echo e($menuName); ?></a>
                              </li>
                              <?php else: ?>
                              <li class="mainmenu_li dropdown">
                                 <a class="nav-link dropdown-toggle" data-hover="<?php echo e($menuName); ?>" href="#"
                                    id="navbarDropdown<?php echo e($menuName); ?>" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <?php echo e($menuName); ?>

                                 </a>
                                 <div class="dropdown-menu mega_menu" aria-labelledby="navbarDropdown">
                                    <?php $__currentLoopData = $headmenus['page_link'][$keys]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cateNames): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3 ">
                                       <div class="menu_group">
                                          <ul class="menu_group_ul">

                                             <?php if(count($cateNames[1]) > 0 && $cateNames[0]->parent_category_id==0): ?>
                                             <li class=" mtop25">
                                                <div class="group_sum_menu">
                                                   <div class="group_sum_menu_title a_strong">
                                                      <?php echo e($cateNames[0]->category_name); ?>

                                                   </div>
                                                   <div class="group_sum_menu_content">
                                                      <ul class="menu_group_ul">
                                                         <?php $__currentLoopData = $cateNames[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <li class="menu_group_li">
                                                            <a href="<?php echo e(route('front.getCategory',$subCat->Category_url)); ?>" class="menu_group_a"><?php echo e($subCat->category_name); ?></a>
                                                         </li>
                                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </li>
                                             <?php elseif(count($cateNames[1]) == 0 && $cateNames[0]->parent_category_id==0): ?>
                                             <li class="menu_group_li">
                                                <a href="<?php echo e(route('front.getCategory',$cateNames[0]->Category_url)); ?>" class="menu_group_a a_strong"><?php echo e($cateNames[0]->category_name); ?></a>
                                             </li>
                                             <?php endif; ?>

                                          </ul>
                                       </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </div>
                              </li>
                              <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </ul>
                        </div>
                     </div>
                     <div class="navLogo">

                        <div class="logomob">
                           <a class="navbar-brand" href="<?php echo e(route('front.index')); ?>">
                              <img src="<?php echo e(URL::asset('assets/media/banner/logo.png')); ?>" class="img-responsive logo-image" alt="logo">
                           </a>
                        </div>
                        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i> </a>

                        <aside id="colorlib-aside" role="complementary" class="js-fullheight">
                           <nav id="colorlib-main-menu" role="navigation">
                              <div class="menuimg row">
                                 <img src="<?php echo e(URL::asset('assets/front/images/test.jpg')); ?>" />
                              </div>
                              <div class="menutitle">
                                 <h3>Menu</h3>
                              </div>
                              <ul class="nav navbar-nav">

                                 <?php $__currentLoopData = $headMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $headmenus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php $__currentLoopData = $headmenus['menu_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $menuName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if($headmenus['menu_type'][$keys] == 1): ?>
                                 <li class="mainmenu_li">
                                    <a class="nav-link" data-hover="<?php echo e($menuName); ?>" href="<?php echo e(route($headmenus['page_link'][$keys])); ?>"><?php echo e($menuName); ?></a>
                                 </li>
                                 <?php else: ?>
                                 <li class="mainmenu_li dropdown">
                                    <a class="nav-link dropdown-toggle" data-hover="<?php echo e($menuName); ?>" href="#" id="navbarDropdown<?php echo e($menuName); ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <?php echo e($menuName); ?>

                                    </a>
                                    <div class="dropdown-menu mega_menu" aria-labelledby="navbarDropdown<?php echo e($menuName); ?>">
                                       <?php $__currentLoopData = $headmenus['page_link'][$keys]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cateNames): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <div class="col-md-3 ">
                                          <div class="menu_group">
                                             <ul class="menu_group_ul">
                                                <?php if(count($cateNames[1]) > 0 && $cateNames[0]->parent_category_id == 0): ?>
                                                <li class=" mtop25">
                                                   <div class="group_sum_menu">
                                                      <div class="group_sum_menu_title a_strong">
                                                         <?php echo e($cateNames[0]->category_name); ?>

                                                      </div>
                                                      <div class="group_sum_menu_content">
                                                         <ul class="menu_group_ul">
                                                            <?php $__currentLoopData = $cateNames[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li class="menu_group_li">
                                                               <a href="<?php echo e(route('front.getCategory',$subCat->Category_url)); ?>" class="menu_group_a"><?php echo e($subCat->category_name); ?></a>
                                                            </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </li>
                                                <?php elseif(count($cateNames[1]) == 0 && $cateNames[0]->parent_category_id==0): ?>
                                                <li class="menu_group_li">
                                                   <a href="<?php echo e(route('front.getCategory',$cateNames[0]->Category_url)); ?>" class="menu_group_a a_strong"><?php echo e($cateNames[0]->category_name); ?></a>
                                                </li>
                                                <?php endif; ?>

                                             </ul>
                                          </div>
                                       </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <!--  /.container  -->
                                       <div class="col-md-3">
                                          <img alt="Live Boldly" src="https://2o19nx-6n6fd8fbvtn9.cloudmaestro.com/kgEvDenNB/media/ubmegamenu/images/t/u/atussarmenu-banner.jpg.pagespeed.ic.isC7VSx7Ht.webp">
                                       </div>
                                    </div>
                                 </li>

                                 <?php endif; ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                           </nav>
                        </aside> <!-- END COLORLIB-ASIDE -->
                     </div>
                     <div class="navItems">
                        <div class="topsearch-wraper index_search">
                           <div class="topsearchinner-wraper">
                              <form action="<?php echo e(route('front.getCategory',[Request::route('category'),Request::route('sub')])); ?>" method="get" id="search">
                                 <div class="topsearch">
                                    <div class="input-group">
                                       <input type="text" class="form-control" name="search" placeholder="Search for..." id="textsearch" autocomplete="off">
                                       <span class="input-group-btn">
                                          <button class="btn btn-default" onclick="myfunction($('#search').attr('action'),$('#textsearch').val())" type="button"><img src="<?php echo e(URL::asset('assets/front/images/search.png')); ?>" style="width: 18px;height: 18px;" alt=""></button>
                                       </span>
                                    </div>
                                    <!-- /input-group -->
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div class="navCart">
                           <ul class="list-inline text-right whishlist-menu">
                              <?php echo $__env->make('front.includes.card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                              <li class="mainmenu_li dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="cart-icon common-count">
                                       <!--<span class="cart-count">2</span>-->
                                    </span>
                                 </a>
                                 <div class="dropdown-menu account-dropdown-menu">
                                    <!-- <p class="wishlist_text a_strong">You have no Items in the shopping cart</p> -->
                                    <div class="row">
   
                                       <?php if(Auth::check()): ?>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <ul class="menu_group_ul">
                                             <li class="menu_group_ul"><a href="<?php echo e((Auth::check()?route('order'):route('front.loginBlade'))); ?>">Orders</a></li>
                                             <li class="menu_group_ul"><a href="<?php echo e((Auth::check()?route('wishlist'):route('front.loginBlade'))); ?>">Wishlist</a></li>
                                             <li class="menu_group_ul"><a href="<?php echo e((Auth::check()?route('front.userprofile'):route('front.loginBlade'))); ?>">Account</a></li>
                                             <li class="menu_group_ul"><a href="<?php echo e(route('user.logout')); ?>">LogOut</a></li>
                                          </ul>
                                       </div>
                                       <?php else: ?>
   
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <ul class="menu_group_ul">
                                             <li class="menu_group_ul"><a href="<?php echo e((Auth::check()?route('order'):route('front.loginBlade'))); ?>">Orders</a></li>
                                             <li class="menu_group_ul"><a href="<?php echo e((Auth::check()?route('wishlist'):route('front.loginBlade'))); ?>">Wishlist</a></li>
                                             <li class="menu_group_ul"><a href="<?php echo e((Auth::check()?route('front.userprofile'):route('front.loginBlade'))); ?>">Account</a></li>
                                          </ul>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-margin">
                                          <a href="<?php echo e(route('front.loginBlade')); ?>" class="no-margin popdown_btn popdown_btn_right a_strong">Login</a>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-margin">
                                          <a href="<?php echo e(route('front.loginBlade')); ?>?r=1" class="no-margin popdown_btn a_strong">Register</a>
                                       </div>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </nav>
      </header><?php /**PATH C:\xampp\htdocs\witcreat_witcom\resources\views/front/includes/header.blade.php ENDPATH**/ ?>