<?php /* Template Name: Front Page Template */ 
	get_header();
?>

<!-- SLIDER -->
        <div id="outerslider">
        	<div class="container">
            <div class="row">
        	<div id="slidercontainer" class="twelve columns">
            
            	<section id="slider">
                    <div id="slideritems" class="flexslider">
                        <ul class="slides">
                            <?php // WP_Query arguments
                            $args = [
                                'post_type' => 'slider',
                                'order_by' => 'id',
                                'order' => 'asc'
                            ]; ?>

                            <?php

                            // The Query
                            $query = new WP_Query( $args );

                            // The Loop
                            if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) :
                                     $query->the_post(); ?>
                                    <li>
                                    <?php the_post_thumbnail('slider-velicina'); ?>
                                    <div class="flex-caption">
                                        <h1><?php the_title(); ?></h1>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    </li>
                                    <?php
                                endwhile;
                            endif;

                            // Restore original Post Data
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <img src=<?= get_template_directory_uri() . "/images/slider-shadow.png"?> alt="" />
                    </div>
                </section>
                
            </div>
            </div>
            </div>
        </div>
        <!-- END SLIDER -->

        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                	<section id="maincontent" class="twelve columns">
                    
                        <section class="content">
                        
                            <div class="highlight-content">
                               <h1> We're getting married August 18, 2013</h1>
                            </div>
                        
							<div id="featured" class="row">
                            	<div class="one_third columns">
                                	<img src=<?= get_template_directory_uri() . "/images/icons/icon5.png"?> alt="" />
                                	<h3>Our Wedding Location</h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
                                </div>
                                <div class="one_third columns">
                                	<img src=<?= get_template_directory_uri() . "/images/icons/icon6.png"?> alt="" />
                                	<h3>Our Gift Registry</h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
                                </div>
                                <div class="one_third columns">
                                	<img src=<?= get_template_directory_uri() . "/images/icons/icon7.png"?> alt="" />
                                	<h3>Honeymoon Destinantion</h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
                                </div>
                            </div>

                                
                           	<div class="separator"></div>
                            
                            <div class="row">
                            	<div class="one_half columns">
                                	<div class="frame10 circle">
                                	<img src=<?= get_template_directory_uri() . "/images/content/avatar5.jpg"?> alt="" class=" " />
                                    </div>
                                    <div class="indentleft">
                                	<h3 class="title">About Miranda</h3>
                                    <p>Etiam vitae urna nec ipsum gravida cursus dapibus et eros. Vivamus vel pellentesque nisl. Etiam eu sodales justo. Donec vitae faucibus tellus, at lacinia orci. Aliquam blandit tellus ut porttitor eleifend. Sed ornare tincidunt...</p>
                                    <a href="#" class="button">Read more <span></span></a>
                                    </div>
                                </div>
                                <div class="one_half columns">
                                	<div class="frame10 circle">
                                	<img src=<?= get_template_directory_uri() . "/images/content/avatar6.jpg"?> alt="" />
                                    </div>
                                    <div class="indentleft">
                                	<h3 class="title">About Michael</h3>
                                    <p>Etiam vitae urna nec ipsum gravida cursus dapibus et eros. Vivamus vel pellentesque nisl. Etiam eu sodales justo. Donec vitae faucibus tellus, at lacinia orci. Aliquam blandit tellus ut porttitor eleifend. Sed ornare tincidunt...</p>
                                    <a href="#" class="button">Read more <span></span></a>
                                    </div>
                                </div>
                            </div> 
                             
                            
                        </section>
                    
                	</section>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->

<?php get_footer(); ?>