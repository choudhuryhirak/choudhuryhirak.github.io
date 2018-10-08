<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 29-May-18
 * Time: 18:37
 */
$currentVideo             = $template_args['current'];
$play = $template_args['play'];

$valueYouTubeVideoUrl     = get_post_meta($currentVideo->ID, '_video-youtube-url', true);
$valueVideoPosterImageUrl = get_post_meta($currentVideo->ID, '_video-poster-image-url', true);

?>

<div class="main-video">
    <div class="image-wrapper <?php echo $play?'':'background-image-listener-cover' ?>">
        <div class="image-content"><img src="<?php echo $valueVideoPosterImageUrl ?>" alt="video">

            <div class="content-block">
                <?php if($play): ?>
                <a href="javascript:void(0)" data-video-url="<?php echo $valueYouTubeVideoUrl ?>"><img src="<?php echo get_template_directory_uri() ?>/img/video-player-button.svg" alt=""></a>
                <?php else : ?>
                <a href="javascript:void(0)" data-video-url="<?php echo $valueYouTubeVideoUrl ?>"><img src="<?php echo get_template_directory_uri() ?>/img/video-player-button.svg" alt="" class="background-image-source"></a>
                <?php endif ?>
                <div class="title"><?php echo $currentVideo->post_title ?></div>
            </div>
        </div>
    </div>
</div>