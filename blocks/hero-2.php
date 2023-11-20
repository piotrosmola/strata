<!-- Section - Hero #2 -->
<section class="section hero-2 <?php echo $align ? $align : 'left'; ?>">
  <!-- Background -->
  <div class="section-bg">
    <div class="waves reversed bg-video">
      <div class="waves-inner">
        <video src="assets/video/waves.mp4" autoplay loop muted playsinline></video>
        <img src="assets/img/waves.jpg" alt="">
      </div>
    </div>
  </div>
  <!-- Container -->
  <div class="section-container container">
    <div class="container-inner">
      <!-- Content -->
      <div class="section-content">
        <h1 class="h2 <?php echo $outlineTitle ? 'outline-text' : ''; ?>" data-split-chars data-animate="true"><?php echo $title ?></h1>
        <p class="lead border-<?php echo $align ? $align : 'left'; ?>"><?php echo $description ?></p>
      </div>
    </div>
  </div>
</section>