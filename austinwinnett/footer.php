<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Austin_Winnett
 */

?>

	<!-- CONTACT
        =============================================== -->
        
        <div class="contactCircle" data-toggle="modal" data-target="#contact"><i class="fa fa-paper-plane"></i></div>

        <!-- Modal -->
        <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="Contact">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title" id="myModalLabel">Contact</h4>
                    </div>
                    <div class="modal-body">
                       
                       <p>Here are a few ways to contact me:</p>
                       
                       <a href="tel:+19133148202"><i class="fa fa-phone"></i> 913-314-8202</a>
                       
                       <a href="mailto:austin@austinwinnett.com"><i class="fa fa-envelope"></i> austin@austinwinnett.com</a>
                       
                       <hr>
                        
                        <?php echo do_shortcode( '[contact-form-7 id="121" title="Contact form 1"]' ); ?>
                        
                    </div>

                </div>
            </div>
        </div>
        
        
        
        <!-- FOOTER
        =============================================== -->
        
        <footer>
            
            <a href="https://www.facebook.com/awinnett1"><i class="fa fa-facebook social"></i></a>
            <a href="https://github.com/AustinWinnett/"><i class="fa fa-github social"></i></a>
            <a href="https://www.linkedin.com/in/awinnett1"><i class="fa fa-linkedin social"></i></a>

            <p>Copyright 2016 | Austin Winnett</p>
            
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php bloginfo ('template_directory') ?>/assets/js/bootstrap.min.js"></script>
        <!-- Custom -->
        <script src="<?php bloginfo ('template_directory') ?>/assets/js/custom.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
