<?php


function school_setup() {
    // Load style.css on the back-end editor
	add_editor_style( get_stylesheet_uri() );

    // Add image sizes
    // Crop images to 400px by 200px
    add_image_size( '400x200', 400, 200, true );

    // Crop images to 800px by 400px
    add_image_size( '800x400', 800, 400, true );
}
add_action( 'after_setup_theme', 'school_setup' );

// Add image sizes to the back-end
function school_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
        '400x200' => esc_html__( '400x200', 'school-theme' ),
		'800x400' => esc_html__( '800x400', 'school-theme' ),
	);
	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'school_add_custom_image_sizes' );

// Custom Post Types & Custom Taxonomies
require get_template_directory() . '/inc/post-types-taxonomies.php';

// Change placeholder 'Add title' to 'Add student name' for student posts
function change_title_text( $title ){
    if  ( 'school-student' == get_post_type() ) {
        $title = __('Add student name', 'school-theme');
    }
    return $title;
}
add_filter( 'enter_title_here', 'change_title_text' );