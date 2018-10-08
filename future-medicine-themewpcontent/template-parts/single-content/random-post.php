<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 30-May-18
 * Time: 16:12
 */

$currentPost = $template_args['current'];

?>

<li>
    <a href="<?php echo get_permalink($currentPost->ID) ?>">
        <div class="article-wrapper">
            <div class="article-image">
                <div class="image-wrapper">
                    <div class="image-content">

                      <?php 

                        if( class_exists('Dynamic_Featured_Image') ):
                            global $dynamic_featured_image;
                            // global $post;
                             $featured_images = $dynamic_featured_image->get_featured_images($currentPost->ID );

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
            </div>
            <div class="article-content"><?php echo $currentPost->post_title ?></div>
        </div>
    </a>
</li>
