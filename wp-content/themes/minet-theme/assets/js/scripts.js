function detectScroll(){
	var body = jQuery("body");
	var scroll = jQuery(window).scrollTop();
	if (scroll > 1) {
			body.addClass("sticky-header");
	} else {
			body.removeClass("sticky-header");
	}
}

function inViewport(entries, observer) {
    entries.forEach(function (entry) {
        entry.target.classList.toggle("inViewport", entry.isIntersecting);
    });
};
const Obs = new IntersectionObserver(inViewport);
const elms_inViewport = document.querySelectorAll('[data-inviewport]');
elms_inViewport.forEach(function (elm) {
    Obs.observe(elm);
});

var numbersAnimated = false;
function numbersAnimation() {
    var numbers = jQuery('.numbers');
    var windowHeight = jQuery(window).height();
    var scroll = jQuery(window).scrollTop();
    var numbersTop = numbers.offset().top;

    // Calculate the threshold for triggering the animation
    var threshold = windowHeight - (windowHeight * 0.3);

    if (scroll + threshold >= numbersTop && !numbersAnimated) {
      jQuery('.numbers .count').each(function () {
          jQuery(this).prop('Counter', 0).animate({
              Counter: jQuery(this).text()
          }, {
              duration: 4000,
              easing: 'swing',
              step: function (now) {
                  jQuery(this).text(Math.ceil(now));
              }
          });
      });
     numbersAnimated = true; // Mark animation as triggered
    }
}


function historyAnimation(){
	var historyAnimated = false;
	var history = jQuery('.history_screen');
	var windowHeight = jQuery(window).height();
	var scroll = jQuery(window).scrollTop();
	var historyTop = history.offset().top;

	// Calculate the threshold for triggering the animation
	var threshold = windowHeight - (windowHeight * 0.5);

	if (scroll + threshold >= historyTop && !historyAnimated) {
		jQuery('.history_screen .line').addClass('inViewport');
		jQuery('.history_screen .item').addClass('inViewport');
		jQuery('.history_screen svg').addClass('inViewport');
		Array.from(document.getElementsByClassName("path")).forEach(pathElement => {
				var delay = pathElement.parentElement.getAttribute('data-delay');
				pathElement.setAttribute('style', 'stroke-dasharray:'+pathElement.getTotalLength()+';stroke-dashoffset:'+pathElement.getTotalLength()+';animation-delay:'+ (delay * 500) +'ms;')
		});
		historyAnimated = true; // Mark animation as triggered
	}
}

jQuery(document).ready(function(){
	detectScroll();
	jQuery(window).scroll(detectScroll);
	jQuery('.add_inviewport_class').addClass('inViewport');

	jQuery('.nav-icon').click(function(){
		jQuery(this).toggleClass('is-tapped');
    jQuery('header').toggleClass('show-menu');
	});


	jQuery('header .main-menu li.menu-item-has-children a').on('click', function(){
		if(jQuery('header').hasClass('show-menu')){
			jQuery(this).toggleClass('arrow');
			jQuery(this).parent().find('.sub-menu').slideToggle();
		}
	});


	if(jQuery('.numbers').length > 0){
		jQuery(window).on('scroll', numbersAnimation);
		numbersAnimation();
	}
	if(jQuery('.history_screen').length > 0){
		jQuery(window).on('scroll', historyAnimation);
		historyAnimation();
	}

	if(jQuery('.applications_item').length > 1){
		jQuery(".applicattions_slider").slick({
		    dots: true,
		    customPaging: function(slider, i) {
		        return '<button class="tab">' + jQuery(slider.$slides[i]).attr('data-title') + '</button>';
		    },
		    arrows: true,
				appendArrows:true,
				nextArrow: jQuery('.applicattions_slider_container .next-arrow'),
				prevArrow: jQuery('.applicattions_slider_container .prev-arrow'),
		    slidesToShow: 1,
		    slidesToScroll: 1
		});
	}
	if (jQuery('.responsability').length > 0) {
	  jQuery('.responsability_row .info_box .tab:first-child .info').slideDown();
	  jQuery('.responsability_row .info_box .tab h3').on('click', function () {
	    var $info = jQuery(this).parent().find('.info');
	    if (!$info.is(':visible')) {
	      jQuery('.responsability_row .info_box .tab .info').slideUp();
	      $info.slideDown();
	    }
	  });
	}

	if(jQuery('.applications_gird').length > 0){
		jQuery(window).on('load resize orientationchange', function() {
				jQuery('.applications_gird').each(function(){
						var $carousel = jQuery(this);
						if (window.innerWidth > 900) {
								if ($carousel.hasClass('slick-initialized')) {
										$carousel.slick('unslick');
								}
						}
						else{
								if (!$carousel.hasClass('slick-initialized')) {
										$carousel.slick({
											slidesToShow: 1,
											slidesToScroll: 1,
											mobileFirst: true,
											arrows:false,
											fade:true,
											autoplay:true,
											autoplaySpeed:3000,
											infinite:true,
											dots:true
										});
								}
						}
				});
		});
	}

});

jQuery.event.special.touchstart = {
	setup: function( _, ns, handle ) {
			this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
	}
};
jQuery.event.special.touchmove = {
		setup: function( _, ns, handle ) {
				this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
		}
};
jQuery.event.special.wheel = {
		setup: function( _, ns, handle ){
				this.addEventListener("wheel", handle, { passive: true });
		}
};
jQuery.event.special.mousewheel = {
		setup: function( _, ns, handle ){
				this.addEventListener("mousewheel", handle, { passive: true });
		}
};
