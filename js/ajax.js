jQuery(document).ready(function ($) {
  // Content Navigation
  if ($('.nav-content').length) {
    $('.content-block > h1, .content-block > h2, .content-block > h3, .content-block > h4, .content-block > h5, .content-block > h6').each(function (i) {
      var anchor =
        i +
        1 +
        '-' +
        $(this)
          .text()
          .toLowerCase()
          .replace(/ /g, '-')
          .replace(/[^\w-]+/g, '')
      $(this).attr('id', anchor)
      $('.nav-content').append('<li><a href="#" data-anchor="#' + anchor + '">' + $(this).text() + '</a></li>')
    })
    $('body').on('click', '.nav-content li a', function (e) {
      e.preventDefault()
      var anchor = $(this).data('anchor')
      $('html, body').animate({ scrollTop: $(anchor).offset().top - 50 }, 800)
    })
  }

  // Load More Posts
  var paged = 1
  $('body').on('click', '.js-more-posts', function (e) {
    e.preventDefault()
    paged = paged + 1
    var button = $(this)
    var max_num_pages = $(this).data('pages')
    var category = $('.js-posts-cat.active').data('category')
    var data = 'action=load_posts&paged=' + paged + '&category=' + category
    $.ajax({
      url: ajax_params.ajax_url,
      data: data,
      type: 'POST',
      beforeSend: function () {
        $('.js-posts').addClass('ajax_loading')
      },
      success: function (data) {
        if (paged >= max_num_pages) button.remove()
        if (data) $('.js-posts-row').append(data)
      },
      complete: function () {
        $('.js-posts').removeClass('ajax_loading')
      }
    })
  })

  // Posts by Category
  $('body').on('click', '.js-posts-cat', function () {
    $('.js-posts-cat').removeClass('active')
    $(this).addClass('active')
    paged = 1
    var category = $(this).data('category')
    var data = 'action=load_posts&paged=' + paged + '&category=' + category
    $.ajax({
      url: ajax_params.ajax_url,
      data: data,
      type: 'POST',
      beforeSend: function () {
        $('.js-posts').addClass('ajax_loading')
      },
      success: function (data) {
        if (data) $('.js-posts').html(data)
      },
      complete: function () {
        $('.js-posts').removeClass('ajax_loading')
      }
    })
  })

  // Load More Moments
  var paged = 1
  $('body').on('click', '.js-more-moments', function (e) {
    e.preventDefault()
    paged = paged + 1
    var button = $(this)
    var max_num_pages = $(this).data('pages')
    var category = $('.js-moments-cat.active').data('category')
    var data = 'action=load_moments&paged=' + paged + '&category=' + category
    $.ajax({
      url: ajax_params.ajax_url,
      data: data,
      type: 'POST',
      beforeSend: function () {
        $('.js-moments').addClass('ajax_loading')
      },
      success: function (data) {
        if (paged >= max_num_pages) button.remove()
        if (data) $('.js-moments-row').append(data)
      },
      complete: function () {
        $('.js-moments').removeClass('ajax_loading')
      }
    })
  })

  // Moments by Category
  $('body').on('click', '.js-moments-cat', function () {
    $('.js-moments-cat').removeClass('active')
    $(this).addClass('active')
    paged = 1
    var category = $(this).data('category')
    var data = 'action=load_moments&paged=' + paged + '&category=' + category
    $.ajax({
      url: ajax_params.ajax_url,
      data: data,
      type: 'POST',
      beforeSend: function () {
        $('.js-moments').addClass('ajax_loading')
      },
      success: function (data) {
        if (data) $('.js-moments').html(data)
      },
      complete: function () {
        $('.js-moments').removeClass('ajax_loading')
      }
    })
  })
})
