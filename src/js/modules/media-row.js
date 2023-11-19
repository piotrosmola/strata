import gsap from 'gsap'
import { SplitText } from 'gsap/SplitText'

gsap.registerPlugin(SplitText)

const MediaRow = {
  init() {
    const _ = this

    document.querySelectorAll('.media-row').forEach(section => {
      const items = section.querySelectorAll('.media')

      const tl = gsap.timeline({
        scrollTrigger: {
          pin: false,
          trigger: section,
          scrub: 1,
          start: `top bottom`,
          end: () => `bottom ${window.innerHeight - window.innerHeight * 0.25}`,
          invalidateOnRefresh: true
        }
      })

      items.forEach((item, index) => {
        tl.fromTo(item, { opacity: 0, '--blur': '20px', scale: 0.8 }, { opacity: 1, '--blur': '0px', scale: 1 }, index * 0.2)
      })
    })
  }
}

export default MediaRow
