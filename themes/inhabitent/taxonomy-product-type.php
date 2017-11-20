<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			</header><!-- .page-header -->
        <?php
        
					the_archive_title( '<h1 class="page-title">', '</h1>' ); 
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
			
	<div class="taxonomy-wrapper">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="taxonomy-product-container">
				<?php
					get_template_part( 'template-parts/content' );
				?>
					<?php 
						the_title( sprintf( '<h2 class="entry-title">', esc_url( get_template_part( get_permalink()) ) ),'......', '</h2>' ) ;
						?>
						<?php echo CFS() ->get (price) ?>

			</div>

			<?php endwhile; ?>
</div>
			<?php
			 the_posts_navigation(); 
			 ?>

		<?php else : ?>

			<?php 
			get_template_part( 'template-parts/content', 'none' ); 
			?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>
