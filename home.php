<?php get_header(); ?>

<div id="primary" class="content-blog-area">
	<main id="main" class="site-main" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h2 class="blog-entry-title"><a href= "<?php the_permalink() ?>"> <?php the_title(); ?></a></h2>
				<div class="meta-wrapper clear"><p class="meta"><?php echo get_the_author_meta('nickname');?> | <?php the_date( 'd-m-Y' );?></p><?php the_category();?></div>
		
<!--obrazek wyróżniający i link do posta	-->
<?php if ( has_post_thumbnail() ): ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="post-thumb"><?php the_post_thumbnail(); ?></div>
			</a>
<?php endif; ?>	
			
		<?php the_content(); ?>
		<?php hl_entry_comments(); ?>
		<?php endwhile; ?>
	<?php endif; ?>

	</main><!-- #main -->

</div><!-- #primary -->

<?php get_sidebar(); ?>	
<?php get_footer(); ?>