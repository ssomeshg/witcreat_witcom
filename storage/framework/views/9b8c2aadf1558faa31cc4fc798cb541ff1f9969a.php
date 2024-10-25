<?php
$checked = true;
?>
<?php $__empty_1 = true; $__currentLoopData = $Address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $add): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderlist-single address-single custom-radio">
    <div class="row mobmar0">
        <div
            class="col-lg-4 col-md-5 col-sm-5 col-xs-12 prdorder-common addrnamemob">
            <input type="radio" <?php echo e(($checked)?'checked':''); ?> id="<?php echo e($add->id); ?>" value="<?php echo e($add->id); ?>" name="shipping">
                <label for="<?php echo e($add->id); ?>" class="container3">
                <span class="checkmark deskhide"></span>
                <span class="cardnumber-span">
                    <span class="cartitem-caption"> Name </span>
                    <span class="cartitem-value addressname-container">
                        <span><?php echo e($add->name.' '.$add->last); ?></span>
                        <span><?php echo e($add->phone); ?></span>
                    </span>
                </span>
            </label>
        </div>
        <div
            class="col-lg-8 col-md-7 col-sm-7 col-xs-12 cvv-container prdorder-common addrnamedet">
            <div class="cartitem-caption">Address</div>
            <div class="cartitem-value">
                <span>
                    <?php echo e($add->address1); ?>,
                    <?php echo e($add->getcity().', '.$add->getState()); ?>,
                    <?php echo e($add->getContry().', '.$add->getpincode()); ?>

                </span>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  singleaddr-bottom editaddr">
            <a class="small-lightbtn editAddress"  href="<?php echo e(route('user.edit.address',[$add->id])); ?>" ><i class="fa fa-edit deskhide"></i><span class="mobhide">Edit Address</span></a>
            <a class="small-lightbtn Delete-link"  href="<?php echo e(route('user.delete.address',[$add->id])); ?>" ><i class="fa fa-trash deskhide"></i><span class="mobhide">Delete Address</span></a>
        </div>

    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="
    text-align: center;
    font-size: 15px;
    font-weight: 500;
">
        <div class="">Add your delivery address</div>
    </div>
<?php endif; ?>
<?php
$checked = false;
?><?php /**PATH /home/witcreat/public_html/THESILKASTIC.COM/resources/views/front/includes/userAddress.blade.php ENDPATH**/ ?>