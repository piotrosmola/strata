const $body = $('body')

const VideoModal = {
  init() {
    const _ = this

    $('[data-toggle="video-modal"]').on('click', function () {
      const $self = $(this)
      const src = $self.data('video')
      let $modal = $body.find(`#video-modal`)

      if (!$modal.length) {
        $modal = $(`
          <div class="video-modal">
            <iframe class="video-modal-iframe" src="${src}" frameborder="0"  allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <button class="video-modal-close close" data-dismiss="video-modal"></button>
          </div>
        `)
        const $close = $modal.find('[data-dismiss="video-modal"]')
        $close.on('click', function () {
          $modal.fadeOut(150, function () {
            $modal.remove()
          })
        })
        $body.append($modal)
      }

      $modal.fadeIn(150).addClass('open')
    })
  }
}

export default VideoModal
