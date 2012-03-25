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

            <div id="video">
                <script type="text/javascript">
                    $( document ).ready( function() {
                        $( '#play' ).click( function( e ) {
                            e.preventDefault();
                            play();
                        });
                    });

                    function play() {
                        document.getElementById("play").style.display='none';
                        document.getElementById('video').innerHTML = '<iframe width="960" height="540" src="http://cdn.livestream.com/embed/bustationnet?layout=4&color=0x000000&autoPlay=true&mute=false&iconColorOver=0xe7e7e7&iconColor=0xcccccc&allowchat=true&height=340&width=560" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>';
                    }
                </script>
                <img class="placeholder" src="<?php echo bloginfo( 'stylesheet_directory' ); ?>/img/video-placeholder.png" style="z-index:1;"/>
                <img id="play" src="<?php echo bloginfo( 'stylesheet_directory' ); ?>/img/play_thumb.png" />
            </div>

            <?php get_template_part( 'content', 'thumbs' ); ?>

            </div><!-- #content -->
        </div><!-- #primary -->

<?php get_footer(); ?>
