<?php
function includeBlock($filePath, $variables = array())
{
    extract($variables);
    ob_start();
    include $filePath;
    $output = ob_get_clean();
    echo $output;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <!-- Title -->
  <title>Strata</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@100;300;400;700;800;1000&display=swap" rel="stylesheet" />

  <!-- CSS Core -->
  <link rel="stylesheet" href="./dist/style.css" />
</head>

<body>

  <!-- Preloader -->
  <div id="preloader" style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: black; z-index: 450;">
    <div class="preloader-inner">
      <svg viewBox="0 0 300 300">
        <circle r="149" cx="150" cy="150" fill="none" />
        <circle r="149" cx="150" cy="150" fill="none" data-loader-progress style="stroke-dasharray: 945; stroke-dashoffset: 945;" />
      </svg>
      <span data-loader-progress-value>0%</span>
    </div>
    <div class="preloader-media" data-loader-media></div>
  </div>

  <div id="wrapper">

    <!-- Header -->
    <header id="header">
      <div class="container">
        <!-- Module - Emblem -->
        <div class="module-emblem">
          <img src="assets/img/logo-emblem.svg" alt="" />
        </div>
        <div class="container-inner">
          <!-- Module - Logo -->
          <div class="module module-logo">
            <a href="index.php">
              <img src="assets/img/logo-text.svg" alt="STRATA" />
            </a>
          </div>
          <!-- Module - CTA -->
          <div class="module module-cta">
            <a href="contact.php" class="btn btn-primary btn-sm" data-mp>
              <span class="btn-outline" data-mp-item data-mp-scale="1.1"></span>
              <span class="btn-label">Say Hello</span>
              <i class="btn-icon i i-arrow-top-right-fat"></i>
            </a>
          </div>
        </div>
        <!-- Module - Burger -->
        <div class="module module-burger">
          <button class="burger" data-toggle="navigation">
            <div><span></span><span></span><span></span><span></span></div>
          </button>
        </div>
      </div>
    </header>
    <!-- Header / End -->

    <!-- Navigation -->
    <nav id="navigation">
      <!-- Background -->
      <div class="navigation-bg">
        <div class="waves reversed">
          <div class="waves-inner">
            <video src="assets/video/waves.mp4" autoplay loop muted playsinline></video>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="container-inner">
          <!-- Module - Navigation -->
          <div class="module module-navigation">
            <ul class="nav nav-primary">
              <li><a href="moments.php">Moments</a></li>
              <li><a href="about.php">Our Culture</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="news.php">News & Insights</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
          <!-- Module - Contact -->
          <div class="module module-contact">
            <h6>Get in Touch</h6>
            <a href="#">info@stratacreate.com</a>
            <a href="#">+44 (0)20 7605 4500</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navigation / End -->

    <!-- Content -->
    <div id="content">