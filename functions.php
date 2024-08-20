<?php
// Check to prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Unauthorized access
}

// Load the text domain for translation
function my_theme_setup() {
    load_theme_textdomain('wordpress_theme_structure', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'my_theme_setup');

// Function to add a menu option to the admin menu
function wp_theme_structure_menu() {
    add_menu_page(
        __( 'WordPress Theme Structure', 'wordpress_theme_structure' ),  // Page title
        __( 'WordPress Theme Structure', 'wordpress_theme_structure' ),  // Menu title
        'manage_options',   // Capability (admins only)
        'wp-theme-structure',   // Menu slug
        'wp_theme_structure_page_content',  // Function to display the page content
        'dashicons-admin-generic', // Menu icon
        80  // Menu position
    );
}

// Hook the function to 'admin_menu'
add_action( 'admin_menu', 'wp_theme_structure_menu' );

// Function to display the content of the theme page
function wp_theme_structure_page_content() {
    ?>
    <div class="wrap">
        <h1><?php _e( 'Welcome to the wordpress theme structure settings page!', 'wordpress_theme_structure' ); ?></h1>
        <p><?php _e( 'This page is designed for template management and settings.', 'wordpress_theme_structure' ); ?></p>
    </div>
    <?php
}
?>