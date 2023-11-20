import gsap from 'gsap'
import { SplitText } from 'gsap/SplitText'

const ScrollEffects = {
  init() {
    const _ = this

    _.initIntro()
    _.initMarquee()
    _.initMomentsGrid()
    _.initMediaRow()
    _.initMediaWithContent()
    _.initBlurIn()
    _.initHero()
  },
  initMediaWithContent() {
    document.querySelectorAll('.section.media-with-content').forEach(section => {
      const media = section.querySelector('.media')

      const tl = gsap.timeline({
        scrollTrigger: {
          pin: false,
          trigger: section,
          scrub: 1,
          start: `top bottom`,
          end: () => `bottom ${window.innerHeight - window.innerHeight * 0.3}`,
          invalidateOnRefresh: true
        }
      })

      tl.fromTo(media, { opacity: 0, '--blur': '20px', scale: 0.8 }, { opacity: 1, '--blur': '0px', scale: 1 })
    })
  },
  initMediaRow() {
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
  },
  initMomentsGrid() {
    document.querySelectorAll('.moments-grid').forEach(grid => {
      grid.querySelectorAll('.moment-card').forEach((card, index) => {
        const tl = gsap.timeline({
          scrollTrigger: {
            pin: false,
            trigger: card,
            scrub: true,
            start: `top 200%`,
            end: `bottom 50%`,
            invalidateOnRefresh: true
          }
        })

        tl.from(card, { scale: 0.65, opacity: 0 }).to(card, { scale: 1, opacity: 1 })
      })
    })
  },
  initIntro() {
    document.querySelectorAll('.intro').forEach(section => {
      const bg = section.querySelector('.section-bg')
      const content = section.querySelector('.section-content')
      const textLines = content.querySelectorAll('.outline-text > span')[1].children

      const tl = gsap.timeline({
        scrollTrigger: {
          pin: window.innerWidth > 991,
          trigger: section,
          scrub: 1,
          start: `top ${window.innerWidth > 991 ? 'top' : window.innerHeight * 0.5}`,
          end: () => `bottom ${window.innerWidth > 991 ? -window.innerHeight * 0.5 : window.innerHeight * 0.5}`,
          invalidateOnRefresh: true
        }
      })

      tl.addLabel('start')
      section.querySelectorAll('.section-bg img').forEach((card, index) => {
        tl.fromTo(card, { '--blur': '10px', scale: 0.75, opacity: 0 }, { scale: 1.25, opacity: 0.4, '--blur': '0px' }, `start+=${index * 0.1}`)
      })
      tl.addLabel('zooming')
      tl.fromTo(bg, { scale: 1 }, { scale: () => (window.innerWidth > window.innerHeight ? 2.75 : 4), ease: 'power3.in' }, 'start+=95%').fromTo(
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
  },
  initMarquee() {
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
  },
  initBlurIn() {
    document.querySelectorAll('[data-blur-in]').forEach(el => {
      const tl = gsap.timeline({
        scrollTrigger: {
          pin: false,
          trigger: el,
          scrub: 1,
          start: `top bottom`,
          end: () => `bottom ${window.innerHeight - window.innerHeight * 0.25}`,
          invalidateOnRefresh: true
        }
      })

      tl.fromTo(el, { opacity: 0, '--blur': '20px', scale: 0.8 }, { opacity: 1, '--blur': '0px', scale: 1 })
    })
  },
  initHero() {
    // Hero #1
    document.querySelectorAll('.section.hero-1').forEach(section => {
      const waves = section.querySelector('.waves')
      const textLines = section.querySelector('[data-hover-lines]')?.querySelectorAll('span')

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

      if (textLines.length) {
        Array.from(textLines[0].children).forEach((line, i) => {
          const solidLines = textLines[1]
          line.addEventListener('mouseenter', () => {
            Array.from(solidLines.children).forEach((solidLine, k) => {
              if (i === k) gsap.to(solidLine, { '--progress': '100%', duration: 0.5, ease: 'power3.out' })
              else gsap.to(solidLine, { '--progress': '0%', duration: 0.5, ease: 'power3.out' })
            })
          })
        })
      }

      tl.to(waves, { x: '-25%', opacity: 0 }, 'start')
    })

    // Hero #2
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

export default ScrollEffects
