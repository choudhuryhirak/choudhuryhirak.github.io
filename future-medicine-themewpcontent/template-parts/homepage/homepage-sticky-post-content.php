<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 29-May-18
 * Time: 11:26
 */

$currentPost = $template_args['current'];
$categorySlug  = get_the_category($currentPost->ID)[0]->slug;
$categoryTitle = get_the_category($currentPost->ID)[0]->name;

?>

<div class="homepage-full-image-excerpt <?php echo $categorySlug ?>">
    <a href="<?php echo get_permalink($currentPost->ID) ?>">
        <div class="image-part background-image-listener-cover">
            <div class="category-link"><?php echo $categoryTitle ?></div>
            <div class="excerpt-block"><?php echo $currentPost->post_excerpt ?></div>
            <div class="title-part">
                <h2><?php echo $currentPost->post_title ?></h2>
            </div>
            <img src="<?php echo get_the_post_thumbnail_url($currentPost->ID) ?>" alt="" class="background-image-source">
        </div>

    </a>
</div>