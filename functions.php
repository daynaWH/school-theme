<?php

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