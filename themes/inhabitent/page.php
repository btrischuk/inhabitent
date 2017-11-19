<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1205.6581424267497!2d-123.13708384462574!3d49.26333989352804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac4fb%3A0x7edde857c28340ba!2sRED+Academy+-+Digital+Marketing%2C+UX+%26+UI+Design%2C+Web+Development!5e0!3m2!1sen!2sca!4v1510963958458" width="760" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

				 
				</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
