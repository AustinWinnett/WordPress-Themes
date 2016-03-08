<?php
/**
 *
 * Template Name: Default
 *
 */

// Custom Variables

$content           = get_field('content');


get_header(); ?>

    <section id="content">
       
       <div class="container">
           
           <div class="messageBox">
              
                <div class="messageContent defaultPage">
               
                   <h1> <?php wp_title('', true,''); ?> </h1>
               
                   <p class="lead"> <?php echo $content; ?> </p>
               
               </div>
               
           </div>
           
       </div>   
        
    </section><!-- Content Section -->

<?php get_footer(); ?>