<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package future-medicine-theme
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php
                        while(have_posts()) :
                            the_post();

                            // get_template_part('template-parts/content', get_post_type());
                            AgenzziaGetTemplatePart('template-parts/single-content/content');


                            the_post_navigation(array(
                                    'prev_text'=>__('Previous Article'),
                                    'next_text'=>__('Next Article')
                            ));

                            // If comments are open or we have at least one comment, load up the comment template.
                            // if(comments_open() || get_comments_number()) :
                            //    comments_template();
                            // endif;

                        endwhile; // End of the loop.
                        ?>

                        <!-- <div class="subscribe-add">
                            <a href="https://futuremedicineindia.com/landing/" class="close-banner"><i class="fas fa-times"></i></a>
                            <?php //echo get_permalink(get_page_by_path('subscription')) ?>
                            <div class="upper-content">
                                <div class="images"><img src="<?php //echo $magazineCoverImageUrl ?>" alt=""><img src="<?php //echo $magazineCoverImageUrl ?>" alt=""><img src="<?php //echo $magazineCoverImageUrl ?>" alt=""></div>
                                <div class="subscription-text"> Subscribe Now for Lifetime Access to medical Journals</div>
                                <div class="subscription-link"><a href="https://futuremedicineindia.com/landing/">Register</a></div>
                                <?php //echo get_permalink(get_page_by_path('subscription')) ?>
                            </div>
                        </div> -->

                          <div class="subscribe-add" style="background-image:url(<?php  echo get_template_directory_uri() ?>/img/subscribe-add-img.png);">
                            <a href="https://futuremedicineindia.com/landing/" class="close-banner"><i class="fas fa-times"></i></a>
                            <?php //echo get_permalink(get_page_by_path('subscription')) ?>
                            <div class="upper-content">
                                <div class="images"><img src="<?php echo $magazineCoverImageUrl ?>" alt=""><img src="<?php echo $magazineCoverImageUrl ?>" alt=""><img src="<?php echo $magazineCoverImageUrl ?>" alt=""></div>
                                <div class="subscription-text"> The path-breaking medical news <b>magazine for India</b></div>
                                <div class="subscription-link"><a href="https://futuremedicineindia.com/landing/">Register</a></div>
                                <?php //echo get_permalink(get_page_by_path('subscription')) ?>
                            </div>
                          </div>

                        <div class="spacer-60"></div>
                    </div> <!-- col -->
                </div> <!-- row -->
            </div> <!-- container -->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
