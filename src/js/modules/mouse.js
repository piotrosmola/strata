import Cursor from '../lib/cursor'
import MouseParallax from '../lib/mouse-parallax'

const Mouse = {
  init() {
    const _ = this

    _.$cursor = document.querySelector('#cursor')
    _.$mouseParallax = document.querySelectorAll('[data-mp]')

    Array.from(this.$mouseParallax).forEach(el => new MouseParallax(el))
    _.cursorRef = new Cursor(_.$cursor)
  }
}

export default Mouse
