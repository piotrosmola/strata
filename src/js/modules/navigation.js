import { disablePageScroll, enablePageScroll } from 'scroll-lock'

const $body = $('body')

const Navigation = {
  init() {
    const _ = this

    _.$nav = $('#navigation')
    _.scrollers = $('[data-local-scroll]')
    _.navToggle = $('[data-toggle="navigation"]')

    $('.nav-primary > li >  a').each(function () {
      $(this).attr('data-mp', true)
      $(this).html(`<span data-mp-item="0.1">${$(this).text()}</span><span data-mp-item="0.05">${$(this).text()}</span>`)
    })

    _.scrollers.find('a').on('click', function () {
      const $self = $(this)
      const id = $self.attr('href')

      if (id !== '#') {
        _.scrollTo(id)
        return false
      } else {
        return false
      }
    })

    // Navigation Toggle
    _.navToggle.on('click', function () {
      const $self = $(this)
      if (!$body.hasClass('navigation-open')) {
        $self.addClass('open')
        $body.addClass('navigation-open')
        disablePageScroll(_.$nav[0])
      } else {
        $self.removeClass('open')
        $body.removeClass('navigation-open')
        enablePageScroll(_.$nav[0])
      }
      return false
    })
  },
  scrollTo(id) {
    const _ = this
    const $target = $(id)

    _.scrollOffset = 0

    if ($target.length) {
      var offsetTop = $target.offset().top - _.scrollOffset + 1

      $('html, body').animate(
        {
          scrollTop: offsetTop
        },
        600
      )
    } else {
      console.log('Wrong href...')
    }
  },
  hide: function () {
    var _ = this
    $body.removeClass('navigation-open')
    _.navToggle.removeClass('open')
  }
}

export default Navigation
