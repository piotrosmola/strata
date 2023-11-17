<!-- Section - CTA -->
<section class="section cta">
  <!-- Background -->
  <div class="section-bg">
    <div class="waves reversed">
      <div class="waves-inner">
        <video src="assets/video/waves.mp4" autoplay loop muted playsinline></video>
      </div>
    </div>
  </div>
  <!-- Container -->
  <div class="section-container container">
    <div class="container-inner">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 wysiwyg mb-2 mb-md-0">
          <!-- Content -->
          <div class="section-content">
            <h2><?php echo $title ?></h2>
            <p class="lead"><?php echo $description ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 text-md-right">
          <!-- Button -->
          <a href="<?php echo $link['url'] ?>" class="btn btn-oval" data-mp>
            <span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
            <span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
            <i class="btn-icon i i-arrow-top-right"></i>
            <span class="btn-label"><?php echo $link['title'] ?></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
