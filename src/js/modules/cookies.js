import Cookies from 'js-cookie'

const CookiesPopup = {
  $popup: $('#cookies-popup'),
  $accept: $('[data-accept="cookies"]'),
  init() {
    let _ = this

    if (Cookies.get('accepted')) {
      _.$popup.remove()
    } else {
      setTimeout(() => {
        _.$popup.addClass('visible')
      }, 500)

      _.$accept.on('click', () => _.accept())
    }
  },
  accept() {
    let _ = this

    Cookies.set('accepted', true)
    _.$popup.removeClass('visible')
  }
}

export default CookiesPopup
