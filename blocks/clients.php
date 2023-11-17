  <!-- Section - Clients -->
  <section class="section bg-white inverted pt-layout-sm pb-layout-sm">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <h5 class="mb-layout-xs"><?php echo $title; ?></h5>
        <div class="carousel carousel-logotypes swiper">
          <div class="swiper-wrapper">
            <?php foreach ($logotypes as $key => $logo): ?>
            <div class="swiper-slide">
              <img src="<?php echo $logo['image'] ?>" alt="">
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
