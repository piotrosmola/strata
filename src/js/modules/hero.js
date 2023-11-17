import gsap from 'gsap'
import { SplitText } from 'gsap/SplitText'

gsap.registerPlugin(SplitText)

const Hero = {
  init() {
    const _ = this

    document.querySelectorAll('.hero-1').forEach(section => {
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

      tl.to(waves, { transformOrigin: 'left center', x: '-25%', opacity: 0 }, 'start')
    })
  }
}

export default Hero
