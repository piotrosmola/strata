import gsap from 'gsap'
import { ScrollTrigger } from 'gsap/all'

gsap.registerPlugin(ScrollTrigger)

const MomentsGrid = {
  init() {
    document.querySelectorAll('.moments-grid').forEach(grid => {
      grid.querySelectorAll('.moment-card').forEach((card, index) => {
        const tl = gsap.timeline({
          scrollTrigger: {
            pin: false,
            trigger: card,
            scrub: true,
            start: `top 150%`,
            end: `bottom 50%`,
            invalidateOnRefresh: true
          }
        })

        tl.from(card, { scale: 0.65, opacity: 0 }).to(card, { scale: 1, opacity: 1 })
      })
    })
  }
}

export default MomentsGrid
