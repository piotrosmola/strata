  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Section - Hero #2 -->
  <?php
    includeBlock('blocks/hero-2.php', array(
      'title' => 'Creative Communications <br />& Strategies',
      'description' => 'Every brand moment is an opportunity for positive reinforcement.',
    ));
  ?>

  <!-- Intro -->
  <?php
    includeBlock('blocks/intro.php', array(
      'text' => 'We deliver innovative, integrated brand experiences that create captivating brand engagement.'
    ));
  ?>

  <!-- Section - Media Row -->
  <?php
    includeBlock('blocks/media-row.php', array(
      'rows' => array(
        array(
          'image' => 'assets/img/media-row01.jpg',
          'videoUrl' => 'https://player.vimeo.com/video/861153826?h=9cdd1907eb&color=0B8946&title=0&byline=0&portrait=0',
          'theme' => 'green',
        ),
        array(
          'image' => 'assets/img/media-row02.jpg',
          'videoUrl' => false
        ),
        array(
          'image' => 'assets/img/media-row03.jpg',
          'videoUrl' => 'https://player.vimeo.com/video/861153826?h=9cdd1907eb&color=0B8946&title=0&byline=0&portrait=0',
          'theme' => 'pink'
        )
      )
    ));
  ?>

  <!-- Section - Moments Carousel -->
  <?php
    includeBlock('blocks/moments-carousel.php', array(
      'addBorder' => true,
      'title' => '<strong>Explore</strong> Our Moments',
      'moments' => array(
        array(
          'title' => 'Porsche Showroom',
          'category' => 'Insights',
          'image' => 'assets/img/project01.jpg',
          'url' => '/single-moment'
        ),
        array(
          'title' => 'Amazon Conference',
          'category' => 'Insights',
          'image' => 'assets/img/project02.jpg',
          'url' => '/single-moment'
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
