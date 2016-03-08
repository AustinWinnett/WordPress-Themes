<?php
/**
 *
 * Template Name: Contacts
 *
 */

// Custom Variables

$hours_title        = get_field('hours_title');
$hours_body         = get_field('hours_body');
$phone_title        = get_field('phone_title');
$phone              = get_field('phone');
$email_title        = get_field('email_title');
$email              = get_field('email');
$address_title      = get_field('address_title');
$address            = get_field('address');
$google_map         = get_field('google_map');
$map                = get_field('map');

get_header(); ?>

<section id="mainBox">
            
    <div class="container">

        <div class="mainContainer">

           <h1><?php the_title(); ?></h1>

           <div class="col-sm-1">

               <!-- easy padding -->

            </div><!-- easy padding column -->

            <div class="col-sm-4">

                <h2><?php echo $hours_title; ?>: </h2>

                <?php echo $hours_body; ?>

                <h2><?php echo $phone_title; ?>: </h2>

                <p><?php echo $phone; ?></p>

                <h2><?php echo $email_title; ?>: </h2>

                <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>

            </div><!-- col -->

            <div class="col-sm-7">

               <h2><?php echo $address_title; ?>: </h2>

                <p><?php echo $address; ?></p>

                <!-- Google Map -->
                
                <?php echo $map; ?>

                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3092.8083270452858!2d-96.57090863322256!3d39.179077930173214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87bdd27d10aeff11%3A0xf41d9d5d7f16c805!2s821+Poyntz+Ave%2C+Manhattan%2C+KS+66502!5e0!3m2!1sen!2sus!4v1454943767335" width="600" height="450" frameborder="0" style="border:0" class="gmap" allowfullscreen></iframe>-->

            </div><!-- col -->

        </div><!-- main-container -->

    </div><!-- container -->

</section><!-- mainBox -->
<?php
get_footer(); ?>
