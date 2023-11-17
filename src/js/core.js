import isTouchDevice from 'is-touch-device'

import Animations from './modules/animations'
import Carousel from './modules/carousel'
import Cta from './modules/cta'
import Hero from './modules/hero'
import Images from './modules/images'
import Intro from './modules/intro'
import Marquee from './modules/marquee'
import MediaRow from './modules/media-row'
import MediaWithContent from './modules/media-with-content'
import MomentsGrid from './modules/moments-grid'
import Mouse from './modules/mouse'
import Navigation from './modules/navigation'
import Panel from './modules/panel'
import Scroll from './modules/scroll'
import Tabs from './modules/tabs'
import Typography from './modules/typography'

$(() => {
  Navigation.init()
  Typography.init()
  Animations.init()
  Images.init()
  Marquee.init()
  Hero.init()
  Carousel.init()
  Scroll.init()
  Cta.init()
  MomentsGrid.init()
  Intro.init()
  Tabs.init()
  Panel.init()
  MediaRow.init()
  MediaWithContent.init()

  if (!isTouchDevice()) {
    Mouse.init()
  }
})
