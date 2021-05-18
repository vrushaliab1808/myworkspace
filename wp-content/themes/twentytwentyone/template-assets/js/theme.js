
// Slideshow Carousel JS
var mySwiper = new Swiper(".swiper-container", {
  direction: "vertical",
  loop: true,
  pagination: ".swiper-pagination",
  grabCursor: true,
  speed: 1000,
  paginationClickable: true,
  parallax: true,
  autoplay: true,
  effect: "slide",
  mousewheelControl: 1
});

    
// testimonial Carousel JS
jQuery('.testimonial-carousel').owlCarousel({
    loop:true,
    items:1,
    dots:false,
    nav:true,
    margin:0,
    autoplay: true,
    smartSpeed: 1000,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
// brand Carousel JS
jQuery('.fs-brand-carousel').owlCarousel({
    loop:true,
    items:5,
    dots:true,
    nav:true,
    autoplay: true,
    margin:70,
    smartSpeed: 500,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        1000:{
            items:5
        }
    }
})
// Counter js //
jQuery(window).scroll(startCounter);
function startCounter() {
  if(jQuery('.counter-inner').length > 0)
  {
    var hT = jQuery('.counter-inner').offset().top,
        hH = jQuery('.counter-inner').outerHeight(),
        wH = jQuery(window).height();
    if (jQuery(window).scrollTop() > hT+hH-wH) {
        jQuery(window).off("scroll", startCounter);
        jQuery('.counter-number').each(function () {
            var $this = jQuery(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 6000,
                easing: 'swing',
                step: function () {
                  $this.text(Math.ceil(this.Counter) + '');
                }
            });
        });
    }
  }
}

// Slide show animation
/*Scroll to top when arrow up clicked BEGIN*/
jQuery(window).scroll(function() {
    var height = jQuery(window).scrollTop();
    if (height > 100) {
        jQuery('.fs-scroll').fadeIn();
    } else {
        jQuery('.fs-scroll').fadeOut();
    }
});
jQuery(document).ready(function() {
    jQuery(".fs-scroll").click(function(event) {
        event.preventDefault();
        jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
//sticky navbar
jQuery(window).on("scroll",function(a){
    190<jQuery(window).scrollTop()?jQuery("#main-navbar").addClass("affix"):jQuery("#main-navbar").removeClass("affix")
});