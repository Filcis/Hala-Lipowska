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
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="header-area full-wrapper">        
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hl' ); ?></a>

            <header id="masthead" class="site-header main-navigation-wrapper" role="banner">
                    <div class="site-branding">
                            
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <img id="logo" src= "<?php echo get_stylesheet_directory_uri();?>/images/logo.png">
                                    </a>
                           
                    </div><!-- .site-branding -->

                    <div id='nav-widget-wrapper'><nav id="site-navigation" class="main-navigation" role="navigation">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'fallback_cb' => '__return_false' ) ); ?>
                    </nav><!-- #site-navigation -->
				
					<div id='widget-wrapper'>
						<button type="button" class="weather-button">Pogoda</button>
						<div id="hl-weather"></div>

					</div><!-- #weather widget and facebook icon --></div>
				
            </header><!-- #masthead -->
    </div>
	
<div class="main-content-area full">
	
<?php if ( is_front_page() && !is_home() ) : ?>	
<div class="slider-wrapper">
<?php echo l_slider_function(); ?>
</div>	
<?php else : ?>
<!-- get futured image instead slider -->
<?php get_template_part( 'header-page'); ?>

<?php endif; ?>

	
<div class="page-content-wrapper">
<div id="content" class="site-content">
