<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php 
    if (is_front_page()): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/home.css">
    <?php 
    elseif (is_page('services')): // For the "service" page
    ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/services.css">
    <?php 
    elseif (is_page('markets')): // For the "market" page
    ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/markets.css">
    <?php endif; ?>

</head>
<body <?php body_class(); ?>>

<header class="bg-white">
    <div class="flex flex-row justify-between items-center header-container">
        <div class="rounded-full logo-div">
            <a href="<?php echo home_url(); ?>">
                <img width="48px" height="48px" src="<?php echo get_template_directory_uri(); ?>/asset/images/logo.png" />
            </a>
        </div>
        <nav class="flex flex-row desktop-nav">
            <a href="<?php echo home_url(); ?>">Home</a>
            <a href="<?php echo home_url('/services'); ?>">Services</a>
            <a href="<?php echo home_url('/markets'); ?>">Markets</a>
            <a href="<?php echo home_url('/careers'); ?>">Careers</a>
        </nav>
        <!-- Hamburger Menu Button -->
        <div class="hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Mobile Navigation Overlay -->
        <div class="mobile-nav-overlay">
            <nav class="flex flex-row mob-nav">
                <a href="<?php echo home_url(); ?>">Home</a>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <a href="<?php echo home_url('/markets'); ?>">Markets</a>
                <a href="<?php echo home_url('/careers'); ?>">Careers</a>
            </nav>
            <div class="contact-btn">
                <a href="/#contact">
                    <button class="rounded-btn bg-black text-white">Contact Us</button>
                </a>
            </div>
        </div>
    </div>
</header>
