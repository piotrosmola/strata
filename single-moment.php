  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Section - Hero Moment -->
  <section class="section hero-moment">
    <!-- Background -->
    <div class="section-bg">
      <div class="bg-video">
        <video src="assets/video/hero-moment.mp4" autoplay muted loop playsinline></video>
      </div>
    </div>
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <!-- Logo -->
        <div class="section-logo">
          <img src="assets/img/logo-porsche.svg" alt="">
        </div>
        <!-- Content -->
        <div class="section-content">
          <div class="collab">Porsche<span></span>Strata</div>
          <h1 class="h2">Porsche Showroom</h1>
          <p class="lead border-left">Every brand moment is an opportunity for positive reinforcement.</p>
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

  <!-- Section - Content #2 -->
  <?php
    includeBlock('blocks/content-2.php', array(
      'intro' => 'Vivamus tempor velit id cursus tempor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vehicula velit ligula.',
      'content' => '<p>Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p><p>Moments are precious and personal if they can make audiences feel part of something special.</p>'
    ));
  ?>

  <!-- Section - Stats -->
  <section class="section stats">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <div class="row stats-row">
          <div class="col-sm-4">
            <!-- Stat -->
            <div class="stat">
              <div class="stat-value"><span data-animate="count" data-count-to="90">0</span></div>
              <h5 class="stat-title">Customer Engaged</h5>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Stat -->
            <div class="stat">
              <div class="stat-value"><span data-animate="count" data-count-to="120">0</span></div>
              <h5 class="stat-title">Locations Covered</h5>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Stat -->
            <div class="stat">
              <div class="stat-value"><span data-animate="count" data-count-to="5">0</span>k</div>
              <h5 class="stat-title">Positive Feedback</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Intro -->
  <?php
    includeBlock('blocks/intro.php', array(
      'text' => 'We deliver innovative, integrated brand experiences that create captivating brand engagement.',
      'images' => array(
        array('url' => 'assets/img/project04.jpg'),
        array('url' => 'assets/img/project03.jpg'),
        array('url' => 'assets/img/project02.jpg'),
        array('url' => 'assets/img/project05.jpg'),
        array('url' => 'assets/img/project01.jpg')
      )
    ));
  ?>

  <!-- Section - Media + Quote -->
  <section class="section">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <div class="row gutters-lg align-items-center">
          <div class="col-sm-4 mb-layout-sm mb-sm-0">
            <!-- Media -->
            <div class="media">
              <video src="assets/video/talking.mp4" autoplay muted playsinline></video>
            </div>
          </div>
          <div class="col-sm-8 col-xxl-7 ml-auto">
            <!-- Blockquote -->
            <blockquote data-animate>
              <p>The array of stunning Porsche models and interactive experiences left a lasting impression, underscoring the bond that these exceptional cars
                can create among enthusiasts.</p>
              <footer>Uk Sales Director, Porsche</footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section - Single Media -->
  <?php
    includeBlock('blocks/single-media.php', array(
      'image' => 'assets/img/project05.jpg',
    ));
  ?>

  <!-- Section - Boxes -->
  <?php
    includeBlock('blocks/features.php', array(
      'boxes' => array(
        array(
          'title' => 'We Specialize in Providing',
          'items' => array(
            'Creative Communications & Strategies',
            'Brand Ideation & Design Implementation',
            'Moving Image',
            'Digital Solutions',
            'Event Management & Production',
            'Brand Activation',
            'Logistics and Asset Management'
          )
          ),
        array(
          'title' => 'In order to give our clients the very best in',
          'items' => array(
            'Brand Engagement & Installations',
            'Stakeholder Engagement',
            'Stakeholder Communications',
            'Conferences',
            'Exhibitions',
            'Reward & Recognition Programmes',
            'Experiential Activation',
          )
        )
      )
    ));
  ?>


  <!-- Section - Media + Caption -->
  <section class="section">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">

        <div class="row gutters-lg reverse align-items-end">
          <div class="col-sm-8 mb-layout-xs mb-sm-0">
            <!-- Media -->
            <div class="media">
              <img src="assets/img/project06.jpg" alt="">
            </div>
          </div>
          <div class="col-xl-3 col-sm-4 col-10 ml-auto">
            <h5 class="text-sm border-right text-right mb-0" data-animation="fade-in-left">Short optional media description On Few lines</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section - Single Media -->
  <?php
    includeBlock('blocks/single-media.php', array(
      'image' => 'assets/img/project03.jpg',
    ));
  ?>

  <!-- Section - Content #1 -->
  <?php
    includeBlock('blocks/content-1.php', array(
      'title' => 'We call those communications that truly define a brand Moments',
      'content' => '<p>Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p><p>Moments are precious and personal if they can make audiences feel part of something special.</p>',
      'link' => array(
        'title' => 'Read More',
        'url' => '#'
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