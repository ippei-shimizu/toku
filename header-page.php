<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
  <title>toku</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
  <?php wp_head(); ?>
</head>
<body>
<header class="page-header header">
  <div class="header__inner">
    <div class="header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
      <span class="sp-logo-text-page sp-logo-text">Architectual<br>
creation.</span>
      </a>
    </div>
    <nav class="page-header-nav header__nav">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>">PORTFOLIO</a></li>
        <li><a href="<?php echo esc_url(home_url('/topix')); ?>">TOPIX</a></li>
        <li><a href="<?php echo esc_url(home_url('/flow')); ?>">FLOW</a></li>
        <li><a href="<?php echo esc_url(home_url('#profile')); ?>">PROFILE</a></li>
        <li><a href="<?php echo esc_url(home_url('/inquiry')); ?>"> INQUIRY</a></li>
        <li class="nav__instagram"><a href="https://www.instagram.com/official.toku/" target="_blank" rel="noopener noreferrer"></a></li>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="sp-nav-logo">
          <p>Architectual creation.</p>
        </a>
      </ul>
    </nav>
    <button id="hamburger" class="hamburger">
      <span class="hamburger__line"></span>
      <span class="hamburger__line"></span>
    </button>
  </div>
</header>