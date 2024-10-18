<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>{{$StoreConfig->Store_Meta_Title}}</title>
        <meta name="description" content="{{ $StoreConfig->Store_Meta_Description}}" />
        <link href="{{URL::asset('assets/media/banner/'.$StoreConfig->fav_icon)}}" rel="icon">
        <link href="{{URL::asset('assets/front/css/slick.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/front/css/slick-theme.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/front/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/front/css/responsive.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/front/css/jquery.fancybox.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/front/css/toastr.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/front/css/select2.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/front/css/jquery-ui.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/front/css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/front/css/nouislider.min.css')}}">
    
        <style>
            .p-e-none{
                pointer-events: none;
            }
            .over{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            cursor: not-allowed;                
            }
            .smallbut {
                    background-color: #ff3e6c;
                        color: #fff;
                        font-size: 12px;
            }
            a.wishlist-btn.common-btn.btn-wishlist.added{
                background-color: #ff3e6c;
            }
            .table-bordered p{
            line-break: anywhere;
        }
        </style>
     </head>
<body class="home">
        @include('front.includes.header')
        <div id="dummyheader" style="height: 110px;"></div>
        <!-- End of Geader -->
        @yield('content')
        <!-- Start of Footer -->
        @include('front.includes.footer')
        <!-- End of Footer -->
        <!-- Login and register Modal -->
      <!--mobile sticky footer-->
	  
      @include('front.includes.footer.mobile_footer')
  
        <script src="{{URL::asset('assets/front/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('assets/front/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets/front/js/slick.min.js')}}"></script>
        <script src="{{URL::asset('assets/front/js/jquery.imgzoom.js')}}"></script> 
        <script src="{{URL::asset('assets/front/js/main.js')}}"></script>
        <script src="{{URL::asset('assets/front/js/myscript.js')}}"></script>
        <script src="{{URL::asset('assets/front/js/toastr.min.js')}}"></script>
        <script src="{{URL::asset('assets/front/js/jquery.mixitup.min.js')}}"></script>
        <script src="{{URL::asset('assets/front/js/main1.js')}}"></script>
        <script src="{{URL::asset('assets/front/js/select2.min.js')}}"></script>
        <script src="{{URL::asset('assets/front/css/nouislider.min.js')}}"></script>
        <script src="{{URL::asset('assets/front/js/bootbox.all.min.js')}}"></script>
        <script>
           $(document).ready(function(){

          
          /*mobile category slider*/
              $(".thumbnailcat-slider").slick({
                  infinite: false,
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  arrows: false,
                  speed: 300,
                  autoplay:false,
              });
          /*mobile category slide ends*/
          
          });
        </script>
    <script>
           $(window).scroll(function () {
        if ($('div.navbar-fixed-top').hasClass("shrink")) {
            $('.invert').show();
            $('.Normal').hide();
        } else {
            $('.invert').hide();
            $('.Normal').show();
        }
    });
    const viewcart = '{{route('view.cart')}}';
    const viewCheckout = '{{route('view.deliveryaddress')}}';
    toastr.options = {
    "closeButton": true,
    "debug": true,
    "newestOnTop": true,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }


    //*************************************   Cart *****************************************************************************************************************************

        $('.btn-cart1').on('click', function (t) {
            t.preventDefault();
            $.ajax({
                method: "GET",
                url: "{{route('user.add.card')}}",
                data: {
                    quantity: $('#prices1').val(),
                    id: $("#id").val()
                },
                success: function (data) {
                    $('.dropdown-box').load("{{route('user.render.card')}}");
                    toastr["success"]('Added to Cart');
                },
                error: function (erroe) {

                }
            });
        });
        $('body').on('click','.btn-cart2',function (t) {
            t.preventDefault();
            $.ajax({
                method: "GET",
                url: "{{route('user.add.card')}}",
                data: {
                    quantity: $(this).data('q'),
                    id: $(this).data('id')
                },
                success: function (data) {
                    $('.dropdown-box').load("{{route('user.render.card')}}");
                    toastr["success"]('Added to Cart');
                },
                error: function (erroe) {

                }
            });
        });
        $('body').on('click','.btn-cart3',function (t) {
            var q = $(this).parent().find('.quantity').val();
            t.preventDefault();
            $.ajax({
                method: "GET",
                url: "{{route('user.add.card')}}",
                data: {
                    quantity: q,
                    id: $(this).data('id')
                },
                success: function (data) {
                    $('.dropdown-box').load("{{route('user.render.card')}}");
                    toastr["success"]('Added to Cart');
                },
                error: function (erroe) {

                }
            });
        });

$('body').on('click','.btn.btn-link.btn-close',function(t){
    t.preventDefault();
    $.ajax({
        method: "GET",
        url: "{{route('user.remove.card')}}/"+$(this).data('id'),
        success: function (data) {
            $('.cart-count').text(data.totalitem);
            $('.dropdown-box').load("{{route('user.render.card')}}");
            toastr["success"]('Removed from Cart');
        },
        error: function (erroe) {

        }
    });
});
$('body').on('click','.btn-wishlist',function(e){
    e.preventDefault();
    @if(Auth::check())
            if(!$(this).hasClass("added")){
				$(this).addClass("added");
            $.ajax({
                method:"GET",
                url:'{{route('wishlistAdd')}}',
                data:{id:$(this).data('id')},
                success:function(data){
					toastr["success"]('Added to wishlist');
                 },
                error:function(erroe){ }
            });
            }else{
				$(this).removeClass("added");
                $.ajax({
                    method:"GET",
                    url:'{{route('wishlistremove')}}',
                    data:{id:$(this).data('id')},
                    success:function(data){ 
                        toastr["error"]('Removed from wishlist');
                    },
                    error:function(erroe){ }
                });
            }
            @else
                window.location.href = "{{route('front.loginBlade')}}";
            @endif
    });
    
    function myfunction(search,textsearch){
    window.location.href=search+'?search='+textsearch;
    }
    @if($errors->any())
        @foreach ($errors->all() as $ERR)
            toastr["error"]('{{$ERR}}');
        @endforeach
    @endif
    </script>
    @stack('script')
</body>

</html>