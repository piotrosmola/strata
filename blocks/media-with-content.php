  <!-- Section - Media with content -->
  <section class="section media-with-content">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <div class="row gutters-lg align-items-end justify-content-center <?php echo $reversed ? 'reverse' : ''; ?>">
          <div class="col-lg-5 col-md-6 wysiwyg mb-layout-sm mb-md-0">
            <?php echo $content ?>
          </div>
          <div class="col-lg-5 col-md-6">
            <!-- Media -->
            <div class="media">
              <img src="<?php echo $image; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>