import gsap from 'gsap'
import { ScrollSmoother } from 'gsap/ScrollSmoother'
import { ScrollTrigger } from 'gsap/ScrollTrigger'
import { SplitText } from 'gsap/SplitText'
import isTouchDevice from 'is-touch-device'

import Animations from './modules/animations'
import Background from './modules/background'
import Carousel from './modules/carousel'
import Counter from './modules/counter'
import Logotypes from './modules/logotypes'
import Mouse from './modules/mouse'
import Navigation from './modules/navigation'
import Page from './modules/page'
import Panel from './modules/panel'
import Preloader from './modules/preloader'
import Scroll from './modules/scroll'
import ScrollEffects from './modules/scroll-effects'
import Tabs from './modules/tabs'
import Typography from './modules/typography'
import VideoModal from './modules/video-modal'

$(() => {
  Preloader.init()
  Navigation.init()
  Scroll.init()
  Page.init()
})

window.gsap = gsap
window.ScrollTrigger = ScrollTrigger
window.SplitText = SplitText
window.SmoothScroll = ScrollSmoother

window.addEventListener('page-loaded', () => {
  Counter.init()
  Typography.init()
  Animations.init()
  Background.init()
  Carousel.init()
  Tabs.init()
  Panel.init()
  Logotypes.init()
  ScrollEffects.init()
  VideoModal.init()

  Page.handlePageLoaded()

  if (!isTouchDevice()) {
    Mouse.init()
  }
})
