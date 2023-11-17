  <!-- Section - News Carousel -->
  <section class="section <?php echo $addBorder ? 'border-top' : '' ?>">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <h3 class="outline-text mb-layout-xs"><?php echo $title; ?></h3>
        <div class="carousel carousel-news swiper" data-breakpoints="[
            ['0', 1, 30],
            ['575', 2, 30],
            ['991', 3, 60],
          ]">
          <div class="swiper-wrapper">
            <?php foreach ($items as $key => $news): ?>
            <div class="swiper-slide">
              <!-- news Card -->
              <a href="#" class="news-card" data-cursor="oval">
                <div class="news-card-media">
                  <img src="<?php echo $news['image']; ?>" alt="" />
                </div>
                <div class="news-card-content">
                  <span class="badge badge-<?php echo $news['theme']; ?>"><?php echo $news['category']; ?></span>
                  <h5><?php echo $news['title']; ?></h5>
                </div>
              </a>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-button-prev" data-cursor="arrow-left"></div>
          <div class="swiper-button-next" data-cursor="arrow-right"></div>
        </div>
      </div>
    </div>
  </section>