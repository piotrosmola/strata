  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Section - Hero #2 -->
  <?php
    includeBlock('blocks/hero-2.php', array(
      'title' => 'Our<br /> Services',
      'description' => 'Every brand moment is an opportunity for positive reinforcement.',
    ));
  ?>

  <!-- Section - Content #2 -->
  <?php
    includeBlock('blocks/content-2.php', array(
      'intro' => 'Vivamus tempor velit id cursus tempor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vehicula velit ligula.',
      'content' => '<p>Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p><p>Moments are precious and personal if they can make audiences feel part of something special.</p>'
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
            'url' => 'single-service.php'
          )
        ),
        array(
          'title' => 'Brand Ideation<br> & Design Implementation',
          'content' => '<p>Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p>',
          'link' => array(
            'title' => 'Read More',
            'url' => 'single-service.php'
          )
        ),
        array(
          'title' => 'Digital<br> Solutions',
          'content' => '<p>Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p>',
          'link' => array(
            'title' => 'Read More',
            'url' => 'single-service.php'
          )
        )
      )
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

  <!-- Section - Content #1 -->
  <?php
    includeBlock('blocks/content-1.php', array(
      'title' => 'We call those communications that truly define a brand Moments',
      'content' => '<p>Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p><p>Moments are precious and personal if they can make audiences feel part of something special.</p>',
      'link' => array(
        'title' => 'Read More',
        'url' => '#'
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
          'url' => 'single-moment.php'
        ),
        array(
          'title' => 'Amazon Conference',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project02.jpg',
          'url' => 'single-moment.php'
        ),
        array(
          'title' => 'Snow Fest',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project03.jpg',
          'url' => 'single-moment.php'
        ),
        array(
          'title' => 'Amazon Conference',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project04.jpg',
          'url' => 'single-moment.php'
        ),
        array(
          'title' => 'Apple Showroom',
          'category' => 'Insights',
          'theme' => 'green',
          'image' => 'assets/img/project05.jpg',
          'url' => 'single-moment.php'
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
        'url' => 'contact.php'
      )
    ));
  ?>

  <!-- Footer -->
  <?php include 'footer.php'; ?>