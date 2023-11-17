  <!-- Section - Content #1 -->
  <section class="section">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <div class="row gutters-lg justify-content-center">
          <div class="col-lg-5 col-md-6 wysiwyg mb-layout-xs mb-md-0">
            <h4><?php echo $title ?></h4>
            <?php if ($logotypes): ?>
            <ul class="list-logotypes">
              <?php foreach ($logotypes as $key => $logo): ?>
              <li>
                <img src="<?php echo $logo['image'] ?>" alt="">
              </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div>
          <div class="col-lg-5 col-md-6 wysiwyg">
            <?php echo $content ?>
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