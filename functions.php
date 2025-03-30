<?php

add_action('wp_enqueue_scripts', function () {
    // Load normalize.css
    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), [], null);
	// Load style.css on the front-end
    wp_enqueue_style('school-style', get_stylesheet_uri());
});



add_action('enqueue_block_editor_assets', function () {
    wp_enqueue_style('school-editor-style', get_stylesheet_uri());
});

function school_setup() {
    // Load style.css on the back-end editor
	add_editor_style( get_stylesheet_uri() );

    // Add image sizes
    // Crop images to 200px by 250px
    add_image_size( '200X250', 200, 250, true );

    // Crop images to 400px by 500px
    add_image_size( '400X500', 400, 500, true );
}
add_action( 'after_setup_theme', 'school_setup' );

// Add image sizes to the back-end
function school_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
        '200X250' => esc_html__( '200X250', 'school-theme' ),
		'400X500' => esc_html__( '400X500', 'school-theme' ),
	);
	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'school_add_custom_image_sizes' );

// Custom Post Types & Custom Taxonomies
require get_template_directory() . '/inc/post-types-taxonomies.php';

// Change placeholder 'Add title' for student/staff posts
function change_title_text( $title ){
    if  ( 'school-student' == get_post_type() ) {
        $title = __('Add student name', 'school-theme');
    } else if ('school-staff' == get_post_type()) {
        $title = __('Add staff name', 'school-theme');
    }
    return $title;
}
add_filter( 'enter_title_here', 'change_title_text' );

// Load lightGallery on the Front Page only
add_action('wp_enqueue_scripts', function () {
    if (is_front_page()) {
        // lightGallery CSS
        wp_enqueue_style(
            'lightgallery-css',
            'https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css',
            [],
            null
        );

        // lightGallery JS
        wp_enqueue_script(
            'lightgallery-js',
            'https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.umd.js',
            [],
            null,
            true
        );

        // lightGallery Thumbnail Plugin
        wp_enqueue_script(
            'lg-thumbnail',
            'https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.umd.min.js',
            ['lightgallery-js'],
            null,
            true
        );

        // Custom init script
        wp_enqueue_script(
            'lightgallery-init',
            get_template_directory_uri() . '/assets/js/lightgallery-settings.js',
            ['lightgallery-js'],
            null,
            true
        );
    }
});

function school_register_blocks() {
    register_block_type( __DIR__ . '/animate-wrapper/build/animate-wrapper' );
}
add_action( 'init', 'school_register_blocks' );

function school_enqueue_aos() {
    wp_enqueue_style(
        'aos-css',
        'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css',
        [],
        null
    );

    wp_enqueue_script(
        'aos-js',
        'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'aos-init',
        get_template_directory_uri() . '/assets/js/aos-init.js',
        ['aos-js'],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'school_enqueue_aos');
