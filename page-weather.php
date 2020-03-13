<?php /* Template Name: Prognoza pogody */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			<?php
			if(is_active_sidebar('hl-forecast')){
			dynamic_sidebar('hl-forecast');
			}
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
