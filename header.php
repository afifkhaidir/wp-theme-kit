<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fresh Market</title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="max-width-4 mx-auto px2 py1 clearfix">
      <a href="#" class="header-brand left">
        <img src="<?php echo get_template_directory_uri().'/build/images/afk.png' ?>" class="header-brand__img">
      </a>
      <ul class="list-reset py1 right">
        <li class="inline-block ml1"><a href="#" class="header__menu-list">Home</a></li>
        <li class="inline-block ml1"><a href="#" class="header__menu-list">About Me</a></li>
        <li class="inline-block ml1"><a href="#" class="header__menu-list">Contact</a></li>
      </ul>
    </div>
  </header>