import 'jquery-countdown'

const Countdown = {
  $el: $('.countdown'),
  init() {
    const _ = this

    _.$el.each(function() {
      const $self = $(this)
      const target = $self.data('target')

      $self.countdown(target, function(event) {
        if ($('html').attr('dir') === 'rtl') {
          $(this).html(event.strftime(`<span>%D <span>وليد</span></span> <span>%H <span>وليد</span></span> <span>%M <span>وليد</span></span> <span>%S <span>وليد</span></span>`))
        } else {
          $(this).html(event.strftime(`<span>%D <span>Days</span></span> <span>%H <span>Hours</span></span> <span>%M <span>Minutes</span></span> <span>%S <span>Seconds</span></span>`))
        }
      })
    })
  },
  handleClick() {
    $('.dropdown.show').removeClass('show')
  }
}

export default Countdown
