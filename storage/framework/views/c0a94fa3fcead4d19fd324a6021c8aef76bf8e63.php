<?php if(count($Product)>0): ?>
<?php $__currentLoopData = $Product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderlist-single">
    <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-4 orderimg-wraper">
            <a href="<?php echo e(route('product.item',[$product->slug])); ?>"><img
                    src="<?php echo e(URL::asset('assets/media/products/'.$product->image1)); ?>" class="img-responsive"
                    alt="slider2"></a>
        </div>
        <div class="mobprqty">
            <div class="col-lg-4 col-md-8 col-sm-8 prdorder-detail prdorder-common">
                <div class="productname"><?php echo e($product->product_title); ?><br><small>SKU : <?php echo e($StoreConfig->productIdprefix); ?>-<?php echo e($product->product_sku); ?></small></div>
            </div>
            <div class="col-lg-2 col-md-8 col-sm-8 single-price prdorder-common">
                <div class="cartitem-caption">Price</div>
                <div class="cartitem-value"><span><i
                            class="fa fa-inr"></i><?php echo e(($product->getproductPrice()->isoffer)?$product->getproductPrice()->offer:$product->getproductPrice()->price); ?></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group text-right mobcenter">
                <a href="<?php echo e(route('wishlistremove')); ?>" data-id="<?php echo e($product->id); ?>"
                    class="transparent-btn wishlistremove"><span>Remove</span></a>
                <?php if($product->soldout == 'off'): ?>
                <a class="savebtn btn-cartvl" data-id=<?php echo e($product->id); ?> data-quantity=<?php echo e($product->minquantity); ?>

                    href="javascript:void(0);">Move to Cart</a>
                <?php else: ?>
                <a class="savebtn" href="javascript:void(0);">Out of Stock</a>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderlist-single">
    <h2 >Wishlist is empty</h2>
</div>
<?php endif; ?>
<?php /**PATH /home/witcreat/public_html/THESILKASTIC.COM/resources/views/front/includes/wishlistTemplate.blade.php ENDPATH**/ ?>