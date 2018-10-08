<?php
/* Template Name: EventsPageTemplate */
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 23-Jun-18
 * Time: 09:33
 */
$ongoingEventsArgs = array(
    'posts_per_page' => 4,
    'category_name'  => 'ongoing-events',
    'orderby'        => 'date',
    'order'          => 'ASC'
);
$ongoingEvents     = new WP_Query($ongoingEventsArgs);

$upcomingEventsArgs = array(
    'posts_per_page' => 4,
    'category_name'  => 'upcoming-events',
    'orderby'        => 'date',
    'order'          => 'DESC'
);
$upcomingEvents     = new WP_Query($upcomingEventsArgs);

get_header();
?>

    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="inner-topic-explanation no-border text-uppercase">
                        <h4>Featured Events</h4>

                    </div>
                    <div class="events-block">
                        <?php if($ongoingEvents->have_posts()): ?>

                            <?php foreach($ongoingEvents->posts as $ongoingEvent): ?>
                                <?php AgenzziaGetTemplatePart('template-parts/pages/events-page/event-item-block', ['current' => $ongoingEvent]) ?>
                            <?php endforeach; ?>
                            <div class="subscribe-add">
                                <a href="javascript:void(0)" class="close-banner"><i class="fas fa-times"></i></a>
                                <div class="subscription-text"><img src="<?php echo get_template_directory_uri() ?>/img/banner-image-1.jpg" alt="">Subscribe Now for Lifetime Access to medical Journals <a href="<?php echo get_permalink(get_page_by_path('subscription')) ?>">subscribe</a></div>


                            </div>
                            <div class="spacer-60"></div>
<!--                            <div class="inner-topic-explanation no-border text-uppercase">-->
<!--                                <h4>Upcoming Conferences</h4>-->
<!--                            </div>-->
                        <?php endif ?>
                    </div>
                </div>
<!--                <div class="events-block">-->
<!---->
<!---->
<!--                    --><?php //if($upcomingEvents->have_posts()): ?>
<!--                        <div class="upcoming-conferences-block">-->
<!--                            <table class="table table-striped upcoming-conferences-table">-->
<!--                                --><?php //foreach($upcomingEvents->posts as $upcomingEvent): ?>
<!--                                    <tr>-->
<!--                                        <td valign="middle">--><?php //echo get_post_meta($upcomingEvent->ID, 'upcoming_events_date', true) ?><!--</td>-->
<!--                                        <td valign="middle">--><?php //echo get_post_meta($upcomingEvent->ID, 'upcoming_events_conference', true) ?><!--</td>-->
<!--                                        <td valign="middle">--><?php //echo get_post_meta($upcomingEvent->ID, 'upcoming_events_place', true) ?><!--</td>-->
<!--                                    </tr>-->
<!--                                --><?php //endforeach ?>
<!--                            </table>-->
<!--                            <a href="javascript:void(0)" class="learn-more wide text-uppercase text-center">Read More</a>-->
<!--                        </div>-->
<!--                    --><?php //endif ?>
<!--                </div>-->
            </div>
        </div>
    </div>
    </div>

<?php get_footer(); ?>