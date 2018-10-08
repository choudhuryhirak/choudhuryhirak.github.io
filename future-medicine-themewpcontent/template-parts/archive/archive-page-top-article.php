<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 30-May-18
 * Time: 10:57
 */
?>

<a class="article-content-wrapper" href="<?php the_permalink() ?>">
        <h2><?php echo get_the_title(); ?></h2>
        <div class="article-data"><?php //the_author() ?> <?php the_date('m-d-Y') ?></div>
        <div class="inner-content">
            <?php echo get_the_excerpt() ?>
        </div>
        <div class="article-link">Read More</div>
</a>
<a class="article-image" href="<?php the_permalink() ?>">
    <div class="image-wrapper">
        <div class="image-content background-image-listener-cover"><img src="<?php the_post_thumbnail_url() ?>" alt="article-title" class="background-image-source"></div>
                
    </div>
</a>
