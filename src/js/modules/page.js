import gsap from 'gsap'
import imagesLoaded from 'imagesloaded'

import Preloader from './preloader'
import Scroll from './scroll'
import ScrollEffects from './scroll-effects'

imagesLoaded.makeJQueryPlugin($)

const Page = {
  $workItemImage: null,
  previousPosition: 0,
  momentPopEvent: false,

  init() {
    const _ = this

    _.$body = $('body')
    _.$content = $('#content')
    _.$preloader = $('#preloader')
    _.$tmp = $('<div id="tmp" />')
    _.$body.append(_.$tmp)

    _.$body.on('click', 'a:not([target="_blank"])', function () {
      _.momentPopEvent = false
      _.$workItemImage = null

      const $self = $(this)
      const url = $self.attr('href')
      const $momentsSection = $self.parents('.moments')

      if ($momentsSection.length) {
        _.previousPosition = Scroll.scroller.scrollTop()
      } else {
        _.previousPosition = null
      }

      if (url !== '#' && !url.includes('mailto:') && !url.includes('tel:')) {
        if ($self.hasClass('moment-card')) {
          const $self = $(this)
          const $media = $self.find('.moment-card-media > *')
          const $preloaderMedia = _.$preloader.find('[data-loader-media]')
          const bounds = $media[0].getBoundingClientRect()
          // const styles = window.getComputedStyle($media[0])

          _.$mediaClone = $media.clone()

          _.$mediaClone.css({
            top: `${bounds.y}px`,
            left: `${bounds.x}px`,
            width: `${bounds.width}px`,
            height: `${bounds.height}px`
          })

          $preloaderMedia.html('').append(_.$mediaClone)

          Preloader.show()

          gsap.to(_.$mediaClone[0], {
            y: `${-bounds.y}px`,
            x: `${-bounds.x}px`,
            width: `${window.innerWidth}px`,
            height: `${window.innerHeight}px`,
            opacity: 0.15,
            duration: 0.75,
            delay: 0.25,
            ease: 'power3.out',
            onComplete: () => {
              Preloader.start()

              setTimeout(() => {
                _.load(url)
              }, 500)
            }
          })
        } else {
          Preloader.show()
          setTimeout(() => {
            Preloader.start()
          }, 300)
          setTimeout(() => {
            _.load(url)
          }, 500)
        }
      }

      return false
    })

    $(window).on('popstate', function (event) {
      Scroll.scroller?.paused(true)

      if (_.$body.find('.hero-moment')) {
        _.momentPopEvent = true
      } else {
        _.momentPopEvent = false
      }
      Preloader.show()
      setTimeout(() => {
        _.load(document.location.href)
        Preloader.start()
      }, 500)
    })
  },
  load(url) {
    const _ = this

    _.$tmp.load(`${url} #content`, function (res) {
      document.title = $(res).filter('title').text()

      _.$tmp.find('.section').unwrap()
      _.updateUrl(url)

      const total = _.$tmp.find('img').length
      let count = 0
      let perc = 0

      _.$tmp
        .imagesLoaded()
        .progress(function (instance, image) {
          count += 1
          perc = ((100 / total) * count) << 0

          Preloader.set(perc)
        })
        .always(function () {
          _.replace()

          Preloader.hide()
        })
    })
  },
  updateUrl(url) {
    const _ = this

    window.history.pushState({}, '', url)
  },
  replace() {
    const _ = this

    ScrollEffects.killAll()
    _.$content.html('').append(_.$tmp.children())
    _.$tmp.html('')
    window.dispatchEvent(new Event('resize'))
  },
  handlePageLoaded() {
    const _ = this

    if (_.$body.find('.moments').length && _.previousPosition && _.momentPopEvent) {
      Scroll.scroller.scrollTo(_.previousPosition, true)
    }
  }
}

export default Page
