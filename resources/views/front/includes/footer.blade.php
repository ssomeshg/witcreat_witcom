<footer>
   <div class="footer-bg">

      <div class="container">
         <div class="footer-newsletter">
            <h3>News Letter</h3>
            <div class="newsDiv">
               <input type="mail" placeholder="Enter your Email">
               <button>sign up now <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.9547 1.58252C12.9544 1.58247 12.9541 1.58238 12.9538 1.58235L8.26807 0.757151C7.91704 0.695336 7.59825 0.90277 7.55607 1.22057C7.51389 1.53833 7.76428 1.84604 8.11533 1.90788L11.2613 2.46189L0.579215 9.37664C0.300635 9.55697 0.251329 9.92108 0.469083 10.1899C0.686837 10.4588 1.08917 10.5305 1.36775 10.3502L12.0498 3.43547L11.6568 6.28035C11.613 6.59781 11.8619 6.9065 12.2127 6.96985C12.5636 7.03322 12.8835 6.82714 12.9274 6.50974L13.5128 2.2724C13.5128 2.27216 13.5128 2.2719 13.5129 2.27164C13.5563 1.95348 13.3052 1.64469 12.9547 1.58252Z" fill="white" />
                  </svg>
               </button>
            </div>

         </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 nopad footerinner-wraper">
         <div class="container">
            <div class="row footer-top mobrow-0">
               <div class="col-md-3 col-sm-3 col-xs-12 footer-inner footer-form pad-lft-15">
                  <div class="footerform-inner">
                     <div class="payment-sprite">
                        <img src="{{URL::asset('assets/media/logo5.png')}}" alt="payment" style="max-width: 110px;">
                        <!--<span class="bg-payment1"></span>-->
                        <!--<span class="bg-payment2"></span>-->
                        <!--<span class="bg-payment3"></span>-->
                        <!--<span class="bg-payment4"></span>-->
                        <!--<span class="bg-payment5"></span>-->
                        <!--<span class="bg-payment6"></span>-->
                     </div>
                     <!-- <form id="footerform" method="post">
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Email" />
                      </div>
                      <div class="form-group">
                          <textarea class="form-control" placeholder="Message"></textarea>
                      </div>
                      <div>
                          <button type="submit" class="submit-btn">
                              Send Messsage
                          </button>
                      </div>
                      </form> -->
                  </div>
               </div>
               <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="row mobileres">
                     <div class="col-md-3 col-sm-3 col-xs-12 footer-inner footer-menu">
                        <div class="footer-title text-uppercase text-white">Company</div>
                        <ul class="list-inline">
                           <li><a href="{{route('front.about')}}">About</a></li>
                           <li><a href="{{route('front.Careers')}}">Careers</a></li>
                           <li><a href="">Blog</a></li>
                           <li><a href="{{route('front.Contact_Us')}}">Contact Us</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3 col-sm-3 col-xs-12 footer-inner footer-menu">
                        <div class="footer-title text-uppercase text-white">Policy</div>
                        <ul class="list-inline">
                           <li><a href="{{route('front.Privacy_Policy')}}">Privacy Policy</a></li>
                           <li><a href="{{route('front.Shipping_Policy')}}">Shipping Policy</a></li>
                           <li><a href="{{route('front.TermsConditions')}}">Terms & Conditions</a></li>
                           <li><a href="{{route('front.returnandcancle')}}">Returns, Exchange & Cancellation</a></li>
                           <li><a href="{{route('front.CustomsTaxes')}}">Duties, Customs & Taxes</a></li>
                           <li><a href="{{route('front.Disclaimer')}}">Disclaimer</a></li>
                        </ul>
                     </div>

                     <div class="col-md-6 col-sm-6 col-xs-12 footer-inner footer-menu">
                        <div class="footer-title text-uppercase text-white">Follow us</div>
                        <div class="row pad-lft-15">
                           <div class="col-md-12 col-sm-12 col-xs-12 follow-us">
                              <ul class="list-inline social-links">
                                 <li><a target="_blank" href="https://www.facebook.com/silkastic"><img src="{{URL::asset('assets/media/fb.png')}}" alt=""></a></li>
                                 <li><a target="_blank" href="#"><img src="{{URL::asset('assets/media/yt.png')}}" alt=""></a></li>
                                 <li><a target="_blank" href="https://www.instagram.com/silkastic/"><img src="{{URL::asset('assets/media/insta.png')}}" alt=""></a></li>
                              </ul>
                           </div>
                        </div>
                        <ul class="f-terms">
                           <li><a href="{{route('front.Disclaimer')}}">Disclaimer</a></li>
                           <li><a href="{{route('front.Privacy_Policy')}}">Privacy Policy</a></li>
                           <li><a href="{{route('front.TermsConditions')}}">Terms & Conditions</a></li>
                        </ul>
                        <!-- <ul class="list-inline">
                           <li><a href="{{route('front.FAQ')}}">FAQ</a></li>
                           <li><a href="{{(Auth::check())?route('view.order'):route('front.loginBlade')}}">Track Order</a></li>
                           <li><a href="{{route('front.Vendor')}}">Become an Vendor</a></li>
                           <li><a target="_blank" href="{{route('admin.login')}}">Vendor Login</a></li>
                        </ul> -->


                     </div>
                  </div>
                  <!--<div class="row pad-lft-15">-->
                  <!--   <div class="col-md-12 col-sm-12 col-xs-12 follow-us">-->
                  <!--      <ul class="list-inline social-links">-->
                  <!--         <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
                  <!--         <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                  <!--         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                  <!--         <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
                  <!--      </ul>-->
                  <!--   </div>-->
                  <!--</div>-->
               </div>

            </div>
         </div>
         <img src="{{URL::asset('assets/media/f-left.png')}}" id="f-a1" alt="start" style="position: absolute;bottom: 20px;width: 100px;">
         <img src="{{URL::asset('assets/media/f-right.png')}}" id="f-a2" alt="start" style="position: absolute;top: 30px;right: 0;width: 100px;">
         <img src="{{URL::asset('assets/media/f-star.png')}}" id="f-a3" alt="start" style=" position: absolute;top: 60px;left: 100px;width: 30px;">
         <img src="{{URL::asset('assets/media/f-star.png')}}" id="f-a4" alt="start" style="       position: absolute;bottom: 70px;right: 40px;width: 30px;">
      </div>
   </div>

   <!-- <div class="col-md-12 col-sm-12 col-xs-12 nopad copyright">
      <div class="container">
         © <script>
            document.write(new Date().getFullYear())
         </script>. All Rights Reserved
      </div>
   </div> -->
</footer>