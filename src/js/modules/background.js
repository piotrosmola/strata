import imagesLoaded from 'imagesloaded'

imagesLoaded.makeJQueryPlugin($)

const Background = {
  init() {
    const _ = this

    _.initImages()
    _.initVideos()
  },
  initImages() {
    const _ = this

    _.$images = $('.bg-image')
    _.$images.each(function () {
      const $self = $(this)

      if (!$self.data('prevent-fade')) {
        $self.imagesLoaded(function () {
          $self.addClass('loaded')
        })
      } else {
        $self.addClass('loaded')
      }
    })
  },
  initVideos() {
    const _ = this

    _.$videos = $('.bg-video')
    _.$videos.each(function () {
      const $self = $(this)
      const $video = $self.find('video')

      $video.on('playing', () => $self.addClass('playing'))
    })
  }
}

export default Background
