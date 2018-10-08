<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 29-May-18
 * Time: 19:59
 */

$currentBlogPost = $template_args['current'];
$currentCategory = get_the_category($currentBlogPost->ID)[0];
$currentCategoryTitle = $currentCategory->name;

?>

<li class="col-md-6 pr-5 pb-5"><a href="<?php echo get_permalink($currentBlogPost->ID) ?>">
        <div class="article">
            <div class="title-block">
                <div class="article-title"><?php echo $currentCategoryTitle ?></div>
                <div class="article-image">
                    <div class="image-wrapper">
                      
                            <?php 
                          
                              if( class_exists('Dynamic_Featured_Image') ):
                                  global $dynamic_featured_image;
                                  // global $post;
                                   $featured_images = $dynamic_featured_image->get_featured_images($currentBlogPost->ID );

                                   if ( $featured_images ): 
                                      ?>
                                          <?php foreach( $featured_images as $images ): ?>
                                             
                                             <div class="image-content" style="background-image: url(<?php echo $images['full'] ?>); background-repeat: no-repeat; background-position: center center; background-size: cover;">

                                             </div>

                                          <?php endforeach; ?>
                                      <?php
                                      endif;
                              endif;
                                     
                            ?>
                    </div>
                </div>
            </div>
            <div class="article-content"><?php echo implode(' ', array_slice(str_word_count($currentBlogPost->post_excerpt,1), 0, 12)); //limit words count to 12  ?></div>
            <div class="article-data">
                <div class="date-block"><?php echo get_the_date(' m/d/Y', $currentBlogPost->ID) ?></div>
                <div class="read-more-link">Read more...</div>
            </div>
        </div>
    </a>
</li>
