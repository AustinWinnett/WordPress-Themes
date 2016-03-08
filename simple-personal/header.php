<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple_and_Personal
 */

// Custom Fields

$phone                  = get_field('phone');
$email                  = get_field('email');

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Bootstrap -->
<link href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome Icons -->
<link href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Fonts for Website from Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Poiret+One|Josefin+Sans|Imprima|Text+Me+One' rel='stylesheet' type='text/css'>

<!-- Animate.css -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/animate.css-master/animate.min.css">

<!-- Lightbox -->
<link href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/lightbox.css" rel="stylesheet">

<!-- favicon -->
<link rel="icon" type="image/png" href="<?php bloginfo ('stylesheet_directory') ?>/assets/img/favicon-bw.ico">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simple-personal' ); ?></a>

	    <div class="navbar navbar-default navbar-fixed-top">

            <div class="container">

                <div class="navbar-header">

                    <img src="<?php bloginfo ('stylesheet_directory') ?>/assets/img/AW-bw.png" id="brandLogo"/>

                    <a href="http://austinwinnett.com" class="navbar-brand">Austin Winnett</a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse">

                          <?php 

                                wp_nav_menu ( array (

                                    'theme_location'    => 'primary',
                                    'menu_class'        => 'nav navbar-nav list_inline'

                                ));

                            ?>

                    <ul class="nav navbar-nav navbar-right contact-info">

                        <li>
                            <h4><a href="tel:+913-314-8202"><span class="glyphicon glyphicon-earphone large"></span>  913-314-8202</a></h4></li>
                        <li>
                            <h4><a href="mailto:awinnett1@hotmail.com"><span class="glyphicon glyphicon-envelope large"></span>  awinnett1@hotmail.com</a></h4></li>


                    </ul>


                </div>

            </div>

        </div>

	<div id="content" class="site-content">
