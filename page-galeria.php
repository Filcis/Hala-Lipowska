<?php get_header(); ?>

<div id="primary" class="content-gallery-area">
	<main id="main" class="site-main" role="main">
		
		<?php
		// snippet that helps to add pagination to custom post types
		$temp = $wp_query;
		$wp_query = null;
		$wp_query = new WP_Query();
		$wp_query->query('showposts=6&post_type=galleries'.'&paged='.$paged);
		if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
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

		<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Starsze galerie') ?></div>
		<div class="alignright"><?php previous_posts_link('Nowsze galerie &raquo;') ?></div>
		</div>
		<!--sets back wp_query to default-->
		<?php $wp_query = null;
		$wp_query = $temp;
		?>
		<?php else : ?>
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php endif; ?>


	</main><!-- #main -->

</div><!-- #primary -->
<?php get_sidebar('gallery'); ?>
<?php get_footer(); ?>