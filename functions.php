<?php 
// Enqueue scripts and styles for form and fonts
function my_theme_enqueue_scripts() {
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap', false);
    wp_enqueue_script('custom-form-script', get_template_directory_uri() . '/asset/contact.js', array(), null, true);

    // Pass AJAX URL to JS
    wp_localize_script('custom-form-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

// Handle form submission with reCAPTCHA
function handle_contact_form_submission() {
    $captcha = $_POST['g-recaptcha-response'];
    $response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret=6LcYsmwqAAAAAFFQio9J1j4V_IyzioE1MtZ6Wm6F&response=" . $captcha);
    $responseBody = wp_remote_retrieve_body($response);
    $result = json_decode($responseBody);

    if ($result->success && !empty($_POST['contact_name']) && !empty($_POST['contact_email']) && !empty($_POST['contact_message'])) {
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

// Register Contact Submission custom post type
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
        'menu_position' => 20,
        'menu_icon' => 'dashicons-email',
        'capability_type' => 'post',
    ));
}
add_action('init', 'register_contact_submission_post_type');

// Add custom column for Email in Contact Submission admin view
function set_custom_edit_contact_submission_columns($columns) {
    $columns['contact_email'] = __('Email');
    return $columns;
}
add_filter('manage_contact_submission_posts_columns', 'set_custom_edit_contact_submission_columns');

function custom_contact_submission_column($column, $post_id) {
    if ($column == 'contact_email') {
        $email = get_post_meta($post_id, 'contact_email', true);
        echo esc_html($email);
    }
}
add_action('manage_contact_submission_posts_custom_column', 'custom_contact_submission_column', 10, 2);

// Make Email column sortable
function set_sortable_contact_submission_columns($columns) {
    $columns['contact_email'] = 'contact_email';
    return $columns;
}
add_filter('manage_edit-contact_submission_sortable_columns', 'set_sortable_contact_submission_columns');
