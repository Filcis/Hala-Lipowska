<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hala Lipowska
 */

?><!DOCTYPE html>
<html  class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( is_front_page() && !is_home() || is_page() && !is_page_template( 'page-noslider.php') ) : ?>	
	<div id="loader" class="se-pre-con"></div>
	<?php endif; ?>
    <div class="header-area full-wrapper">        
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hl' ); ?></a>

<header id="masthead" class="site-header " role="banner">
						
<div class='main-navigation-wrapper'>	
	
	<div class="site-branding">
                            
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			
			<?php if(!is_mobile()) : ?>
			<img id="logo" src= "<?php echo get_stylesheet_directory_uri();?>/images/logo-narrow.svg">
			<?php else : ?>
			<img id="logo" src= "<?php echo get_stylesheet_directory_uri();?>/images/logo-mobile.svg">
			<?php endif; ?>
		</a>
		                        
     </div><!-- .site-branding -->
			<button id="menu-toggle" class="is-displayed-mobile">menu</button>

	<nav id="site-navigation" class="main-navigation menu-collapsed" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'fallback_cb' => '__return_false' ) ); ?>
	</nav><!-- #site-navigation -->
						

<!--
	<div id='widget-wrapper'>
		<button type="button" class="weather-button">Pogoda</button>
		<div id="hl-weather"></div>
	</div> #weather widget and facebook icon 
-->

</div>			
</header><!-- #masthead -->
</div>
<?php if ( is_front_page() && !is_home() ) : ?>	
<!-- get slider logo and headlines -->
<?php get_template_part( 'header-home'); ?>
<?php elseif (is_home() || is_page_template( 'page-noslider.php') || !is_page()) : ?>
<?php else : ?>
<!-- get futured image and headlines -->
<?php get_template_part( 'header-page'); ?>
<?php endif; ?>

<div class="main-content-area full">	
<div class="page-content-wrapper main">
<div id="content" class="site-content">
