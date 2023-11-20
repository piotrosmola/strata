  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Section - Hero #2 -->
  <?php
    includeBlock('blocks/hero-2.php', array(
      'title' => 'Moments <br>That Matter',
      'description' => 'Every brand moment is an opportunity for positive reinforcement.',
    ));
  ?>

  <!-- Section - Moments -->
  <section class="section">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <!-- Tabs -->
        <ul class="nav nav-tabs mb-layout-xs">
          <li><button data-toggle="tab" class="active">All</button></li>
          <li><button data-toggle="tab">Automotive</button></li>
          <li><button data-toggle="tab">Experimental</button></li>
          <li><button data-toggle="tab">Engagement</button></li>
          <li><button data-toggle="tab">Virtual Events</button></li>
        </ul>
        <!-- Moments Grid -->
        <div class="moments-grid mb-layout-xs">
          <!-- Moment Card -->
          <a href="single-moment.php" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project01.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
            </div>
          </a>
          <!-- Moment Card -->
          <a href="single-moment.php" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project02.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
            </div>
          </a>
          <!-- Moment Card -->
          <a href="single-moment.php" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project03.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
            </div>
          </a>
          <!-- Moment Card -->
          <a href="single-moment.php" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project04.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
            </div>
          </a>
          <!-- Moment Card -->
          <a href="single-moment.php" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project05.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
            </div>
          </a>
          <!-- Moment Card -->
          <a href="single-moment.php" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project06.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
            </div>
          </a>
        </div>
        <div class="text-center">
          <!-- Button -->
          <a href="single-moment.php" class="btn btn-oval" data-mp>
            <span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
            <span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
            <span class="btn-label">More Moments</span>
            <i class="btn-icon i i-arrow-down"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section - Clients -->
  <?php
    includeBlock('blocks/clients.php', array(
      'title' => 'Our Clients',
      'logotypes' => array(
        array(
          'image' => 'assets/img/awwards.svg',
          'url' => '#'
        ),
        array(
          'image' => 'assets/img/clutch.svg',
          'url' => '#'
        ),
        array(
          'image' => 'assets/img/css winner.svg',
          'url' => '#'
        ),
        array(
          'image' => 'assets/img/css.svg',
          'url' => '#'
        ),
        array(
          'image' => 'assets/img/dan.svg',
          'url' => '#'
        )
      )
    ));
  ?>

  <!-- Section - CTA -->
  <?php
    includeBlock('blocks/cta.php', array(
      'title' => 'Let\'s have <br />a chat!',
      'description' => 'If you need some help making a moment that matters, we\'d love to talk.',
      'link' => array(
        'title' => 'Say Hello',
        'url' => 'contact.php'
      )
    ));
  ?>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
