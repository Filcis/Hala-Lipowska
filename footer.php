<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hala Lipowska
 */

?>
</div>
    </div>
	</div><!-- #content -->
        
<div class="footer-area full-wrapper">
       <div class="page-content-wrapper">   
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hl' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'hl' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'hl' ), 'Hala Lipowska', '<a href="http://underscores.me/" rel="designer">Filip Ciślak</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
       </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
