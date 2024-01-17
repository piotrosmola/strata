import marqueeCarousel from '../lib/marquee-carousel'

const Logotypes = {
  init() {
    const _ = this

    _.el = document.querySelectorAll('.logotypes')

    _.el.forEach(el => {
      const container = el
      const items = el.querySelectorAll('.logotypes-item')

      const carousel = marqueeCarousel(items, {
        paused: false,
        draggable: true,
        speed: 8,
        center: false
      })
    })
  }
}

export default Logotypes
