<div class="priceinfo-wraper">
    <div class="priceinfo-title">
        Cart Totals
    </div>
    <div class="amountsplit-single">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                Subtotal
                <?php if($StoreConfig->include_tax != 'Exclusive'): ?><br><small>(Inclusive of tax)</small><?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                <div class="cartitem-value"><span><i class="fa fa-inr"></i><?php echo e($Cart->totalPrice); ?></span></div>
            </div>
        </div>
    </div>
    <?php if($StoreConfig->include_tax != 'Inclusive'): ?>
    <div class="totalamt-payable">
    <div class="amountsplit-single">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                (+) Tax
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                <div class="cartitem-value"><span><i class="fa fa-inr"></i><?php echo e($Cart->tax); ?></span></div>
            </div>
        </div>
    </div>
    </div>
    <?php endif; ?>
    <div class="totalamt-payable">
    <div class="amountsplit-single">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                (+) Delivery Charges
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
                <div class="cartitem-value"><span><?php echo e($Cart->deliverycharge); ?></span></div>
            </div>
        </div>
    </div>
    <?php if($errors->any()): ?>
    <div class="amountsplit-single">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php echo e($errors->first()); ?>

            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="amountsplit-single">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" name="fast" id="fast" <?php if($Cart->deliverytype == 1): ?>checked <?php endif; ?>>
                <label for="fast">Fast Delivery <small>(<?php echo e(($deliveryCharge->fastdelivery != null)? $deliveryCharge->fastdelivery->price:0); ?>)</small></label>
            </div>
        </div>
    </div>
    </div>
    <div class="totalamt-payable">
        <div class="amountsplit-single">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                    Total
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right">
                    <div class="cartitem-value"><span><i class="fa fa-inr"></i><?php echo e($Cart->grandTotal); ?></span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad bottombtn-wraper">
        <a class="placeorder-btn btn-block final" href="<?php echo e(route('view.checkout')); ?>">Proceed to Checkout</a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad bottombtn-wraper">
        
    </div>
</div><?php /**PATH /home/witcreat/public_html/THESILKASTIC.COM/resources/views/front/includes/cart_summery.blade.php ENDPATH**/ ?>