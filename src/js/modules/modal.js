const Modal = {
  $el: $('.modal'),
  $toggler: $('[data-toggle="modal"]'),
  init() {
    const _ = this

    _.$toggler.each(function() {
      const $self = $(this)

      $self.on('click', function() {
        const $target = $($self.data('target') || $self.attr('href'))
        _.show($target)
        return false
      })
    })
  },
  show($target) {
    const _ = this

    $target.fadeIn(200).addClass('open')
    $('body').addClass('modal-open')

    $target.find('.modal-body').on('click', function() {
      _.hide($target)
    })

    $target.find('.modal-dialog').on('click', function(e) {
      e.stopPropagation()
    })

    $target.find('[data-dismiss="modal"], .modal-backdrop').on('click', function() {
      _.hide($target)
    })
  },
  hide($target) {
    $target
      .removeClass('open')
      .fadeOut(200)
      .removeClass('active')
    $target.trigger({
      type: 'hide'
    })
    $('body').removeClass('modal-open')
  }
}

export default Modal
