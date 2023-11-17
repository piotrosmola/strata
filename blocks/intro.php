<!-- Section - Intro -->
<section class="section intro">
  <!-- Background -->
  <div class="section-bg">
    <?php foreach ($images as $key => $image): ?>
    <img src="<?php echo $image['url'] ?>" alt="">
    <?php endforeach; ?>
  </div>

  <!-- Container -->
  <div class="section-container container">
    <div class="container-inner">
      <!-- Content -->
      <div class="section-content">
        <h3 class="outline-text" data-split-lines><?php echo $text ?></h3>
      </div>
    </div>
  </div>
</section>
