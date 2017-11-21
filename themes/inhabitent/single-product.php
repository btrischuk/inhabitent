<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
    <!-- <div class="testing"> -->

		<?php 
			get_template_part( 'template-parts/content', 'single' ); 
		?>
    <p class="single-product-social">
      <button><a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i><span>Like</span></a></button>
      <button><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i><span>Tweet</span></a></button>
      <button><a href="https://google-plus.com"><i class="fa fa-pinterest" aria-hidden="true"></i><span>Pin</span></a></button>
    </p>
<!-- </div>  -->
			<?php the_post_navigation(); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :comments_template();
				endif;
			?>
	<!-- </div>  -->
		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	


<?php get_footer(); ?>
