<?php if (!is_mobile()) : ?>
<div class="slider-wrapper">
<?php echo l_slider_function(); ?>
	
<div id="logo-wrapper"><img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/logo.svg"></div>
<div class="page-title"><h1 class="entry-title">Hala Lipowska Schronisko PTTK</h1>
<h3 class="read-more">Czas na relaks</h3>
<img class="arrow-down-button-secondary" src="<?php echo get_stylesheet_directory_uri();?>/ikony/arrow-down-secondary.svg">
</div>
</div>	

<?php else : ?>
<?php endif; ?>
