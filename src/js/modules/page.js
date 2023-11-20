import gsap from 'gsap'
import imagesLoaded from 'imagesloaded'

import Preloader from './preloader'

imagesLoaded.makeJQueryPlugin($)

const Page = {
  $workItemImage: null,

  init() {
    const _ = this

    _.$body = $('body')
    _.$content = $('#content')
    _.$preloader = $('#preloader')
    _.$tmp = $('<div id="tmp" />')
    _.$body.append(_.$tmp)

    _.$body.on('click', 'a:not([target="_blank"])', function () {
      _.$workItemImage = null

      const $self = $(this)
      const url = $self.attr('href')

      if (url !== '#' && !url.includes('mailto:') && !url.includes('tel:')) {
        if ($self.hasClass('moment-card')) {
          const $self = $(this)
          const $media = $self.find('.moment-card-media > *')
          const $preloaderMedia = _.$preloader.find('[data-loader-media]')
          const bounds = $media[0].getBoundingClientRect()

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

    _.$content.html('').append(_.$tmp.children())
    window.dispatchEvent(new Event('resize'))
  },
  goHome() {
    const _ = this
  }
}

export default Page
