<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 30-May-18
 * Time: 12:00
 */

?>

<li>
    <a href="<?php the_permalink() ?>">
        <div class="article-excerpt">
            <div class="article-image">
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
            <div class="article-title">
                <h3><?php the_title() ?></h3>
                <div class="article-content d-none"><?php the_excerpt() ?></div>
                <div class="article-next-permalink d-none"><?php the_permalink() ?></div>
            </div>
        </div>
    </a>
</li>  

