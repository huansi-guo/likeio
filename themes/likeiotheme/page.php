<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package E-commerce_Theme
 */

get_header();
?>

	<div id="primary" class="content-area grid-container">


		<main id="main" class="site-main grid-x">

			<aside class="cell large-3 medium-3">
				<?php
					if ( ! is_active_sidebar( 'sidebar-archive' ) ) {
						return;
					}
					?>
					<div id="secondary" class="widget-area">
						<?php dynamic_sidebar( 'sidebar-archive' ); ?>
					</div>
			</aside> 

			<div class="cell large-9 medium-9 small-12" style="padding-left:2em;">
				<!-- <h2 style="text-align:center; margin-top:-1em; margin-bottom:1em;">Likeio Selections</h2> -->
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;

				endwhile; // End of the loop.
				?>
			</div>	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();