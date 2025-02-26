const CaseStudyScrollEffects = {
  init() {
    const _ = this

    _.initIntro()
    _.initScreenCompositon()
    _.initMarquee()
    _.initShowcase()

    setTimeout(() => {
      ScrollTrigger.refresh()
    }, 1000)
  },
  initIntro() {
    document.querySelectorAll('.strata-section-intro').forEach(section => {
      const bg = section.querySelector('.section-bg')
      const content = section.querySelector('.section-content')
      const textLines = content.querySelectorAll('.outline-text > span')[1].children

      const tl = gsap.timeline({
        scrollTrigger: {
          pin: window.innerWidth > 991,
          trigger: section,
          scrub: 1,
          start: () => `top ${window.innerWidth > 991 ? 'top' : window.innerHeight * 0.5}`,
          end: () => `bottom ${window.innerWidth > 991 ? -window.innerHeight * 0.5 : window.innerHeight * 0.5}`,
          invalidateOnRefresh: true
        }
      })

      tl.addLabel('start')
      section.querySelectorAll('.section-bg img').forEach((card, index) => {
        if (window.innerWidth > 991) {
          tl.fromTo(card, { '--blur': '10px', scale: 0.75, opacity: 0.2 }, { scale: 1.25, opacity: 0.4, '--blur': '0px' }, `start+=${index * 0.1}`)
        }
      })
      tl.addLabel('zooming')
      tl.fromTo(bg, { scale: 1 }, { scale: () => (window.innerWidth > window.innerHeight ? 2.75 : 4), ease: 'power3.in' }, 'start+=95%').fromTo(
        bg,
        { '--mask': 1 },
        { '--mask': 0 },
        '>-25%'
      )

      Array.from(textLines).forEach((line, index) => {
        tl.addLabel(`text_${index}`).fromTo(
          line,
          { '--progress': '0%' },
          { '--progress': '100%', duration: 0.75 / textLines.length },
          index === 0 ? 'start' : '>'
        )
      })

      section.poTimeline = tl
    })
  },
  initScreenCompositon() {
    document.querySelectorAll('.strata-screen-composition').forEach(el => {
      const img = el.querySelectorAll('img')

      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: el,
          scrub: 1,
          start: () => `top bottom`,
          end: () => `bottom top`,
          invalidateOnRefresh: true
        }
      })

      tl.fromTo(img[0], { y: '15%' }, { y: '-15%' })
      tl.fromTo(img[1], { y: '-15%' }, { y: '15%' }, '<')

      el.poTimeline = tl
    })
  },
  initShowcase() {
    document.querySelectorAll('.strata-section-showcase').forEach(section => {
      const cols = section.querySelectorAll('.strata-showcase-col')

      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: section,
          scrub: 1,
          start: () => `top bottom`,
          end: () => `bottom top`,
          invalidateOnRefresh: true
        }
      })

      tl.addLabel('start')
      tl.fromTo(cols[0], { y: '10%' }, { y: '-10%' })
      tl.fromTo(cols[1], { y: '-10%' }, { y: '10%' }, 'start')
      tl.fromTo(cols[2], { y: '10%' }, { y: '-10%' }, 'start')

      section.poTimeline = tl
    })
  },
  initMarquee() {
    document.querySelectorAll('.strata-section-marquee').forEach(el => {
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
          y: '10%'
        },
        'start'
      )
      el.poTimeline = tl
    })
  }
}

export default CaseStudyScrollEffects
