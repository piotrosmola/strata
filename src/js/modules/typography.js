import gsap from 'gsap'
import { SplitText } from 'gsap/SplitText'

gsap.registerPlugin(SplitText)

const Typography = {
  init() {
    const _ = this

    _.initSplitLines()
    _.initSplitChars()
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
  },
  initSplitChars(elements) {
    const _ = this
    const elementsToSplit = elements || document.querySelectorAll('[data-split-chars]')

    elementsToSplit.forEach(el => {
      const text = el.innerHTML
      el.innerHTML = `<span>${text}</span><span>${text}</span>`

      el.querySelectorAll('span').forEach((span, spanIndex) => {
        const lineSplit = new SplitText(span, { type: 'lines' })
        const tl = gsap.timeline({
          paused: true,
          onComplete: () => {
            el.classList.add('completed')
            if (el.dataset.fillFirst) {
              gsap.to(el.querySelectorAll('span')[1].children[0], { '--progress': '100%', duration: 0.5 })
            }
          }
        })

        span.lineSplit = lineSplit

        lineSplit.lines.forEach((line, lineIndex) => {
          const charSplit = new SplitText(line, { type: 'chars' })

          line.charSplit = charSplit

          if (el.dataset.animate && spanIndex === 0) {
            charSplit.chars.forEach((char, charIndex) => {
              tl.fromTo(
                char,
                { y: '10%', opacity: 0 },
                { y: 0, opacity: 1, duration: 0.35, ease: 'power1.out' },
                lineIndex === 0 && charIndex === 0 ? '>' : '>-0.3'
              )
            })
            el.poTimeline = tl
          }
        })
      })
    })
  }
}

export default Typography
