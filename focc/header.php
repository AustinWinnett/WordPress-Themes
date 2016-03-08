<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fort_Osage_Christian_Counseling
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
<link href='https://fonts.googleapis.com/css?family=Volkorn|Josefin+Sans|Playfair+DisplayPoiret+One|Alegreya|Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>

<!-- Animate.css -->
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/animate.css-master/animate.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_directory') ?>/assets/css/font-awesome/css/font-awesome.min.css">

<!-- favicon -->
<link rel="icon" type="image/png" href="<?php bloginfo ('stylesheet_directory') ?>/assets/img/favicon.ico">



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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'focc' ); ?></a>

	<section id="header">
      
      <?php 
                    
                        wp_nav_menu ( array (
                        
                            'theme_location'    => 'primary',
                            'menu_class'        => 'navvy row list_inline'
                            
                        ));
                    
                    ?>
       
        <div class="container">
        
        

        
           <div class="image-cropper">
              <a href="http://www.progfrancis.com/focc/" class="mainPage"><img src="<?php bloginfo ('stylesheet_directory') ?>/assets/img/FOCC-Logo.jpg" alt="Logo"></a>
               <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"><img src="<?php bloginfo ('stylesheet_directory') ?>/assets/img/FOCC-Logo.jpg" alt="Logo"></a>
            </div>
            <div class="arrow">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a><br>
            </div>
        </div>
        
        <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                   <br>
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"><span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span></a><br>
                    <div class="mobileMenu">
                        
                        <?php 
                    
                        wp_nav_menu ( array (
                        
                            'theme_location'    => 'collapsable',
                            'menu_class'        => 'mobileMenu list-unstyled'

                        ));
                    
                    ?>
                        
                    </div>
                    
                </div>
            </div>
        
    </section><!-- Header Section -->

	<div id="content" class="site-content">
