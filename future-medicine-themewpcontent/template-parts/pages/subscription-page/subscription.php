<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 30-May-18
 * Time: 19:04
 */

$subscriptionPlanArgs = array(
    'posts_per_page' => 3,
    'post_type'      => 'subscription_plan',
    'orderby'        => 'date',
    'order'          => 'ASC'
);

$subscriptionPlanPosts = get_posts($subscriptionPlanArgs);

?>

<div class="subscription-page">
    <h1><?php echo $post->post_title ?></h1>
    <div class="benefits">
        <ul>
            <li>
                <div class="subscription-benefit">
                    <div class="icon-block"><img src="<?php echo get_template_directory_uri() ?>/img/benefit-archive-icon.svg" alt="Archive"></div>
                    <h3>Archives</h3>
                    <div class="benefit-explanation">Full access to all our previous stories.</div>
                </div>
            </li>
            <li>
                <div class="subscription-benefit">
                    <div class="icon-block"><img src="<?php echo get_template_directory_uri() ?>/img/benefit-newsletter-icon.svg" alt="Archive"></div>
                    <h3>Newsletter</h3>
                    <div class="benefit-explanation">Weekly newsletters delivered to your email.</div>
                </div>
            </li>
            <li>
                <div class="subscription-benefit">
                    <div class="icon-block"><img src="<?php echo get_template_directory_uri() ?>/img/benefit-email-icon.svg" alt="Archive"></div>
                    <h3>Emails</h3>
                    <div class="benefit-explanation">Every morning from our top editors and writers</div>
                </div>
            </li>
            <li>
                <div class="subscription-benefit">
                    <div class="icon-block"><img src="<?php echo get_template_directory_uri() ?>/img/benefit-comments-icon.svg" alt="Archive"></div>
                    <h3>Comments</h3>
                    <div class="benefit-explanation">Exclusive Comment Priviledges to all our stories.</div>
                </div>
            </li>
            <li>
                <div class="subscription-benefit">
                    <div class="icon-block"><img src="<?php echo get_template_directory_uri() ?>/img/benefit-new-feature-icon.svg" alt="Archive"></div>
                    <h3>New Features</h3>
                    <div class="benefit-explanation">Priority access to new features.</div>
                </div>
            </li>

        </ul>
    </div>
    <div class="plans">
        <?php foreach($subscriptionPlanPosts as $key => $subscriptionPlanPost) {
            AgenzziaGetTemplatePart('template-parts/pages/subscription-page/subscription-plan', ['current' => $subscriptionPlanPost, 'badge' => $key===1?true:false]);
        } ?>


    </div>
    <div class="subscription-banner">
        <h3>The Newsletter</h3>
        <div class="explanation">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
        <div class="form-container subscribe-form">
            <form action="javascript:void(0)" id="subscription-form">
                <input type="email" required name="email-field" id="email-field" placeholder="Please enter your email id"/>
                <input type="submit" value="Submit"/>
            </form>
        </div>

    </div>
</div>