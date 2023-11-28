  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Section - Hero #1 -->
  <section class="section hero-1">
    <!-- Background -->
    <div class="section-bg">
      <div class="waves bg-video">
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
          <h1 data-animate="true" data-split-chars>Every Moment Matters
          </h1>
        </div>
        <!-- Action -->
        <div class="section-action">
          <!-- Button -->
          <button class="btn btn-oval" data-toggle="video-modal"
            data-video="https://player.vimeo.com/video/861153826?h=9cdd1907eb&color=0B8946&title=0&byline=0&portrait=0" data-mp>
            <span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
            <span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
            <i class="btn-icon i i-play"></i>
            <span class="btn-label">Showreel Video</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Intro -->
  <?php
    includeBlock('blocks/intro.php', array(
      'text' => 'We deliver innovative, integrated brand experiences that create captivating brand engagement.',
      'images' => array(
        array('url' => 'assets/img/project01.jpg'),
        array('url' => 'assets/img/project02.jpg'),
        array('url' => 'assets/img/project03.jpg'),
        array('url' => 'assets/img/project04.jpg'),
        array('url' => 'assets/img/project05.jpg')
      )
    ));
  ?>

  <!-- Section - Text + CTA -->
  <section class="section pb-0">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <div class="row align-items-end">
          <div class="col-md-6 col-lg-offset-1 wysiwyg mb-2 mb-md-0">
            <h4>We call those memorable communications that truly define a brand Moments</h4>
            <p>Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p>
            <p>Moments are precious and personal if they can make audiences feel part of something special.</p>
          </div>
          <div class="col-lg-4 col-md-6 text-md-right">
            <!-- Button -->
            <a href="#" class="btn btn-oval" data-mp>
              <span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
              <span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
              <i class="btn-icon i i-arrow-top-right"></i>
              <span class="btn-label">Say Hello</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Marquee -->
  <?php
    includeBlock('blocks/media-parallax.php', array(
      'image' => 'assets/img/project07.jpg'
    ));
  ?>

  <!-- Section - Moments -->
  <section class="section">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
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
              <p>Donec convallis laoreet dui, nec fermentum ante scelerisque non.</p>
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
              <p>Donec convallis laoreet dui, nec fermentum ante scelerisque non.</p>
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
              <p>Donec convallis laoreet dui, nec fermentum ante scelerisque non.</p>
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
              <p>Donec convallis laoreet dui, nec fermentum ante scelerisque non.</p>
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
              <p>Donec convallis laoreet dui, nec fermentum ante scelerisque non.</p>
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
              <p>Donec convallis laoreet dui, nec fermentum ante scelerisque non.</p>
            </div>
          </a>
          <!-- Moment Card -->
          <a href="single-moment.php" class="moment-card" data-cursor="oval">
            <div class="moment-card-media">
              <img src="assets/img/project01.jpg" alt="" />
            </div>
            <div class="moment-card-content">
              <span class="badge badge-green">Insight</span>
              <h5>Porsche Showroom</h5>
              <p>Donec convallis laoreet dui, nec fermentum ante scelerisque non.</p>
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
              <p>Donec convallis laoreet dui, nec fermentum ante scelerisque non.</p>
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
              <p>Donec convallis laoreet dui, nec fermentum ante scelerisque non.</p>
            </div>
          </a>
        </div>
        <div class="text-center">
          <!-- Button -->
          <a href="moments.php" class="btn btn-oval" data-mp>
            <span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
            <span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
            <i class="btn-icon i i-arrow-top-right"></i>
            <span class="btn-label">More Moments</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section - Media with Content #2 -->
  <?php
    includeBlock('blocks/media-with-content-2.php', array(
      'title' => 'Our Culture',
      'content' => '
        <p>With communications changing faster than ever, our many combined decades of experience and adaptability really matter.</p>
        <p>We work as an extension of your team to manage every aspect of a project; strategy and planning, creative services, content, technical production, logistics, storage, and asset management.</p>
      ',
      'image' => 'assets/img/our-culture.jpg',
      'link' => array(
        'title' => 'Read More',
        'url' => ''
      ),
    ));
  ?>

  <!-- Section - Media with Content #2 (Two cols) -->
  <?php
    includeBlock('blocks/media-with-content-2-two-cols.php', array(
      'columns' => array(
        array(
          'title' => 'Our Mission',
          'content' => '
            <p>With communications changing faster than ever, our many combined decades of experience and adaptability really matter.</p>
            <p>We work as an extension of your team to manage every aspect of a project; strategy and planning, creative services, content, technical production, logistics, storage, and asset management.</p>
          ',
          'image' => 'assets/img/about01.jpg',
          'link' => array(
            'title' => 'Read More',
            'url' => 'sustainability.php'
          )
        ),
        array(
          'title' => 'Our Values',
          'content' => '
            <p>With communications changing faster than ever, our many combined decades of experience and adaptability really matter.</p>
            <p>We work as an extension of your team to manage every aspect of a project; strategy and planning, creative services, content, technical production, logistics, storage, and asset management.</p>
          ',
          'image' => 'assets/img/about02.jpg',
          'link' => array(
            'title' => 'Read More',
            'url' => 'sustainability.php'
          )
        )
      )
    ));
  ?>


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
        ),
        array(
          'image' => 'assets/img/awwards.svg',
          'url' => '#'
        ),
        array(
          'image' => 'assets/img/clutch.svg',
          'url' => '#'
        )
      )
    ));
  ?>

  <!-- CTA -->
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