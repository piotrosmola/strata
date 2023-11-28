  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Section - Hero #2 (Privacy Policy) -->
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
          <div class="row">
            <div class="col-md-9 ml-auto">
              <h1 class="h2">Privacy<br> Policy</h1>
              <p class="lead border-left">Every brand moment is an opportunity for positive reinforcement.</p>
            </div>
          </div>
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
            <h5 class="border-left border-green">Section Name</h5>
            <p>One of the fundamental steps in creating a successful brand experience is understanding the essence of your brand. Strata works closely with your
              brand, taking the time to truly understand its values, personality, and unique selling proposition. By delving deep into your brand’s DNA, Strata
              can help create a cohesive and authentic brand experience that resonates with your target audience. This thorough understanding ensures that every
              touch point reflects your brand’s core identity, creating a consistent and compelling experience.</p>
            <h5 class="border-left border-orange">Section Name</h5>
            <p>Strata specialises in creating immersive experiences that captivate and engage audiences. Through careful design, innovative technology, and
              attention to detail, they transform ordinary spaces into extraordinary brand destinations. From pop-up activations and interactive installations
              to experiential events and retail environments, Strata leverages creativity and expertise to craft immersive experiences that leave a lasting
              impression on consumers. By engaging multiple senses and creating a sense of wonder, Strata helps your brand make a memorable impact.</p>
            <h5 class="border-left border-pink">Section Name</h5>
            <p>One of the fundamental steps in creating a successful brand experience is understanding the essence of your brand. Strata works closely with your
              brand, taking the time to truly understand its values, personality, and unique selling proposition. By delving deep into your brand’s DNA, Strata
              can help create a cohesive and authentic brand experience that resonates with your target audience. This thorough understanding ensures that every
              touch point reflects your brand’s core identity, creating a consistent and compelling experience.</p>
            <h5 class="border-left border-red">Section Name</h5>
            <p>Strata specialises in creating immersive experiences that captivate and engage audiences. Through careful design, innovative technology, and
              attention to detail, they transform ordinary spaces into extraordinary brand destinations. From pop-up activations and interactive installations
              to experiential events and retail environments, Strata leverages creativity and expertise to craft immersive experiences that leave a lasting
              impression on consumers. By engaging multiple senses and creating a sense of wonder, Strata helps your brand make a memorable impact.</p>
          </div>
          <!-- Sidebar -->
          <div class="col-md-3">
            <h6>Navigation</h6>
            <ul class="nav nav-vertical">
              <li><a href="#">Link One</a></li>
              <li><a href="#">Link Two</a></li>
              <li><a href="#">Link Three</a></li>
            </ul>
          </div>
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
