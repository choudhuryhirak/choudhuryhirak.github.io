<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 29-May-18
 * Time: 13:15
 */


$currentPost = $template_args['current'];
$isDouble = (bool)get_post_meta( $currentPost->ID,'accordion_post_is-double',true );
if($isDouble!=''){
    $ima = true;
}
?>

<!--<div class="article-wrapper --><?php //echo $isDouble?'double':'' ?><!--" --><?php //echo $isDouble?'data-merge="2"':'' ?><!--">-->
<div class="article-wrapper">
    <a href="<?php echo get_permalink($currentPost->ID) ?>" class="article-content normal">
        <div class="article-image">
            <div class="image-wrapper">

                <div class="image-content">
                  
                  <?php 

                    if( class_exists('Dynamic_Featured_Image') ):
                        global $dynamic_featured_image;
                        // global $post;
                         $featured_images = $dynamic_featured_image->get_featured_images( $currentPost->ID );

                         if ( $featured_images ): 
                            ?>
                                <?php foreach( $featured_images as $images ): ?>
                                   <img src="<?php echo $images['full'] ?>" alt="">
                                   
                                <?php endforeach; ?>
                            <?php
                            endif;
                    endif;
                           
                  ?>

                </div>

            </div>
        </div>
        <div class="article-title">
            <h3><?php echo $currentPost->post_title ?></h3>
        </div>
        <div class="article-excerpt"><?php echo $currentPost->post_excerpt ?></div>
        <div class="article-data">
            <div class="date-block"><?php echo get_the_date('m-d-Y', $currentPost->ID) ?></div>
            <div class="read-more-link">Read More</div>
        </div>
    </a>
</div>