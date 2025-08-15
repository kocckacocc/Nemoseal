import Alpine from "alpinejs";
import Swiper, { Navigation } from "swiper";
import OverlayScrollbars from "overlayscrollbars";
import "swiper/css";
import "swiper/css/navigation";
import "overlayscrollbars/css/OverlayScrollbars.min.css";
import "overlayscrollbars/js/OverlayScrollbars.min.js";

window.Alpine = Alpine;

Alpine.start();

Swiper.use([Navigation]);

/* (function () {

  'use strict';

  const breakpoint = window.matchMedia('(max-width: 767px)');

  let swiper;

  const breakpointChecker = function () {

    if (breakpoint.matches === true) {

      if (swiper !== undefined) swiper.destroy(true, true);

      return;

    } else if (breakpoint.matches === false) {

      return enableSwiper();

    }

  };

  const enableSwiper = function () {

    swiper = new Swiper('.swiper', {
      direction: 'horizontal',
      loop: false,
      slidesPerView: 1,
      spaceBetween: 48,

      navigation: {
        nextEl: '.next',
        prevEl: '.prev',
        disabledClass: 'opacity-20'
      },

      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 48
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 48
        },
        1024: {
          slidesPerView: 1,
          spaceBetween: 48
        },
        1280: {
          slidesPerView: 2,
          spaceBetween: 48
        },
        1536: {
          slidesPerView: 2,
          spaceBetween: 48
        },

      }

    });
  };

  // keep an eye on viewport size changes
  breakpoint.addListener(breakpointChecker);

  // kickstart
  breakpointChecker();

})(); */

var instances = OverlayScrollbars(document.querySelectorAll(".scrollbar"), { }); 