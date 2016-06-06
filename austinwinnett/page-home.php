<?php
/**
 * Template Name: Home
 */

/* Variables */
$about                  = get_field('about');
$about_image            = get_field('about_image');
$skills_lang            = get_field('skills_lang');
$skills_cms             = get_field('skills_cms');
$resume                 = get_field('resume');
$active_website_url     = get_field('active_website_url');
$active_website_title   = get_field('active_website_title');
$active_website_image   = get_field('active_website_image');

get_header(); ?>

        <!-- ABOUT
        =============================================== -->
        
        <section id="about" class="card">
            
            <h2>About</h2>
            
            <div class="content">
                
                <?php if ($about_image) { ?>
                
                    <div class="flatface"><img src="<?php echo $about_image[url]; ?>" alt="<?php echo $about_image[alt]; ?>"></div>
                    
                <?php } ?>

                <?php echo $about; ?>
                
            </div>
            
        </section>
        
        <!-- SKILLS
        =============================================== -->
        
        <section id="skills" class="card">
            
            <h2>Skills</h2>
            
            <div class="content">
                
                <ul>
                       
                   <li class="languages">Programming and Markup Languages</li>
                       <?php echo $skills_lang; ?>
                   <li class="cms">Content Management Systems (CMS) and Web Platforms</li>
                       <?php echo $skills_cms; ?>
                </ul>
                
            </div>
            
        </section>
        
        <!-- PORTFOLIO
        =============================================== -->
        
        <section id="portfolio" class="card">
            
            <h2>Portfolio</h2>
            
            <div class="content websites">
                               
               <div id="myCarousel" class="carousel slide" data-ride="carousel">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">              
                
                    <div class="item active">

                        <a href="<?php echo $active_website_url; ?>" title="<?php echo $active_website_title; ?>" alt="<?php echo $active_website_title; ?>" class="website"><img src="<?php echo $active_website_image[url]; ?>" alt="<?php echo $active_website_image[alt]; ?>" title="<?php echo $active_website_image[title]; ?>" class="thumb"></a>

                    </div>
                    
                    <?php $loop = new WP_Query( array( 'post_type' => 'project', 'orderby'=>'post_id', 'order'=>'ASC' ) ); ?>

                    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="item">   

                        <?php 
                            $project_image       = get_field('project_image');
                            $portfolio_url       = get_field('portfolio_url');
                        ?>     

                        <a href="<?php echo $portfolio_url; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="website"><img src="<?php echo $project_image[url]; ?>" title="<?php echo $project_image[title]; ?>" alt="<?php echo $project_image[alt]; ?>" class="thumb"></a>

                    </div>

                    <?php endwhile; ?>

                    <?php wp_reset_query(); ?>
                    

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            
                
            </div>

            
            <a href="<?php echo $resume; ?>" class="btn btnMain">Download Resume</a>
            
        </section>
        
        <!-- BLOG
        =============================================== -->
        


<?php
get_sidebar();
get_footer();
