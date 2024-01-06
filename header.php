<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">

  <?php wp_head(); ?>
</head>

<body>
  <header id="header" class="wrapper">
    <?php $tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
    <<?php echo $tag; ?> class="site-title">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>" alt="Profile">
      </a>
    </<?php echo $tag; ?>>

    <nav>
      <ul>
        <li><a href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li>
        <li><a href="<?php echo esc_url(home_url('/#bicycle')); ?>">Bicycle</a></li>
      </ul>
    </nav>
  </header>