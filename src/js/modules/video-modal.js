import Scroll from './scroll'

const $body = $('body')

const VideoModal = {
  init() {
    const _ = this

    $('[data-toggle="video-modal"]').on('click', function () {
      const $self = $(this)
      const src = $self.data('video')
      const iframe = $self.data('iframe')
      let $modal = $body.find(`#video-modal`)

      if (!$modal.length) {
        const $object = iframe
          ? $(`<iframe class="video-modal-iframe" src="${src}" frameborder="0"  allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>`)
          : $(`<video class="video-modal-video" src="${src}" autoplay controls></video>`)
        $modal = $(`
          <div class="video-modal">
            <button class="video-modal-close close" data-dismiss="video-modal"></button>
          </div>
        `)
        $modal.prepend($object)
        const $close = $modal.find('[data-dismiss="video-modal"]')
        $close.on('click', function () {
          $modal.fadeOut(150, function () {
            $modal.remove()
            Scroll.scroller?.paused(false)
          })
        })
        $body.append($modal)
        Scroll.scroller?.paused(true)
      }

      $modal.fadeIn(150).addClass('open')
    })
  }
}

export default VideoModal
