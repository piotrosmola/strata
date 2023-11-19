import { enablePageScroll } from 'scroll-lock'

const Preloader = {
  $el: $('#page-loader'),
  $loader: $('[data-page-progress]'),
  $body: $('body'),
  $value: $('[data-page-progress-value]'),
  init(mode = 'DEFAULT') {
    const _ = this

    if (mode === 'DEV') {
      _.$el.hide()
      _.hide()
    }

    function loadbar() {
      var img = Array.from(document.images).filter(o => !o.src.includes('cloudflare')),
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
      transition: 'stroke-dashoffset 0.75s linear',
      'stroke-dashoffset': 945 - (perc / 100) * 945
    })
    _.$value.text(`${perc}%`)
  },
  start() {
    const _ = this

    _.$body.addClass('page-changed')
  },
  hide() {
    const _ = this
    const eventLoaded = new Event('page-loaded')
    const eventHidden = new Event('page-loader-hidden')

    setTimeout(() => {
      _.$loader.addClass('loaded')
      _.$body.addClass('page-loaded')
      _.$body.removeClass('page-hide-content')
      window.dispatchEvent(eventLoaded)
    }, 750)

    setTimeout(() => {
      _.$body.addClass('page-show-content')
      _.$body.addClass('page-loaded-first-time')

      window.dispatchEvent(eventHidden)
      enablePageScroll()
    }, 1000)
  },
  show() {
    const _ = this

    _.$body.addClass('page-hide-content')
  }
}

export default Preloader
