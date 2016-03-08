<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Simple_and_Personal
 */

get_header(); ?>
    
    

    <section id="feature-image" class="feature-image feature-image-default-alt">
		<div class="container">
	        
	        <h1><?php the_title(); ?></h1>
	        
	    </div>
	</section>
	
	
	
	
	<!-- BLOG CONTENT
	================================================== -->
   <div class="darkPanel">
    <div class="container">
	    <div class="row" id="primary">
	    
		    <main id="content" class="col-sm-8" role="main">
		    
		    <?php
                if ( have_posts() ) :

                    if ( is_home() && ! is_front_page() ) : ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>

                    <?php
                    endif;

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;

                    

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
get_footer(); ?>