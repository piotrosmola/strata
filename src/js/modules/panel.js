const Panel = {
  init() {
    const _ = this

    _.$el = $('.panel')

    if (_.$el.length) {
      _.$el.find('.panel-header').on('click', function () {
        const $self = $(this)
        if (!$self.parents('.panel').hasClass('panel-blocked')) {
          $self.parents('.panel').toggleClass('open')
          $self.next('.panel-content').slideToggle(200)
        }
        return false
      })
    }
  }
}

export default Panel
