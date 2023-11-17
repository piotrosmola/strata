  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Section - Hero #2 -->
  <section class="section hero-2 pb-layout-sm">
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
        <!-- Content -->
        <div class="section-content">
          <h1 class="h2">Moments That Matter</h1>
          <p class="lead add-border">Every brand moment is an opportunity for positive reinforcement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section - Moments -->
  <section class="section pt-0">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <!-- Tabs -->
        <ul class="nav nav-tabs mb-layout-xs">
          <li><button class="active">All</button></li>
          <li><button>Automotive</button></li>
          <li><button>Experimental</button></li>
          <li><button>Engagement</button></li>
          <li><button>Virtual Events</button></li>
        </ul>
        <!-- Moments Grid -->
        <div class="moments-grid mb-layout-xs">
          <!-- Moment Card -->
          <a href="#" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project01.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
            </div>
          </a>
          <!-- Moment Card -->
          <a href="#" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project02.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
            </div>
          </a>
          <!-- Moment Card -->
          <a href="#" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project03.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
            </div>
          </a>
          <!-- Moment Card -->
          <a href="#" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project04.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
            </div>
          </a>
          <!-- Moment Card -->
          <a href="#" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project05.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
            </div>
          </a>
          <!-- Moment Card -->
          <a href="#" class="moment-card" data-cursor="oval">
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
          <a href="#" class="btn btn-oval" data-mp>
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
  <section class="section bg-white inverted pt-layout-sm pb-layout-sm">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <h5 class="mb-layout-xs">Our Clients</h4>
          <div class="carousel carousel-logotypes swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="assets/img/awwards.svg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/clutch.svg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/css winner.svg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/css.svg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/dan.svg" alt="">
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <?php
    includeBlock('blocks/cta.php', array(
      'title' => 'Let\'s have <br />a chat!',
      'description' => 'If you need some help making a moment that matters, we\'d love to talk.',
      'link' => array(
        'label' => 'Say Hello',
        'url' => '#'
      )
    ));
  ?>

  <!-- Footer -->
  <?php include 'footer.php'; ?>