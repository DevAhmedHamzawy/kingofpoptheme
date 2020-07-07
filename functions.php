<?php

/**
 * Proper way to enqueue scripts and styles
 */
function  KingOfPop_scripts() {
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'fadingslide', get_template_directory_uri() . '/css/fs.css' );
    wp_enqueue_style( 'News', get_template_directory_uri() . '/css/News.css' );
    wp_enqueue_style( 'crousel', get_template_directory_uri() . '/css/crousel.css' );
    wp_enqueue_style( 'slide', get_template_directory_uri() . '/css/rs.css' );
    wp_enqueue_style( 'crouselside', get_template_directory_uri() . '/css/crouselside.css' );
    wp_enqueue_style( 'fontawesome',"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");

     wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
     wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', false );
     wp_enqueue_script( 'SmoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', array(), '1.0.0', true );
     wp_enqueue_script( 'News', get_template_directory_uri() . '/js/News.js', array(), '1.0.0', false );
     wp_enqueue_script( 'crousel', get_template_directory_uri() . '/js/crousel.js', array(), '1.0.0', false );
     wp_enqueue_script( 'slide', get_template_directory_uri() . '/js/fs.js', array(), '1.0.0', true );
     wp_enqueue_script( 'crouselside', get_template_directory_uri() . '/js/crouselside.js', array(), '1.0.0', false );
    wp_enqueue_script( 'fadingslide', get_template_directory_uri() . '/js/rs.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'KingOfPop_scripts' );


/* menu */
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
add_theme_support( 'post-thumbnails' );


/**
 * Extend Recent Posts Widget 
 *
 * Adds different formatting to the default WordPress Recent Posts Widget
 */
 
Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
 
	function widget($args, $instance) {
	
		extract( $args );
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title'], $instance, $this->id_base);
				
		if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
			$number = 10;
					
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
 
		if( $r->have_posts() ) :
			
			echo $before_widget;
			if( $title ) echo $before_title . $title . $after_title; ?>
                       <div id='carousel_container_side'>
  <div id='left_scroll_side'><a href='javascript:slide("top");'><img src="<?php echo get_template_directory_uri(); ?>/img/Arrows-Up.png" width="100" height="30"  /></a></div>
    <div id='carousel_inner_side'>
        <ul id='carousel_ul_side'>

				<?php while( $r->have_posts() ) : $r->the_post(); ?>			
				<li class="post">  <div class="rightrow">
            <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="rightnews" width="100" height="100" />
                     <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php  the_title_attribute(); ?>">
<div class="headingright"><h3 class="rightnews"><?php the_title(); ?></h3></div></a>
                    <div class="rightnews">
                    <div class="infosmall datesmall"><?php the_date(); ?></div>
                    <div class="infosmall"><?php the_category(','); ?></div>
		   
	           </div>
</div>
                    </li>
				<?php endwhile; ?>
			</ul>
                            </div>
                          <div id='right_scroll_side'><a href='javascript:slide("bottom");'><img src="<?php echo get_template_directory_uri(); ?>/img/Arrows-Down.png" width="100" height="30"  /></a></div>
  <input type='hidden' id='hidden_auto_slide_seconds_side' value=0 />
</div>
    

			<?php
			echo $after_widget;
		
		wp_reset_postdata();
		
		endif;
	}
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');

function KingOfPopTheme_widgets_init() {
        
        
      register_sidebar( array(
                
		'name'          => 'Latest_Posts',
		'id'            => 'Latest_posts',
                'class'       => 'Latest_Posts',
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '',
                'after_title' => '',
	) );
}
add_action( 'widgets_init', 'KingOfPopTheme_widgets_init' );
function custom_excerpt_length( $length ) {
	return 5;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




// Popular Posts function

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
/* To keep the count accurate, lets get rid of prefetching */
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/* No. of views function */ 
function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}



function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" size="40" placeholder="Search..." value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );


add_filter('relevanssi_modify_wp_query', 'rlv_meta_fix', 99);
function rlv_meta_fix($q) {
	$q->set('meta_query', '');
	return $q;
}

?>