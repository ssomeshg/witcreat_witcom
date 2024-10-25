<?php if(session()->has('cart') && count(session()->get('cart')->items) >0): ?>
<li class="mainmenu_li dropdown dropdown-box">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
        aria-haspopup="true" aria-expanded="false">
        <span class="wishlist-icon common-count">
            <span class="cart-count"><?php echo e(session()->get('cart')->totalitem); ?></span>
        </span>
    </a>
    <div class="dropdown-menu whishlist-dropdown-menu">
        <!-- <p class="wishlist_text a_strong">You have no Items in the shopping cart</p> -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <p><span class=" a_strong"><?php echo e(count(session()->get('cart')->items)); ?></span> Items in Cart</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                <p>Cart Subtotal :</p>
                <h4><?php echo e(session()->get('cart')->totalPrice); ?></h4>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button onclick="window.location.href='<?php echo e((Auth::check()?route('view.deliveryaddress'):route('front.loginBlade'))); ?>'" class="btn btn-default prceed_to_checkout" type="button">Proceed to
                    Checkout</button>
            </div>
        </div>
        <div class="cart_scroll">
            <?php $__currentLoopData = session()->get('cart')->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row border-cart">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 no-margin">
                    <img src="<?php echo e(asset('assets/media/products/'.$item->image1)); ?>" class="img-responsive" alt="slider2">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-margin">
                    <a href="<?php echo e(route('product.item',['slug'=>$item->slug])); ?>" class="a_strong cart_poptitle"><?php echo e($item->product_title); ?></a>
                    <p class="no-margin"><?php echo e($item->total); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="cart_viewdetail">
            <a href="<?php echo e(route('view.cart')); ?>" class="a_strong">View and Edit Cart</a>
        </div>
    </div>
</li>
<!-- End of Cart Action -->
<?php else: ?>
<li class="mainmenu_li dropdown dropdown-box">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
        aria-haspopup="true" aria-expanded="false">
        <span class="wishlist-icon common-count">
            <span class="cart-count">0</span>
        </span>
    </a>
    <div class="dropdown-menu whishlist-dropdown-menu">
        <p class="wishlist_text a_strong">You have no Items in the shopping cart</p>
    </div>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\witcreat_witecom\resources\views/front/includes/card.blade.php ENDPATH**/ ?>