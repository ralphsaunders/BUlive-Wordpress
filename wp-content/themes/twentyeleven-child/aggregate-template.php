<?php
/**
 * Template Name: Aggregate Template
 * Description: A Page Template that contains index.php's content without
 * styling
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
        <div id="primary">
            <div class="post-thumbs" id="content" role="main">

            <?php
                query_posts( 'posts_per_page=10' );
            ?>


                <?php if ( have_posts() ) : ?>

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <article class="hentry post-thumb <?php $cat = get_the_category(); echo $cat[0]->slug; ?>">
                            <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark" >
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail' ); } ?>
                                <h3 class="entry-title"><?php the_title(); ?></h3>
                            </a>
                        </article>

                    <?php endwhile; ?>

                    <?php twentyeleven_content_nav( 'nav-below' ); ?>

                <?php else : ?>

                    <article id="post-0" class="post no-results not-found">
                        <header class="entry-header">
                            <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
                            <?php get_search_form(); ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-0 -->

                <?php endif; ?>
        </div><!-- #primary -->
