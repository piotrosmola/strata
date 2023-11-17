import gsap from 'gsap'
import { ScrollTrigger } from 'gsap/all'

gsap.registerPlugin(ScrollTrigger)

const Marquee = {
  init() {
    document.querySelectorAll('.marquee').forEach(el => {
      const text = el.querySelector('.section-content h2')
      const media = el.querySelector('.section-bg')
      const { width, height } = text.getBoundingClientRect()
      const tl = gsap.timeline({
        scrollTrigger: {
          pin: false,
          trigger: el,
          scrub: true,
          invalidateOnRefresh: true,
          start: () => `top ${window.innerHeight * 0.5 + height / 2 + window.innerHeight * 0.1}`,
          end: () => `bottom ${window.innerHeight * 0.5 - height / 2 - window.innerHeight * 0.1}`
        }
      })

      tl.addLabel('start').fromTo(
        text,
        {
          y: -window.innerHeight * 0.1,
          x: 0
        },
        {
          y: window.innerHeight * 0.1,
          x: -width + window.innerWidth,
          ease: 'none'
        },
        0
      )

      tl.fromTo(
        media,
        {
          y: '-10%'
        },
        {
          y: '10%',
          scale: 0.6
        },
        'start'
      )
    })
  }
}

export default Marquee
