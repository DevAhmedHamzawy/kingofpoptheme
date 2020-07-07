<?php get_header(); ?>


<!-- <div id='carousel_container'>
  <div id='left_scroll'><a href='javascript:slide("left");'><img src='left.png' /></a></div>
  <div id='right_scroll'><a href='javascript:slide("right");'><img src='right.png' /></a></div>
    <div id='carousel_inner'>
        <ul id='carousel_ul'>
            <li><a href='#'><img src="" /><br/><p>jjjjjjjjj</p><br/><p>jjjjjj</p></a></li>
            <li><a href='#'><img src="" /><br/><p>fffffff</p><br/><p>ffffff</p></a></li>
            <li><a href='#'><img src="" /><br/><p>ddddd</p><br/><p>dddd</p></a></li>
            <li><a href='#'><img src="" /><br/><p>ddddd</p><br/><p>dddd</p></a></li>
            <li><a href='#'><img src="" /></a></li>

        </ul>
    </div>
  <input type='hidden' id='hidden_auto_slide_seconds' value=0 />
</div> --> 


<div id="main-content" class="grid-2">
<div class="latest-news">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  		
		<?php wpb_set_post_views(get_the_ID()); ?>
                
                 <div class="main"><h2><?php the_title(); ?></h2></div>

	         <img class="postimg" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>"
                 width="100%" height="400" />

		<br/><br/>
                 <div class="extra">
                 <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php the_date(); ?>
		</div>
		<br/>
		
		<div class="extra">
                 <i class="fa fa-fire" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                 <?php echo wpb_get_post_views(get_the_ID()); ?>
                 </div>
                 <br/><br/><br/>   
		   
                    <div><p><?php the_content(); ?></p></div>
	          
		<br/><br/><br/>
	           <div class="extra"><i class="fa fa-tags" aria-hidden="true"></i>Tags</div>
                   <?php the_tags(); ?>
                
                   <div class="comment list">
                    <?php wp_list_comments( array( 'style' => 'div' ) ); ?>
                </div>
<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
echo 'Related Posts';
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>5,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>

<?php
endwhile;
}
wp_reset_query();
}
?>
</div>
 <?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>