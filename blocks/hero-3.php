  <!-- Section - Hero #3 -->
  <section class="section hero-3 <?php echo $reversed ? 'reversed' : ''; ?>">
    <!-- Background -->
    <div class="section-bg">
      <div class="bg-image"><img src="<?php echo $image; ?>" alt=""></div>
    </div>
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <!-- Content -->
        <div class="section-content">
          <h1 class="<?php echo $largeTitle ? 'h2' : 'h3' ?>"><?php echo $title ?></h1>
          <?php if ( $description ) : ?>
          <p class="lead border-<?php echo $reversed ? 'right' : 'left'; ?>"> <?php echo $description ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>