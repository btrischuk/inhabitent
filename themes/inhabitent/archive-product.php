
<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="archive-content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="shop-stuff-header-container">
					<h1 class="shop-stuff-header">shop stuff</h1>
					<!-- <p> do</p>
					<p> eat</p>
					<p> sleep</p>
					<p> wear</p> -->
				</div>
				<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );

					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>

			<div class="shop-item-container">
				<ul>
			<?php while ( have_posts() ) : the_post(); ?>

		  <li class="title-price">

				<?php echo CFS() ->get (price) ?>
				 
				<?php
					get_template_part( 'template-parts/content' );
				?>
								</li>

			<?php endwhile; ?>

				</ul>
			<?php the_posts_navigation(); ?>
			</div>

		  <?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		  <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>