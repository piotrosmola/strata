import gsap from 'gsap'
import { SplitText } from 'gsap/SplitText'

gsap.registerPlugin(SplitText)

const Hero = {
  init() {
    const _ = this

    // 1
    document.querySelectorAll('.section.hero-1').forEach(section => {
      const waves = section.querySelector('.waves')

      const tl = gsap.timeline({
        scrollTrigger: {
          pin: false,
          trigger: section,
          scrub: 1,
          start: `top top`,
          end: () => `bottom ${-window.innerHeight}`,
          invalidateOnRefresh: true
        }
      })

      tl.to(waves, { x: '-25%', opacity: 0 }, 'start')
    })

    // 3
    document.querySelectorAll('.section.hero-2').forEach(section => {
      const waves = section.querySelector('.waves')

      const tl = gsap.timeline({
        scrollTrigger: {
          pin: false,
          trigger: section,
          scrub: 1,
          start: `top top`,
          end: () => `bottom ${-window.innerHeight}`,
          invalidateOnRefresh: true
        }
      })

      tl.to(waves, { x: '25%', opacity: 0 }, 'start')
    })
  }
}

export default Hero
