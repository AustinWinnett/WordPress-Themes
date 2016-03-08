<?php
/**
 *
 * Template Name: Home
 *
 */

// Custom Variables

$home_button_text       = get_field('home_button_text');
$home_button_url        = get_field('home_button_url');

get_header(); ?>

    <section id="content">
       
       <div class="container">
           
           <div class="messageBox">
              
                <div class="messageContent front-page">
               
                   <h1><?php bloginfo('name'); ?></h1>
               
                   <h3><?php bloginfo('description'); ?></h3>
                   
                   <a href="<?php echo $home_button_url; ?>" class="btn btn-danger"><?php echo $home_button_text; ?></a>
               
               </div>
               
           </div>
           
       </div>   
        
    </section><!-- Content Section -->

<?php get_footer(); ?>
