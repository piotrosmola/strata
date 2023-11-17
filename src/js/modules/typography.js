import gsap from 'gsap'
import { SplitText } from 'gsap/SplitText'

gsap.registerPlugin(SplitText)

const Typography = {
  init() {
    const _ = this

    _.initSplitLines()
  },
  initSplitLines(elements) {
    const _ = this
    const elementsToSplit = elements || document.querySelectorAll('[data-split-lines]')

    elementsToSplit.forEach(el => {
      const text = el.innerHTML

      el.innerHTML = `<span>${text}</span><span>${text}</span>`

      el.querySelectorAll('span').forEach(span => {
        const textSplit = new SplitText(span, { type: 'lines' })

        span.poTextSplit = textSplit
      })

      if (el.dataset.animate) {
        const tl = gsap.timeline({ paused: true })
        const textLines = el.querySelectorAll('span')[1].children

        Array.from(textLines).forEach((line, index) => {
          tl.addLabel(`text_${index}`).fromTo(line, { '--progress': '0%' }, { '--progress': '100%', duration: 0.5, ease: 'power3.in' }, '>+=0.25')
        })

        el.poTimeline = tl
      }
    })
  }
}

export default Typography
