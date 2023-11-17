const ELEMENT = document.getElementById('cursor'),
  BASE_CLASS = 'cursor',
  lerp = (a, b, n) => (1 - n) * a + n * b,
  getMousePos = e => {
    let posx = 0,
      posy = 0

    if (!e) e = window.event

    if (e.pageX || e.pageY) {
      posx = e.pageX
      posy = e.pageY
    } else if (e.clientX || e.clientY) {
      posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft
      posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop
    }

    return {
      x: posx,
      y: posy
    }
  }

export const Cursor = {
  init(options = {}) {
    this.DOM = {
      el: ELEMENT
    }
    this.$options = Object.freeze({
      lerps: {
        dot: 0.15,
        plus: 0.12
      },
      ...options
    })

    this.createHTML()

    this.DOM.dot = this.DOM.el.querySelector(`.${BASE_CLASS}-inner-dot`)
    this.DOM.plus = this.DOM.el.querySelector(`.${BASE_CLASS}-inner-plus`)

    this.bounds = {
      dot: this.DOM.dot ? this.DOM.dot.getBoundingClientRect() : null,
      plus: this.DOM.plus ? this.DOM.plus.getBoundingClientRect() : null
    }

    if (this.bounds.dot && !this.bounds.dot.width) {
      const COMPUTED_STYLES = window.getComputedStyle(this.DOM.dot)

      this.bounds.dot.width = parseInt(COMPUTED_STYLES.getPropertyValue('width').replace('px', ''))
      this.bounds.dot.height = parseInt(COMPUTED_STYLES.getPropertyValue('height').replace('px', ''))
    }

    if (this.bounds.plus && !this.bounds.plus.width) {
      const COMPUTED_STYLES = window.getComputedStyle(this.DOM.plus)

      this.bounds.plus.width = parseInt(COMPUTED_STYLES.getPropertyValue('width').replace('px', ''))
      this.bounds.plus.height = parseInt(COMPUTED_STYLES.getPropertyValue('height').replace('px', ''))
    }

    this.mousePos = {
      x: 0,
      y: 0
    }
    this.lastMousePos = {
      dot: this.DOM.dot
        ? this.DOM.dot.getBoundingClientRect()
        : {
            top: 0,
            left: 0
          },
      plus: this.DOM.plus
        ? this.DOM.plus.getBoundingClientRect()
        : {
            top: 0,
            left: 0
          }
    }

    this.initEvents()

    requestAnimationFrame(() => this.render())
  },

  setMouseMove(ev) {
    this.mousePos = getMousePos(ev)
  },

  initEvents() {
    const mouseMove = ev => this.setMouseMove(ev)

    window.removeEventListener('mousemove', mouseMove)
    window.addEventListener('mousemove', mouseMove, false)

    document.querySelectorAll('[data-cursor]').forEach(el => {
      el.addEventListener(
        'mouseenter',
        () => {
          this.enter(el.getAttribute('data-cursor'))
        },
        false
      )
      el.addEventListener(
        'mouseleave',
        () => {
          this.leave(el.getAttribute('data-cursor'))
        },
        false
      )
    })

    document.querySelectorAll('a').forEach(el => {
      el.addEventListener(
        'mouseenter',
        () => {
          this.enter('link')
        },
        false
      )
      el.addEventListener(
        'mouseleave',
        () => {
          this.leave('link')
        },
        false
      )
    })
  },

  createHTML() {
    const HTML = `
      <div class="${BASE_CLASS}-inner ${BASE_CLASS}-inner-dot"></div>
      <div class="${BASE_CLASS}-inner ${BASE_CLASS}-inner-plus"></div>
    `

    this.DOM.el.innerHTML = HTML
  },

  render() {
    requestAnimationFrame(() => this.render())

    const {
      lerps: { dot, plus }
    } = this.$options

    this.bounds.dot = this.DOM.dot.getBoundingClientRect()
    this.lastMousePos.dot.x = lerp(this.lastMousePos.dot.x, this.mousePos.x - this.bounds.dot.width / 2, dot)
    this.lastMousePos.dot.y = lerp(this.lastMousePos.dot.y, this.mousePos.y - this.bounds.dot.height / 2, dot)

    this.DOM.dot.style.transform = `translateX(${this.lastMousePos.dot.x}px) translateY(${this.lastMousePos.dot.y}px)`

    if (this.bounds.plus) {
      this.bounds.plus = this.DOM.plus.getBoundingClientRect()

      this.lastMousePos.plus.x = lerp(this.lastMousePos.plus.x, this.mousePos.x - this.bounds.plus.width / 2, plus)
      this.lastMousePos.plus.y = lerp(this.lastMousePos.plus.y, this.mousePos.y - this.bounds.plus.height / 2, plus)

      this.DOM.plus.style.transform = `translateX(${this.lastMousePos.plus.x}px) translateY(${this.lastMousePos.plus.y}px)`
    }
  },

  enter(mode = 'default') {
    this.DOM.el.classList.add(`${BASE_CLASS}-${mode}-active`)
  },

  leave(mode = 'default') {
    this.DOM.el.classList.remove(`${BASE_CLASS}-${mode}-active`)
  }
}

export default Cursor
