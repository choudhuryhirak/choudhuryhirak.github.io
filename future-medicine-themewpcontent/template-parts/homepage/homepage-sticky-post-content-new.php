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
        
        		<?php 

              if( class_exists('Dynamic_Featured_Image') ):
                  global $dynamic_featured_image;
                  // global $post;
                   $featured_images = $dynamic_featured_image->get_featured_images( $currentPost->ID );

                   if ( $featured_images ):	
                      ?>
                          <?php foreach( $featured_images as $images ): ?>
                             <div class="image-part" style="background-image: url(<?php echo $images['full'] ?>);background-repeat: no-repeat; background-position: center center; background-size: cover;"></div>
                          <?php endforeach; ?>
                      <?php
                      endif;
              endif;

          	?>  

        <div class="title-part">
          <h2><?php echo $currentPost->post_title ?></h2>
        </div>
        <div class="excerpt-block"><?php echo $currentPost->post_excerpt ?></div>


    </a>
</div>

