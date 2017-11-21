
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
					<h1 class="shop-stuff-header"><?php echo get_the_archive_title(); ?></h1>

				</div>

				<?php
      		$terms = get_terms( array('taxonomy' => 'product-type','hide_empty' => 0, ) );

					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :?>

    		<div class="product-type-blocks">

      		<?php foreach ( $terms as $term ) : ?>
						<!-- <div class="product-link-container"> -->
        		<p class="shop-product-link"><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> stuff</a></p>
				<!-- </div> -->
			
      	<?php endforeach; ?>

     	  <?php endif; ?>

				
				<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );

					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				
			</header><!-- .page-header -->
			

			<?php /* Start the Loop */ ?>
			
			<div class="shop-item-container">
				<ul>
					<?php while ( have_posts() ) : the_post(); ?>

					<li class="shop-item">

						<a href="<?php echo the_permalink()?>"><?php the_post_thumbnail('medium');?></a>

							<?php 
								the_title( sprintf( '<h2 class="entry-title">', esc_url( get_template_part( get_permalink()) ) ),'......', '</h2>' ) ;
							?>

							<?php echo CFS() ->get (price) ?>
														
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
