  <!-- Section - Accordion -->
  <section class="section">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <?php foreach ($panels as $key => $panel): ?>
            <!-- Panel -->
            <div class="panel panel-<?php echo $theme; ?>">
              <div class="panel-header">
                <div class="panel-number h4">
                  <span><?php echo sprintf("%02d", $key+1); ?></span>
                  <span><?php echo sprintf("%02d", $key+1); ?></span>
                </div>
                <h4 class="panel-title">
                  <?php echo $panel['title'] ?>
                </h4>
                <div class="panel-indicator">
                  <i class="i i-arrow-top-right"></i>
                </div>
              </div>
              <div class="panel-content">
                <div class="wysiwyg">
                  <?php echo $panel['content'] ?>
                  <?php if ($panel['link']): ?>
                  <a href="<?php echo $panel['link']['url']; ?>" class="btn btn-primary" data-mp>
                    <span class="btn-outline" data-mp-item data-mp-scale="1.1"></span>
                    <span class="btn-label"><?php echo $panel['link']['title']; ?></span>
                    <i class="btn-icon i i-arrow-top-right-fat"></i>
                  </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>