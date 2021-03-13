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
			<nav id="footer-navigation" class="main-navigation cell large-12 medium-12 grid-x align-middle">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ecommerce-theme' ); ?></button> -->
					<?php
					wp_nav_menu( array(
						'theme_location' => 'secondary',
						'menu_id'        => 'secondary-menu',
					) );
					?>
			</nav><!-- #footer-menu-navigation -->

		<div class="site-info cell grid-x">
			<a class="cell" href="<?php echo esc_url( __( 'http://likeio.local/', 'likeiotheme' ) ); ?>">
					<img src="http://likeio.local/wp-content/themes/likeiotheme/assets/img/logo.png" alt="brand_logo">
				</a>
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
