import Swiper, { Autoplay, FreeMode, Navigation } from 'swiper'

const Carousel = {
  init() {
    const _ = this

    _.el = document.querySelectorAll('.carousel')

    _.el.forEach(el => {
      const container = el

      const slidesPerView = el.getAttribute('data-slides-per-view')
      const spaceBetween = eval(el.getAttribute('data-space-between'))
      const loop = eval(el.getAttribute('data-loop'))
      const breakpointsAttr = eval(
        el.getAttribute('data-breakpoints') || [
          ['0', 2, 30],
          ['575', 2, 30],
          ['767', 3, 30],
          ['992', 4, 30],
          ['1199', 5, 60]
        ]
      )
      const breakpoints = {}
      const autoplay = el.getAttribute('data-autoplay')
        ? {
            enabled: true,
            delay: 3000
          }
        : false

      breakpointsAttr.forEach(item => {
        breakpoints[item[0]] = {
          slidesPerView: item[1],
          spaceBetween: item[2]
        }
      })

      const swiperRef = new Swiper(container, {
        modules: [Navigation, FreeMode, Autoplay],
        slidesPerView,
        spaceBetween,
        freeMode: true,
        touchStartPreventDefault: false,
        autoplay,
        breakpoints,
        loop,
        loopAddBlankSlides: true,
        loopAdditionalSlides: 3,
        watchSlidesProgress: true,
        navigation: {
          nextEl: el.querySelector('.swiper-button-next'),
          prevEl: el.querySelector('.swiper-button-prev')
        }
      })
    })
  }
}

export default Carousel
