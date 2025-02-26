// import gsap from 'gsap'
// import SplitText from 'gsap/dist/SplitText'
import isTouchDevice from 'is-touch-device'

import Animations from './modules/animations'
import Background from './modules/background'
import CaseStudyScrollEffects from './modules/case-study-scroll-effects'
import Mouse from './modules/mouse'
import TextMarquee from './modules/text-marquee'
import Typography from './modules/typography'

console.log('Strata Case Study v1.04')

// window.gsap = gsap
// window.SplitText = SplitText

// gsap.registerPlugin(SplitText)

$(() => {
  Animations.init()
  Background.init()
  Typography.init()
  TextMarquee.init()
  CaseStudyScrollEffects.init()

  if (!isTouchDevice()) {
    Mouse.init()
  }
})
