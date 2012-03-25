<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

        <div id="primary">
            <div class="post-thumbs" id="content" role="main">

                <div id="video" style="text-align:center;">
                    <script type="text/javascript">
                        function play(){
                            document.getElementById("img").style.display='none';
                            document.getElementById('video').innerHTML = '<iframe width="960" height="320" src="http://cdn.livestream.com/embed/bustationnet?layout=4&color=0x000000&autoPlay=true&mute=false&iconColorOver=0xe7e7e7&iconColor=0xcccccc&allowchat=true&height=340&width=560" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>';
                        }
                    </script>
                    <img src="images/scape.jpg" style="z-index:1;" height="320"/>
                    <img src="<?php echo bloginfo( 'stylesheet_directory' ); ?>/img/play_thumb.png" style="z-index:10;position:absolute;top:170px; left:50%; margin-left:-100px;" onclick="play()" id="img"/>
                </div>

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

            </div><!-- #content -->
        </div><!-- #primary -->

<?php get_footer(); ?>
