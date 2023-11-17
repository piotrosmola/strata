const Tabs = {
  $toggler: $('[data-toggle="tab"]'),
  $pane: $('.tabs-pane'),
  init: function () {
    const _ = this

    _.$toggler.on('click', function (e) {
      const $self = $(this)
      const $target = $($self.attr('href') || $self.attr('data-target'))
      const $nav = $self.parents('.nav')
      const $tabs = $($nav.data('tabs'))

      $tabs
        .find('.tabs-pane.active')
        .fadeOut(150, function () {
          $target
            .fadeIn(150, function () {})
            .addClass('active')
            .trigger('tabs:show')

          $(window).trigger('tabs:show')
        })
        .removeClass('active')
      $nav.find('.active').removeClass('active')
      $self.addClass('active')

      $nav.trigger('tabs:toggle')

      return false
    })

    _.$pane.each(function () {
      const $self = $(this)

      if ($self.index() === 0) {
        $self.addClass('active').show(0)
        $(`[href="#${$self.attr('id')}"]`).addClass('active')
      }
    })
  }
}

export default Tabs
