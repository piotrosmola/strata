import { disablePageScroll, enablePageScroll } from 'scroll-lock'

const Toggle = {
  $toggle: $('[data-toggle]'),
  $dismiss: $('[data-dismiss]'),
  $root: $('body'),
  init() {
    const _ = this

    _.$toggle.on('click', function() {
      const $self = $(this)
      if (_.$root.hasClass(`${$(this).attr('data-toggle')}-visible`)) {
        _.$root.removeClass(`${$(this).attr('data-toggle')}-visible`)

        if ($self.data('lock-scroll')) {
          enablePageScroll()
        }
      } else {
        _.$root.addClass(`${$(this).attr('data-toggle')}-visible`)

        if ($self.data('lock-scroll')) {
          disablePageScroll()
        }
      }
      return false
    })

    _.$dismiss.on('click', function() {
      _.$root.removeClass(`${$(this).attr('data-dismiss')}-visible`)
      enablePageScroll()
      return false
    })
  }
}

export default Toggle
