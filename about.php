  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Section - Hero #2 -->
  <?php
    includeBlock('blocks/hero-2.php', array(
      'title' => 'Our Culture',
      'description' => 'Every brand moment is an opportunity for positive reinforcement.',
      'align' => 'right'
    ));
  ?>

  <!-- Section - Accordion -->
  <?php
    includeBlock('blocks/accordion.php', array(
      'theme' => 'pink',
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

  <!-- Intro -->
  <?php
    includeBlock('blocks/intro.php', array(
      'text' => 'This is sample Text About The culture that spans on few lines',
      'images' => array(
        array('url' => 'assets/img/about01.jpg'),
        array('url' => 'assets/img/about03.jpg'),
        array('url' => 'assets/img/about02.jpg'),
        array('url' => 'assets/img/about04.jpg'),
        array('url' => 'assets/img/about05.jpg')
      )
    ));
  ?>

  <!-- Section - Media with content -->
  <?php
    includeBlock('blocks/media-with-content.php', array(
      'content' => '
        <p class="lead">Vivamus tempor velit id cursus tempor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <p>Proin vehicula velit ligula, quis hendrerit ex tincidunt vitae. Integer eu mauris gravida, blandit elit in, vestibulum nisi. Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p>
      ',
      'image' => 'assets/img/service-about01.jpg',
      'reversed' => false
    ));
  ?>

  <!-- Section - Media with content -->
  <?php
    includeBlock('blocks/media-with-content.php', array(
      'content' => '
        <p class="lead">Vivamus tempor velit id cursus tempor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <p>Proin vehicula velit ligula, quis hendrerit ex tincidunt vitae. Integer eu mauris gravida, blandit elit in, vestibulum nisi. Every brand moment is an opportunity for positive reinforcement, a chance for your brand message to have clarity and relevance.</p>
      ',
      'image' => 'assets/img/service-about02.jpg',
      'reversed' => true
    ));
  ?>

  <!-- Marquee -->
  <?php
    includeBlock('blocks/marquee.php', array(
      'text' => 'Everytime. Everywhere.',
      'image' => 'assets/img/hero-service.jpg'
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
        'url' => 'sustainability.php'
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