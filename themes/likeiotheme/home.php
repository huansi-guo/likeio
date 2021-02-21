<?php
/*
 * Template Name: Custom
 */

get_header();
?>

	<section id="primary" class="blogArchive content-area grid-container">
		<main id="main" class="site-main postArchivePage">
			<article class="cell large-12" id="bodyText">
				<?php
				/**
				 * Custom WP_Query
				 */
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 6,
				);

				$test_query = new WP_Query( $args );

				if ( $test_query->have_posts() ) {
				?>
					<div>
						<div class="post-list height-1">
							<div class="grid-x" style="padding-top:2em;">
								
								<?php
								while ( $test_query->have_posts() ) {
									$test_query->the_post();
									?>
									<div class="cell large-12 custom post-list-wrapper" style="margin-bottom:1em;">
										<div class="grid-x" id="post-<?php echo get_the_ID(); ?>">
											<div class="cell large-1 medium-1 small-1"></div>
											<div class="contentArea cell large-10 medium-10 small-10 grid-x">
												<div class="custom post-thumbnail cell large-6 medium-6 small-12">
													<a href="<?php the_permalink(); ?>" target="_blank"><?php the_post_thumbnail('small-thumbnail'); ?></a>
												</div><!-- post-thumbnail -->
												<div class="exerptSection cell large-6 medium-6 small-12">
													<a href="<?php the_permalink(); ?>" target="_blank"><h4 class="text-center postTitle"><?php echo get_the_title(); ?></h4></a>
													<p class="postExcerpt"><?php echo get_the_excerpt(); ?></p>
													<a class="readMore" href="<?php the_permalink(); ?>" target="_blank">Read More</a>
												</div>
											</div>
											<div class="cell large-1 medium-1 small-1"></div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php
				}
				wp_reset_postdata();
				?>
			
			</article>	
		
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
