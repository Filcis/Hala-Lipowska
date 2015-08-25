<?php get_header(); ?>

	<div id="primary" class="content-blog-area">
		<main id="main" class="site-main" role="main">
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><a href= "<?php the_permalink() ?>"> <?php the_title(); ?></a></h1>
			<p class="meta"><?php echo get_the_author_meta('nickname');?> | <?php the_date( 'd-m-Y' );?></p>
			<hr>
<?php if ( has_post_thumbnail() ): ?>
<div class="post-thumb-home"><?php the_post_thumbnail('thumbnail'); ?></div>
<?php endif; ?>			
			<p> <?php the_excerpt(); ?></p>
			<?php endwhile; ?>
			<?php endif; ?>

		</main><!-- #main -->
		
	</div><!-- #primary -->
<?php get_sidebar(); ?>	

<?php get_footer(); ?>