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

class Cursor {
  constructor(options = {}) {
    this.DOM = {
      el: ELEMENT
    }

    this.createHTML()

    this.$options = Object.freeze({
      mixBlendMode: null,
      ...options
    })
    this.bounds = {}
    this.lastMousePos = {}
    this.DOM.el.classList.add(BASE_CLASS)
    this.mousePos = {
      x: 0,
      y: 0
    }

    Array.from(this.DOM.el.children).forEach(el => {
      const name = el.dataset.cursorId

      this.DOM[name] = el
      this.bounds[name] = el.getBoundingClientRect()
      this.lastMousePos[name] = el?.getBoundingClientRect() || { top: 0, left: 0 }
    })

    this.initEvents()

    requestAnimationFrame(() => this.render())
  }

  setMouseMove(ev) {
    this.mousePos = getMousePos(ev)
  }

  initEvents() {
    const mouseMove = ev => this.setMouseMove(ev)

    window.removeEventListener('mousemove', mouseMove)
    window.addEventListener('mousemove', mouseMove, false)

    document.querySelectorAll('[data-cursor]').forEach(el => {
      const name = el.dataset.cursor
      el.addEventListener(
        'mouseover',
        () => {
          this.enter({ name })
        },
        false
      )
      el.addEventListener(
        'mouseleave',
        () => {
          this.leave({ name })
        },
        false
      )
    })
  }

  createHTML() {
    const HTML = `
      <div class="${BASE_CLASS}-inner ${BASE_CLASS}-oval" data-cursor-id="oval" data-cursor-lerp="0.1">
        <div class="${BASE_CLASS}-oval-bg"></div>
        <div class="${BASE_CLASS}-oval-outline"></div>
        <div class="${BASE_CLASS}-oval-body">
          <i class="i i-plus"></i>
          <span>More</span>
        </div>
      </div>
      <div class="${BASE_CLASS}-inner ${BASE_CLASS}-arrows" data-cursor-id="arrows" data-cursor-lerp="0.1"></div>
    `

    this.DOM.el.innerHTML = HTML
  }

  render() {
    requestAnimationFrame(() => this.render())

    Array.from(this.DOM.el.children).forEach(el => {
      const name = el.dataset.cursorId
      const d = Number(el.dataset.cursorLerp) || 0.1

      this.bounds[name] = this.DOM[name].getBoundingClientRect()

      this.lastMousePos[name].x = lerp(this.lastMousePos[name].x, this.mousePos.x - this.bounds[name].width / 2, d)
      this.lastMousePos[name].y = lerp(this.lastMousePos[name].y, this.mousePos.y - this.bounds[name].height / 2, d)

      this.DOM[name].style.transform = `translateX(${this.lastMousePos[name].x}px) translateY(${this.lastMousePos[name].y}px)`
    })
  }

  enter({ name }) {
    this.DOM.el.classList.add(`${BASE_CLASS}-${name}-active`)
  }

  leave({ name }) {
    this.DOM.el.classList.remove(`${BASE_CLASS}-${name}-active`)
  }
}

export default Cursor
