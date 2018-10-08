<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 29-May-18
 * Time: 10:26
 */

$stickyArgs  = array(
    'posts_per_page'      => 8,
    'post__in'            => get_option('sticky_posts'),
    'ignore_sticky_posts' => 1,
    'orderby'             => 'date',
    'order'               => 'ASC'
);

$stickyPosts = get_posts($stickyArgs);

$newsPostsArgs = array(
    'posts_per_page' => 15,
    'category_name'  => 'news',
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$newsTitlesPosts = get_posts($newsPostsArgs);

$upcomingEventsArgs = array(
    'posts_per_page' => -1,
    'category_name'  => 'upcoming-events',
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$upcomingEventsPosts = get_posts($upcomingEventsArgs);

$ongoingEventsArgs = array(
    'posts_per_page' => -1,
    'category_name'  => 'events',
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$ongoingEventsPosts = get_posts($ongoingEventsArgs);

$caseStudyArgs = array(
    'posts_per_page' => 6,
    'category_name'  => 'case-study',
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$caseStudyPosts = get_posts($caseStudyArgs);

$technologyArgs = array(
    'posts_per_page' => 6,
    'category_name'  => 'technology',
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$technologyPosts = get_posts($technologyArgs);

$diseasesArgs = array(
    'posts_per_page' => 6,
    'category_name'  => 'diseases',
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$diseasesPosts = get_posts($diseasesArgs);

$educationArgs = array(
    'posts_per_page' => 6,
    'category_name'  => 'education',
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$educationPosts = get_posts($educationArgs);


$straighttalkArgs = array(
    'posts_per_page' => 6,
    'category_name'  => 'straight-talk',
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$straighttalkPosts = get_posts($straighttalkArgs);


$videoPostsArgs = array(
    'post_type'      => 'video',
    'category_name'  => 'videos',
    'posts_per_page' => 10
);

$videoPosts     = get_posts($videoPostsArgs);

$blogArgs = array(
    'posts_per_page' => 4,
    'category_name'  => 'blog',
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$blogPosts = get_posts($blogArgs);

global $magazineCoverImageUrl;

get_header();
?>
                                        

    <div class="container home-first-section">
      <div class="row d-flex">
        <div class="col-12 col-md-5 col-xl-3 articale-left-col order-1 order-md-0">
          
          <div class="article-wrap">
            <?php
              $currentPost = $stickyPosts[1];
              echo AgenzziaGetTemplatePart('template-parts/homepage/homepage-sticky-post-content-new', ['current' => $currentPost])
            ?>
          </div>
          <div class="article-wrap">
            <?php
              $currentPost = $stickyPosts[3];
              echo AgenzziaGetTemplatePart('template-parts/homepage/homepage-sticky-post-content-new', ['current' => $currentPost])

              ?>
          </div>
          <div class="article-wrap straingth-talk">
            <h2 class="straingth-boxh">Straight Talk</h2>
            <?php
              $currentPost = $stickyPosts[2];
              echo AgenzziaGetTemplatePart('template-parts/homepage/homepage-sticky-post-content-new', ['current' => $currentPost])

            ?>
          </div>
                                 
        </div><!-- eo articale-left-col -->

        <div class="col-12 col-md-7 col-xl-6 articale-middle-col order-0 order-md-1">
          <div class="article-wrap">
            <?php
              $currentPost = $stickyPosts[0];
              echo AgenzziaGetTemplatePart('template-parts/homepage/homepage-sticky-post-content-new', ['current' => $currentPost])

            ?>
          </div><!-- eo article-wrap -->
        </div><!-- eo articale-middle-col -->
        
        <div class="col-12 col-xl-3 articale-right-col order-2 order-md-1">
          
          <div class="highlight-wrap">
            <h2>Highlights</h2>
            <marquee scrolldelay="125"><p>
              <?php query_posts('tag=highlights&posts_per_page=-1'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> | 

              <?php endwhile; endif; ?>
            </p></marquee>
          </div><!--eo highlight-wrap -->
            
          <div class="news-update-wrap">
            <div class="content-block news-block">
              <h2>News/Updates</h2>
              <div class="content titles">
                  <ol>
                      <?php foreach($newsTitlesPosts as $newsTitle): ?>
                          <li>
                              <h3 class="title"><a href="<?php echo get_permalink($newsTitle->ID) ?>"><?php echo $newsTitle->post_title ?></a></h3>
                          </li>
                      <?php endforeach; ?>
                  </ol>
              </div>
            </div>
          </div><!--eo news-update-wrap -->
          
          <div class="events-wrap">
            <h2>Events</h2>
            <ul class="owl-carousel owl-carouselEvents owl-theme">
               <?php foreach($ongoingEventsPosts as $eventPost): ?>
                   <li>
                       <a href="<?php echo get_permalink($eventPost->ID) ?>">
                           <div class="article">
                               <div class="article-image">
                                  <?php 
                                  
                                    if( class_exists('Dynamic_Featured_Image') ):
                                        global $dynamic_featured_image;
                                        // global $post;
                                         $featured_images = $dynamic_featured_image->get_featured_images($eventPost->ID );

                                         if ( $featured_images ): 
                                            ?>
                                                <?php foreach( $featured_images as $images ): ?>
                                                   <img src="<?php echo $images['full'] ?>" alt="<?php echo $eventPost->post_titl ?>">
                                                   
                                                <?php endforeach; ?>
                                            <?php
                                            endif;
                                    endif;
                                             
                                    ?>
                               </div>

                               <div class="title">
                                  <h3><?php echo $eventPost->post_title ?></h3>
                               </div>
                               <div class="excerpt"><?php echo $eventPost->post_excerpt ?></div>

                           </div>
                      </a>
                    </li>
               <?php endforeach ?>
           </ul>
          </div><!-- eo events-wrap -->    
        </div><!--eo articale-right-col -->
      </div><!-- eo row -->
    </div><!-- eo home-first-section --> 

    <div class="container">
        <div class="row">
            <div class="col">
  
                <div class="accordion-blocks">
                    <?php echo AgenzziaGetTemplatePart('template-parts/homepage/homepage-carousel-posts-block', ['current' => $caseStudyPosts, 'active' => true]) ?>
                    <?php echo AgenzziaGetTemplatePart('template-parts/homepage/homepage-carousel-posts-block', ['current' => $technologyPosts, 'active' => true]) ?>
                  
                    <div class="subscribe-add mb-5" style="background-image:url(<?php  echo get_template_directory_uri() ?>/img/subscribe-add-img.png);">
                      <a href="https://futuremedicineindia.com/landing/" class="close-banner"><i class="fas fa-times"></i></a>
                      <?php //echo get_permalink(get_page_by_path('subscription')) ?>
                      <div class="upper-content">
                          <div class="images"><img src="<?php echo $magazineCoverImageUrl ?>" alt=""><img src="<?php echo $magazineCoverImageUrl ?>" alt=""><img src="<?php echo $magazineCoverImageUrl ?>" alt=""></div>
                          <div class="subscription-text"> The path-breaking medical news <b>magazine for India</b></div>
                          <div class="subscription-link"><a href="https://futuremedicineindia.com/landing/">Register</a></div>
                          <?php //echo get_permalink(get_page_by_path('subscription')) ?>
                      </div>
                    </div>

                    <?php echo AgenzziaGetTemplatePart('template-parts/homepage/homepage-carousel-posts-block', ['current' => $diseasesPosts, 'active' => true]) ?>
                    <?php echo AgenzziaGetTemplatePart('template-parts/homepage/homepage-carousel-posts-block', ['current' => $educationPosts, 'active' => true]) ?>

                    <!-- <div class="straighttalk-carousel">
                      <?php //echo AgenzziaGetTemplatePart('template-parts/homepage/homepage-carousel-posts-block', ['current' => $straighttalkPosts, 'active' => true]) ?>
                    </div> -->

                </div>
                
        <!--                <div class="subscribe-add">-->
        <!--                    <a href="javascript:void(0)" class="close-banner"><i class="fas fa-times"></i></a>-->
        <!--                    <div class="subscription-text"><img src="--><?php //echo get_template_directory_uri() ?><!--/img/banner-image-1.jpg" alt="">Subscribe Now for Lifetime Access to medical Journals <a href="--><?php //echo home_url('/subscription/') ?><!--">subscribe</a></div>-->
        <!---->
        <!--                </div>-->
            </div>
        </div>
    </div>
    
    <!-- <div class="video-block home-video-section">
        <div class="container"> 
          <h2>Videos</h2>
            <div class="row">
                <div class="col">
                    <div class="video-wrapper">
                        <?php //AgenzziaGetTemplatePart('template-parts/homepage/homepage-video-display-post', ['current' => $videoPosts[0], 'play' => true]) ?>

                        <div class="videos-choser-block">
                            <ul>

                                <?php
                                // for($i = 0; $i < count($videoPosts); $i++) {
                                //     echo '<li>';
                                //     AgenzziaGetTemplatePart('template-parts/homepage/homepage-video-display-post', ['current' => $videoPosts[ $i ], 'play' => true]);
                                //     echo '</li>';
                                // }
                                ?>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="blog-pick-signup-sec pt-5 pb-4">
      <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="homepage-column-menus p-0 blog-picks-wrap">
                    <div class="column-menu">
                       <!--  <h3>Blog Picks</h3> -->

                        <ul class="articles row pt-4">
                            <?php foreach($blogPosts as $blogPost) {
                                AgenzziaGetTemplatePart('template-parts/homepage/homepage-blog-post', ['current' => $blogPost]);
                            } ?>

                        </ul>

                    </div>
                    <!-- <div class="column-menu">
                        <h3>Users Comunity</h3>
                        <div class="users">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">
                                        <div class="user-block">
                                            <div class="user-image-wrapper">
                                                <div class="image-block"><img src="<?php //echo get_site_url() ?>/wp-content/uploads/2018/05/user-1.jpg" alt="user"></div>
                                                <h5 class="username">Dr. Shreya</h5>
                                            </div>
                                            <div class="text-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos id in placeat.
                                            </div>
                                            <div class="date-block">07/08/2018</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <div class="user-block">
                                            <div class="user-image-wrapper">
                                                <div class="image-block"><img src="<?php //echo get_site_url() ?>/wp-content/uploads/2018/05/user-2.jpg" alt="user"></div>
                                                <h5 class="username">Dr. Padmanab</h5>
                                            </div>
                                            <div class="text-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos id in placeat.
                                            </div>
                                            <div class="date-block">07/08/2018</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <div class="user-block">
                                            <div class="user-image-wrapper">
                                                <div class="image-block"><img src="<?php //echo get_site_url() ?>/wp-content/uploads/2018/05/user-3.jpg" alt="user"></div>
                                                <h5 class="username">Dr. Chaitanya</h5>
                                            </div>
                                            <div class="text-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos id in placeat.
                                            </div>
                                            <div class="date-block">07/08/2018</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                </div>
            </div>

            <div class="col-12 col-lg-4">
              <div class="sign-upbox">
                <h2>Sign Up for Our Newsletters</h2>
                <p>Sign up now to receive Future Medicine's best content, special offers, and much more.</p>
                
                <!-- Begin MailChimp Signup Form -->
    
              <div id="mc_embed_signup" style="background-color:rgba(0,0,0,0.0);">
                <form action="https://futuremedicineindia.us18.list-manage.com/subscribe/post?u=eb1d615b36d3378653c2b166f&amp;id=2f1e4c90f2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                  
                  <input style="font-size:16px; height: 50px !important;width:100%;padding: 12px 15px !important;border-radius:10px !important;border:solid 1px #CCCCCC !important;" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Please enter your email id" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_eb1d615b36d3378653c2b166f_2f1e4c90f2" tabindex="-1" value=""></div>
                    <div class="clear" style="width:100%"><input style="font-size:16px;float: left;;padding:10px 30px;color:#fff;background-color:#000;  border:solid 1px #000; border-radius:15px; margin-top:30px;cursor: pointer;    height: 45px;line-height: 20px;" type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                  </form>
              </div>

              <!--End mc_embed_signup-->

              </div><!-- eo sign-upbox -->
            </div>
        </div><!-- eo row -->
      </div>
    </div>


<?php
get_footer();