import { CountUp } from 'countup.js'
import { Odometer } from 'odometer_countup'

const Counter = {
  init() {
    const _ = this

    _.$el = document.querySelectorAll('[data-count-to]')

    _.$el.forEach($el => {
      $el.counter = new CountUp($el, $el.getAttribute('data-count-to'), {
        plugin: new Odometer({ duration: 1.3, lastDigitDelay: 0 }),
        startVal: $el.innerHTML,
        duration: 2.5,
        separator: ''
      })
    })
  }
}

export default Counter
