<?php
/*
 * Template Name: Requested BUT template
 * Template Post Type: post, page
 */
  
 get_header();  ?>

<div class="wrap two-column">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			
			while ( have_posts() ) : the_post();

                //get_template_part( 'template-parts/page/content', 'page' );
                the_title( '<h1>', '</h1>' ); 
                the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();