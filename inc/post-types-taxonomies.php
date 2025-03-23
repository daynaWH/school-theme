<?php
function school_register_custom_post_types() {
    // Register Student CPT
    $labels = array(
        'name'                     => _x( 'Students', 'post type general name', 'school-theme' ),
        'singular_name'            => _x( 'Student', 'post type singular name', 'school-theme' ),
        'add_new'                  => _x( 'Add New', 'student', 'school-theme' ),
        'add_new_item'             => __( 'Add New Student', 'school-theme' ),
        'edit_item'                => __( 'Edit Student', 'school-theme' ),
        'new_item'                 => __( 'New Student', 'school-theme' ),
        'view_item'                => __( 'View Student', 'school-theme' ),
        'view_items'               => __( 'View Students', 'school-theme' ),
        'search_items'             => __( 'Search Students', 'school-theme' ),
        'not_found'                => __( 'No students found.', 'school-theme' ),
        'not_found_in_trash'       => __( 'No students found in Trash.', 'school-theme' ),
        'parent_item_colon'        => __( 'Parent Students:', 'school-theme' ),
        'all_items'                => __( 'All Students', 'school-theme' ),
        'archives'                 => __( 'Student Archives', 'school-theme' ),
        'attributes'               => __( 'Student Attributes', 'school-theme' ),
        'insert_into_item'         => __( 'Insert into student', 'school-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this student', 'school-theme' ),
        'featured_image'           => __( 'Student featured image', 'school-theme' ),
        'set_featured_image'       => __( 'Set student featured image', 'school-theme' ),
        'remove_featured_image'    => __( 'Remove student featured image', 'school-theme' ),
        'use_featured_image'       => __( 'Use as featured image', 'school-theme' ),
        'menu_name'                => _x( 'Students', 'admin menu', 'school-theme' ),
        'filter_items_list'        => __( 'Filter students list', 'school-theme' ),
        'items_list_navigation'    => __( 'Students list navigation', 'school-theme' ),
        'items_list'               => __( 'Students list', 'school-theme' ),
        'item_published'           => __( 'Student published.', 'school-theme' ),
        'item_published_privately' => __( 'Student published privately.', 'school-theme' ),
        'item_revereted_to_draft'  => __( 'Student reverted to draft.', 'school-theme' ),
        'item_trashed'             => __( 'Student trashed.', 'school-theme' ),
        'item_scheduled'           => __( 'Student scheduled.', 'school-theme' ),
        'item_updated'             => __( 'Student updated.', 'school-theme' ),
        'item_link'                => __( 'Student link.', 'school-theme' ),
        'item_link_description'    => __( 'A link to a student.', 'school-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'students' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-id',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'template'           => array(
                                    array('core/paragraph',
                                        array( 'placeholder' => 'Student biography here...' ),
                                    ),
                                    array('core/button',
                                        array( 'text' => 'See My Portfolio', 'url' => 'https://example.com/', 'backgroundColor' => 'primary'),
                                    ),
                                ),
        'template_lock'      => 'all'
    );
    register_post_type( 'school-student', $args );
}
add_action( 'init', 'school_register_custom_post_types' );

function school_register_taxonomies() {
    // Add Student Speciality Taxonomy
    $labels = array(
        'name'                  => _x( 'Student Speciality', 'taxonomy general name', 'school-theme' ),
        'singular_name'         => _x( 'Student Speciality', 'taxonomy singular name', 'school-theme' ),
        'search_items'          => __( 'Search Student Specialities', 'school-theme' ),
        'all_items'             => __( 'All Student Speciality', 'school-theme' ),
        'parent_item'           => __( 'Parent Student Speciality', 'school-theme' ),
        'parent_item_colon'     => __( 'Parent Student Speciality:', 'school-theme' ),
        'edit_item'             => __( 'Edit Student Speciality', 'school-theme' ),
        'view_item'             => __( 'View Student Speciality', 'school-theme' ),
        'update_item'           => __( 'Update Student Speciality', 'school-theme' ),
        'add_new_item'          => __( 'Add New Student Speciality', 'school-theme' ),
        'new_item_name'         => __( 'New Student Speciality Name', 'school-theme' ),
        'template_name'         => __( 'Student Speciality Archives', 'school-theme' ),
        'menu_name'             => __( 'Student Speciality', 'school-theme' ),
        'not_found'             => __( 'No student specialities found.', 'school-theme' ),
        'no_terms'              => __( 'No student specialities', 'school-theme' ),
        'items_list_navigation' => __( 'Student Specialities list navigation', 'school-theme' ),
        'items_list'            => __( 'Student Specialities list', 'school-theme' ),
        'item_link'             => __( 'Student Speciality Link', 'school-theme' ),
        'item_link_description' => __( 'A link to a student speciality.', 'school-theme' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'student-specialities' ),
    );
    register_taxonomy( 'school-student-speciality', array( 'school-student' ), $args );
}
add_action( 'init', 'school_register_taxonomies' );

// Flush Rewrite Rules
function school_rewrite_flush() {
    school_register_custom_post_types();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'school_rewrite_flush' );