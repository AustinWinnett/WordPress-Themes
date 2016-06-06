<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Austin_Winnett
 */

?>

<article id="post-<?php the_ID(); ?> post" class="card">
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h2>', '</h2>' );
			} else {
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="desc">
			<?php austinwinnett_posted_on(); ?><br>
			<i class="fa fa-folder"></i> <?php echo get_the_category_list( __( ', ', 'austinwinnett' ) ); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="content post">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'austinwinnett' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'austinwinnett' ),
				'after'  => '</div>',
			) );
		?>
		
		<span class="back"><a href="/home/"><i class="fa fa-arrow-left"></i> Back</a></span>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
