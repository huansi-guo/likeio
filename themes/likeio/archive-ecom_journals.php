<?php
/**
 * The template for displaying all custom posts type in the archive page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package E-commerce_Theme
 */

get_header();
?>

    <main id="main" class="site-main">
        <div class=" cell large-1"></div>

        <?php if( is_post_type_archive() ) {
        ?> 
            <h1 class="journalTitle">Shoe Journals</h1>
        <?php
        }
        ?>
        
        <article class="cell large-10" id="bodyText">
            <?php
            /**
             * Custom WP_Query
             */
            $args = array(
                'post_type'      => 'ecom_journals',
                'posts_per_page' => 6,
            );

            $journals = new WP_Query( $args );

            if ( $journals->have_posts() ) {
            ?>
                <div>
                    <div class="journalPost post-list height-1">
                        <div class="grid-x paddingAround grid-margin-x">
                            
                            <?php
                            while ( $journals->have_posts() ) {
                                $journals->the_post();
                                ?>
                                <div class="journalWrapper cell custom post-list-wrapper grid-margin-x grid-x">
                                    <div class="grid-x" id="post-<?php echo get_the_ID(); ?>">
                                        <!-- post-thumbnail -->
                                        <div class="imageMargin custom post-thumbnail cell large-6">
                                            <a href="<?php the_permalink(); ?>" target="_blank"><?php the_post_thumbnail('small-thumbnail'); ?></a>
                                        </div><!-- post-thumbnail -->
                                        <div class="journalText cell large-6">
                                            <a href="<?php the_permalink(); ?>" target="_blank"><h4 class="text-center postTitle"><?php echo get_the_title(); ?></h4></a>
                                            <p class="postExcerpt"><?php echo get_the_excerpt(); ?></p>
                                            <a class="readMore" href="<?php the_permalink(); ?>" target="_blank">Read More</a>
                                        </div>
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
        <div class='cell large-1'></div>
        

    </main><!-- #main -->

<?php
// get_sidebar();
get_footer();
