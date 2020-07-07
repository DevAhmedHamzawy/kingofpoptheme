<?php get_header(); ?>

<!-- slide -->

<div class="galleryContainer grid-1">

        <!-- progress bar -->
        
        <progress id="progressbar" value="0" max="100"></progress>
        
        <div class="galleryPreviewContainer">
        
           
     
            <div class="galleryPreviewImage"> 
            
                <!-- counter -->
                <?php $i=0; ?>
                
                <!-- No. Of Posts -->
                <?php query_posts( 'posts_per_page=4' ); ?>
                
                
                <!-- launching posts -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                    <!-- feature image -->
                    <img class="previewImage<?php echo $i ?>" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" width="100%" height="400" />
                    
                    <!-- Title Time and No of comments -->
                    <h2 class="title<?php echo $i ?> grid-1">
                        <?php ++$i; ?>
                        
                        <!-- Title -->
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                            <?php the_title(); ?>
                        </a>
                        
                        <!-- Date and No of Comments -->
                        <div class="extra"> 
                        
                        
                            <i class="fa fa-clock-o"></i>
                            <?php the_time('F j, Y'); ?>
                            
                            <i class="fa fa-comment"></i>
                            <fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count> 
 
                        
                        </div>
                    
                    </h2> 
                
                <?php endwhile; ?>
            
            
            </div> 
            
            <?php else : ?>
            
                <!-- The very first "if" tested to see if there were any Posts to -->
                <!-- display.  This "else" part tells what do if there weren't any. -->
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <!-- REALLY stop The Loop. -->
                
            <?php endif; ?> 
            
            
             <!-- Thumbs of slide -->
             
        <div class="galleryThumbnailsContainer">
        
            <div class="galleryThumbnails">
            
                <!-- counter -->
                
                <?php $t = 0 ?>
                
                <!-- No. Of Posts -->
                
                <?php query_posts( 'posts_per_page=4' ); ?>
                
                <!-- while for launching posts -->
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                
                <div class="Thumbnail">
                    <a href="javascript: changeimage(<?php echo $t ?>)" class="thumbnailsimage<?php echo $t ?>"><img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="" /></a>
                   
                   <!-- Title Time and No of comments -->
                    <h2 class="title">
                        <?php ++$i; ?>
                        
                        <!-- Title -->
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                            <?php the_title(); ?>
                        </a>
                        
                        <!-- Date and No of Comments -->
                        <div class="extra"> 
                        
                        
                            <i class="fa fa-clock-o"></i>
                            <?php the_time('F j, Y'); ?>
                            
                            <i class="fa fa-comment"></i>
                            <fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count> 
 
                        
                        </div>
                    
                    </h2>
                  </div>
                   
                   <?php ++$t; ?>
                
                <?php endwhile; ?>
                
                <?php else : ?>
                
                    <!-- The very first "if" tested to see if there were any Posts to -->
                    <!-- display.  This "else" part tells what do if there weren't any. -->
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <!-- REALLY stop The Loop. -->
                
                <?php endif; ?>
                
            </div>
            
        </div>
            
            
            <!-- Arrows -->
            <div class="galleryPreviewArrows">
            
                <a href="#" class="previousSlideArrow">&lt;</a>
                <a href="#" class="nextSlideArrow">&gt;</a>
                
            </div>
        </div>

</div> 


<div id="main-content" class="grid-2">

        <div class="latest-news">
            <div class="main"><h2>Latest Posts</h2></div>
            <div class="the-articles">
                <?php query_posts( 'posts_per_page=6' );  ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                    <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="imgpost" />
                    
                    <!-- Title Time and No of comments -->
                    <h2 class="title">
                        <?php ++$i; ?>
                        
                        <!-- Title -->
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                            <?php the_title(); ?>
                        </a>
                        
                        <!-- Date and No of Comments -->
                        <div class="extra"> 
                        
                        
                            <i class="fa fa-clock-o"></i>
                            <?php the_time('F j, Y'); ?>
                            
                            <i class="fa fa-comment"></i>
                            <fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count> 
 
                        
                        </div>
                    
                    </h2> 

                    
                    </article>
                    <?php endwhile; else : ?>
                    <!-- The very first "if" tested to see if there were any Posts to -->
                    <!-- display.  This "else" part tells what do if there weren't any. -->
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <!-- REALLY stop The Loop. -->
                <?php endif; ?> 
            </div>
        </div>
