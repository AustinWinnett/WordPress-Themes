<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple_and_Personal
 */

?>

<div class="container centered-text" id="footer">

        <a href="https://www.facebook.com/awinnett1" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://www.linkedin.com/in/awinnett1" target="_blank" class="badge social linkedin"><i class="fa fa-linkedin"></i></a>
        <p>Copyright <?php echo date ('Y'); ?> | Austin Winnett</p>

    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php bloginfo ('template_directory') ?>/assets/assets/js/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo ('template_directory') ?>/assets/js/main.js"></script>
    
    <!-- Lightbox -->
    <script src="<?php bloginfo ('template_directory') ?>/assets/js/lightbox.js"></script>
    

    <script>
//        $(".contentContainer").css("min-height", $(window).height());
        
        $("#aboutButton").click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $("#aboutAustin").offset().top   }, 2000);
            });
    </script>

<?php wp_footer(); ?>

</body>
</html>
