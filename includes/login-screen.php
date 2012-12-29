<?php

/* Change login logo url. */
add_filter( 'login_headerurl', 'foxnet_themes_shop_plugin_login_logo_url' );

/* Change logo header title. */
add_filter( 'login_headertitle', 'foxnet_themes_shop_plugin_login_logo_url_title' );

/* Add custom styles to login screen. */
add_action( 'login_enqueue_scripts', 'foxnet_themes_shop_plugin_login_css' );

/*
* Change login logo url.
*
* @since 0.1.0
*/
function foxnet_themes_shop_plugin_login_logo_url() {

	return get_bloginfo( 'url' );

}

/*
* Change logo header title.
*
* @since 0.1.0
*/
function foxnet_themes_shop_plugin_login_logo_url_title() {

	return get_bloginfo( 'name' );
	
}

/*
* Change styles in login screen.
*
* @link: http://codex.wordpress.org/Customizing_the_Login_Form
*
* @since 0.1.0
*/
function foxnet_themes_shop_plugin_login_css() { ?>
	<style type="text/css">
		body.login {
			background: url('<?php echo get_theme_mod( 'background_image' ); ?>') #<?php echo get_theme_mod( 'background_color' ); ?>;
		}
		<?php $foxnet_themes_shop_plugin_login_image = get_header_image();
					
		if ( ! empty( $foxnet_themes_shop_plugin_login_image ) ) { /* if header image is set use it as loginlogo. */ ?>
		body.login div#login h1 a {
			background-image: url('<?php echo $foxnet_themes_shop_plugin_login_image; ?>');
			background-size: 300px 79px;
			padding-bottom: 20px;
        }
		<?php } // end if ?>
		body.login div#login p#nav a,
		body.login div#login p#backtoblog a {
			color: #90b535 !important;
		}
		body.login div#login p#nav a:hover,
		body.login div#login p#backtoblog a:hover {
			color: #83ab23 !important;
		}
		body input[type="text"]:focus,
		body input[type="password"]:focus{
			background: #fff;
			border: 1px solid #90b535;
		}
		body.login div#login form#loginform p.submit input#wp-submit,
		body.login div#login form#lostpasswordform p.submit input#wp-submit {
			background: #90b535;
			background:    -moz-linear-gradient(top, #90b535, #83ab23);
			background: -webkit-linear-gradient(top, #90b535, #83ab23);
			background:         linear-gradient(top, #90b535, #83ab23);
			border-color: #78a018 #78a018 #387038;
		}
		body.login div#login form#loginform p.submit input#wp-submit:hover,
		body.login div#login form#lostpasswordform p.submit input#wp-submit:hover {
			background: #78a018;
			background:    -moz-linear-gradient(top, #83ab23, #90b535);
			background: -webkit-linear-gradient(top, #83ab23, #90b535);
			background:         linear-gradient(top, #83ab23, #90b535);
			border-color: #78a018 #78a018 #387038;
		}
	</style>
<?php }

?>