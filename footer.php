<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marker
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="credits" class="site-info">
			<div class="copyright">
				&copy;
				<?php echo date( 'Y' ); ?>
				<?php bloginfo( 'name' ); ?>.
				All rights reserved.
			</div><!-- .copyright -->
			<div class="theme-info">
				<?php printf( esc_html__( 'Designed & maintained by %s.', 'marker' ), '<a href="http://webfirstdesigns.com/" rel="designer">Web First Designs</a>' ); ?>
			</div><!-- .theme-info -->
		</div><!-- #credits -->
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- #page-container -->

<?php wp_footer(); ?>

</body>
</html>
