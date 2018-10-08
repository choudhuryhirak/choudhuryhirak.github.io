<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 23-Jun-18
 * Time: 13:26
 */

$currentEventPost = $template_args['current'];
$currentPostId = $currentEventPost->ID;

?>

<a class="event-item-block" href="<?php echo get_the_permalink($currentPostId) ?>">
    <div class="image-block">
        <div class="image-wrapper ">
            <div class="image-content image-content background-image-listener-cover"><img src="<?php echo get_the_post_thumbnail_url($currentPostId,'full') ?>" alt="<?php echo the_title($currentPostId)?>" class="background-image-source"></div>
        </div>
    </div>
    <div class="content-block">
        <h3><?php echo $currentEventPost->post_title ?></h3>
        <div class="content"><?php echo $currentEventPost->post_excerpt ?></div>
    </div>
</a>
