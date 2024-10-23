<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php if (is_front_page()): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/home.css">
    <?php endif; ?> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/generic.css">

</head>
<body <?php body_class(); ?>>

<header>
    <div class="flex flex-row justify-between items-center header-container">
        <div class="rounded-full logo-div">
            <img width="48px" height="48px"  src="<?php echo get_template_directory_uri(); ?>/asset/images/logo.png" />
        </div>
        <nav class="flex flex-row">
            <a href="<?php echo home_url(); ?>">
                Home
            </a>
            <a href="<?php echo home_url('/services'); ?>">
                Services
            </a>
            <a href="<?php echo home_url('/capability-statement'); ?>">
                Capability Statement
            </a>
            <a href="<?php echo home_url('/marketing'); ?>">
                Marketing
            </a>
            <a href="<?php echo home_url('/careers'); ?>">
                Careers
            </a>
        </nav>
        <div>
            <button class="rounded-btn bg-candy">
                Contact Us
            </button>
        </div>

    </div>
</header>
