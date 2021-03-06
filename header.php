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
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( is_front_page() && !is_home() || is_page() && !is_page_template( 'page-noslider.php') && !is_page_template( 'page-weather.php') ) : ?>
	<div id="loader" class="se-pre-con"></div> <!--page loader-->
	<?php endif; ?>
    <div class="header-area full-wrapper">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hl' ); ?></a>

<header id="masthead" class="site-header" role="banner">

<div class='main-navigation-wrapper'>

	<div class="site-branding">

			<a href="<?php if(function_exists('pll_home_url')){
				echo pll_home_url();
			} else {
				echo home_url();
			} ?>" rel="home">
			<?php hl_logo(); ?>
		</a>

     </div><!-- .site-branding -->
			<button id="menu-toggle" class="is-displayed-mobile">menu</button>

	<nav id="site-navigation" class="main-navigation menu-collapsed" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'fallback_cb' => '__return_false' ) ); ?>
	</nav><!-- #site-navigation -->

</div>
</header><!-- #masthead -->
</div>
<?php if ( is_front_page() && !is_home() ) : ?>
<!-- get slider logo and headlines -->
<?php get_template_part( 'header-home'); ?>
<?php elseif (is_home() || is_page_template( 'page-noslider.php') || is_page_template( 'page-weather.php') || is_page( 'galeria') || !is_page()) : ?>
<?php else : ?>
<!-- get futured image and headlines -->
<?php get_template_part( 'header-page'); ?>
<?php endif; ?>
	<div class="main-content-area full">
		<div class="page-content-wrapper main">
			<div id="content" class="site-content">
