import isTouchDevice from 'is-touch-device'

import Animations from './modules/animations'
import Background from './modules/background'
import Carousel from './modules/carousel'
import Counter from './modules/counter'
import Cta from './modules/cta'
import Mouse from './modules/mouse'
import Navigation from './modules/navigation'
import Panel from './modules/panel'
import Preloader from './modules/preloader'
import Scroll from './modules/scroll'
import ScrollEffects from './modules/scroll-effects'
import Tabs from './modules/tabs'
import Typography from './modules/typography'

Preloader.init()

$(() => {
  Navigation.init()
  Scroll.init()

  if (!isTouchDevice()) {
    Mouse.init()
  }
})

window.addEventListener('page-loaded', () => {
  Counter.init()
  Typography.init()
  Animations.init()
  Background.init()
  Carousel.init()
  Cta.init()
  Tabs.init()
  Panel.init()
  ScrollEffects.init()
})
