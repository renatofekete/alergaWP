<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="nav_container">
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'main-menu')) ?>
    </nav>
</div><!-- nav_container -->
<header>
    <div class="header_inner">
        <div class="header_logo">
            <img src="<?php echo get_option('header_logo') ?>" alt="">
        </div><!-- header_logo -->
    </div><!-- header_inner -->
</header>
<div class="content_container">