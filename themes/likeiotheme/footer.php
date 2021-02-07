<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Likeio_Theme
 */

?>

	<footer id="colophon" class="site-footer grid-x grid-container">
		<div class="site-info cell grid-x">
			<a class="cell" href="<?php echo esc_url( __( 'https://wordpress.org/', 'likeiotheme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'likeiotheme' ), 'WordPress' );
				?>
			</a>
			<div class="cell">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'likeiotheme' ), 'likeiotheme', '<a href="https://guohuansi.com">Huansi Guo</a>' );
				?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
