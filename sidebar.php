<div id="sidebar" class="grid-2">		

    <div class="box">
        <!-- Title -->
        <div class="main"><h3 class="title">Recommended</h3></div>
        
        
        
        <div class="content">
        
            
            <div class="wrapper">
                <div class="carousel">
                    <div class="inner">            
                    
                        <?php 
                            $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' =>   'meta_value_num', 'order' => 'DESC'  ) );
                            while ( $popularpost->have_posts() ) : $popularpost->the_post();  ?>
                        
                        <div class="slide">
                            <h2 class="slidetitle">
                            
                                <?Php the_title(); ?> 
                                <div class="extra">
                                    <i class="fa fa-clock-o"></i>
                                    <?php the_time('F j, Y'); ?>
                                    <i class="fa fa-comment"></i>
                                    <?php comments_number( $zero, $one, $more ); ?>
                                </div>
                            </h2>
                            
                            <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="rsimage" />
                        
                          </div><!--/slide--> 

                        <?php    
                        endwhile;
                        ?>

                    
                    </div>
                    <div class="arrow arrow-left"></div>
                    <div class="arrow arrow-right"></div>
                </div>
            </div>
        </div>
</div>
        
    <div class="box">
    <div class="main"><h3 class="title">Latest Posts</h3></div>
    <div class="content"><?php dynamic_sidebar( 'Latest_Posts' ); ?></div>			
    </div>
    
 
    <div class="box">
    
	<div class="main"><h3 class="title">ADS.</h3></div>
    <div class="content"> <img src="<?php echo get_template_directory_uri(); ?>/img/advtwo.jpg" /></div>    
    
    </div>

    <div class="box">
    <div class="main"><h3 class="title">Popular Songs</h3></div>
    <div class="content">
    <?php query_posts( 'posts_per_page=5' ); //set_post_thumbnail_size(20,20); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post rightrow">
    <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="rightnews" width="100" height="100" />
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
    <div class="headingright"><h3 class="rightnews title"><?php the_title(); ?></h3></div></a>
    <div class="rightnews">
    <div class="infosmall datesmall"><?php the_time('F j, Y'); ?></div>
    <div class="infosmall"><?php the_category(','); ?></div>
    </div></div>
    <?php endwhile; else : ?>
    <!-- The very first "if" tested to see if there were any Posts to -->
    <!-- display.  This "else" part tells what do if there weren't any. -->
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <!-- REALLY stop The Loop. -->
    <?php endif; ?>     
    </div>
    </div>
    
    <div class="box">
    
    <div class="main"><h3 class="title">ADS.</h3></div>
    <div class="content"> <img src="<?php echo get_template_directory_uri(); ?>/img/advthree.jpg" /></div>    
    
    </div>
    
    <div class="box">
    <div class="main"><h3 class="title">Videos</h3></div>
    <div class="content">
    <?php query_posts( 'posts_per_page=5' ); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="post rightrow">
    <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="rightnews" width="100" height="100" />
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
    <div class="headingright"><h3 class="rightnews title"><?php the_title(); ?></h3></div></a>
    <div class="rightnews">
    <div class="infosmall datesmall"><?php the_time('F j, Y'); ?></div>
    <div class="infosmall"><?php the_category(','); ?></div>
    </div>
    </div>
    
    <?php endwhile; else : ?>
    
    
    <!-- The very first "if" tested to see if there were any Posts to -->
    <!-- display.  This "else" part tells what do if there weren't any. -->
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    
    
    <!-- REALLY stop The Loop. -->
    <?php endif; ?>     
    </div>	            
    </div> 
    
     <div class="box">
    
    <div class="main"><h3 class="title">ADS.</h3></div>
    <div class="content"> <img src="<?php echo get_template_directory_uri(); ?>/img/advfour.jpg" /></div>    
    
    </div>
    
    <div class="box">
    	
    
    </div>
    
    </div>
    </div>
    
    </section>
</div>
<div class="clear"></div>			