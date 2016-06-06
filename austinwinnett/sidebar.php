<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Austin_Winnett
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<section id="comments" class="card">
           
           <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="blogSection">
                        <h2>
                            <a id="panelTitle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Read More... <i class="fa fa-caret-down"></i>
                            </a>
                          </h2>
                    </div>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="blogSection">
                        


                        <aside id="secondary" class="widget-area" role="complementary">
                               <div class="content">
                                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                                </div>
                            </aside><!-- #secondary -->


                        
                    </div>
                </div>
            </div>

        </section>