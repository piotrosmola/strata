  <!-- Section - Moments Carousel -->
  <section class="section <?php echo $addBorder ? 'border-top' : '' ?>">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <h3 class="outline-text mb-layout-xs"><?php echo $title; ?></h3>
        <div class="carousel carousel-moments swiper" data-breakpoints="[
            ['0', 1, 30],
            ['575', 2, 30],
            ['991', 3, 60],
          ]">
          <div class="swiper-wrapper">
            <?php foreach ($moments as $key => $moment): ?>
            <div class="swiper-slide">
              <!-- Moment Card -->
              <a href="#" class="moment-card" data-cursor="oval">
                <div class="moment-card-media">
                  <?php if($moment['image']): ?><img src="<?php echo $moment['image']; ?>" alt="" /><?php endif; ?>
                  <?php if($moment['video']): ?><video src="<?php echo $moment['video']; ?>" alt="" data-play-on-hover></video><?php endif; ?>
                </div>
                <div class="moment-card-content">
                  <span class="badge badge-<?php echo $moment['theme']; ?>"><?php echo $moment['category']; ?></span>
                  <h5><?php echo $moment['title']; ?></h5>
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