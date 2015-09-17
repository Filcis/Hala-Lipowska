<?php get_header(); ?>

	<div id="primary" class="content-blog-area">
		<main id="main" class="site-main" role="main">
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><a href= "<?php the_permalink() ?>"> <?php the_title(); ?></a></h1>
							<div class="meta-wrapper clear"><p class="meta"><?php echo get_the_author_meta('nickname');?> | <?php the_date( 'd-m-Y' );?></p><?php the_category();?></div>	
			<hr>
<?php if ( has_post_thumbnail() ): ?>
<div class="post-thumb"><?php the_post_thumbnail(); ?></div>
<?php endif; ?>	
			
			<?php get_template_part( 'template-parts/content', 'single' ); ?>


			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
			<?php endwhile; ?>
			<?php endif; ?>

		</main><!-- #main -->
		
	</div><!-- #primary -->
<?php get_sidebar(); ?>	

<?php get_footer(); ?>
