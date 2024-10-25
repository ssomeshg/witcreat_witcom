
<?php $__env->startSection('content'); ?>


<div id="dummyheader"></div>

<section class="banner-section">
    <div class="banner-inner">
        <div class="homeslider">
            <img src="<?php echo e(URL::asset('assets/media/banner/0slider1.jpg')); ?>" class="img-responsive" alt="slider1">
            <div class="pagetitle-wraper">
                <div class="container">
                    <div class="pagetitle">My Account</div>
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
                        <li><a href="#">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="myorder-section commonaccount-section">
    <div class="container">

        <div class="row">
            <!--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile-rightwraper">
                <div class="profileright-inner">
                      <div class="profileinfo-wraper">
                          <div class="profileimg-wraper">
                                   <img src="images/balaji-ba.jpg" class="img-responsive center-block" alt="csk">
                          </div>
                          <div class="profilename-container">
                              <div class="profilename">
                                       Balaji Sha
                              </div>
                              <div class="location">
                                       Chennai
                              </div>
                          </div>
                          <div class="text-center">
                              <a class="loginbtn" href="">logout</a>
                          </div>
                      </div>
                </div>
            </div>-->

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile-leftwraper myaccfull">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  profile-leftinner">
                    <div class="profile-navbar mobhide">
                        <ul class="list-inline">
                            <li><a href="<?php echo e(route('order')); ?>">My Orders</a></li>
                            <li><a  href="<?php echo e(route('front.account')); ?>">Addresses</a></li>
                            <li><a class="active" href="#">Account Settings</a></li>
                            <li><a href="<?php echo e(route('profile')); ?>">Change Pin</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 changepwd-wraper nopad">

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profileform-wraper myaccsec">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ordertitle deskhide">
                                    <h3><span>My Account</span></h3>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <form id="updateform" action="<?php echo e(route('front.userprofileupdate')); ?>" method="post" class="displayform profileform">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>FIRST NAME</label></div>
                                                    <input type="text" class="form-control" placeholder=""
                                                        value="<?php echo e(Auth::user()->name); ?>" name="name" id="fname" required disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>Last Name</label></div>
                                                    <input type="text" class="form-control" placeholder="" required value="<?php echo e(Auth::user()->last_name); ?>"
                                                        name="last_name" id="lname" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>Email</label></div>
                                                    <input type="email" class="form-control" placeholder="" required
                                                        value="<?php echo e(Auth::user()->email); ?>" name="email" id="email" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>Mobile No</label></div>
                                                    <input type="text" class="form-control" placeholder="" required
                                                        value="<?php echo e(Auth::user()->Phone); ?>" name="Phone" id="mobno" disabled readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>Date of birth</label></div>
                                                    <input type="text" class="form-control" placeholder="" required
                                                        value="<?php echo e(Auth::user()->dob); ?>" name="dob" id="dob" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>Gender</label></div>
                                                    <select name="gender" class="form-control select2" required disabled>
                                                        <option>Select</option>
                                                        <option value="Male" <?php echo e((Auth::user()->gender == 'Male')?'selected':''); ?>>Male</option>
                                                        <option value="Female" <?php echo e((Auth::user()->gender == 'Female')?'selected':''); ?>>Female</option>
                                                        <option value="Others" <?php echo e((Auth::user()->gender == 'Others')?'selected':''); ?>>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>Country</label></div>
                                                    <select name="country" id="country_id" class="form-control" required disabled>
                                                        <option value="">Select Country</option>
                                                        <?php $__currentLoopData = $Country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($country->id); ?>" <?php echo e((Auth::user()->country == $country->id)?'selected':''); ?>><?php echo e($country->country_name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>State</label></div>
                                                        <select name="state" id="state_id" class="form-control" required disabled>
                                                            <option>Select State</option>
                                                            <?php $__currentLoopData = $State; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $State): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($State->id); ?>" <?php echo e((Auth::user()->state == $State->id)?'selected':''); ?>><?php echo e($State->state_name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>City</label></div>
                                                        <select name="city" id="city_id" class="form-control" required disabled>
                                                            <option>Select City</option>
                                                            <?php $__currentLoopData = $City; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $City): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($City->id); ?>" <?php echo e((Auth::user()->city == $City->id)?'selected':''); ?>><?php echo e($City->city_name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>Zip code</label></div>
                                                        <select name="pincode" id="pincode_id" class="form-control" required disabled>
                                                            <option>Select Pincode</option>
                                                            <?php $__currentLoopData = $Pincode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Pincode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($Pincode->id); ?>" <?php echo e((Auth::user()->pincode == $Pincode->id)?'selected':''); ?>><?php echo e($Pincode->pincode); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>Street</label></div>
                                                    <input type="text" class="form-control" placeholder="" required
                                                        value="<?php echo e(Auth::user()->street); ?>" name="street" id="street" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <div><label>address</label></div>
                                                    <textarea class="form-control" name="address" required
                                                        disabled><?php echo e(Auth::user()->address); ?></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <a href="javascript:void(0);" class="transparent-btn editbtn"
                                                id="editbtn"><span>Edit Profile</span></a>
                                            <input type="submit" class="savebtn" name="submit" id="submit"
                                                value="save changes">
                                            <a class="transparent-btn cancel-trigger" id="cancelbtn"
                                                href="javascript:void(0);">cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>

