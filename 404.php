<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Marker
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php esc_html_e( '404 Not Found', 'marker' ); ?></h1>
				</header><!-- .page-header -->

				<div class="entry-content">
					<p><?php esc_html_e( 'Sorry for the error, but that page can&rsquo;t be found.', 'marker' ); ?></p>
					<p>You can head <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">home</a> or try a search below.</p>
					
					<?php get_search_form(); ?>

				</div><!-- .entry-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
