<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Likeio_Theme
 */

if ( ! is_active_sidebar( 'sidebar-archive' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-archive' ); ?>
</aside><!-- #secondary -->
