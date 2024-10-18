 /*for home slider*/
	   $('.homeslider-inner').slick({
	 dots: true,
	 infinite: true,
	 autoplay: true,
	autoplaySpeed: 3000,
	 arrows: false,
	 speed: 1500

	});
	/*for home slider*/

	$('.featured-slider').slick({
	 centerMode: true,
	 slidesToShow: 1,
	 focusOnSelect: true,
	 responsive: [
	   {
	     breakpoint: 768,
	     settings: {
	       arrows: false,
	       centerMode: false,
	       slidesToShow: 1
	     }
	   },
	   {
	     breakpoint: 480,
	     settings: {
	       arrows: false,
	       centerMode: false,
	       slidesToShow: 1
	     }
	   }
	 ]
	});


	/**/
  $('.product-slider').slick({
	infinite: true,
	autoplay: true,
	 slidesToShow: 4,
	 focusOnSelect: true,
	 dots:true,
	 responsive: [
	   {
	     breakpoint: 768,
	     settings: {
	       arrows: false,
	       //centerMode: true,
	       slidesToShow: 3,
		   dots:true
	     }
	   },
	   {
	     breakpoint: 580,
	     settings: {
	       arrows: false,
	       //centerMode: true,
	       slidesToShow: 1,
		   dots:true,
	     }
	   }
	 ]
	});
	/**/
		/**/
  $('.product-slider-detail').slick({
	infinite: true,
	autoplay: true,
	 slidesToShow: 4,
	 focusOnSelect: true,
	 dots:true,
	 responsive: [
	   {
	     breakpoint: 768,
	     settings: {
	       arrows: false,
	       slidesToShow: 3,
		   dots:true
	     }
	   },
	   {
	     breakpoint: 580,
	     settings: {
	       arrows: false,
	       slidesToShow: 1,
		   dots:true,
	     }
	   }
	 ]
	});
	/**/

	   /*for fixed header shrink*/
	   $(window).scroll(function() {
	           if ($(document).scrollTop() > 50) {
	               $('header').addClass('shrink');
	           }
	           else {
	               $('header').removeClass('shrink');
	           }
	       });
	   /*for fixed header shrink end*/

	       /*for dummy header start*/
$(document).ready(function () {
			   
	$('[data-toggle="tooltip"]').tooltip();
	
	           var hheight= $("header").height();
	           $("#dummyheader").height(hheight);

			   // breakpoint and up  
$(window).resize(function(){
	if ($(window).width() >= 980){	

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
		// do something here
	}	
});  
	       });
	   /*for dummy header end*/

	   /**/

	   $('#forgotpassword').on('show.bs.modal', function () {

			$('#login-modal').modal('hide');
			$('body').removeClass('modal-open');


});
$('#forgotpassword').on('shown.bs.modal', function () {
	$('body').addClass('modal-open');
});
$('#login-modal').on('shown.bs.modal', function () {
	$('body').addClass('modal-open');
});
$('#login-modal').on('show.bs.modal', function () {
		   //alert();
			$('#forgotpassword').modal('hide');
			$('body').removeClass('modal-open');
			$('body').addClass('modal-open');
});

$('header').prepend('<div id="menu-icon"><span class="first"></span><span class="second"></span><span class="third"></span></div>');
	
$("#menu-icon").on("click", function(){
$("nav").slideToggle();
$(this).toggleClass("active");
});


$(document).ready(function () {
	$(window).scroll(function () {
	  var top =  $(".goto-top");
		  if ( $('body').height() <= (    $(window).height() + $(window).scrollTop() + 200 )) {
	top.animate({"margin-left": "0px"},1500);
		  } else {
			  top.animate({"margin-left": "-100%"},1500);
		  }
	  });
  
	  $(".goto-top").on('click', function () {
		  $("html, body").animate({scrollTop: 0}, 400);
	  });
  });
  
  
  var burgerMenu = function() {

		$('.js-colorlib-nav-toggle').on('click', function(event){
			event.preventDefault();
			var $this = $(this);

			if ($('body').hasClass('offcanvas')) {
				$this.removeClass('active');
				$('body').removeClass('offcanvas');	
			} else {
				$this.addClass('active');
				$('body').addClass('offcanvas');	
			}
		});
	};
	burgerMenu();

	// Click outside of offcanvass
	var mobileMenuOutsideClick = function() {

		$(document).click(function (e) {
	    var container = $("#colorlib-aside, .js-colorlib-nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {

	    	if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-colorlib-nav-toggle').removeClass('active');
			
	    	}
	    	
	    }
		});

		$(window).scroll(function(){
			if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-colorlib-nav-toggle').removeClass('active');
			
	    	}
		});

	};
	mobileMenuOutsideClick();
  