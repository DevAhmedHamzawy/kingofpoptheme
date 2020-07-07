<?php get_header(); ?>

<div id="main-content" class="grid-1">

        <div class="latest-news">
            <div class="main"><h2>Latest Posts</h2></div>
            <div class="the-articles">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                    <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" />
                    
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
</div>
<div class="clear"></div>
<?php get_footer(); ?>	