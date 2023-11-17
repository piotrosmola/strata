const BackToTop = {
  init() {
    $('[data-target="back-to-top"]').on('click', function () {
      $('html, body').animate({ scrollTop: 0 }, 1200)
      return false
    })
  }
}

export default BackToTop
