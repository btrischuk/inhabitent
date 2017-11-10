<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );



function inhabitent_login_logo() { ?>
	<style type="text/css">
			#login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
				height:57px;
				width:320px;
				background-size: 320px 65px;
				background-repeat: no-repeat;
				padding-bottom: 10px;
			}
	</style>
<?php }
add_action( 'login_head', 'inhabitent_login_logo' );

function inhabitent_login_url() {
	return home_url();
}

add_filter('login_headerurl', 'inhabitent_login_url');

function inhabitent_logo_url_title(){
	return 'inhabitent';
}

add_filter('login_headertitle','inhabitent_logo_url_title' );



// function my_login_logo(){

// return home_url()

// }


//change wp logo and url
// function (){
// 	// <h1><a href="http://wordpress.org/" title="Powered by WordPress">inhabitent camping supply co.</a></h1>
// }
// add_actions();