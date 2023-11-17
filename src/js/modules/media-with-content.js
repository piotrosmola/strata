import gsap from 'gsap'
import { SplitText } from 'gsap/SplitText'

const MediaWithContent = {
  init() {
    const _ = this

    document.querySelectorAll('.section.media-with-content').forEach(section => {
      const media = section.querySelector('.media')

      const tl = gsap.timeline({
        scrollTrigger: {
          pin: false,
          trigger: section,
          scrub: 1,
          start: `top bottom`,
          end: () => `bottom ${window.innerHeight - window.innerHeight * 0.1}`,
          invalidateOnRefresh: true
        }
      })

      tl.fromTo(media, { opacity: 0, '--blur': '10px', scale: 0.8 }, { opacity: 1, '--blur': '0px', scale: 1 })
    })
  }
}

export default MediaWithContent
