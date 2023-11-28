  <!-- Section - Clients -->
  <section class="section bg-white inverted pt-layout-sm pb-layout-sm">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <h5 class="mb-layout-xs"><?php echo $title; ?></h5>
        <div class="logotypes">
          <div class="logotypes-wrapper">
            <?php foreach ($logotypes as $key => $logo): ?>
            <div class="logotypes-item">
              <img src="<?php echo $logo['image'] ?>" alt="">
            </div>
            <?php endforeach; ?>
            <?php foreach ($logotypes as $key => $logo): ?>
            <div class="logotypes-item">
              <img src="<?php echo $logo['image'] ?>" alt="">
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>