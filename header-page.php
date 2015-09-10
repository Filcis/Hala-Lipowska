<?php if (!is_mobile()) : ?>
<?php global $post; ?>
<?php $hl_src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
	
<div class="image-wrapper">
<div class="bgimage" style="background-image: url(<?php echo $hl_src[0]; ?> );"></div>
<div class="page-title"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<h3 class="read-more">odkryj</h3>
<img class="arrow-down-button-secondary" src="<?php echo get_stylesheet_directory_uri();?>/ikony/arrow-down-secondary.svg">
</div>
</div>

<?php else : 
global $post;
$hl_src_mobile = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(400,600), false, '' ); ?>
<div class="image-wrapper">
<div class="bgimage" style="background-image: url(<?php echo $hl_src_mobile[0]; ?> );"></div>
<div class="page-title"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<h3 class="read-more">odkryj</h3>
<img class="arrow-down-button-secondary" src="<?php echo get_stylesheet_directory_uri();?>/ikony/arrow-down-secondary.svg">
</div>
</div>
<?php endif; ?>