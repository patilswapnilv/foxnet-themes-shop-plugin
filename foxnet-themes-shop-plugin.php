<?php
/**
 * Plugin Name: Foxnet Themes Shop Plugin
 * Plugin URI: http://foxnet-themes.fi
 * Description: Add stuff what we need in Foxnet Themes site.
 * Version: 0.1.1
 * Author: Sami Keijonen
 * Author URI: http://foxnet-themes.fi
 * Contributors: samikeijonen
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @package FoxnetThemesShopPlugin
 * @version 0.1
 * @author Sami Keijonen <sami.keijonen@foxnet.fi>
 * @copyright Copyright (c) 2012, Sami Keijonen
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

class Foxnet_Themes_Shop_Plugin {

	/**
	 * PHP5 constructor method.
	 *
	 * @since 0.1.0
	 */
	public function __construct() {

		/* Set the constants needed by the plugin. */
		add_action( 'plugins_loaded', array( &$this, 'constants' ), 1 );

		/* Internationalize the text strings used. */
		add_action( 'plugins_loaded', array( &$this, 'i18n' ), 2 );

		/* Load the functions files. */
		add_action( 'plugins_loaded', array( &$this, 'includes' ), 3 );

		/* Register activation hook. */
		//register_activation_hook( __FILE__, array( &$this, 'activation' ) );
		
	}

	/**
	 * Defines constants used by the plugin.
	 *
	 * @since 0.1.0
	 */
	public function constants() {

		/* Set constant path to the plugin directory. */
		define( 'FOXNET_THEMES_SHOP_PLUGIN_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

		/* Set the constant path to the includes directory. */
		define( 'FOXNET_THEMES_SHOP_PLUGIN_INCLUDES', FOXNET_THEMES_SHOP_PLUGIN_DIR . trailingslashit( 'includes' ) );

	}
	
	/**
	 * Load the translation of the plugin.
	 *
	 * @since 0.1.0
	 */
	public function i18n() {

		/* Load the translation of the plugin. */
		load_plugin_textdomain( 'foxnet-themes-shop-plugin', false, 'foxnet-themes-shop-plugin/languages' );
		
	}
	
	/**
	 * Loads the initial files needed by the plugin.
	 *
	 * @since 0.1.0
	 */
	public function includes() {

		require_once( FOXNET_THEMES_SHOP_PLUGIN_INCLUDES . 'functions.php' );
		require_once( FOXNET_THEMES_SHOP_PLUGIN_INCLUDES . 'post-types.php' );
		require_once( FOXNET_THEMES_SHOP_PLUGIN_INCLUDES . 'taxonomy.php' );
		require_once( FOXNET_THEMES_SHOP_PLUGIN_INCLUDES . 'login-screen.php' );
		require_once( FOXNET_THEMES_SHOP_PLUGIN_INCLUDES . 'widget-newsletter.php' );
		
	}

}

new Foxnet_Themes_Shop_Plugin();

?>