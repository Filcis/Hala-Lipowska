<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hala Lipowska
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hl' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
