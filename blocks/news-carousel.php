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
              <!-- News Card -->
              <a href="single-news.php" class="news-card" data-cursor="oval" data-cursor-text="Read More">
                <div class="news-card-media">
                  <?php if($news['image']): ?><img src="<?php echo $news['image']; ?>" alt="" /><?php endif; ?>
                  <?php if($news['video']): ?><video src="<?php echo $news['video']; ?>" alt="" data-play-on-hover></video><?php endif; ?>
                </div>
                <div class="news-card-content">
                  <span class="btn btn-arrow btn-green"><i class="btn-icon i i-arrow-top-right"></i></span>
                  <span class="badge badge-green"><?php echo $news['category']; ?></span>
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