<?php
/**
 *  Template Name: Home
 */

// Custom Fields

$feature_title          = get_field('feature_title');
$feature_body           = get_field('feature_body');
$feature_button_url     = get_field('feature_button_url');
$feature_button_text    = get_field('feature_button_text');

$about_title            = get_field('about_title');
$about_lead             = get_field('about_lead');
$about_body_one         = get_field('about_body_one');
$about_body_two         = get_field('about_body_two');
$about_button_url       = get_field('about_button_url');
$about_button_text      = get_field('about_button_text');

$portfolio_lead         = get_field('portfolio_lead');
$resume_text            = get_field('resume_text');
$resume                 = get_field('resume');


$skills_title           = get_field('skills_title');
$skills_lead            = get_field('skills_lead');
$skills_body            = get_field('skills_body');
$first_skill_title      = get_field('first_skill_title');
$first_skill_location   = get_field('first_skill_location');
$first_skill_url        = get_field('first_skill_url');

get_header(); ?>

	<section class="container contentContainer" id="topContainer">

        <div class="row">

            <div class="col-md-6 col-md-offset-2 mainText animated zoomIn" id="topRow">

                <h1><?php echo $feature_title; ?></h1>
                
                <br>

                <?php echo $feature_body; ?>
                
                <br>

                <p><a class="btn btn-success btn-lg" href="<?php echo $feature_button_url; ?>" type="button" id="aboutButton"><?php echo $feature_button_text; ?></a></p>

            </div>

        </div>

    </section> <!-- topContainer -->


    <section class="darkPanel" id="aboutAustin">
        <a name="about"></a>

        <div class="container">

            <div class="centered-text">

                <h2 class="title"><?php echo $about_title; ?></h2>

                <p class="lead"><?php echo $about_lead; ?></p>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <?php echo $about_body_one; ?>

                </div>

                <div class="col-md-6">

                    <?php echo $about_body_two; ?>

                    <a href="<?php echo $about_button_url; ?>" type="button" class="btn btn-danger btn-lg"><?php echo $about_button_text; ?></a>

                </div>

            </div>

        </div>

    </section><!-- about -->

    <section class="lightPanel" id="portfolio">

        <div class="container">

            <div class="centered-text">

                <h2 class="title"><a name="portfolio"></a>Portfolio</h2>
                
                    
                    <?php $loop = new WP_Query( array( 'post_type' => 'project', 'orderby'=>'post_id', 'order'=>'ASC' ) ); ?>

                        <table class="responsive" id="projectsTable">

                           <tr>
                            
                            <?php $i=0; ?>

                            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                            
                            <?php 
                               
                               $project_image       = get_field('project_image');
                               $portfolio_url       = get_field('portfolio_url');
                               
                            ?>
                            
                            <?php $i++; ?>
                            
                            <?php if ($i<=3) { ?>

                                <td class="projects"><a href="<?php echo $project_image[url]; ?>" data-lightbox="websites" data-title="<?php the_title(); ?><?php the_content(); ?>"><img src="<?php echo $project_image[url]; ?>" alt="<?php echo $project_image[alt]; ?>" class="thumb"></a><br><a href="<?php echo $portfolio_url; ?>">View website &rarr;</a></td>
                            
                            <?php } elseif ($i==4) { ?>
                            
                                </tr><tr><td class="projects"><a href="<?php echo $project_image[url]; ?>" data-lightbox="websites" data-title="<?php the_title(); ?><?php the_content(); ?>"><img src="<?php echo $project_image[url]; ?>" alt="<?php echo $project_image[alt]; ?>" class="thumb"></a><br><a href="<?php echo $portfolio_url; ?>">View website &rarr;</a></td>
                                
                            <?php $i=1; ?>
                            
                            <?php } ?>

                            <?php endwhile; ?>

                            </tr>

                        </table>

                    <?php wp_reset_query(); ?>
                    
                
                <p class="lead"><?php echo $portfolio_lead; ?></p>

                <h4 class="resume"><a href="<?php echo $resume; ?>"><span class="glyphicon glyphicon-download-alt large" id="downloadIcon"></span>  <?php echo $resume_text; ?></a></h4>


            </div>

        </div>

    </section><!-- portfolio -->
    
    <section class="darkPanel" id="skills">
        
        <div class="container">

            <h2 class="title"><a name="skills"></a><?php echo $skills_title; ?></h2>
            <p class="lead"><?php echo $skills_lead; ?></p>

            <p><?php echo $skills_body; ?></p>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height:72px;">
              
                <?php $loop = new WP_Query( array( 'post_type' => 'skill', 'orderby'=>'post_id', 'order'=>'ASC' ) ); ?>

                <div class="carousel-inner">
                  
                           <div class="item active">

                                    <h3><a href="<?php echo $first_skill_url; ?>"><?php echo $first_skill_title; ?></a> <br> <small><?php echo $first_skill_location; ?></small></h3>

                            </div>
                   
                           <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			    	    
                            <div class="item">   
                                    
                                         <?php 
                                            $course_url = get_field('course_url');
                                         ?>     

                                    <h3><a href="<?php echo $course_url; ?>"><?php the_title(); ?></a> <br> <small><?php the_content(); ?></small></h3>

                            </div>
                            
                            <?php endwhile; ?>
                            
                            <?php wp_reset_query(); ?>

                </div>
                
                

                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>


        </div>
        
    </section><!-- skills -->

<?php
get_footer(); ?>