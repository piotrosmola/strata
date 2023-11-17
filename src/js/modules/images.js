import imagesLoaded from 'imagesloaded'

imagesLoaded.makeJQueryPlugin($)

const Images = {
  $item: $('.bg-image'),
  init() {
    const _ = this

    _.$item.each(function () {
      const $self = $(this)
      const src = $self.data('src')
      const highRes = $self.data('src-2x')

      if (highRes && window.devicePixelRatio >= 2) {
        $self.css('background-image', `url(${highRes})`)
      } else {
        $self.css('background-image', `url(${src})`)
      }
      $self.wrap('<div class="bg-image-container"></div>')
      $self.removeAttr('data-src').removeAttr('data-src-2x')
      if (!$self.data('prevent-fade')) {
        $self.imagesLoaded(
          {
            background: true
          },
          function () {
            $self.addClass('loaded')
          }
        )
      } else {
        $self.addClass('loaded')
      }
    })
  }
}

export default Images
