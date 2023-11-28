  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Section - Hero #3 (News) -->
  <section class="section hero-3">
    <!-- Background -->
    <div class="section-bg">
      <div class="bg-image"><img src="assets/img/hero-news.jpg" alt=""></div>
    </div>
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <!-- Content -->
        <div class="section-content fullwidth">
          <span class="badge badge-green">Insight</span>
          <h1 class="mt-3 h3">How Strata can help take your brand to the next level through brand experience</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Section - Article -->
  <section class="section ">
    <!-- Container -->
    <div class="section-container container">
      <div class="container-inner">
        <div class="row gutters-lg reverse">
          <!-- Wysiwyg -->
          <div class="col-md-9 wysiwyg mb-layout mb-md-0">
            <p class="lead">In a world saturated with marketing messages, creating a meaningful and lasting connection with consumers is a constant challenge
              for brands. Today,
              more than ever, businesses are turning to brand experience agencies to help them stand out from the competition and forge deep connections with
              their target audience, making Every Moment Matter. In this blog post, we explore how Strata, a leading brand experience agency, can help take your
              brand to the next level through the power of brand experience.</p>
            <h5 class="border-left border-green">Understanding Your Brand Essence</h5>
            <p>One of the fundamental steps in creating a successful brand experience is understanding the essence of your brand. Strata works closely with your
              brand, taking the time to truly understand its values, personality, and unique selling proposition. By delving deep into your brand’s DNA, Strata
              can help create a cohesive and authentic brand experience that resonates with your target audience. This thorough understanding ensures that every
              touch point reflects your brand’s core identity, creating a consistent and compelling experience.</p>
            <h5 class="border-left border-orange">Crafting Immersive Experiences</h5>
            <p>Strata specialises in creating immersive experiences that captivate and engage audiences. Through careful design, innovative technology, and
              attention to detail, they transform ordinary spaces into extraordinary brand destinations. From pop-up activations and interactive installations
              to experiential events and retail environments, Strata leverages creativity and expertise to craft immersive experiences that leave a lasting
              impression on consumers. By engaging multiple senses and creating a sense of wonder, Strata helps your brand make a memorable impact.</p>
            <!-- Blockquote -->
            <blockquote data-animate>
              <p>The array of stunning Porsche models and interactive experiences left a lasting impression, underscoring the bond that these exceptional cars
                can create among enthusiasts.</p>
              <footer>Uk Sales Director, Porsche</footer>
            </blockquote>
            <h5 class="border-left border-pink">Understanding Your Brand Essence</h5>
            <p>One of the fundamental steps in creating a successful brand experience is understanding the essence of your brand. Strata works closely with your
              brand, taking the time to truly understand its values, personality, and unique selling proposition. By delving deep into your brand’s DNA, Strata
              can help create a cohesive and authentic brand experience that resonates with your target audience. This thorough understanding ensures that every
              touch point reflects your brand’s core identity, creating a consistent and compelling experience.</p>
            <!-- Media Row -->
            <div class="row media-row">
              <div class="col-sm-6">
                <!-- Media -->
                <div class="media">
                  <img src="assets/img/media-row01.jpg" alt="">
                </div>
              </div>
              <div class="col-sm-6">
                <!-- Media -->
                <div class="media">
                  <img src="assets/img/media-row02.jpg" alt="">
                  <button data-toggle="video-modal" data-video="https://player.vimeo.com/video/861153826?h=9cdd1907eb&color=0B8946&title=0&byline=0&portrait=0"
                    class="play play-pink"></button>
                </div>
              </div>
            </div>
            <h5 class="border-left border-red">Crafting Immersive Experiences</h5>
            <p>Strata specialises in creating immersive experiences that captivate and engage audiences. Through careful design, innovative technology, and
              attention to detail, they transform ordinary spaces into extraordinary brand destinations. From pop-up activations and interactive installations
              to experiential events and retail environments, Strata leverages creativity and expertise to craft immersive experiences that leave a lasting
              impression on consumers. By engaging multiple senses and creating a sense of wonder, Strata helps your brand make a memorable impact.</p>
          </div>
          <!-- Author -->
          <div class="col-md-3">
            <!-- Author -->
            <div class="author author-orange">
              <div class="author-image">
                <img src="assets/img/sample-member.jpg" alt="">
              </div>
              <div class="author-content">
                <h6>Written by</h6>
                <h5>Mark Johnson</h5>
                <span class="text-muted">24 Feb 2024</span>
                <ul class="social-icons">
                  <li>
                    <a href="#">
                      <i class="i i-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="i i-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="i i-twitter"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section - News Carousel -->
  <?php
    includeBlock('blocks/news-carousel.php', array(
      'title' => '<strong>Explore</strong> Our Blog',
      'items' => array(
        array(
          'title' => 'How Strata are offering their clients the added value they expect Insights',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project03.jpg',
          'url' => 'single-news.php'
        ),
        array(
          'title' => 'What is the future of Automotive Event Experiences?',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project02.jpg',
          'url' => 'single-news.php'
        ),
        array(
          'title' => 'Delivering Unforgettable Brand Moments: The Power of Hybrid Events',
          'category' => 'Event',
          'theme' => 'pink',
          'image' => 'assets/img/project05.jpg',
          'url' => 'single-news.php'
        ),
        array(
          'title' => 'How Strata are offering their clients the added value they expect Insights',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project03.jpg',
          'url' => 'single-news.php'
        ),
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
