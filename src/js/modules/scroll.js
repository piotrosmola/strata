import gsap from 'gsap'
import { ScrollSmoother } from 'gsap/ScrollSmoother'
import { Draggable, ScrollTrigger } from 'gsap/all'

gsap.registerPlugin(ScrollTrigger, ScrollSmoother, Draggable)

const $body = $('body')

const Scroll = {
  scrolled: 0,
  lastPos: 0,
  direction: 'DOWN',
  scroller: null,
  isDragging: false,
  init() {
    const _ = this

    _.wrapper = document.querySelector('#wrapper')
    _.content = document.querySelector('#content')
    _.headerContainer = document.querySelector('#header .container')
    _.indicatorWrapper = document.querySelector('#scroller')
    _.indicatorDragger = _.indicatorWrapper.querySelector('.scroller-indicator')
    _.indicatorInner = _.indicatorWrapper.querySelector(' .scroller-inner')

    _.scroller = ScrollSmoother.create({
      wrapper: '#wrapper',
      content: '#content',
      smooth: 1,
      effects: true,
      smoothTouch: 0.1,
      onUpdate: e => {
        // Animations.handle(scrolled, Scroll.direction)
        _.handle(e)
      }
    })

    _.handle(_.scroller)
    _.initDragger()
  },
  initDragger() {
    const _ = this

    let draggerTimeout = null

    Draggable.create(_.indicatorDragger, {
      type: 'y',
      bounds: _.indicatorInner,
      onDrag: function (e) {
        const progress = Math.round((this.y / (_.innerBounds.height - _.draggerBounds.height)) * 100) / 100

        // console.log(`onDrag ${_.content.clientHeight * progress}px`)

        _.scroller.scrollTo(_.content.clientHeight * progress, true)
      },
      onPress: function () {
        _.indicatorDragger.classList.add('dragging')
      },
      onRelease: function () {
        _.indicatorDragger.classList.remove('dragging')
      },
      onDragStart: function () {
        clearTimeout(draggerTimeout)
        _.isDragging = true
      },
      onDragEnd: function (e) {
        draggerTimeout = setTimeout(() => {
          _.isDragging = false
        }, 1000)
      }
    })
  },
  handle(e) {
    const _ = this

    const { progress } = e

    _.innerBounds = _.indicatorInner?.getBoundingClientRect()
    _.draggerBounds = _.indicatorDragger?.getBoundingClientRect()

    _.indicatorDragger.style.setProperty('--progress', progress)
    // console.log(`handle ${progress * (_.innerBounds.height - _.draggerBounds.height)}px`)

    if (!this.isDragging) {
      _.indicatorDragger.style.transform = `translate3d(0,${progress * (_.innerBounds.height - _.draggerBounds.height)}px,0)`
    }

    _.indicatorWrapper.style.setProperty('--left', _.headerContainer.getBoundingClientRect().x + 'px')

    if (progress === 0) {
      _.indicatorDragger.classList.add('is-at-top')
    } else if (progress === 1) {
      _.indicatorDragger.classList.add('is-at-bottom')
    } else {
      _.indicatorDragger.classList.remove('is-at-bottom')
      _.indicatorDragger.classList.remove('is-at-top')
    }

    _.scrolled = e?.scrollTop() || window.scrollY

    if (_.scrolled < _.lastScrollPos) {
      _.direction = 'UP'
      $body.addClass('scrolling-up')
      $body.removeClass('scrolling-down')
    } else {
      _.direction = 'DOWN'
      $body.addClass('scrolling-down')
      $body.removeClass('scrolling-up')
    }

    if (_.scrolled > $(window).height()) {
      $body.addClass('viewport-scrolled')
    } else {
      $body.removeClass('viewport-scrolled')
    }

    if (_.scrolled > 100) {
      $body.addClass('scrolled')
    } else {
      $body.removeClass('scrolled')
    }

    _.lastScrollPos = _.scrolled <= 0 ? 0 : _.scrolled
  }
}

export default Scroll