<script>
    $(document).ready(function(){
		$(".select2").select2({
		/*placeholder: "Category",*/
		minimumResultsForSearch: -1

		});


		$("#editbtn").click(function(){
		//alert();
		$(".profileform").removeClass("displayform");
		$(".profileform .form-control , .profileform .input-fields ").removeAttr("disabled");
	});
	$("#cancelbtn").click(function(){
		//alert();
		$(".profileform").addClass("displayform");
		$(".profileform .form-control , .profileform .input-fields ").attr("disabled");

	});

	 /*sticky footer*/
	 var searchvar=0;
	 $("#searchbtm").click(function(e){
	 if ($('.btmsearch').css('display') == 'none'){
	  $(".btmsearch").fadeIn();
	  $('.btmsearch').css('display','block');
	  searchvar=1;
	  return false;
	  }
	 else if ($('.btmsearch').css('display') == 'block') {
	  $(".btmsearch").fadeOut();
	 $('.btmsearch').css('display','none');
	  return false;
	  }
	 });
	 var width = $(window).width();
	var lastScrollTop = 0;
	$(window).scroll(function(event) {;
	var width = $(window).width();
	if (width <= 767) {
	function footer()
	{
			var st = $(this).scrollTop();
			 if (st > lastScrollTop){
			 $(".footer-nav").slideDown();
			 }
			 else {
			 $(".footer-nav").hide();
			 }
			 lastScrollTop = st;
	}
	footer();
	}
	});
	/*sticky footer ends*/
	 });
     $(document).ready(function(){

     $('#country_id').select2({placeholder:'Select Country'}).on('select2:close', function(){
        var element = $(this);
        var new_country = $.trim(element.val());
        if(new_country != '')
        {
            $.ajax({
                url:"<?php echo e(route('front-getstate')); ?>",
                method:"POST",
                data:{country_name:new_country,"_token": "<?php echo e(csrf_token()); ?>",},
                success:function(data)
                {
                    console.log(data);
                    if(data.length != null)
                    {
                        var option = '<option disabled selected>Select State</option>';
                        data.forEach((e)=>{
                            option += '<option value='+e.id+'>'+e.state_name+'</option>';
                        });
                        $("#state_id").html(option).trigger("change");
                        $("#city_id").html(null).trigger("change");
                        $("#pincode_id").html(null).trigger("change");
                    }else{
                        $("#state_id").html(null).trigger("change");
                        $("#city_id").html(null).trigger("change");
                        $("#pincode_id").html(null).trigger("change");

                    }
                }
            })
        }
    });

    $('#state_id').select2({tags:true,placeholder:'Select State'}).on('select2:close', function(){
        var element = $(this);
        var new_state = $.trim(element.val());
        var country = $('#country_id').val();
        if(new_state != '')
        {
        $.ajax({
            url:"<?php echo e(route('front-getcity')); ?>",
            method:"POST",
            data:{state_name:new_state,country:country,"_token": "<?php echo e(csrf_token()); ?>",},
            success:function(data)
            {
            if(data.new)
            {
                element.append('<option value="'+data.data.id+'" selected>'+new_state+'</option>').val(data.data.id);
                $("#city_id").html(null).trigger("change");
                $("#pincode_id").html(null).trigger("change");
            }else{
                var option = '<option disabled selected>Select City</option>';
                data.data.forEach((e)=>{
                    option += '<option value='+e.id+'>'+e.city_name+'</option>';
                });
                $("#city_id").html(option).trigger("change");
                $("#pincode_id").html(null).trigger("change");
            }
            }
        })
        }
    });

    $('#city_id').select2({tags:true,placeholder:'Select City'}).on('select2:close', function(){
        var element = $(this);
        var new_city = $.trim(element.val());
        var country = $('#country_id').val();
        var state = $('#state_id').val();
        if(new_city != '')
            {
            $.ajax({
                url:"<?php echo e(route('front-Pincode')); ?>",
                method:"POST",
                data:{city_name:new_city,state:state,country:country,"_token": "<?php echo e(csrf_token()); ?>",},
                success:function(data)
                {
                if(data.new)
                {
                    element.append('<option value="'+data.data.id+'" selected>'+new_city+'</option>').val(data.data.id);
                    $("#pincode_id").html(null).trigger("change");
                }else{
                    var option = '<option disabled selected>Select Pincode</option>';
                    data.data.forEach((e)=>{
                        option += '<option value='+e.id+'>'+e.pincode+'</option>';
                    });
                    $("#pincode_id").html(option).trigger("change");
                }
                }
            })
            }
    });

    $('#pincode_id').select2({tags:true,placeholder:'Select Pincode'}).on('select2:close', function(){
        var element = $(this);
        var new_pincode = $.trim(element.val());
        var city =$("#city_id").val();
        var country = $('#country_id').val();
        var state = $('#state_id').val();

        if(new_pincode != '')
        {
        $.ajax({
            url:"<?php echo e(route('front-selectPincode')); ?>",
            method:"POST",
            data:{pincode:new_pincode,city:city,state:state,country:country,"_token": "<?php echo e(csrf_token()); ?>",},
            success:function(data)
            {
                if(data.new)
                {
                    element.append('<option value="'+data.data.id+'" selected>'+new_pincode+'</option>').val(data.data.id);
                }
            }
        })
        }
    });

});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front.includes.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/witcreat/public_html/THESILKASTIC.COM/resources/views/front/userprofile.blade.php ENDPATH**/ ?>