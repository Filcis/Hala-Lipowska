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
        <div class="page-content-wrapper">            
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hl' ); ?></a>

            <header id="masthead" class="site-header" role="banner">
                    <div class="site-branding">
                            <?php if ( is_front_page() && is_home() ) : ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo '<img src="'.get_stylesheet_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';?></a>
                            <?php else : ?>
                                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php endif; ?>
                            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
                    </div><!-- .site-branding -->

                    <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hl' ); ?></button>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'fallback_cb' => '__return_false' ) ); ?>
                    </nav><!-- #site-navigation -->
            </header><!-- #masthead -->
        </div>
    </div>
<div class="main-content-area full">
    <div class="page-content-wrapper">
	<div id="content" class="site-content">
