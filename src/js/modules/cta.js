import gsap from 'gsap'
import { SplitText } from 'gsap/SplitText'

gsap.registerPlugin(SplitText)

const Cta = {
  init() {
    const _ = this

    document.querySelectorAll('.cta').forEach(section => {
      const waves = section.querySelector('.waves')

      const tl = gsap.timeline({
        scrollTrigger: {
          pin: false,
          trigger: section,
          scrub: 1,
          start: `top bottom`,
          end: () => `bottom top`,
          invalidateOnRefresh: true
        }
      })

      tl.fromTo(waves, { transformOrigin: 'right center', opacity: 0, x: '50%' }, { x: 0, opacity: 1 })
    })
  }
}

export default Cta
