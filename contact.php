  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Section - Hero #2 (Contact) -->
  <section class="section hero-2">
    <!-- Background -->
    <div class="section-bg">
      <div class="waves reversed ">
        <div class="waves-inner">
          <video src="assets/video/waves.mp4" autoplay loop muted playsinline></video>
        </div>
      </div>
    </div>
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <!-- Content -->
        <div class="section-content fullwidth">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <h1 class="h2 outline-text"><strong>Say hello</strong> To InnovatIVe Brand experiences</h1>
              <p class="lead border-left">Every brand moment is an opportunity for positive reinforcement.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section - Contact -->
  <section class="section contact">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <!-- Details -->
            <div class="row row-details">
              <div class="col-md-6 mb-layout-sm">
                <h5 class="border-bottom">General Enquiries</h5>
                <address class="text-lg">
                  <a href="#">info@stratacreate.com</a><br>
                  <a href="#">+44 (0)20 7605 4500</a>
                </address>
              </div>
              <div class="col-md-6 mb-layout-sm">
                <h5 class="border-bottom">New Business</h5>
                <address class="text-lg">
                  <a href="#">giles.cattle@stratacreate.com</a><br>
                </address>
              </div>
            </div>
            <!-- Form & Map -->
            <div class="row">
              <div class="col-md-5 col-form">
                <h5>Send us a Message</h5>
                <form action="#">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="E-mail" />
                  </div>
                  <div class="form-group">
                    <div class="form-select">
                      <select name="service" class="form-control">
                        <option value="#">Service interested in</option>
                        <option value="#">Creative Communications & Strategies</option>
                        <option value="#">Digital Solutions</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea type="text" class="form-control" placeholder="Message" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="rules-check" class="custom-control-input" />
                      <label for="rules-check" class="custom-control-label">I have read and agree to the <a href="privacy-policy.php">Privacy
                          Policy</a>.</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <p class="text-xs text-muted mb-0">
                      By checking the box above, you acknowledge that you have read and agree to the Privacy Policy of this website or service. Please make sure
                      to review the Privacy Policy document provided to ensure you are comfortable with the terms and conditions outlined therein. Your privacy
                      and data protection are important to us.
                    </p>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary" data-mp>
                      <span class="btn-outline" data-mp-item data-mp-scale="1.1"></span>
                      <span class="btn-label">Submit Form</span>
                      <i class="btn-icon i i-arrow-top-right-fat"></i>
                    </button>
                  </div>
                </form>
              </div>
              <div class="col-md-7 col-map">
                <!-- Map -->
                <div class="section-map">
                  <div class="section-map-image">
                    <img src="assets/img/map.svg" alt="">
                  </div>
                  <!-- Map Marker -->
                  <div class="section-map-marker" style="--left: 69.5%; --top: 60%">
                    <span class="section-map-marker-dot green"></span>
                    <div class="section-map-marker-popup">
                      <h5>BrackLEY Office</h5>
                      <address>Featherbed Court, Mixbury,<br>Brackley, NN13 5RN</address>
                    </div>
                  </div>
                  <!-- Map Marker -->
                  <div class="section-map-marker" style="--left: 81%; --top: 73%">
                    <span class="section-map-marker-dot pink"></span>
                    <div class="section-map-marker-popup bottom">
                      <h5>London Office</h5>
                      <address>17 Macklin St, London WC2B 5NR</address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- Section - Moments Carousel -->
  <?php
    includeBlock('blocks/moments-carousel.php', array(
      'addBorder' => true,
      'title' => '<strong>Explore</strong> Our Moments',
      'moments' => array(
        array(
          'title' => 'Porsche Showroom',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project01.jpg',
          'url' => '/single-moment.php'
        ),
        array(
          'title' => 'Amazon Conference',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project02.jpg',
          'url' => '/single-moment.php'
        ),
        array(
          'title' => 'Snow Fest',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project03.jpg',
          'url' => '/single-moment.php'
        ),
        array(
          'title' => 'Amazon Conference',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project04.jpg',
          'url' => '/single-moment.php'
        ),
        array(
          'title' => 'Apple Showroom',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project05.jpg',
          'url' => '/single-moment.php'
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
        'url' => '#'
      )
    ));
  ?>

  <!-- Footer -->
  <?php include 'footer.php'; ?>