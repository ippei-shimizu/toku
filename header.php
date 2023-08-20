<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico"> -->
  <title>toku</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
  <?php wp_head(); ?>
</head>
<header class="header">
  <div class="header__inner">
    <div class="header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>"></a>
    </div>
    <nav class="header__nav">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>">PORTFOLIO</a></li>
        <li><a href="<?php echo esc_url(home_url('/#ism')); ?>">ISM</a></li>
        <li><a href="<?php echo esc_url(home_url('/flow')); ?>">FLOW</a></li>
        <li><a href="<?php echo esc_url(home_url('/profile')); ?>">PROFILE</a></li>
        <li><a href="<?php echo esc_url(home_url('/inquiry')); ?>"> INQUIRY</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>"></a></li>
        <li class="nav__instagram"><a href="https://www.instagram.com/official.toku/" target="_blank" rel="noopener noreferrer"></a></li>
      </ul>
    </nav>
  </div>
</header>