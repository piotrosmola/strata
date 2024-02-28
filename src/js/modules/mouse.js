import Cursor from '../lib/cursor'
import MouseParallax from '../lib/mouse-parallax'
import Preloader from './preloader'

const Mouse = {
  init() {
    const _ = this

    _.$cursor = document.querySelector('#cursor')
    _.$mouseParallax = (!Preloader.initialized ? document : document.querySelector('#content')).querySelectorAll('[data-mp]')

    Array.from(this.$mouseParallax).forEach(el => new MouseParallax(el))

    if (!Preloader.initialized && _.$cursor) _.cursorRef = new Cursor(_.$cursor)
    else _.cursorRef?.initEvents(document.querySelector('#content'))
  }
}

export default Mouse
