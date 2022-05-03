window.onload = function () {
  if ($('#preloader').length) {
    $('body').attr('data-loaded', 'true');
  }
};
// Hide Loading Box (Preloader)
$(document).ready(function () {
  $('#nav-trigger').on('click', function () {
    if ($('#header').attr('data-navopen') === 'true') {
      $('#header').attr('data-navopen', 'false');
    } else {
      $('#header').attr('data-navopen', 'true');
    }
  });
  if ($('#hero-slider').length) {
    $('#hero-slider').owlCarousel({
      loop: true,
      animateOut: 'fadeOut',
      margin: 0,
      nav: false,
      smartSpeed: 500,
      autoplay: 6000,
      autoplayTimeout: 7000,
      items: 1,
      dots: false,
      // rtl: $('body').css('direction') === 'rtl',
      lazyLoad: true,
      animateOut: 'fadeOut',
      mouseDrag: false,
      touchDrag: false,
    });
  }
  if ($('#clients-carousel').length) {
    $('#clients-carousel').owlCarousel({
      items: 8,
      loop: true,
      margin: 20,
      autoplay: true,
      dots: false,
      slideTransition: 'linear',
      autoplaySpeed: 2200,
      autoplayTimeout: 2200,
      autoplayHoverPause: false,
      rtl: $('body').css('direction') === 'rtl',
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
  $(window).scroll(function () {
    var topTopElement = $('#totop');
    var toTopOffset = topTopElement.offset().top;
    var toTopHidden = 1000;

    if (toTopOffset > toTopHidden) {
      topTopElement.addClass('totop-visible');
    } else {
      topTopElement.removeClass('totop-visible');
    }
  });

  /* to top button animation */

  $('#totop').on('click', function () {
    $('html, body').animate({ scrollTop: 0 }, '600');
  });

  // go to the section related with links
  $('.menu-item a').on('click', function (event) {
    console.log(event);
    var $anchor = $(this);
    console.log($anchor.attr('href'));
    $('html, body').animate(
      {
        scrollTop:
          $('#' + $anchor.attr('href').split('#')[1]).offset().top + 'px',
      },
      500
    );
  });
  // navbar sticky functionality
  var menuPosition = $('#header').offset().top;
  $(window).scroll(function () {
    var scrollValue = $(window).scrollTop();
    if (scrollValue > menuPosition) {
      $('#header').addClass('sticky');
    } else {
      $('#header').removeClass('sticky');
    }
  });
});
