<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Simple_and_Personal
 */

get_header(); ?>
    
    <section id="feature-image" class="feature-image feature-image-default-alt">
		<div class="container">
	        
	        <h1><?php the_title(); ?></h1> 
	        
	    </div>
	</section>


    <div class="darkPanel" id="blog">
	    <div class="container" id="primary">
		

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); ?>
