// ▼スワイパー
import Swiper from 'swiper/bundle';

export function initSwiper(selector = '.swiper-container') {
  const el = document.querySelector(selector);
  if (!el) return null;

  const swiper = new Swiper(el, {
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 5000, // 5秒ごと
      disableOnInteraction: false,
    },
    spaceBetween: 0,
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
    speed: 1000,
  });

  return swiper;
}
// ▲スワイパー