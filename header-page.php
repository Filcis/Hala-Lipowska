<?php global $post; ?>
<?php $hl_src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
	
<div id="image-wrapper" class="parallax-back" style="background-image: url(<?php echo $hl_src[0]; ?> );">
<div class="image-wrapper-color parallax-back"></div>
<div class="page-title"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<h3 class="read-more">odkryj</h3>
<img class="arrow-down-button-secondary" src="<?php echo get_stylesheet_directory_uri();?>/ikony/arrow-down-secondary.svg">
</div>
</div>