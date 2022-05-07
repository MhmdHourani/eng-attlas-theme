window.onload = function () {
  if (jQuery('#preloader').length) {
    jQuery('body').attr('data-loaded', 'true');
  }
};
// Hide Loading Box (Preloader)
jQuery(document).ready(function () {
  jQuery('#nav-trigger').on('click', function () {
    if (jQuery('#header').attr('data-navopen') === 'true') {
      jQuery('#header').attr('data-navopen', 'false');
    } else {
      jQuery('#header').attr('data-navopen', 'true');
    }
  });
  if (jQuery('#hero-slider').length) {
    jQuery('#hero-slider').owlCarousel({
      loop: true,
      animateOut: 'fadeOut',
      margin: 0,
      nav: false,
      smartSpeed: 500,
      autoplay: 6000,
      autoplayTimeout: 7000,
      items: 1,
      dots: false,
      // rtl: jQuery('body').css('direction') === 'rtl',
      lazyLoad: true,
      animateOut: 'fadeOut',
      mouseDrag: false,
      touchDrag: false,
    });
  }
  if (jQuery('#clients-carousel').length) {
    jQuery('#clients-carousel').owlCarousel({
      items: 8,
      loop: true,
      margin: 20,
      autoplay: true,
      dots: false,
      slideTransition: 'linear',
      autoplaySpeed: 2200,
      autoplayTimeout: 2200,
      autoplayHoverPause: false,
      rtl: jQuery('body').css('direction') === 'rtl',
      responsive: {
        0: {
          items: 2,
        },
        450: {
          items: 3,
        },
        576: {
          items: 4,
        },
        768: {
          items: 5,
        },
        1200: {
          items: 6,
        },
        1600: {
          items: 8,
        },
      },
    });
  }

  //  to top button add and remove on scroll
  jQuery(window).scroll(function () {
    var topTopElement = jQuery('#totop');
    var toTopOffset = topTopElement.offset().top;
    var toTopHidden = 1000;

    if (toTopOffset > toTopHidden) {
      topTopElement.addClass('totop-visible');
    } else {
      topTopElement.removeClass('totop-visible');
    }
  });

  /* to top button animation */

  jQuery('#totop').on('click', function () {
    jQuery('html, body').animate({ scrollTop: 0 }, '600');
  });

  // go to the section related with links
  jQuery('.menu-item a').on('click', function (event) {
    console.log(event);
    var jQueryanchor = jQuery(this);
    console.log(jQueryanchor.attr('href'));
    jQuery('html, body').animate(
      {
        scrollTop:
          jQuery('#' + jQueryanchor.attr('href').split('#')[1]).offset().top +
          'px',
      },
      500
    );
  });
  // navbar sticky functionality
  var menuPosition = jQuery('#header').offset().top;
  jQuery(window).scroll(function () {
    var scrollValue = jQuery(window).scrollTop();
    if (scrollValue > menuPosition) {
      jQuery('#header').addClass('sticky');
    } else {
      jQuery('#header').removeClass('sticky');
    }
  });
});

var scrollElements = document.getElementsByClassName('scrollbar');
if (scrollElements.length > 0) {
  scrollElements.forEach(function (element) {
    new SimpleBar(element, {
      autoHide: true,
    });
  });
}

mixitup(jQuery('#portfolio-list'), {
  load: {
    filter: '*',
  },
});

function openCity(evt, position) {
  jQuery('.tabcontent').removeClass('active');
  jQuery('.tablink').removeClass('active');
  jQuery(`#jQuery{position}`).addClass('active');
  evt.currentTarget.className += ' active';
}

new WOW().init();
