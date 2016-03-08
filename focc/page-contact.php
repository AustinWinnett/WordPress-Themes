<?php
/**
 *
 * Template Name: Contact
 *
 */

// Custom Variables

$content           = get_field('content');


get_header(); ?>

    <section id="content">
       
       <div class="container">
           
           <div class="messageBox">
              
                <div class="messageContent front-page">
               
                   <h1> <?php wp_title('', true,''); ?> </h1>

                        <?php
                            query_posts( array( 'page_id' => 23 ) ); // ID of the page including the form

                            if ( have_posts() ) : while ( have_posts() ) : the_post();
                                the_content();
                            endwhile; endif;

                            wp_reset_query();
                        ?>
               </div>
               
           </div>
           
       </div>   
        
    </section><!-- Content Section -->

<?php get_footer(); ?>