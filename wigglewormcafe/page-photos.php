<?php
/**
 *
 * Template Name: Photos
 *
 */

get_header(); ?>

            <section id="mainBox">
            
            <div class="container">
                
                <div class="mainContainer">
                   
                   <h1>Photos</h1>
                   
                   <?php $loop = new WP_Query( array( 'post_type' => 'photo', 'orderby'=>'post_id', 'order'=>'ASC' ) ); ?>
                    
                    <table class="table">
                        <tbody>
                           
                           <tr>
                            
                            <?php $i=0; ?>

                            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                            
                            <?php $photo_url = get_field('photo_url'); ?>
                            
                            <?php $i++; ?>
                            
                            <?php if ($i<=4) { ?>

                                <td><a href="<?php echo $photo_url[url]; ?>" data-lightbox="wiggleWorm" data-title="<?php the_title(); ?>"><img src="<?php echo $photo_url[url]; ?>" alt="<?php echo $photo_url[alt]; ?>" class="thumb"></a></td>
                            
                            <?php } elseif ($i==5) { ?>
                            
                                </tr><tr><td><a href="<?php echo $photo_url[url]; ?>" data-lightbox="wiggleWorm" data-title="<?php the_title(); ?>"><img src="<?php echo $photo_url[url]; ?>" alt="<?php echo $photo_url[alt]; ?>" class="thumb"></a></td>
                                
                            <?php $i = 1 ?>
                           
                            <?php } ?>

                            <?php endwhile; ?>

                            </tr>
                           
                        </tbody>
                    </table>
                    
                </div><!-- mainContainer -->
                                
            </div><!-- container -->
            
        </section><!-- mainBox -->

<?php
get_footer(); ?>
