<article class="hentry post-thumb <?php $cat = get_the_category(); echo $cat[0]->slug; ?>">
    <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark" >
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail' ); } ?>
        <h3 class="entry-title"><?php the_title(); ?></h3>
    </a>
</article>
