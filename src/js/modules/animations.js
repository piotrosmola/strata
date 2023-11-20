import Scroll from './scroll'

const Animations = {
  init() {
    const _ = this
    const offset = $(window).height() * 0.8

    $('[data-animation-group]').each(function () {
      const $self = $(this)
      const selfOffset = $self[0].getBoundingClientRect().y

      if (selfOffset <= offset) {
        $('[data-animation], [data-animate]', $self).each(function () {
          _.animateRun($(this))
        })
      }
    })

    $('[data-animation], [data-animate]').each(function () {
      const $self = $(this)
      const selfOffset = $self[0].getBoundingClientRect().y
      const isInGroup = $self.parents('data-animation-group').length

      if (!isInGroup) {
        if (selfOffset <= offset) {
          _.animateRun($self)
        }
      }
    })
  },
  animateRun($el) {
    const animation = $el.data('animation')
    const type = $el.data('animate')
    const groupDelay = $el.parents('[data-animation-group-delay]')

    if (!$el[0].timers) $el[0].timers = []

    let delay = Number($el.data('animation-delay') || 0)

    if (groupDelay.length && $(window).width() > 991) {
      delay += Number(groupDelay.data('animation-group-delay'))
    }
    $el.addClass('in')
    $el[0].timers.push(
      setTimeout(() => {
        $el.addClass('visible ' + (animation || ''))

        if (type === 'count') {
          if ($el[0].counter && $el[0].counter.paused) $el[0].counter.start()
          return
        } else if ($el[0].poTimeline) {
          $el[0].poTimeline.play()
        }
      }, delay)
    )
  },
  animateReset($el) {
    const animation = $el.data('animation')
    const type = $el.data('animate')

    $el.removeClass('in').removeClass('visible').removeClass(animation)

    if ($el[0].timers && $el[0].timers.length) {
      $el[0].timers.forEach(el => clearTimeout(el))
      $el[0].timers = []
    }

    if ($el[0].counter) $el[0].counter.reset()
    else if ($el[0].poTimeline) {
      try {
        $el[0].poTimeline.restart()
        $el[0].poTimeline.pause()
      } catch (e) {
        console.warn('Timeline not found', $el[0])
      }
    }
  },
  handle(direction) {
    const _ = this
    const offset = $(window).height() * 0.8

    $('[data-animation-group]').each(function () {
      const $self = $(this)
      const bounds = $self[0].getBoundingClientRect()
      const selfOffset = bounds.y
      const selfHeight = bounds.height

      if (direction === 'DOWN' && selfOffset <= offset && !$self.hasClass('visible')) {
        $('[data-animation], [data-animate]', $self).each(function () {
          _.animateRun($(this))
        })
      } else if (direction === 'UP' && selfOffset <= offset && !$self.hasClass('visible')) {
        $('[data-animation], [data-animate]', $self).each(function () {
          _.animateRun($(this))
        })
      } else if (direction === 'UP' && selfOffset > offset && $self.hasClass('in')) {
        $('[data-animation], [data-animate]', $self).each(function () {
          _.animateReset($(this))
        })
      } else if (direction === 'DOWN' && selfOffset < -selfHeight && $self.hasClass('in')) {
        // $('[data-animation], [data-animate]', $self).each(function () {
        //   _.animateReset($(this))
        // })
      }
    })

    $('[data-animation], [data-animate]').each(function () {
      const $self = $(this)
      const bounds = $self[0].getBoundingClientRect()
      const selfOffset = bounds.y
      const selfHeight = bounds.height
      const isInGroup = $self.parents('data-animation-group').length

      if (!isInGroup) {
        if (direction === 'DOWN' && selfOffset <= offset && !$self.hasClass('visible')) {
          _.animateRun($self)
        } else if (direction === 'UP' && selfOffset <= offset && !$self.hasClass('visible')) {
          _.animateRun($self)
        } else if (direction === 'UP' && selfOffset > $(window).height() && $self.hasClass('in')) {
          _.animateReset($self)
        } else if (direction === 'DOWN' && selfOffset < -selfHeight && $self.hasClass('in')) {
          // _.animateReset($self)
        }
      }
    })
  }
}

export default Animations
