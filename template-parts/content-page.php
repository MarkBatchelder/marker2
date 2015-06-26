<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Marker
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if( is_front_page() ) : ?>
    	<!-- Don't display page title if front page is static. -->
    <?php else : ?>
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
    <?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marker' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					esc_html_x( 'Edit %s', 'name of current post', 'marker' ),
					wp_kses( the_title( '<span class="screen-reader-text">"', '"</span>', false ), array( 'span' => array( 'class' => array() ) ) )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

