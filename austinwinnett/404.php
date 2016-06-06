<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Austin_Winnett
 */

get_header(); ?>

	<section id="error" class="card">
	    
	    <h2>Page Not Found</h2>
	    
	    <div class="content">
	    
	        <i class="fa fa-question errorIcon animated rotateIn"></i>
	    
	        <p>Sorry, it looks like there's nothing here!  Hopefully you still feel like reading or getting to know me.</p>
	    
	    </div>
	    
	</section>
	
	<?php get_sidebar(); ?>

<?php
get_footer();
