<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 11-Jul-18
 * Time: 18:07
 */

// Register Custom Post Type Magazine Cover
// Post Type Key: magazinecover
function create_magazinecover_cpt() {

    $labels = array(
        'name'                  => __('Magazine Covers', 'Post Type General Name', 'Magazine Cover'),
        'singular_name'         => __('Magazine Cover', 'Post Type Singular Name', 'Magazine Cover'),
        'menu_name'             => __('Magazine Covers', 'Magazine Cover'),
        'name_admin_bar'        => __('Magazine Cover', 'Magazine Cover'),
        'archives'              => __('Magazine Cover Archives', 'Magazine Cover'),
        'attributes'            => __('Magazine Cover Attributes', 'Magazine Cover'),
        'parent_item_colon'     => __('Parent Magazine Cover:', 'Magazine Cover'),
        'all_items'             => __('All Magazine Covers', 'Magazine Cover'),
        'add_new_item'          => __('Add New Magazine Cover', 'Magazine Cover'),
        'add_new'               => __('Add New', 'Magazine Cover'),
        'new_item'              => __('New Magazine Cover', 'Magazine Cover'),
        'edit_item'             => __('Edit Magazine Cover', 'Magazine Cover'),
        'update_item'           => __('Update Magazine Cover', 'Magazine Cover'),
        'view_item'             => __('View Magazine Cover', 'Magazine Cover'),
        'view_items'            => __('View Magazine Covers', 'Magazine Cover'),
        'search_items'          => __('Search Magazine Cover', 'Magazine Cover'),
        'not_found'             => __('Not found', 'Magazine Cover'),
        'not_found_in_trash'    => __('Not found in Trash', 'Magazine Cover'),
        'featured_image'        => __('Featured Image', 'Magazine Cover'),
        'set_featured_image'    => __('Set featured image', 'Magazine Cover'),
        'remove_featured_image' => __('Remove featured image', 'Magazine Cover'),
        'use_featured_image'    => __('Use as featured image', 'Magazine Cover'),
        'insert_into_item'      => __('Insert into Magazine Cover', 'Magazine Cover'),
        'uploaded_to_this_item' => __('Uploaded to this Magazine Cover', 'Magazine Cover'),
        'items_list'            => __('Magazine Covers list', 'Magazine Cover'),
        'items_list_navigation' => __('Magazine Covers list navigation', 'Magazine Cover'),
        'filter_items_list'     => __('Filter Magazine Covers list', 'Magazine Cover'),
    );
    $args   = array(
        'label'               => __('Magazine Cover', 'Magazine Cover'),
        'description'         => __('Magazine Cover', 'Magazine Cover'),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-book',
        'supports'            => array('thumbnail'),
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'hierarchical'        => false,
        'exclude_from_search' => true,
        'show_in_rest'        => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'capabilities'        => array(
            'create_posts' => false
        )

    );
    register_post_type('magazinecover', $args);

}

add_action('init', 'create_magazinecover_cpt', 0);