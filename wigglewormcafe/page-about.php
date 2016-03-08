<?php
/**
 *
 * Template Name: About
 *
 */

// Custom Variables

$story_title        = get_field('story_title');
$story_body         = get_field('story_body');
$employees_title    = get_field('employees_title');
$employees_body     = get_field('employees_body');
$amenities_title    = get_field('amenities_title');
$amenities_body     = get_field('amenities_body');

get_header(); ?>

<section id="mainBox">
            
    <div class="container">

        <div class="mainContainer">

            <h1><?php the_title(); ?></h1>

            <h2><?php echo $story_title; ?></h2>

            <img src="<?php bloginfo ('stylesheet_directory') ?>/assets/img/worm-apple.png" alt="Wiggle Worm" class="aboutPhoto">

            <?php echo $story_body; ?>

            <h2><?php echo $employee_title; ?></h2>

            <?php echo $employee_body; ?>

            <?php $loop = new WP_Query( array( 'post_type' => 'wiggles', 'orderby'=>'post_id', 'order'=>'ASC' ) ); ?>

                <?php $i=0; ?>

                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                    <?php $wiggle_picture = get_field('wiggle_picture'); ?>

                    <?php if ($i==0) { ?>

                        <div class="col-sm-2">

                            <div class="image-cropper wigglePic">
                                <img src="<?php echo $wiggle_picture[url]; ?>" alt="<?php echo $wiggle_picture[alt]; ?>" class="rounded">
                            </div>


                        </div><!-- col -->

                        <div class="col-sm-10 wiggler">

                            <?php the_content(); ?>

                        </div><!-- col -->

                        <div class="clear"></div>

                        </br>

                        <?php $i++; ?>

                    <?php } elseif ($i==1) { ?>

                        <div class="col-sm-2 col-sm-push-10">   

                            <div class="image-cropper wigglePic">
                                <img src="<?php echo $wiggle_picture[url]; ?>" alt="<?php echo $wiggle_picture[alt]; ?>" class="rounded">
                            </div>

                        </div><!-- col -->

                        <div class="col-sm-10  col-sm-pull-2 wiggler">

                           <?php the_content(); ?>

                        </div><!-- col -->

                        <div class="clear"></div>

                        </br>

                        <?php $i=0; ?>

                    <?php } ?>

                <?php endwhile; ?>

            <h2 ><?php echo $amenities_title; ?></h2>

            <?php echo $amenities_body; ?>

        </div><!-- main-container -->

    </div><!-- container -->

</section><!-- mainBox -->

<?php
get_footer(); ?>