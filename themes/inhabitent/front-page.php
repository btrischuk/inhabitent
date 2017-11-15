<?php
/**
 * The front page (home page) template file.
 * Template Name: Front page
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-front-page" role="main">

     
      <section class="front-center-logo-wrapper">
        <img class="front-center-logo" src=<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg' ?>>;

<!-- shop stuff -->
        <section class="product-info container">
            <h2>Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product-type',
                   'hide_empty' => 0,  //false
               ) );

               var_dump($terms);

               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">

                  <?php foreach ( $terms as $term ) : ?>

                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>

                  <?php endforeach; ?>

               </div>
               
            <?php endif; ?>
         </section>
      </section>

      <!-- journal -->
      
    <h2 class="journal-header"> inhabitent journal</h2>

<article class="journal-posts">
  
  <?php
  global $post;
  $args = array( 'posts_per_page' => 3, 'order'=> 'ASC', 'orderby' => 'title' );
  $postslist = get_posts( $args );
  foreach ( $postslist as $post ) :
    setup_postdata( $post ); ?> 

    <div class="front-journal-posts">
      <?php the_post_thumbnail( 'medium' ); ?>
    
        <time><?php the_date(); ?></time>/ <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
        <h2><?php the_title(); ?></h2>
        <button><a href="<?php the_permalink () ?>">read entry</a></button>
               
  </div>
  <?php
  endforeach; 
  wp_reset_postdata();
  ?>


</article>


  

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
      <?php endif; ?>

    
      


			<?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>


      <!-- <section class"center-logo">
        <img src="../../images/logos/inhabitent-logo-full.svg" alt="inhabitent logo!!!!!!">
      </section> -->

    <!-- body { -->
    <!-- background-image: url("inhabitent-logo-full.svg"); -->
    <!-- }<i class="fa fa-thermometer-empty" aria-hidden="true"></i> -->
      <!-- <body>
      background-image: url("paper.gif")
      
      -ms-flex-align: center;
    align-items: center;
    background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(../../images/home-hero.jpg) no-repeat top;
    background-size: cover,cover;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 100vh; -->
				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
