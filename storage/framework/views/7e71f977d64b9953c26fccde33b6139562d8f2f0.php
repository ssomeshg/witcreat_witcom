<?php if(session()->has('cart')): ?>
    <?php if(count(session()->get('cart')->items) <= 0): ?>
        <script>
            window.location.href = "<?php echo e(URL::to('/')); ?>"
        </script>
    <?php endif; ?>
<?php else: ?>
    <script>
        window.location.href = "<?php echo e(URL::to('/')); ?>"
    </script>       
<?php endif; ?>
<?php $__currentLoopData = session()->get('cart')->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderlist-single mobpad0">
    <div class="row mobmar0">
        <div class="col-lg-2 col-md-2 col-sm-2 orderimg-wraper">
            <a href="<?php echo e(route('product.item',['slug'=>$item->slug])); ?>"><img src="<?php echo e(asset('assets/media/products/'.$item->image1)); ?>" class="img-responsive" alt="slider2"></a>
        </div>
        <div class="mobprqty">
            <div class="col-lg-4 col-md-4 col-sm-10 prdorder-detail prdorder-common prdmobname">
                <a href="<?php echo e(route('product.item',['slug'=>$item->slug])); ?>"><div class="productname"><?php echo e($item->product_title); ?></div></a>
                <div class="productcode">(<?php echo e(($StoreConfig->include_tax != 'Exclusive')?'Inclusive':'Exclusive'); ?> of Tax <?php echo e(($item->getproductPrice()->tax->tax_type == 1)?$item->getproductPrice()->tax->tax_rate.' %':'Rs/ '.$item->getproductPrice()->tax->tax_rate); ?>)</div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 single-price prdorder-common">
                <div class="cartitem-caption">Price</div>
                <div class="cartitem-value"><span><i class="fa fa-inr"></i> <?php echo e(($item->getproductPrice()->isoffer)?$item->getproductPrice()->offer:$item->getproductPrice()->price); ?></span>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 quantity-wraper prdorder-common">
                <div class="cartitem-caption">Quantity</div>
                <div class="quantity">
                    <div class="quantity-button quantity-down">
                        -
                    </div><input id="prices1" pid="<?php echo e($item->id); ?>" max='<?php echo e($item->Maxquantity); ?>' min="<?php echo e($item->minquantity); ?>" onblur="checkminqty()" onchange=""
                        onkeypress="return validateQty(event);" onmousemove="" step="<?php echo e($item->minquantity); ?>"
                        type="number" value="<?php echo e((int)$item->quantity); ?>" readonly>
                    <div class="quantity-button quantity-up">
                        +
                    </div>
                </div>
            </div>
        </div>
        <div
            class="col-lg-2 col-md-2 col-sm-4 col-xs-12 singletotal-price prdorder-common carttot">
            <div class="cartitem-caption">Total</div>
            <div class="cartitem-value"><span><i class="fa fa-inr"></i><?php echo e($item->total); ?></span>
            </div>
        </div>
        <div class="removeitem-wraper mobremove">
            <a href="" data-id="<?php echo e($item->id); ?>" class="product-remove"><span class="fa fa-trash deskhide"></span><span
                    class="remove-item mobhide"> × </span></a>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad bottombtn-wraper text-right contibtn">
    <a class="transparent-btn mobhide" href="<?php echo e(route('front.getCategory')); ?>">continue shopping</a>
    <a class="placeorder-btn" href="address.html">Place Order</a>
</div>
<?php $__currentLoopData = session()->get('cart')->SoldoutItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderlist-single mobpad0">
    <div class="row mobmar0">
        <div class="col-lg-2 col-md-2 col-sm-2 orderimg-wraper">
            <a href="#"><img src="<?php echo e(asset('assets/media/products/'.$item->image1)); ?>" class="img-responsive" alt="slider2"></a>
        </div>
        <div class="mobprqty">
            <div class="col-lg-4 col-md-4 col-sm-10 prdorder-detail prdorder-common prdmobname">
                <a href="#"><div class="productname"><?php echo e($item->product_title); ?></div></a>
                <div class="productcode">(<?php echo e(($StoreConfig->include_tax != 'Exclusive')?'Inclusive':'Exclusive'); ?> of Tax <?php echo e(($item->getproductPrice()->tax->tax_type == 1)?$item->getproductPrice()->tax->tax_rate.' %':'Rs/ '.$item->getproductPrice()->tax->tax_rate); ?>)</div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 single-price prdorder-common">
                <div class="cartitem-caption">Price</div>
                <div class="cartitem-value"><span><i class="fa fa-inr"></i> <?php echo e(($item->getproductPrice()->isoffer)?$item->getproductPrice()->offer:$item->getproductPrice()->price); ?></span>
            </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 quantity-wraper prdorder-common">
                <div class="cartitem-caption">Quantity</div>
                <div class="quantity">
                    
                    <input id="prices1" pid="<?php echo e($item->id); ?>" max='<?php echo e($item->Maxquantity); ?>' min="<?php echo e($item->minquantity); ?>" onblur="checkminqty()" onchange=""
                        onkeypress="return validateQty(event);" onmousemove="" step="<?php echo e($item->minquantity); ?>"
                        type="number" value="<?php echo e((int)$item->quantity); ?>">
                    
                </div>
            </div>
        </div>
        <div
            class="col-lg-2 col-md-2 col-sm-4 col-xs-12 singletotal-price prdorder-common carttot">
            <div class="cartitem-caption"></div>
            <div class="cartitem-value"><span>Sold Out</span>
            </div>
        </div>
        
    </div>
    <div class="row mobmar0"></div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\wetransfer_witcreat_witecom\resources\views/front/includes/shippingcart.blade.php ENDPATH**/ ?>