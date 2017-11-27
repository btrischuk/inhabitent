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
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

function inhabitent_login_logo() { ?>
	<style type="text/css">
			#login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
				height: 57px;
				width: 320px;
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

/**
 * Modify the shop archive title
 */
function inhabitent_product_archive_title( $query ) {
	if( $query ->is_main_query() && !is_admin() && is_post_type_archive( 'product')) {

		$query->set('posts_per_page', '16');
		add_filter( 'get_the_archive_title', function( $title ) {
			$title = 'Shop Stuff';

			return $title;
		});
	}
}

//archive title
add_action ('pre_get_posts', 'inhabitent_product_archive_title');

function inhabitent_logo_url_title(){
	return 'inhabitent';
}

add_filter('login_headertitle','inhabitent_logo_url_title' );

//about page
function inhabitent_about_dynamic_css() {
	if ( ! is_page_template( 'page-templates/about.php' ) ) {
		return;
	}

	$image = CFS()->get( 'about_header_image' );

	if ( ! $image ) {
		return;
	}

	$hero_css = ".page-template-about .entry-header {
		background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
		url({$image}) no-repeat center bottom;
		background-size: cover, cover;
	}";

	wp_add_inline_style( 'tent-style', $hero_css );
}

add_action( 'wp_enqueue_scripts', 'inhabitent_about_dynamic_css');
