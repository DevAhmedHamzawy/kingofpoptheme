<?php
/**
* A Simple Category Template
*/

get_header(); ?> 

<div id="main-content" class="grid-2">
<div class="latest-news">

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>


<div class="main"><h2><?php single_cat_title( '', true ); ?></h2></div>


<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>


<?php

// The Loop
while ( have_posts() ) : the_post(); ?>
<article>
                    <div class="imgpost"><?php the_post_thumbnail();?></div>
                   
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
<?php endwhile; 

else: ?>
<p>Sorry, no posts matched your criteria.</p>


<?php endif; ?>

</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>