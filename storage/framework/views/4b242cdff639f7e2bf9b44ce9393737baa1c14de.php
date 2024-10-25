
<?php $__env->startSection('content'); ?>

                                <!-- Edit Modal HTML -->
                                <div id="view" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>coupon Code</th>
                                                        <th>Offer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__empty_1 = true; $__currentLoopData = $Coupon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                   
                                                        <tr>
                                                            <td><?php echo e($item->title); ?></td>
                                                            <td><?php echo e($item->code); ?></td>
                                                            <td><?php echo e($item->value); ?> <?php echo e(($item->type == 1)?'%':'Rs'); ?></td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <tr>
                                                            <td rowspan="3">NO Coupon found</td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

<section class="banner-section">
    <div class="banner-inner">
        <div class="homeslider">
            <img src="<?php echo e(URL::asset('assets/media/banner/0slider1.jpg')); ?>" class="img-responsive" alt="slider1">
            <div class="pagetitle-wraper">
                <div class="container">
                    <div class="pagetitle">Checkout</div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(route('front.index')); ?>">Home</a></li>
                        <li><a href="#">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="myorder-section commonaccount-section orderstyle">
    <div class="container">
		<div class="row">
            <div class="col-md-12">
                <?php if($message = Session::get('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Error!</strong> <?php echo e($message); ?>

                    </div>
                <?php endif; ?>
                <?php echo Session::forget('error'); ?>

            </div>
        </div>
      <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 profile-leftwraper checkfull mobpad0">
            
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  profile-leftinner">
		  <div class="profile-navbar mobhide">
				<ul class="list-inline">
					<li><a href="<?php echo e(route('view.cart')); ?>">My Cart</a></li>
					<li><a href="<?php echo e(route('view.deliveryaddress')); ?>">Delivery Address</a></li>
					<li><a  class="active" href="#" >Checkout</a></li>
					<li><a  href="<?php echo e(route('view.payment')); ?>">Payment</a></li>
				</ul>
		</div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  changepwd-wraper nopad">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cartitem-lits ordersummary-list orderlist-wraper">
				<div class="row checkborder"  id="Shippingcard">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cartmobtitle deskhide">
                                    <a href="<?php echo e((Auth::user()?route('view.deliveryaddress'):route('front.loginBlade'))); ?>" class="mobback"><span class="fa fa-arrow-left"></span></a>
                                    <h3><span>Checkout</span></h3>
                                </div>
    <?php $__currentLoopData = session()->get('cart')->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderlist-single mobpad0">
    <div class="row mobmar0">
        <div class="col-lg-2 col-md-2 col-sm-2 orderimg-wraper">
            <img src="<?php echo e(asset('assets/media/products/'.$item->image1)); ?>" class="img-responsive" alt="slider2">
        </div>
        <div class="mobprqty">
            <div
                class="col-lg-4 col-md-4 col-sm-10 prdorder-detail prdorder-common prdmobname">
                <div class="productname"><?php echo e($item->product_title); ?></div>
                <div class="productcode">(<?php echo e(($StoreConfig->include_tax != 'Exclusive')?'Inclusive':'Exclusive'); ?> of Tax <?php echo e(($item->getproductPrice()->tax->tax_type == 1)?$item->getproductPrice()->tax->tax_rate.' %':'Rs/ '.$item->getproductPrice()->tax->tax_rate); ?>)</div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 single-price prdorder-common">
                <div class="cartitem-caption">Price</div>
                <div class="cartitem-value"><span><i class="fa fa-inr"></i> <?php echo e(($item->getproductPrice()->isoffer)?$item->getproductPrice()->offer:$item->getproductPrice()->price); ?></span>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 quantity-wraper prdorder-common">
                <div class="cartitem-caption">Quantity</div>
								<div class="cartitem-value"><span> <?php echo e((int)$item->quantity); ?></span></div>
            </div>
        </div>
        <div
            class="col-lg-2 col-md-2 col-sm-4 col-xs-12 singletotal-price prdorder-common carttot">
            <div class="cartitem-caption">Total</div>
            <div class="cartitem-value"><span><i class="fa fa-inr"></i><?php echo e($item->total); ?></span>
            </div>
        </div>
    </div>
</div>
					
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = session()->get('cart')->SoldoutItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orderlist-single mobpad0">
    <div class="row mobmar0">
        <div class="col-lg-2 col-md-2 col-sm-2 orderimg-wraper">
            <img src="<?php echo e(asset('assets/media/products/'.$item->image1)); ?>" class="img-responsive" alt="slider2">
        </div>
        <div class="mobprqty">
            <div
                class="col-lg-4 col-md-4 col-sm-10 prdorder-detail prdorder-common prdmobname">
                <div class="productname"><?php echo e($item->product_title); ?></div>
                <div class="productcode">(<?php echo e(($StoreConfig->include_tax != 'Exclusive')?'Inclusive':'Exclusive'); ?> of Tax <?php echo e(($item->getproductPrice()->tax->tax_type == 1)?$item->getproductPrice()->tax->tax_rate.' %':'Rs/ '.$item->getproductPrice()->tax->tax_rate); ?>)</div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 single-price prdorder-common">
                <div class="cartitem-caption">Price</div>
                <div class="cartitem-value"><span><i class="fa fa-inr"></i> <?php echo e(($item->getproductPrice()->isoffer)?$item->getproductPrice()->offer:$item->getproductPrice()->price); ?></span>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 quantity-wraper prdorder-common">
                <div class="cartitem-caption">Quantity</div>
								<div class="cartitem-value"><span> <?php echo e((int)$item->quantity); ?></span></div>
            </div>
        </div>
        <div
            class="col-lg-2 col-md-2 col-sm-4 col-xs-12 singletotal-price prdorder-common carttot">
            <div class="cartitem-caption"></div>
            <div class="cartitem-value"><span>Sold Out</span>
            </div>
        </div>
    </div>
</div>
					
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
					</div>
					<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
					<div class="title-wrapper text-left shipping">
					    <h4 class="title title-simple text-left text-normal">Shipping Address</h4>
						<h5 class="card-title text-uppercase"><?php echo e($Address->name.' '.$Address->last); ?></h5>
                        <p><?php echo e($Address->address1); ?><br>
                        <?php echo e($Address->getcity().', '.$Address->getState().','); ?><br>
                        <?php echo e($Address->getContry().'-'.$Address->getpincode()); ?><br>
                        Phone NO : <?php echo e($Address->phone); ?><br>Email ID : <?php echo e($Address->email); ?><br>
                        </p>
					</div>
					</div>
					</div>
					</div>
				</div>
					
					
					
          </div>
          </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile-rightwraper mobpricedet">
              <div class="profileright-inner" id='checksummery'>
                    <?php echo $__env->make('front.includes.checksummery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
			  </div>
          </div>
		  
    </div>
    </div>
    </div>
  </section>
  <style>
    .product.product-cart .btn-close{
        display: none;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script>

    $('body').on('click', '.quantity-up', async function (t) {
        t.preventDefault();
            var spinner = $(this).parent(),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max'),
            id = input.attr('pid'),
            step = parseFloat(input.attr('step'));
            var oldValue = parseFloat(input.val());
               if (oldValue >= max) {
                   var newVal = oldValue;
               } else {
                   var newVal = oldValue + step;
               }
               spinner.find("input").val(newVal);
               spinner.find("input").trigger("change");
        $.ajax({
            method: "GET",
            url: "<?php echo e(route('user.add.card')); ?>",
            data: {
                quantity: newVal,
                id: id
            },
            success: function (data) {
                calculatedate(data);
                $('.dropdown-box').load("<?php echo e(route('user.render.card')); ?>");
                $('#Shippingcard').load("<?php echo e(route('user.rendershippig.cart')); ?>");
            },
            error: function (erroe) {

            }
        });
    });
    $('body').on('click', '.quantity-down', async function (t) {
        t.preventDefault();
            var spinner = $(this).parent(),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max'),
            id = input.attr('pid'),
            step = parseFloat(input.attr('step'));
            var oldValue = parseFloat(input.val());
               if (oldValue <= min) {
                   var newVal = oldValue;
               } else {
                   var newVal = oldValue - step;
               }
               spinner.find("input").val(newVal);
               spinner.find("input").trigger("change");
        $.ajax({
            method: "GET",
            url: "<?php echo e(route('user.reducecard.card')); ?>",
            data: {
                quantity: newVal,
                id: id
            },
            success: function (data) {
                calculatedate(data);
                $('.dropdown-box').load("<?php echo e(route('user.render.card')); ?>");
                $('#Shippingcard').load("<?php echo e(route('user.rendershippig.cart')); ?>");
            },
            error: function (erroe) {

            }
        });
    });
$('body').on('click','.product-remove',function(t){
    t.preventDefault();
    var url = "<?php echo e(route('user.remove.card')); ?>/"+$(this).data('id');
    $.ajax({
        method: "GET",
        url: url,
        success: function (data) {
            calculatedate(data);
            $('.dropdown-box').load("<?php echo e(route('user.render.card')); ?>");
            $('#Shippingcard').load("<?php echo e(route('user.rendershippig.cart')); ?>");
        },
        error: function (erroe) {

        }
    });
});
$('body').on('click','.btn-checkout', function (t) {
    t.preventDefault();
    $.ajax({
        method: "GET",
        url: "<?php echo e(route('user.checkCart')); ?>",
        success: function (data) {
            if(data.length >0){
                data.forEach(e =>{
                    toastr["error"](e);
                });
            }else{
                var url = "<?php echo e(route('view.order')); ?>";
                window.location.href = url;
            }
          console.log(data);
        },
        error: function (erroe) {
        }
    });
});

function paymenttype(t) {
    t.preventDefault();
    var type = t.target.value;
    $.ajax({
        method: "GET",
        data: {'type':type},
        url: "<?php echo e(route('user.deliveryextraxharge')); ?>",
        success: function (data) {
            if(data.status){
               $("#checksummery").load('<?php echo e(route('user.checkoutsummery')); ?>');
               $('#COD , #upi').toggle();
                console.log(data);
            }
        },
        error: function (erroe) {
        }
    });
}

 function removecoupon(e){
        e.preventDefault();
        $.ajax({
            method:"GET",
            url:'<?php echo e(route('user.remove.coupon')); ?>',
            success:function(data){
                if(!data.status){
                    toastr["success"](data.msg);
                }
                toastr["success"](data.msg);
            $("#checksummery").load('<?php echo e(route('user.checkoutsummery')); ?>');
            },
            error:function(erroe){
                alert("Something is wrong");
            }
        });
    }

    function applycoupon(e){
        e.preventDefault();
        const formData = new FormData(e.target);
        $.ajax({
            method:"POST",
            url:'<?php echo e(route('user.applycoupon')); ?>',
            data:formData,
            cache: false,
            processData: false,
            contentType: false,
            success:function(data){
                if(!data.status){
                    toastr["success"](data.msg);
                    return false;
                }
                toastr["success"](data.msg);
            $("#checksummery").load('<?php echo e(route('user.checkoutsummery')); ?>');
            },
            error:function(erroe){
                alert("Something is wrong");
            }
        });
    }
    
    	$(document).ready(function(){
    		$('body').on('click','#addnewcoupon',function(){
    		
    		if ($("body #couponform").css('display') == 'none') {
    			$("body #couponform").slideDown();
    		}
    		else if($("body #couponform").css('display') == 'block') {
    			$("body #couponform").slideUp();
    		}
		});
    	});



function calculatedate(data){
    $(".summary-subtotal-price").text(data.totalPrice);
    $('.summary-total-price').text(data.grandTotal);
}
</script>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front.includes.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/witcreat/public_html/THESILKASTIC.COM/resources/views/front/checkout.blade.php ENDPATH**/ ?>