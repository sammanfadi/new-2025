<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="<?php echo esc_attr( isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light' ); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:url" content="<?php echo esc_url( home_url('/') ); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <h1><a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></h1>
  <button class="toggle-theme">Toggle Theme</button>
  <?php wp_nav_menu(['theme_location' => 'primary']); ?>
</header>
