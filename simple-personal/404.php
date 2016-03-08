<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Simple_and_Personal
 */

$phone                  = get_field('phone');
$email                  = get_field('email');

get_header(); ?>
    
    <div class="darkPanel">

        <div class="container">

            <div class="centered-text">
                
                <div class="error">

                <h1 class="title">Sorry, this page can't be found!</h1>

                <p class="lead">I'm not really sure how you got here, but you probably want to go back to the <a href="http://austinwinnett.com">home page</a>.</p>
                
                </div>

            </div>

        </div>

    </div>

<?php
get_footer(); ?>
