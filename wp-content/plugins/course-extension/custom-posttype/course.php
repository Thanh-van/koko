<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Course' ) ) {
    class Course {

        function __construct() {
            add_action( 'init', array( $this, 'register_course' ), 1 );
        }

        function register_course() {

            $course_slug = "course";
            $course_cat = "course_cat";

            $labels = array(
                'name'                  => esc_html__( 'Courses', TEXT_DOMAIN ),
                'singular_name'         => esc_html__( 'Course', TEXT_DOMAIN ),
                'all_items'             => esc_html__( 'All Courses', TEXT_DOMAIN ),
                'menu_name'             => _x( 'Courses', 'Admin menu name', TEXT_DOMAIN ),
                'add_new'               => esc_html__( 'Add New', TEXT_DOMAIN ),
                'add_new_item'          => esc_html__( 'Add New Courses', TEXT_DOMAIN ),
                'edit'                  => esc_html__( 'Edit', TEXT_DOMAIN ),
                'edit_item'             => esc_html__( 'Edit Courses', TEXT_DOMAIN ),
                'new_item'              => esc_html__( 'New Courses', TEXT_DOMAIN ),
                'view'                  => esc_html__( 'View Courses', TEXT_DOMAIN ),
                'view_item'             => esc_html__( 'View Courses', TEXT_DOMAIN ),
                'search_items'          => esc_html__( 'Search for Courses', TEXT_DOMAIN ),
                'not_found'             => esc_html__( 'No Courses found', TEXT_DOMAIN ),
                'not_found_in_trash'    => esc_html__( 'No Courses found in trash', TEXT_DOMAIN ),
                'parent'                => esc_html__( 'Parent Courses', TEXT_DOMAIN ),
                'filter_items_list'     => esc_html__( 'Filter Courses', TEXT_DOMAIN ),
                'items_list_navigation' => esc_html__( 'Courses navigation', TEXT_DOMAIN ),
                'items_list'            => esc_html__( 'Courses list', TEXT_DOMAIN ),
            );
            $supports = array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'comments',
                'author',
                'revisions',
                'custom-fields',
                'taxonomy',
            );
            register_post_type( 'course', array(
                'labels'      => $labels,
                'supports'    => $supports,
                'public'      => true,
                'has_archive' => true,
                'rewrite'     => array(
                    'slug'    => $course_slug,
                ),
                'can_edit' => true,
                'show_in_rest' => true,
                'can_export'  => true,
                'menu_icon'   => ( version_compare( $GLOBALS['wp_version'], '3.8', '>=' ) ) ? 'dashicons-portfolio' : false,
            ) );
            register_taxonomy( 'course_cat', 'course', array(
                'hierarchical'      => true,
                'label'             => __( 'Course Category ', TEXT_DOMAIN ),
                'query_var'         => true,
                'rewrite'           => array( 'slug' => $course_cat ),
                'show_admin_column' => true,
                'show_in_rest' => true,
            ));
        }
    }

    new Course;
}