<div class="clearfix"></div>
<div class='all_news_container'>
        <div class="main"><h2>Exclusive posts</h2></div>
        <div id='news_navigation'></div>
        <div class='single_news_container' class="grid-2">
            <div class="left">
            
                <?php query_posts( 'posts_per_page=1' );  ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                    
                        <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="imgpost" />
                        <!-- Title Time and No of comments -->
                        <h2 class="title">
                            <?php ++$i; ?>
                            
                            <!-- Title -->
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                                <?php the_title(); ?>
                            </a>
                            
                            <!-- Date and No of Comments -->
                            <div class="extra"> 
                            
                            
                                <i class="fa fa-clock-o"></i>
                                <?php the_time('F j, Y'); ?>
                                
                                <i class="fa fa-comment"></i>
                                <fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count> 
     
                            
                            </div>
                        
                        </h2> 
                        
                        
                    </article>
                
                <?php endwhile; else : ?>
                
                
                    <!-- The very first "if" tested to see if there were any Posts to -->
                    <!-- display.  This "else" part tells what do if there weren't any. -->
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    
                    
                    <!-- REALLY stop The Loop. -->
                <?php endif; ?>    
            
            </div>        
            <div class="right"> 
            
                <?php query_posts( 'posts_per_page=18' ); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <div class="rightrow">
                        <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="rightnews imgpost"  />
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                        <div class="headingright"><h3 class="rightnews"><?php the_title(); ?></h3></div></a>
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
        <div class='single_news_container'>
            <div class="left">
            
                <?php query_posts( 'posts_per_page=1' );  ?>
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                        <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="imgpost" />
                        <!-- Title Time and No of comments -->
                            <h2 class="title">
                                <?php ++$i; ?>
                                
                                <!-- Title -->
                                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                                    <?php the_title(); ?>
                                </a>
                                
                                <!-- Date and No of Comments -->
                                <div class="extra"> 
                                
                                
                                    <i class="fa fa-clock-o"></i>
                                    <?php the_time('F j, Y'); ?>
                                    
                                    <i class="fa fa-comment"></i>
                                    <fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count> 
         
                                
                                </div>
                            
                            </h2> 
                    </article>
                    
                    <?php endwhile; else : ?>
                    
                    
                    <!-- The very first "if" tested to see if there were any Posts to -->
                    <!-- display.  This "else" part tells what do if there weren't any. -->
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    
                    
                    <!-- REALLY stop The Loop. -->
                <?php endif; ?>    
                
            </div>        
            <div class="right"> 
            
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                    <div class="rightrow">
                        <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>"  class="rightnews imgpost" /> 
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                        <div class="headingright"><h3 class="rightnews"><?php the_title(); ?></h3></div></a>
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
        <div class='single_news_container'>
            <div class="left">
            
                <?php query_posts( 'posts_per_page=1' ); 
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                    <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="imgpost" />
                     <!-- Title Time and No of comments -->
                                    <h2 class="title">
                                        <?php ++$i; ?>
                                        
                                        <!-- Title -->
                                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                        
                                        <!-- Date and No of Comments -->
                                        <div class="extra"> 
                                        
                                        
                                            <i class="fa fa-clock-o"></i>
                                            <?php the_time('F j, Y'); ?>
                                            
                                            <i class="fa fa-comment"></i>
                                            <fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count> 
                 
                                        
                                        </div>
                                    
                                    </h2> 
                </article>
                
                <?php endwhile; else : ?>
                
                
                <!-- The very first "if" tested to see if there were any Posts to -->
                <!-- display.  This "else" part tells what do if there weren't any. -->
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                
                
                <!-- REALLY stop The Loop. -->
                <?php endif; ?>    
            
            </div>        
            <div class="right"> 
            
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <div class="rightrow">
                    <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>"  class="rightnews imgpost" />               
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                    <div class="headingright"><h3 class="rightnews"><?php the_title(); ?></h3></div></a>
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
        <div class='single_news_container'>
            <div class="left">
            
                <?php query_posts( 'posts_per_page=4' );  ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="imgpost" />
                 <!-- Title Time and No of comments -->
                                    <h2 class="title">
                                        <?php ++$i; ?>
                                        
                                        <!-- Title -->
                                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                        
                                        <!-- Date and No of Comments -->
                                        <div class="extra"> 
                                        
                                        
                                            <i class="fa fa-clock-o"></i>
                                            <?php the_time('F j, Y'); ?>
                                            
                                            <i class="fa fa-comment"></i>
                                            <fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count> 
                 
                                        
                                        </div>
                                    
                                    </h2> 
                </article>
                
                <?php endwhile; else : ?>
                
                
                <!-- The very first "if" tested to see if there were any Posts to -->
                <!-- display.  This "else" part tells what do if there weren't any. -->
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                
                
                <!-- REALLY stop The Loop. -->
                <?php endif; ?>    
                
            </div>        
            <div class="right"> 
            
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <div class="rightrow">
                <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>"  class="rightnews imgpost" />              
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                <div class="headingright"><h3 class="rightnews"><?php the_title(); ?></h3></div></a>
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
        <div class='single_news_container'>
            <div class="left">
            
            <?php query_posts( 'posts_per_page=4' ); 
            ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
            <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="imgpost"  />
             <!-- Title Time and No of comments -->
                            <h2 class="title">
                                <?php ++$i; ?>
                                
                                <!-- Title -->
                                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                                    <?php the_title(); ?>
                                </a>
                                
                                <!-- Date and No of Comments -->
                                <div class="extra"> 
                                
                                
                                    <i class="fa fa-clock-o"></i>
                                    <?php the_time('F j, Y'); ?>
                                    
                                    <i class="fa fa-comment"></i>
                                    <fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count> 
         
                                
                                </div>
                            
                            </h2> 
            </article>
            
            <?php endwhile; else : ?>
            
            
            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            
            
            <!-- REALLY stop The Loop. -->
            <?php endif; ?>    
            
            </div>        
            <div class="right"> 
            
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <div class="rightrow">
                <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>"  class="rightnews imgpost" />   
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
                <div class="headingright"><h3 class="rightnews"><?php the_title(); ?></h3></div></a>
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
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>				