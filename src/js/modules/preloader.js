// import { disablePageScroll, enablePageScroll } from 'scroll-lock'
import Navigation from './navigation'
import Scroll from './scroll'

const Preloader = {
  $el: $('#page-loader'),
  $loader: $('[data-loader-progress]'),
  $body: $('body'),
  $value: $('[data-loader-progress-value]'),
  $media: $('[data-loader-media]'),
  init(mode = 'DEFAULT') {
    const _ = this

    _.show()
    _.$body.addClass('page-loading')

    if (mode === 'DEV') {
      _.$el.hide()
      _.hide()
    }

    function loadbar() {
      var img = Array.from(document.images),
        c = 0,
        tot = img.length

      if (tot == 0) return doneLoading()

      function imgLoaded() {
        c += 1
        var perc = ((100 / tot) * c) << 0
        _.set(perc)
        if (c === tot) return doneLoading()
      }

      function doneLoading() {
        _.set(100)
        setTimeout(() => {
          _.hide()
        }, 100)
      }

      for (var i = 0; i < tot; i++) {
        var tImg = new Image()
        tImg.src = img[i].src
        if (tImg.complete) {
          imgLoaded()
        } else {
          tImg.onload = imgLoaded
          tImg.onerror = imgLoaded
        }
      }
    }

    loadbar()
  },
  set(perc) {
    const _ = this

    _.$loader.css({
      'stroke-dashoffset': 945 - (perc / 100) * 945
    })
    _.$value.text(`${perc}%`)
  },
  start() {
    const _ = this
    Scroll.scroller?.paused(true)

    _.$loader.css({
      transition: 'none'
    })
    _.set(0)
    setTimeout(() => {
      _.$loader.css({
        transition: 'stroke-dashoffset 0.25s linear'
      })
    }, 100)

    setTimeout(() => {
      Scroll.scroller?.scrollTo(0)
      Scroll.handle({ progress: 0, scrollTop: () => 0 })
      Navigation.hide()
    }, 750)

    _.$body.addClass('page-loading')
  },
  hide() {
    const _ = this
    const eventLoaded = new Event('page-loaded')
    const eventHidden = new Event('page-loader-hidden')

    setTimeout(() => {
      _.$body.removeClass('page-loading')
      _.$body.addClass('page-loaded')
      _.$body.removeClass('page-hide-content')
      window.dispatchEvent(eventLoaded)
    }, 750)

    setTimeout(() => {
      _.$el.removeClass('loading')
      _.$body.addClass('page-show-content')
      _.$body.addClass('page-loaded-first-time')
      _.$media.html('')

      window.dispatchEvent(eventHidden)
      // enablePageScroll()

      Scroll.scroller?.paused(false)
    }, 1000)
  },
  show() {
    const _ = this

    _.$body.removeClass('page-loaded')
    _.$body.removeClass('page-show-content')
    _.$body.addClass('page-hide-content')
  }
}

export default Preloader
