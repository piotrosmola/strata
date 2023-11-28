<!-- Section - Media with content #2 -->
<section class="section bg-white inverted">
  <!-- Container -->
  <div class="section-container container">
    <div class="container-inner">
      <div class="row gutters-lg">
        <?php foreach ($columns as $key => $col): ?>
        <div class="col-md-6 <?php echo $key < count($columns) - 1 ? 'mb-layout-sm mb-md-0' : '' ?>">
          <?php if ($col['title']): ?>
          <h4 class="mb-layout-xs"><?php echo $col['title']; ?></h4>
          <?php endif; ?>
          <!-- Media -->
          <div class="media mb-layout-xs">
            <img src="<?php echo $col['image']; ?>" alt="" />
          </div>
          <div class="wysiwyg">
            <?php echo $col['content']; ?>
            <?php if ($col['link']): ?>
            <a href="<?php echo $col['link']['url']; ?>" class="btn btn-primary" data-mp>
              <span class="btn-outline" data-mp-item data-mp-scale="1.1"></span>
              <span class="btn-label"><?php echo $col['link']['title']; ?></span>
              <i class="btn-icon i i-arrow-top-right-fat"></i>
            </a>
            <?php endif; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>