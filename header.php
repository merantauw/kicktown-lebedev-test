<!-- Все php функции которые вы видите тут стирать нельзя, иначе всё может поломаться -->

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://s.w.org/favicon.ico?2" sizes="32x32"/>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>