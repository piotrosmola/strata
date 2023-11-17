const Video = {
  init() {
    const _ = this

    $('[data-toggle="video"]', '#content').on('click', function() {
      const $self = $(this)
      const $video = $self.parents('.video')
      const url = $self.data('src')

      $self.addClass('disabled').fadeOut(300)

      $video.append(`<iframe class="video-iframe" src="${url}?title=0&byline=0&portrait=0&autoplay=1"  allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>`)
    })
  }
}

export default Video
