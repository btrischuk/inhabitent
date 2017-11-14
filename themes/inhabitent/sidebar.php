<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
<a href="#"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:604-604-6040">604-604-6040</a></a>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
