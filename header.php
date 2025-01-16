<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marker
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-container" class="site-container">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'marker' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="top-navigation" class="secondary-navigation">
			<?php wp_nav_menu( array(
				'theme_location' => 'top',
				'menu_id'        => 'top-menu',
				'fallback_cb'    => false,
			) ); ?>
		</nav><!-- #top-navigation -->

		<?php if ( get_header_image() ) : ?>
			<div class="custom-header">
				<img src= "<?php header_image(); ?>" alt="Header Image">
			</div><!-- .custom-header -->
		<?php endif; // End header image check. ?>

		<div id="logo" class="site-branding">
			<?php
			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
			?>

			<div class=site-name>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<?php
				$marker_description = get_bloginfo( 'description', 'display' );
				if ( $marker_description || is_customize_preview() ) :
				?>
					<p class="site-description"><?php echo $marker_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-name -->
		</div><!-- #logo -->

		<nav id="primary-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '&#9776;', 'marker' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #primary-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
