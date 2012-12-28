<?php

/* Register custom post type 'doc'. */
add_action( 'init', 'foxnet_themes_shop_plugin_register_cpt_doc' );

/*
 * Register custom post type tutorial.
 *
 * @since 0.1.0
 */
function foxnet_themes_shop_plugin_register_cpt_doc() {

	$labels = array( 
		'name' 					=> __( 'Docs', 'foxnet-themes-shop-plugin' ),
		'singular_name' 		=> __( 'Doc', 'foxnet-themes-shop-plugin' ),
		'add_new' 				=> __( 'Add New', 'foxnet-themes-shop-plugin' ),
		'add_new_item' 			=> __( 'Add New Doc', 'foxnet-themes-shop-plugin' ),
		'edit_item' 			=> __( 'Edit Doc', 'foxnet-themes-shop-plugin' ),
		'new_item' 				=> __( 'New Doc', 'foxnet-themes-shop-plugin' ),
		'view_item' 			=> __( 'View Doc', 'foxnet-themes-shop-plugin' ),
		'search_items' 			=> __( 'Search Docs', 'foxnet-themes-shop-plugin' ),
		'not_found' 			=> __( 'No docs found', 'foxnet-themes-shop-plugin' ),
		'not_found_in_trash' 	=> __( 'No docs found in Trash', 'foxnet-themes-shop-plugin' ),
		'parent_item_colon' 	=> __( 'Parent Doc:', 'foxnet-themes-shop-plugin' ),
		'menu_name' 			=> __( 'Docs', 'foxnet-themes-shop-plugin' ),
    );

    $args = array( 
		'labels' 				=> $labels,
		'hierarchical' 			=> false,
        
		'supports' 				=> array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
		//'taxonomies' 			=> array( 'category', 'post_tag' ),
		'public' 				=> true,
		'show_ui' 				=> true,
		'show_in_menu' 			=> true,
		'menu_position' 		=> 20,
        
		'show_in_nav_menus' 	=> true,
		'publicly_queryable' 	=> true,
		'exclude_from_search' 	=> false,
		'has_archive' 			=> true,
		'query_var' 			=> true,
		'can_export' 			=> true,
		'rewrite' 				=> true,
		'rewrite' 				=> array( 'slug' => 'docs' ),
		'capability_type' 		=> 'doc',
		'map_meta_cap' 			=> true,
		'capabilities' 			=> array(
		
			// meta caps (don't assign these to roles)
			'edit_post' 				=> 'edit_doc',
			'read_post' 				=> 'read_doc',
			'delete_post' 				=> 'delete_doc',
			
			// primitive caps used outside of map_meta_cap()
			'edit_posts' 				=> 'edit_docs',
			'edit_others_posts' 		=> 'edit_others_docs',
			'publish_posts' 			=> 'publish_docs',
			'read_private_posts' 		=> 'read_private_docs', 
			
			// primitive caps used inside of map_meta_cap()
			'read' 						=> 'read',
			'delete_posts' 				=> 'delete_docs',
			'delete_private_posts' 		=> 'delete_others_docs',
			'delete_published_posts' 	=> 'delete_others_docs',
			'delete_others_posts' 		=> 'delete_others_docs',
			'edit_private_posts' 		=> 'edit_docs',
			'edit_published_posts' 		=> 'edit_docs'
        )
    );

    register_post_type( 'doc', $args );
}

?>