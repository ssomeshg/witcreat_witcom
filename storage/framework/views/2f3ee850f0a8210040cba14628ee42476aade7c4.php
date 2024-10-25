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
        <?php if($Cart->CouponClass): ?>
        <div class="totalamt-payable">
    <div class="amountsplit-single">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                (-) Coupon
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
                <div class="cartitem-value"><span><?php echo e($Cart->coupen); ?></span></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a onclick="removecoupon(event)" href="#">Remove Coupon</a>
            </div>
        </div>
    </div>
    </div>
    <?php else: ?>
    <div class="totalamt-payable">
        <div class="amountsplit-single">
            <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad">
							<a class="addcoupon" id="addnewcoupon" href="javascript:void(0);"><span>Add Coupon</span></a>
					   </div>
					   
						  <form action="<?php echo e(route('user.applycoupon')); ?>" id="couponform" method="POST" onsubmit="applycoupon(event);" style="display: none">
						      
                    <?php echo csrf_field(); ?>
						<div class="">
						    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<a href="#" onclick="$('#view').modal('toggle');" class="view" data-toggle="modal"><p style="color: #560835;">Available Coupons</p></a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
							    
								<input type="type" class="form-control" placeholder="Coupon Code" value="" required name="code" id="coupon">
							</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
							    <button class="applybtn" type="submit">Apply</button>
								<!--<a href="javascript:void(0);" class="applybtn" id=""><span>Apply</span></a>-->
							</div>
							</div>
							</div>
						</form>
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
        <a class="placeorder-btn btn-block final" href="<?php echo e(route('view.payment')); ?>">Proceed to Checkout</a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad bottombtn-wraper">
        
    </div>
</div><?php /**PATH /home/witcreat/public_html/THESILKASTIC.COM/resources/views/front/includes/checksummery.blade.php ENDPATH**/ ?>