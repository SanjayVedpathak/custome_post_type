<?php
/*
 * Plugin Name:       Custome_Plug
 * Plugin URI:        https://www.google.co.in/
 * Description:       Custome_Plug helps you to extend existing features of your site.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            sanjay vedpathak
 * Author URI:        https://www.google.co.in/
 */



//+++++++++++++++++++++++++++++++++++++ custom_post_tupe ++++++++++++++++++++++++++++++++++++++++++++


function custom_post_type()
{
    $labels = array(
        'name'                  => _x('resources', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('resources', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('resources', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('resources', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New resources', 'textdomain'),
        'add_new_item'          => __('Add New resources', 'textdomain'),
        'new_item'              => __('New resources', 'textdomain'),
        'edit_item'             => __('Edit resources', 'textdomain'),
        'view_item'             => __('View resources', 'textdomain'),
        'all_items'             => __('All resources', 'textdomain'),
        'search_items'          => __('Search resources', 'textdomain'),
        'parent_item_colon'     => __('Parent resources:', 'textdomain'),
        'not_found'             => __('No resources found.', 'textdomain'),
        'not_found_in_trash'    => __('No resources found in Trash.', 'textdomain'),
        'featured_image'        => _x('resources Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('resources archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into resources', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this resources', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter resources list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('resources list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('resources list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'resources'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-superhero',
        'supports'           => array('title', 'editor', 'thumbnail',),
    );

    register_post_type('resources', $args);
}

add_action('init', 'custom_post_type');

//+++++++++++++++++++++++++++++++++++++ custom_post_tupe_texonomy ++++++++++++++++++++++++++++++++++++++++++++

function resources_texonomy()
{
    $labels = array(
		
	);

    register_taxonomy('genre', 'resources', array(
        'label'        => __('Category', 'textdomain'),
        'rewrite'      => array('slug' => 'res_cat'),
        'hierarchical' => true,
        "show_admin_column" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "show_in_quick_edit" => true,
        'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
        


    ));
}
add_action('init', 'resources_texonomy', 0);
