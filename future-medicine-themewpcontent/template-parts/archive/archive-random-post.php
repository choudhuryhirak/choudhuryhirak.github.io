<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 30-May-18
 * Time: 13:05
 */

$currentPost = $template_args['current'];
$currentCategory = get_the_category($currentPost->ID)[0];

?>

<li>
    <a href="<?php echo get_the_permalink($currentPost->ID) ?>">
        <div class="article">
            <div class="article-image <?php echo $currentCategory->slug ?>">
                <div class="image-wrapper">
                     <?php 

                        if( class_exists('Dynamic_Featured_Image') ):
                            global $dynamic_featured_image;
                            // global $post;
                             $featured_images = $dynamic_featured_image->get_featured_images();

                             if ( $featured_images ): 
                                ?>
                                    <?php foreach( $featured_images as $images ): ?>
                                       <div class="image-content" style="background-image: url(<?php echo $images['full'] ?>);background-repeat: no-repeat; background-position: center center; background-size: cover;"></div>
                                    <?php endforeach; ?>
                                <?php
                                endif;
                        endif;

                      ?>  

                </div>
            </div>
            <div class="article-content">
                <h5><?php echo $currentPost->post_title?></h5>
                <div class="inner-text"><?php echo $currentPost->post_excerpt ?></div>
            </div>
        </div>
    </a>
</li>
