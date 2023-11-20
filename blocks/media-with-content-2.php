<!-- Section - Media with content #2 -->
<section class="section bg-white inverted">
  <!-- Container -->
  <div class="section-container container">
    <div class="container-inner">
      <?php if ($title): ?>
      <h4 class="mb-layout-xs"><?php echo $title; ?></h4>
      <?php endif; ?>
      <div class="row gutters-lg">
        <div class="col-md-6 mb-layout-xs mb-md-0">
          <!-- Media -->
          <div class="media absolute">
            <img src="<?php echo $image; ?>" alt="" />
            <?php if ($logotypes): ?>
            <ul class="list-logotypes">
              <?php foreach ($logotypes as $key => $logo): ?>
              <li data-animation="fade-in-down" data-animation-delay="<?php echo 250 * $key; ?>">
                <img src="<?php echo $logo['image'] ?>" alt="">
              </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-6">
          <?php echo $content; ?>
          <?php if ($link): ?>
          <a href="<?php echo $link['url']; ?>" class="btn btn-primary" data-mp>
            <span class="btn-outline" data-mp-item data-mp-scale="1.1"></span>
            <span class="btn-label"><?php echo $link['title']; ?></span>
            <i class="btn-icon i i-arrow-top-right-fat"></i>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
