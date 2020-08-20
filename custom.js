$(document).ready(function(){

    // User Action toggle for mobile Script
        jQuery(".site-header .navbar-toggler").click(function(){
          jQuery("body").toggleClass(".m-nav");
        });

    jQuery("#ml-menu .action--close").click(function(){
      jQuery("body").removeClass("m-nav");
    });


    // Script for desktop menu active class
    jQuery(function($) {
       var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
       $('.site-header .dropdown-menu ul li a').each(function() {
        if (this.href === path) {
         $(this).addClass('active');
         $(this).closest('.dropdown-menu').siblings('a.nav-link').addClass("active"); 
         $(this).closest('.dropdown-menu ul li').addClass("hasclass"); 
        }
       });
    }); 
            

        $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        singleItem:true,
        autoPlay:false,
        transitionStyle:"backSlide"
        
    });
        $("#logo-slider").owlCarousel({
        items:2,
        margin:0,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        singleItem:true,
        autoPlay:false,
        // transitionStyle:"backSlide"
        
    });


});
   jQuery(document).on("scroll", function(){
        if
      ($(document).scrollTop() > 20){
          $("#site-header").addClass("shrink");
        }
        else
        {
            $("#site-header").removeClass("shrink");
        }
    });

	// footer form Validation
    jQuery("#sessionform .submit-btn").click(function () {
        var form = $("#sessionform");
            form.validate({
               //ignore: ":not(:visible)",
                errorElement: 'span',
                errorClass: 'help-block',
                validateHiddenInputs: true,
    			validateOnEvent: true,
                rules: {

                    fname: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    phoneno: {
                        required: true,
                    },
                    website: {
                        required: true,
                    },
                    desiredservices: {
                        required: true,
                    },
                    message: {
                        required: true,
                    },
                },
            });
        });
        // Banner form Validation
    jQuery("#innerbannerform .submit-btn").click(function () {
        var form = $("#innerbannerform");
            form.validate({
               //ignore: ":not(:visible)",
                errorElement: 'span',
                errorClass: 'help-block',
                validateHiddenInputs: true,
                validateOnEvent: true,
                rules: {

                    fname: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    phoneno: {
                        required: true,
                    },
                    website: {
                        required: true,
                    },
                   
                },
            });
        });
	// Animation Script
	new WOW().init();

  const toggler = document.querySelector('.menu__toggler');
const menu    = document.querySelector('.slidemenu');

/*
 * Toggles on and off the 'active' class on the menu
 * and the toggler button.
 */
toggler.addEventListener('click', () => {
  toggler.classList.toggle('active');
  menu.classList.toggle('active');
})


    //Smoth Scrolling
jQuery(document).ready(function($) {
    $('.btncntlink').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top -70
            }, 1000);
        }
      });
});