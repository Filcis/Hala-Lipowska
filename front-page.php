<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hala Lipowska
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			
			<?php	
			// Display latest posts

			$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );

			if ( $latest_blog_posts->have_posts() ) : ?>
			
			<div id="latest-posts-wrapper">
				<h2><?php _e('Najnowsze wydarzenia:','hl')?></h2><hr>
				<nav id="latest-posts">
					<ul>
						<?php while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
						<li><a href= "<?php the_permalink() ?>"> <?php the_title(); ?></a></li>
						<?php endwhile; ?>
					</ul>
				</nav>
			</div>
			
			<?php endif; ?>			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
