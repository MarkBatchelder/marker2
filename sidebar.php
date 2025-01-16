<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marker
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="sidebar-widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

	</div><!-- #content -->

<?php
if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>
	
<aside id="tertiary-container" class="footer-sidebar">
		<div id="tertiary" class="footer-widget-area">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- #tertiary -->
</aside><!-- #content-footer -->
