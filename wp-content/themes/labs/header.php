<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ruthie&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>

<header>
    <div class="container">
        <div class="main-logo">
            <a href="<?php home_url(); ?>" class="blog-lite">My Laboratory works</a>
        </div>
    </div>
    <div class="menu-main">
        <div class="container">
            <?php if (has_nav_menu('header_menu')):?>
                <?php
                    wp_nav_menu( array(
                        'container' => '',
                        'theme_location' => 'header_menu'
                    ));
                ?>
            <?php endif; ?>
        </div>
    </div>
</header>