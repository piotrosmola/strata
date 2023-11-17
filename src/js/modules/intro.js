import gsap from 'gsap'
import { SplitText } from 'gsap/SplitText'

gsap.registerPlugin(SplitText)

const Intro = {
  init() {
    const _ = this

    document.querySelectorAll('.intro').forEach(section => {
      const bg = section.querySelector('.section-bg')
      const content = section.querySelector('.section-content')
      const textLines = content.querySelectorAll('.outline-text > span')[1].children

      const tl = gsap.timeline({
        scrollTrigger: {
          pin: true,
          trigger: section,
          scrub: 1,
          start: `top top`,
          end: () => `bottom ${-window.innerHeight * 0.5}`,
          invalidateOnRefresh: true
          // snap: {
          //   snapTo: 'labels',
          //   duration: { min: 0.2, max: 3 },
          //   delay: 0.2,
          //   ease: 'power1.inOut'
          // }
        }
      })

      tl.addLabel('start')
      section.querySelectorAll('.section-bg img').forEach((card, index) => {
        tl.fromTo(card, { '--blur': '10px', scale: 0.75, opacity: 0 }, { scale: 1.25, opacity: 0.4, '--blur': '0px' }, `start+=${index * 0.1}`)
      })
      tl.fromTo(bg, { scale: 1 }, { scale: () => (window.innerWidth > window.innerHeight ? 2.5 : 4), ease: 'power3.in' }, 'start+=95%').fromTo(
        bg,
        { '--mask': 1 },
        { '--mask': 0 },
        '>-35%'
      )

      Array.from(textLines).forEach((line, index) => {
        tl.addLabel(`text_${index}`).fromTo(
          line,
          { '--progress': '0%' },
          { '--progress': '100%', duration: 0.75 / textLines.length },
          index === 0 ? 'start' : '>'
        )
      })
    })
  }
}

export default Intro
