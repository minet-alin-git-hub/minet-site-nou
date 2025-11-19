<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                                        echo ' :';
                                    } ?> <?php bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="flex-row">
                <?php if (!empty(get_field('logo', 'options'))) echo '<a class="logo" aria-label="MINET" href="/">' . wp_get_attachment_image(get_field('logo', 'options')['ID'], '', '', array('alt' => 'minet-logo')) . '</a>'; ?>
                <div class="main-menu-container flex-row">
                    <?php $menu = wp_nav_menu(array('menu' => 'main-menu', 'menu_class' => 'main-menu', 'container_class' => 'desktop-menu')); ?>
                    <div class="l-switcher"><?php do_action('wpml_add_language_selector'); ?></div>
                </div>
                <div class="nav-icon"><svg id="svg-menu" width="100" height="100" viewBox="0 0 100 100">
                        <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path>
                        <path class="line line2" d="M 20,50 H 80"></path>
                        <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path>
                    </svg></div>
            </div>
        </div>
    </header>
    <?php if (!is_front_page()) get_template_part('template-parts/header/header-banner'); ?>