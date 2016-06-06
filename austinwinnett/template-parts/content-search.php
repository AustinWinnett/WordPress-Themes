<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Austin_Winnett
 */

?>

<article id="post-<?php the_ID(); ?>" class="card">
       
        <header class="entry-header">
        
		    <?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
       
        </header>
    
		<?php if ( 'post' === get_post_type() ) : ?>
		
		<div class="desc">
		
			<?php austinwinnett_posted_on(); ?><br>
			<i class="fa fa-folder"></i> <?php echo get_the_category_list( __( ', ', 'austinwinnett' ) ); ?>
			
		</div><!-- .entry-meta -->
		
		<?php endif; ?>
		
	<div class="content post">
	
		<?php the_excerpt(); ?>
		
	</div><!-- .entry-summary -->
	
</article><!-- #post-## -->
