<?php
/*
Plugin Name: Posts in English
Description: Add custom post type 'en' for posts in English 
Version:     1.0
Author:      Tatiane Pires
Author URI:  https://tatianepires.com.br
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// https://generatewp.com/generator/

if ( ! function_exists('tps_posts_en') ) {

// Register Custom Post Type
    function tps_posts_en() {

        $labels = array(
            'name'                  => _x( 'Posts in English', 'Post Type General Name' ),
            'singular_name'         => _x( 'Post in English', 'Post Type Singular Name' ),
            'menu_name'             => __( 'Posts in English' ),
            'name_admin_bar'        => __( 'Posts in English' ),
            'archives'              => __( 'Item Archives' ),
            'parent_item_colon'     => __( 'Parent Item:' ),
            'all_items'             => __( 'All Posts' ),
            'add_new_item'          => __( 'Add New Post' ),
            'add_new'               => __( 'Add new' ),
            'new_item'              => __( 'New Post' ),
            'edit_item'             => __( 'Edit Post' ),
            'update_item'           => __( 'Update Post' ),
            'view_item'             => __( 'View Post' ),
            'search_items'          => __( 'Search Post' ),
            'not_found'             => __( 'Not found' ),
            'not_found_in_trash'    => __( 'Not found in Trash' ),
            'featured_image'        => __( 'Featured Image' ),
            'set_featured_image'    => __( 'Set featured image' ),
            'remove_featured_image' => __( 'Remove featured image' ),
            'use_featured_image'    => __( 'Use as featured image' ),
            'insert_into_item'      => __( 'Insert into post' ),
            'uploaded_to_this_item' => __( 'Uploaded to this post' ),
            'items_list'            => __( 'Posts list' ),
            'items_list_navigation' => __( 'Posts list navigation' ),
            'filter_items_list'     => __( 'Filter posts list' ),
        );
        $rewrite = array(
            'slug'                  => 'en'
        );
        $args = array(
            'label'                 => __( 'Post in English' ),
            'description'           => __( 'Posts in English' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'slug', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'custom-fields', 'post-formats', ),
            //'taxonomies'            => array( 'en_category' ),
            'hierarchical'          => false,
            'public'                => true,
            'publicly_queryable'    => true,
            'query_var'             => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5, // below Posts
            'menu_icon'             => 'dashicons-admin-post',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'rewrite'               => $rewrite,
            'exclude_from_search'   => false,
            'capability_type'       => 'post',
        );
        register_post_type( 'post_en', $args );

    } // function tps_posts_en
    add_action( 'init', 'tps_posts_en', 0 );

} // function_exists 'tps_posts_en'

/*
 * Register Custom Taxonomies
 */

/*
function tps_post_en_hierarchical_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Categories', 'Taxonomy General Name' ),
        'singular_name'              => _x( 'Category', 'Taxonomy Singular Name' ),
        'menu_name'                  => __( 'Categories' ),
        'all_items'                  => __( 'All Categories' ),
        'parent_item'                => __( 'Parent Category' ),
        'parent_item_colon'          => __( 'Parent Category:' ),
        'new_item_name'              => __( 'New Category Name' ),
        'add_new_item'               => __( 'Add New Category' ),
        'edit_item'                  => __( 'Edit Category' ),
        'update_item'                => __( 'Update Category' ),
        'view_item'                  => __( 'View Category' ),
        'separate_items_with_commas' => __( 'Separate categories with commas' ),
        'add_or_remove_items'        => __( 'Add or remove categories' ),
        'choose_from_most_used'      => __( 'Choose from the most used' ),
        'popular_items'              => __( 'Popular Categories' ),
        'search_items'               => __( 'Search Categories' ),
        'not_found'                  => __( 'Not Found' ),
        'no_terms'                   => __( 'No categories' ),
        'items_list'                 => __( 'Categories list' ),
        'items_list_navigation'      => __( 'Categories list navigation' ),
    );

    register_taxonomy('categories',array('post_en'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'category' ),
    ));
}
add_action( 'init', 'tps_post_en_hierarchical_taxonomy', 0 );
*/

/*
function tps_post_en_nonhierarchical_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Tags', 'Taxonomy General Name' ),
        'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name' ),
        'menu_name'                  => __( 'Tags' ),
        'all_items'                  => __( 'All Tags' ),
        'parent_item'                => __( 'Parent Tag' ),
        'parent_item_colon'          => __( 'Parent Tag:' ),
        'new_item_name'              => __( 'New Tag Name' ),
        'add_new_item'               => __( 'Add New Tag' ),
        'edit_item'                  => __( 'Edit Tag' ),
        'update_item'                => __( 'Update Tag' ),
        'view_item'                  => __( 'View Tag' ),
        'separate_items_with_commas' => __( 'Separate tags with commas' ),
        'add_or_remove_items'        => __( 'Add or remove tags' ),
        'choose_from_most_used'      => __( 'Choose from the most used' ),
        'popular_items'              => __( 'Popular Tags' ),
        'search_items'               => __( 'Search Tags' ),
        'not_found'                  => __( 'Not Found' ),
        'no_terms'                   => __( 'No tags' ),
        'items_list'                 => __( 'Tags list' ),
        'items_list_navigation'      => __( 'Tags list navigation' ),
    );

    register_taxonomy('tags',array('post_en'),array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'tag' ),
    ));
}
add_action( 'init', 'tps_post_en_nonhierarchical_taxonomy', 0 );
*/
