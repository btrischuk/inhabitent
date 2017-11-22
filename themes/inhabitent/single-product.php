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

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php echo CFS() ->get (price) ?>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>



		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->


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
