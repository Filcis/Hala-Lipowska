<?php if (!is_mobile()) : ?>
<div class="slider-wrapper">
<?php echo l_slider_function(); ?>
	
<div id="logo-wrapper"><img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/logo.svg"></div>
<div class="page-title"><h1 class="entry-title"><?php _e( 'Hala Lipowska Schronisko PTTK', 'hl' ); ?></h1>
<h3 class="read-more">Czas na relaks</h3>
<img class="arrow-down-button-secondary" src="<?php echo get_stylesheet_directory_uri();?>/ikony/arrow-down-secondary.svg">
</div>
</div>	

<?php else : 
global $post;
$hl_src_mobile = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(400,600), false, '' ); ?>
<div id="image-wrapper" style="background-image: url(<?php echo $hl_src_mobile[0]; ?> );">
<div class="image-wrapper-color"></div>
<div class="page-title"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<h3 class="read-more">czas na relaks</h3>
<img class="arrow-down-button-secondary" src="<?php echo get_stylesheet_directory_uri();?>/ikony/arrow-down-secondary.svg">
</div>
</div>
<?php endif; ?>
