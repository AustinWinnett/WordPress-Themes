<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Simple_and_Personal
 */

get_header(); ?>

    <section id="feature-image" class="feature-image feature-image-default-alt">
		<div class="container">
	        
	        <h1>Search Results</h1>
	        
	    </div>
	</section>
	
	
	
	
	<!-- BLOG CONTENT
	================================================== -->
   <div class="darkPanel">
    <div class="container">
	    <div class="row" id="primary">
	    
		    <main id="content" class="col-sm-8" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'simple-personal' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

            </main> <!-- content -->
            
            <!-- SIDEBAR
            ================================================== -->
            <aside class="col-sm-4">

                <?php get_sidebar(); ?>

            </aside>
            
        </div><!-- primary -->
        
    </div><!-- container -->
    
    </div>

<?php
get_sidebar();
get_footer();
