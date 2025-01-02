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

	<footer id="colophon" class="site-footer">
		<div id="credits" class="site-info">
			<div class="copyright">
				&copy;
				<?php printf( esc_html__( date( 'Y' ), 'marker' ) ); ?>
				<?php printf( esc_html__( bloginfo( 'name' ), 'marker' ) ); ?>
				&nbsp;
				<?php printf( esc_html__( 'All rights reserved.', 'marker' ) ); ?>
			</div><!-- .copyright -->
			<div class="theme-info">
				<?php
				/* translators: %s: Theme author. */
				printf( esc_html__( 'Designed & maintained by %s.', 'marker' ), '<a href="https://webfirstdesigns.com/">Web First Designs</a>' );
				?>
			</div><!-- .theme-info -->
		</div><!-- #credits -->
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- #page-container -->

<?php wp_footer(); ?>

</body>
</html>
