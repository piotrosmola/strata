  <!-- Section - Features -->
  <section class="section features">
    <!-- Background -->
    <div class="section-bg">
      <?php if ($image): ?>
      <div class="bg-image"><img src="<?php echo $image; ?>" alt=""></div>
      <?php else: ?>
      <div class="waves bg-video">
        <div class="waves-inner">
          <video src="assets/video/waves.mp4" autoplay loop muted playsinline></video>
          <img src="assets/img/waves.jpg" alt="">
        </div>
      </div>
      <?php endif; ?>
    </div>
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <div class="section-content">
          <?php foreach($boxes as $key => $box): ?>
          <!-- Feature Card -->
          <div class="section-card wysiwyg" data-speed="<?php echo 1 + ($key * 0.15) ?>">
            <h5><?php echo $box['title'] ?></h5>
            <ul>
              <?php foreach($box['items'] as $item): ?>
              <li><?php echo $item ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>