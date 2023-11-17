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
  <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@100;400;700;800&display=swap" rel="stylesheet" />

  <!-- CSS Core -->
  <link rel="stylesheet" href="./dist/style.css" />
</head>

<body>

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
            <a href="#">
              <img src="assets/img/logo-text.svg" alt="STRATA" />
            </a>
          </div>
          <!-- Module - CTA -->
          <div class="module module-cta">
            <a href="#" class="btn btn-primary btn-sm" data-mp>
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
              <li><a href="#">Moments</a></li>
              <li><a href="#">Our Culture</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">News & Insights</a></li>
              <li><a href="#">Contact Us</a></li>
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