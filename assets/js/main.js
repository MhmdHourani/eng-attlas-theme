window.onload = function () {
  jQuery('#preloader').length && jQuery('body').attr('data-loaded', 'true');
};
jQuery(document).ready(function () {
  jQuery('#nav-trigger').on('click', function () {
    'true' === jQuery('#header').attr('data-navopen')
      ? jQuery('#header').attr('data-navopen', 'false')
      : jQuery('#header').attr('data-navopen', 'true');
  }),
    jQuery('#hero-slider').length &&
      jQuery('#hero-slider').owlCarousel({
        loop: !0,
        animateOut: 'fadeOut',
        margin: 0,
        nav: !1,
        smartSpeed: 500,
        autoplay: 6e3,
        autoplayTimeout: 7e3,
        items: 1,
        dots: !1,
        lazyLoad: !0,
        animateOut: 'fadeOut',
        mouseDrag: !1,
        touchDrag: !1,
      }),
    jQuery('#clients-carousel').length &&
      jQuery('#clients-carousel').owlCarousel({
        items: 8,
        loop: !0,
        margin: 20,
        autoplay: !0,
        dots: !1,
        slideTransition: 'linear',
        autoplaySpeed: 2200,
        autoplayTimeout: 2200,
        autoplayHoverPause: !1,
        rtl: 'rtl' === jQuery('body').css('direction'),
        responsive: {
          0: { items: 2 },
          450: { items: 3 },
          576: { items: 4 },
          768: { items: 5 },
          1200: { items: 6 },
          1600: { items: 8 },
        },
      }),
    jQuery(window).scroll(function () {
      var t = jQuery('#totop');
      t.offset().top > 1e3
        ? t.addClass('totop-visible')
        : t.removeClass('totop-visible');
    }),
    jQuery('#totop').on('click', function () {
      jQuery('html, body').animate({ scrollTop: 0 }, '600');
    }),
    jQuery('.menu-item a').on('click', function (t) {
      var e = jQuery(this);
      jQuery('html, body').animate(
        {
          scrollTop:
            jQuery('#' + e.attr('href').split('#')[1]).offset().top + 'px',
        },
        500
      );
      return false;
    });
  var t = jQuery('#header').offset().top;
  jQuery(window).scroll(function () {
    jQuery(window).scrollTop() > t
      ? jQuery('#header').addClass('sticky')
      : jQuery('#header').removeClass('sticky');
  });
  var scrollElements = document.getElementsByClassName('scrollbar');
  if (scrollElements.length > 0) {
    scrollElements.forEach(function (element) {
      new SimpleBar(element, { autoHide: true });
    });
  }
  new WOW().init();
});
window.openCity = (evt, position) => {
  jQuery('.tabcontent').removeClass('active');
  jQuery('.tablink').removeClass('active');
  jQuery(`#${position}`).addClass('active');
  evt.currentTarget.className += ' active';
};
