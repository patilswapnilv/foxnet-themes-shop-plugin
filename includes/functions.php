<?php

/* If members plugin is activated, add members capabilities in role management. */
if( function_exists( 'members_get_capabilities' ) )
	add_filter( 'members_get_capabilities', 'foxnet_themes_shop_plugin_members_get_capabilities' );
	
/* Add text before bbPress form. */
add_action( 'bbp_theme_before_reply_form_content', 'foxnet_themes_shop_plugin_before_reply_form' );
add_action( 'bbp_theme_before_topic_form_content', 'foxnet_themes_shop_plugin_before_reply_form' );
add_action( 'bbp_theme_before_forum_form_content', 'foxnet_themes_shop_plugin_before_reply_form' );

/* Change from email address. */
//add_filter( 'wp_mail_from', 'foxnet_themes_shop_plugin_from_email' );

/* Change from name in emails send. */
add_filter( 'wp_mail_from_name', 'foxnet_themes_shop_plugin_from_name' );

/* Redirect my author link to about page. */
add_filter( 'author_link', 'foxnet_themes_shop_plugin_author_link', 10, 2 );

/*
* Add doc capabilities to Members plugin.
*
* @since 0.1.0
*/
function foxnet_themes_shop_plugin_members_get_capabilities( $caps ) {

	return array_merge( $caps, array( 'edit_docs', 'edit_others_docs', 'publish_docs', 'delete_docs', 'read_private_docs', 'delete_others_docs' ) );

}

/*
* Add text before bbPress form.
*
* @since 0.1.0
*/
function foxnet_themes_shop_plugin_before_reply_form() {

	_e( 'Place code snippets between backticks <code>`like this`</code>.', 'foxnet-themes-shop-plugin' );

}

/*
* Change from email address.
*
* @since 0.1.0
*/
function foxnet_themes_shop_plugin_from_email( $email ) {

	return 'sami.keijonen@foxnet.fi';
	
}

/*
* Change from name in emails.
*
* @since 0.1.0
*/
function foxnet_themes_shop_plugin_from_name( $name ) {

	return 'Foxnet Themes';
	
}

/*
* Redirect my author link to about page.
*
* @since 0.1.1
*/
function foxnet_themes_shop_plugin_author_link( $url, $user_id ) {

	if ( 1 === $user_id )
		return home_url( 'about' );

	return $url;
}

?>