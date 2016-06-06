<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Austin_Winnett
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap -->
<link href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Animate.css -->
<link href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/animate.css-master/animate.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,700|Raleway' rel='stylesheet' type='text/css'>

<!-- favicon -->
<link rel="icon" type="image/png" href="<?php bloginfo ('stylesheet_directory') ?>/assets/img/favicon-bw.ico">

<?php wp_head(); ?>
</head>

<body>
<div class="site">
	<div class="navvy">
           
            <h1><a href="/home/">Austin Winnett</a></h1>
            <h3>web designer and developer</h3>
            
        </div>
