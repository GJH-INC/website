<?php 
function my_theme_enqueue_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
