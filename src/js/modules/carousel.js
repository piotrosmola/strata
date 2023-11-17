import Swiper from 'swiper'

const Carousel = {
  el: document.querySelectorAll('.carousel'),
  nav: document.querySelectorAll('[data-swiper-nav]'),
  init() {
    const _ = this

    _.el.forEach(el => {
      const container = el

      const slidesPerView = el.getAttribute('data-slides-per-view')
      const spaceBetween = eval(el.getAttribute('data-space-between'))
      const breakpointsAttr = eval(
        el.getAttribute('data-breakpoints') || [
          ['768', 2, 30],
          ['1024', 3, 30],
          ['1280', 4, 30],
          ['1440', 5, 30]
        ]
      )
      const breakpoints = {}

      breakpointsAttr.forEach(item => {
        breakpoints[item[0]] = {
          slidesPerView: item[1],
          spaceBetween: item[2]
        }
      })

      const swiperRef = new Swiper(container, {
        slidesPerView,
        spaceBetween,
        freeMode: true,
        touchStartPreventDefault: false,
        breakpoints
      })

      // const links = el.querySelectorAll('a')

      // const handleLink = el => {
      //   const target = el.getAttribute('target')
      //   const url = el.getAttribute('href')

      //   if (target === '_blank') window.open(url)
      //   else window.location.href = url
      // }

      // links.forEach(link => link.addEventListener('click', () => handleLink(link)))
    })

    _.nav.forEach(el => {
      const container = document.querySelector(el.getAttribute('data-swiper-nav'))
      const swiperRef = container ? container.swiper : null

      if (swiperRef) {
        const prev = el.querySelector('[data-target="prev"]')
        const next = el.querySelector('[data-target="next"]')

        prev.addEventListener('click', () => swiperRef.slidePrev())
        next.addEventListener('click', () => swiperRef.slideNext())
      }
    })
  }
}

export default Carousel
