<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wiggle_Worm_Cafe
 */

?>

<footer>

    <div class="container">

        <p style="float:left;">&copy; 2016 | Wiggle Worm Cafe</p>
        <p style="float:right;"><a href="http://www.facebook.com" class="icons"><span class="fa fa-facebook-square"></span></a><a href="http://www.instagram.com" class="icons"><span class="fa fa-instagram"></span></a><a href="http://www.twitter.com" class="icons"><span class="fa fa-twitter"></span></a></p>

    </div><!-- container -->

</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo ('template_directory') ?>/assets/js/bootstrap.min.js"></script>
<!-- Lightbox -->
<script src="<?php bloginfo ('template_directory') ?>/assets/js/lightbox.js"></script>

<script>

    $( ".collapsed" ).click(function() {
      $(".glyphicon-menu-down").toggleClass( "glyphicon-menu-up" );
    });

</script>

<?php wp_footer(); ?>

</body>
</html>
