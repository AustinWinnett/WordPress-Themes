<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wiggle_Worm_Cafe
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
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/font-awesome/css/font-awesome.min.css">
        
        <!-- Animate.css -->
        <link rel="stylesheet" href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/animate.css-master/animate.min.css">
        
        <!-- Lightbox -->
        <link href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/lightbox.css" rel="stylesheet">
        
        <!-- favicon -->
        <link rel="icon" type="image/png" href="<?php bloginfo ('stylesheet_directory') ?>/assets/img/apple.png">

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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wigglewormcafe' ); ?></a>

	 <section id="menu">

       <div class="container">
            
            <div id="mainMenu">

            <?php 
                wp_nav_menu ( array (
                    'theme_location'    => 'primary',
                    'menu_class'        => 'list_inline'
                    
                ));
            ?>
            
            </div>

            <div class="mobileMenu">

                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"><?php the_title(); ?> <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></a>

                <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                       <?php 
                            wp_nav_menu ( array (
                                'theme_location'    => 'primary',
                                'menu_class'        => 'list_unstyled'

                            ));
                        ?>

                    </div><!-- panel-body -->
                </div><!-- #collapseOne -->

            </div><!-- mobileMenu -->

        </div><!-- container -->

    </section><!-- section.menu -->
