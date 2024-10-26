<?php 
function my_theme_enqueue_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false);

      // Enqueue custom JavaScript for form handling
    wp_enqueue_script('custom-form-script', get_template_directory_uri() . '/asset/contact.js', array(), null, true);

    // Localize script to pass admin-ajax.php URL
    wp_localize_script('custom-form-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));


}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function handle_contact_form_submission() {
    $captcha = $_POST['g-recaptcha-response']; // Correct key name for reCAPTCHA response
    $response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret=6LcYsmwqAAAAAFFQio9J1j4V_IyzioE1MtZ6Wm6F&response=" . $captcha);

    $responseBody = wp_remote_retrieve_body($response);
    $result = json_decode($responseBody);

    if ($result->success && !empty($_POST['contact_name']) && !empty($_POST['contact_email']) && !empty($_POST['contact_message'])) {
        // Proceed with saving the form data as a post
        $name = sanitize_text_field($_POST['contact_name']);
        $email = sanitize_email($_POST['contact_email']);
        $message = sanitize_textarea_field($_POST['contact_message']);
        
        $post_id = wp_insert_post(array(
            'post_type' => 'contact_submission',
            'post_title' => $name,
            'post_content' => $message,
            'post_status' => 'publish'
        ));

        if ($post_id) {
            add_post_meta($post_id, 'contact_email', $email);
            echo 'Submission successful!';
        } else {
            echo 'Failed to save submission.';
        }
    } else {
        echo 'Captcha verification failed. Please try again.';
    }
    wp_die();
}
add_action('wp_ajax_nopriv_submit_contact_form', 'handle_contact_form_submission');
add_action('wp_ajax_submit_contact_form', 'handle_contact_form_submission');

//adding custom post type to sidebar
function register_contact_submission_post_type() {
    register_post_type('contact_submission', array(
        'labels' => array(
            'name' => __('Contact Submissions'),
            'singular_name' => __('Contact Submission')
        ),
        'public' => true,
        'show_in_menu' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor'),
        'menu_position' => 20, // Position in the admin sidebar menu
        'menu_icon' => 'dashicons-email', // Custom icon in the sidebar
        'capability_type' => 'post',
    ));
}
add_action('init', 'register_contact_submission_post_type');
