<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 30-May-18
 * Time: 20:08
 */

$plan = $template_args['current'];
$isBadge = $template_args['badge'];

?>

<div class="plan <?php echo $isBadge?'plan-badge':'' ?>">
    <h3><?php echo $plan->post_title ?></h3>
    <?php echo $plan->post_content ?>
    <div class="price"><?php echo get_post_meta( $plan->ID, '_subscription_plan_price', true ); ?></div>
    <a href="javascript:void(0)" class="subscribe-button">Subscribe</a>
</div>
