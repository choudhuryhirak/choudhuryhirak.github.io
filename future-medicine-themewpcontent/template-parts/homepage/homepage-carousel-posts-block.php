<?php
/**
 * Web: www.agenzzia.com
 * Author: @bravelab
 * Date: 20
 * Time: 13:05
 */

$currentPosts = $template_args['current'];
$active = $template_args['active'];
$currentCategory = get_the_category($currentPosts[0]->ID)[0];

?>

    <div class="accordion-item">
        <div class="accordion-trigger">
            <h2><?php echo $currentCategory->name ?></h2>
            <span class="indicator"><?php echo $active?'&#8212;':'+' ?></span>
        </div>
        <div class="accordion-content <?php echo $currentCategory->slug ?> <?php echo $active?' active':'' ?>">
          <div class="carousel-content owl-carousel owl-carouselPostBlock owl-theme">
              <?php foreach($currentPosts as $post) {
                  echo AgenzziaGetTemplatePart('template-parts/homepage/homepage-carousel-single-post', ['current' => $post]);
              }
              ?>
          </div>
        </div>
    </div>
