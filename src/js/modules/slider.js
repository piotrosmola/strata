const Slider = {
  $slider: $('.section-hero-slider'),
  init: function () {
    var _ = this

    _.$slider.slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 4000,
      fade: true,
      speed: 500,
      pauseOnFocus: false,
      pauseOnHover: false
    })
  }
}

export default Slider
