@extends('front.includes.container')
@section('content')
<section class="register-section commonaccount-section contact">
    <div class="container">
		<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
			<div class="login-box">
				<div class="login-navbar">
					<ul class="nav-justified list-inline" role="tablist">
						<li role="presentation" class="{{(isset($_GET['r']))?'':'active'}}" ><a href="#login" aria-controls="login" role="tab" data-toggle="tab" aria-expanded="false">Login</a></li>
						<li role="presentation" class="{{(isset($_GET['r']))?'active':''}}"><a href="#register" aria-controls="register" role="tab" data-toggle="tab" aria-expanded="true">Register</a></li>
					</ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane {{(isset($_GET['r']))?'':'active'}}" id="login">
							<div class="loginform-wraper">
								<form method="post"  id="formlogin" action="{{route('front.login')}}" method="POST" name="">
                                    @csrf
									<div class="fieldset">
										<input type="text" class="form-control" placeholder="User Name" name="email" id="username" />
									</div>
									<div class="fieldset">
										<input type="password" class="form-control" placeholder="Password" name="password" id="pwd" />
										<p class="forgotpwd-link"><a href="javascript:void(0);" data-toggle="modal" data-target="#forgotpassword" >Forgot password?</a></p>
									</div>
									<div class="formbtn-container">
										<input type="submit"  class="savebtn btn-block" name="submit" id="submit" value="login" />

										<div class="btnbelow-caption text-center">
											<small>Don’t have account? <a href="#register" aria-controls="register" role="tab" data-toggle="tab" aria-expanded="false">Signup</a></small>
										</div>

										<div class="or-divider text-center" style="display:none">
											(or)
										</div>

										<div class="social-loginwraper text-center" style="display:none">
											<div class="sociallogin-caption">With your social network</div>
											<ul class="list-inline">
												<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
												</li>
												<li>
												<a href="#">
												<img src="images/google-icon.png" class="img-responsive center-block" alt="logo">
												</a>
												</li>
												<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
												</li>
												</ul>
										</div>

									</div>
								</form>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane {{(isset($_GET['r']))?'active':''}}" id="register">
							<div class="loginform-wraper" v-show="!otp">
								<form method="post" ref="form"  @submit="submit($event,this)" action="{{route('user.register')}}">
								    @csrf
									<div class="fieldset">
										<input type="email" v-model="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required placeholder="Email" name="email" id="emailmob">
                                        <small v-if="showvalise" style="color: red;padding-left: 15px;">Email Id already taken</small>
									</div>
                                    <div class="fieldset">
                                        <select name="dialing" class="form-control" id="" @change="countrychange($event)" required Placeholder="Select Country">
                                            <option value="">Select Country</option>
                                            @foreach ( $Country as $country)
                                            <option value="{{$country->dialing}}" data-dialing="{{ $country->dialing }}">{{$country->country_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
									<div class="fieldset">
										<input type="text" v-model="Phone" class="form-control" name="Phone" pattern="[7-9]{1}[0-9]{9}" required placeholder="Mobile No" title="Phone number with 7-9 and remaing 9 digit with 0-9">
										<small v-if="phonevalidation" style="color: red;padding-left: 15px;">Mobile No already taken</small>
									</div>
									<div class="fieldset">
										<input type="password" class="form-control" minlength="6" v-model="pass" id="password" name="password" placeholder="Password *" required />
									</div>
									<div class="fieldset">
										<input type="password" class="form-control" minlength="6"  v-model="confpass" id="confirmPassword" name="confirmPassword" placeholder="confirm Password *" required />
									</div>
									<div class="formbtn-container">
										<input type="submit" class="savebtn btn-block" name="submit" id="submit" value="Register">
										<div class="btnbelow-caption text-center">
											<small>Already registered? <a href="#login" aria-controls="login" role="tab" data-toggle="tab" aria-expanded="false">Sign in</a></small>
										</div>
									</div>
								</form>
							</div>
                            <div class="loginform-wraper" v-show="otp">
                                <div class="fieldset">
                                    <p>Enter One time Password,<br>
                                        We sent you the code to Mobile No 
                                        @{{dialing}} @{{ Phone}}</p>
                                        
                                </div>
                                <div class="fieldset">
                                    <input type="text" class="form-control" :disabled = "Checking" v-model="OTP" required placeholder="OTP" >
                                    <p><span V-html="count"></span></p>
                                </div>
                                <div class="formbtn-container" v-if="!tryagain">
									<button type="button" class="savebtn btn-block" :disabled="tryagain" @click="generateOTP()"  v-html="otpbutton"></button>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
  </section>
  <!--sticky footer ends-->
        <div class="modal fade login-modal" id="forgotpassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                 <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="login-box">
                       <div class="login-navbar">
                          <ul class="list-inline">
                             <li><a class="active" href="javascript:void(0);">Forgot PIN</a></li>
                          </ul>
                       </div>
                       <div class="loginform-wraper">
                          <form method="post" action="{{route('front.forgot')}}"  class="" id="formforget">
                              @csrf
                             <div class="fieldset">
                                <div class="help-content">
                                   Enter Registered Email
                                </div>
                             </div>
                             <div class="fieldset">
                                <!--<div class="fieldset col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding:0px">-->
                                <!--   <input type="number" class="form-control"  minlength="1" maxlength="4" required="required" value="91">-->
                                <!--</div>-->
                                <div class="fieldset col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px">
                                   <input name="email" type="email" class="form-control" placeholder="Email"required="required">
                                </div>
                             </div>
                             <div class="formbtn-container">
                                <input type="submit" class="savebtn btn-block" name="submit" id="submit" value="SUBMIT">
                                <div class="btnbelow-caption" style="display:none">
                                   <small class="pull-left">
                                   <a href="javascript:void(0);" data-toggle="modal" data-target="#login-modal">Sign in</a>
                                   </small>
                                   <small class="pull-right">
                                   Not a member? <a href="register.html" class="">Sign up</a>
                                   </small>
                                </div>
                             </div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
@endsection
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script>

var downloadTimer = null;
    var app = new Vue({
        el : '#register',
        data : {
            otpbutton : 'Resend OTP',
            otp : false,
            tryagain : true,
            OTP : '',
            Checking : false,
            Phone : '',
            otpverifide : false,
            pass : "",
            confpass : '',
            mesage : 'sec',
            email : '',
            showvalise  : false,
            dialing : '',
            count : '',
            phonevalidation : false
        },
        watch : {
            OTP : function(data){
                if(data.length >= 6){
                    this.Checking = true
                    axios.get(`{{route('Otpverify')}}?otp=${app.OTP}`)
                    .then(function (response) {
                        if(response.data.status){
                            toastr["success"]("Registraing...");
                            app.formsubmit();
                        }else{
                            toastr["error"]('Wrong OTP try again')
                            app.OTP = ''
                            app.Checking = false
                        }
                    })
                    .catch(function (error) {
                    console.log(error);
                    });
                }
            },
            email : function(data){
                axios.get(`{{route('checkemail')}}?email=${data}`)
                .then(function (response) {
                    if(response.data.status){
                        app.showvalise = true
                    }else{
                        app.showvalise = false
                    }
                })
                .catch(function (error) {
                    console.log(error);
                })
            },
            Phone : function(data){
                axios.get(`{{route('checkphone')}}?phone=${data}`)
                .then(function (response) {
                    if(response.data.status){
                        app.phonevalidation = true
                    }else{
                        app.phonevalidation = false
                    }
                })
                .catch(function (error) {
                    console.log(error);
                })
            },
        },
        methods : {
            countrychange(e){
                console.log(e);
                if(e.target.options.selectedIndex > -1) {
                    this.dialing = e.target.options[e.target.options.selectedIndex].dataset.dialing
                }
            },
            submit(e,obj){
                this.Checking = false
                e.preventDefault();
                if(app.showvalise) { toastr["error"]('Email Id already taken'); return;  }
                if(app.phonevalidation) { toastr["error"]('Mobile No already taken'); return;  }
                if(this.pass != this.confpass){ toastr["error"]('Password Miss Match'); return;  }
                if(!this.otpverifide){
                    this.generateOTP();
                }
            },
            generateOTP(){
                var mobile = `${this.dialing.replace('+','')}${this.Phone}`
                axios.post(`{{route('generateOTP')}}?phone=${mobile}&_token={{ csrf_token() }}`)
                .then(function (response) {
                    if(response.data.status){
                        app.start();
                        app.tryagain = true
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            start(){
                this.otp = true
                var cont = 100;
                downloadTimer = setInterval(function(){
                    if(cont <= 0){
                        clearInterval(downloadTimer);
                        app.count = 'Please click Resend OTP'
                        app.tryagain = false
                    }else{
                        cont -= 1
                        app.count = `You Will Receive With in ${cont} ${app.mesage}`
                    }
                },1000)
            },
            formsubmit(){
                const formData = new FormData(this.$refs.form);
                var url = this.$refs.form.action
                $.ajax({
                    method:"POST",
                    url:url,
                    data:formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success:function(data){
                        if(data.msg){
                            toastr["success"](data.msg);
                            setTimeout(() => {  location.reload(); }, 500);

                        }else{
                            toastr["error"](errMessage(data));
                            clearInterval(downloadTimer);
                            app.otp = false
                        }
                    },
                    error:function(erroe){
                        alert("Something is wrong");
                    }
                });
            }
        }
    });

</script>
@endpush
