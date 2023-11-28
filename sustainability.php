  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Section - Hero #2 -->
  <?php
    includeBlock('blocks/hero-3.php', array(
      'title' => 'Sustainability',
      'image' => 'assets/img/hero-sustainability.jpg',
      'largeTitle' => true,
      'description' => 'We are committed to creating a sustainable future for our people, our clients and our communities.',
      'reversed' => true
    ));
  ?>

  <!-- Intro -->
  <?php
    includeBlock('blocks/intro.php', array(
      'text' => 'This is sample Service’S introduction text that spans on few lines',
      'images' => array(
        array('url' => 'assets/img/eco05.jpg'),
        array('url' => 'assets/img/eco01.jpg'),
        array('url' => 'assets/img/eco03.jpg'),
        array('url' => 'assets/img/eco02.jpg'),
        array('url' => 'assets/img/eco04.jpg')
      )
    ));
  ?>

  <!-- Section - Accordion -->
  <?php
    includeBlock('blocks/accordion.php', array(
      'theme' => 'green',
      'panels' => array(
        array(
          'title' => 'Creative Communications<br> & Strategies',
          'content' => '<p>Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p>',
          'link' => array(
            'title' => 'Read More',
            'url' => '#'
          )
        ),
        array(
          'title' => 'Brand Ideation<br> & Design Implementation',
          'content' => '<p>Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p>',
          'link' => array(
            'title' => 'Read More',
            'url' => '#'
          )
        ),
        array(
          'title' => 'Digital<br> Solutions',
          'content' => '<p>Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p>',
          'link' => array(
            'title' => 'Read More',
            'url' => '#'
          )
        )
      )
    ));
  ?>

  <!-- Marquee -->
  <?php
    includeBlock('blocks/media-parallax.php', array(
      'image' => 'assets/img/marquee-eco.jpg'
    ));
  ?>

  <!-- Section - Media with Content #2 -->
  <?php
    includeBlock('blocks/media-with-content-2.php', array(
      'content' => '
        <h4>Sustaiability title That Spans On Few Lines</h4>
        <p class="lead">With communications changing faster than ever, our many combined decades.</p>
      ',
      'image' => 'assets/img/about-sustainability.jpg',
      'link' => array(
        'title' => 'Read More',
        'url' => ''
      ),
      'logotypes' => array(
        array(
          'image' => 'assets/img/ecolibrium.png',
          'url' => '#'
        ),
        array(
          'image' => 'assets/img/isla.png',
          'url' => '#'
        )
      )
    ));
  ?>

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
