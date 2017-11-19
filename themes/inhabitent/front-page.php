<?php
/**
 * The front page (home page) template file.
 * Template Name: Front page
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

  <div class="hero">
		<img class="front-center-logo" src=<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg' ?>>;
	</div>
			

	  <div id="primary" class="content-area">
    
	  <main id="main" class="site-main-front-page" role="main">

    <article class="front-container-content">

  <!-- shop stuff -->
  <section class="product-info container">
    <h2>Shop Stuff</h2>
    <?php
      $terms = get_terms( array('taxonomy' => 'product-type','hide_empty' => 0, ) );

      if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
    ?>
    <div class="product-type-blocks">

      <?php foreach ( $terms as $term ) : ?>
      <div class="product-type-block-wrapper">
        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
        <p><?php echo $term->description; ?></p>
        <button class="stuff-button"><p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> stuff</a></p></button>
      </div>
      <?php endforeach; ?>
    </div>
               
      <?php endif; ?>
  </section>

      <!-- journal -->
      
  <h2 class="journal-header">inhabitent journal</h2>

  <section class="journal-posts">

    <?php
  
      $args = array( 'posts_per_page' => 3, 'order'=> 'ASC', 'orderby' => 'title' );
      $postslist = get_posts( $args );
    ?>

      <?php foreach ( $postslist as $post ) : setup_postdata( $post ); ?> 
    
    <div class="front-journal-posts">
    
      <div class="front-page-thumbnail">
        <?php the_post_thumbnail( 'medium' ); ?>
      </div>
      <div class="front-journal-posts-text">
        <time><?php the_date(); ?></time>/ <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
        <h3><?php the_title(); ?></h3>
        <button><a href="<?php the_permalink () ?>">read entry</a></button>
      </div>  
    </div>

      <?php endforeach; wp_reset_postdata(); ?>
    
  </section>


  <!-- latest Adventures -->
  <div class="latest-adventures-wrapper">
    <h2 class="journal-header">latest Adventures</h2>
    <section class="latest-adventures-content">

      <div class="canoe">
        <h3 class="men">Getting Back to Nature in a Canoe</h3>
        <button>read more</button>
      </div>

      <div class="beach"> 
        <h3 class="men">A Night with Friends at the Beach</h3>
        <button>read more</button>
      </div>

      <div class="mountain"> 
        <h3 class="men">Taking in the View at Big Mountain</h3>
        <button>read more</button>
      </div>

      <div class="gazing">
        <h3 class="men">Star-Gazing at the Night Sky</h3>
        <button>read more</button>
      </div>
      <button class="more-adventure-button">more adventures</button>

    </section>
  </div>




		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
      <?php endif; ?>



			<?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


  </article>
  </main><!-- #main -->
</div><!-- #primary -->
  <?php get_footer(); ?>



