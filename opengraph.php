<?php if (have_posts()) : while(have_posts()) : the_post(); ?>  

<!-- Facebook app and admin ID -->  

<meta property="fb:app_id" content="your_fb_app_id" />  
<meta property="fb:admins" content="your_fb_admin_id" />  
    
<?php if ( is_single() || is_page() ) { ?>  

<!-- if is a single content post or a single page -->

<meta property="og:url" content="<?php the_permalink() ?>"/>  
<meta property="og:title" content="<?php the_title(); ?>" />  
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />  
<meta property="og:type" content="article" />  

<?php 

  if ( has_post_thumbnail() ) {
		
		// if posts has featured image, stores url in var $url 
		$url = wp_get_attachment_url(get_post_thumbnail_id()); 
		
		}
		
	else {
		
		// if has no featured image, stores url to default image in image directory inside our theme directory
		$url= get_bloginfo('template_directory') . '/images/default.jpg';
		
		}
?>

<meta property="og:image" content="<?php echo $url; ?>" />  

<?php } else { ?>  

<!-- if not single post or single page (loop, search, archive...) -->  

<meta property="og:url" content="<?php echo site_url(); ?>"/> 
<meta property="og:title" content="<?php bloginfo('name'); ?>" />   
<meta property="og:description" content="<?php bloginfo('description'); ?>" />  
<meta property="og:type" content="website" />  
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/default.jpg" /> <?php } ?>

<!-- Sitename is allways the same -->

<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />       

<?  endwhile; endif; ?>
