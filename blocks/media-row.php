  <!-- Section - Media Row -->
  <section class="section media-row">
    <!-- Container -->
    <div class="section-container container pt-layout-xs pb-layout-xs">
      <div class="container-inner">
        <div class="carousel swiper" data-breakpoints="[
            ['0', 1, 30],
            ['575', 2, 30],
            ['991', 3, 60],
          ]">
          <div class="swiper-wrapper">
            <?php foreach ($rows as $key => $media): ?>
            <div class="swiper-slide">
              <div class="media">
                <img src="<?php echo $media['image'] ?>" alt="">
                <?php if ($media['videoUrl']): ?>
                <button data-toggle="video-modal" data-video="<?php echo $media['videoUrl']; ?>" class="play play-<?php echo $media['theme']; ?>"></button>
                <?php endif; ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>