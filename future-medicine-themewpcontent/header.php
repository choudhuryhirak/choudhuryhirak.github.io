<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package future-medicine-theme
 */

    $magazineCoverArgs = array(
            'post_type'=>'magazinecover',
            'posts_per_page' => 1
    );
    $magazineCover = new WP_Query($magazineCoverArgs);
    global $magazineCoverImageUrl;
    $magazineCoverImageUrl = get_the_post_thumbnail_url($magazineCover->posts['0']->ID);

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
  
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121101889-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-121101889-1');
        </script>

        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '181046049246113');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=181046049246113&ev=PageView&noscript=1"/></noscript>
        <!-- End Facebook Pixel Code -->




        <?php if ( is_home() ) { ?>
          <title> Future Medicine India – Medical Magazine in India, Medical News & Updates </title>
          <meta name= ”description” content= “Get unlimited online access to latest medical news & updates on Future Medicine’s medical magazine in India. Subscribe us today!”/>
        <?php } ?>


      <?php if (is_category('42') === TRUE){ ?>
       <title> Future Medicine India – Bioethics </title>
        <meta name= ”description” content= “Read more about bioethics news & updates in Future Medicine India today. Subscribe Now! ”/>
        <p>tag warning</p>
      <?php } ?>

      <?php if (is_category('12') === TRUE){ ?>
        <title> Future Medicine India – Doctor’s Interviews </title>
        <meta name= ”description” content= “Read more about various top doctor’s interview & experience in Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- writers column -->
      <?php if (is_category('13') === TRUE){ ?>
        <title> Future Medicine India – Doctor’s Column </title>
        <meta name= ”description” content= “Read doctor’s column in Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- case-study -->

      <?php if (is_category('6') === TRUE){ ?>
        <title> Future Medicine India – Medical Case Study in India, Clinical Studies </title>
        <meta name= ”description” content= “Subscribe Future Medicine for the latest medical case study in India.”/>
      <?php } ?>

  <!-- clinical trials     -->
      <?php if (is_category('38') === TRUE){ ?>
        <title> Future Medicine India – Clinical Trials </title>
        <meta name= ”description” content= “Read the latest research, reviews & news about Clinical trials in Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- cover-story -->
      <?php if (is_category('2') === TRUE){ ?>
        <title> Future Medicine India – Cover Story, Medical Research News </title>
        <meta name= ”description” content= “Read latest medical research news & updates on Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- devices -->
      <?php if (is_category('12') === TRUE){ ?>
        <!-- <title>YES Devices Page</title> -->

      <?php } ?>

<!-- devices and gadgets -->
      <?php if (is_category('12') === TRUE){ ?>
        <!-- <title>YES Devices and Gadgets Page</title> -->

      <?php } ?>

<!-- discovery -->
      <?php if (is_category('33') === TRUE){ ?>
        <title> Future Medicine India – Medical Discoveries & Medical Breakthroughs </title>
       <meta name= ”description” content= “Read the latest medical discoveries & medical breakthroughs in Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- diseases -->
      <?php if (is_category('3') === TRUE){ ?>
        <title> Future Medicine India – Diseases & Diagnostics News & Updates </title>
        <meta name= ”description” content= “Read latest news & updates on various diseases & diagnostics articles on Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- drug-approvals -->
      <?php if (is_category('25') === TRUE){ ?>
        <title> Future Medicine India – Drug Approvals </title>
        <meta name= ”description” content= “Read about the latest drug approval from health industries on Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- drug-packs -->
      <?php if (is_category('24') === TRUE){ ?>
        <title> Future Medicine India – Drug Packs </title>
        <meta name= ”description” content= “Read news on drug packs in Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- drug-resistance -->
      <?php if (is_category('37') === TRUE){ ?>
        <title Future Medicine India – Antibiotic Resistance, Antimicrobial Resistance </title>
        <meta name= ”description” content= “Read the latest antibiotic resistance & antimicrobial resistance in Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- education -->
      <?php if (is_category('5') === TRUE){ ?>
        <title> Future Medicine India – Medical Education, Medical Research News </title>
        <meta name= ”description” content= “Learn more about latest medical education & research news on Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- events -->
      <?php if (is_category('8') === TRUE){ ?>
        <title> Future Medicine India – Featured Events </title>
        <meta name= ”description” content= “Get more information about the upcoming events in medical industry today. Subscribe Future Medicine India today!”/>
      <?php } ?>

<!-- ongoing-events -->
      <?php if (is_category('12') === TRUE){ ?>
        <!-- <title>YES Ongoing Events Page</title> -->

      <?php } ?>

<!-- upcoming-events -->
      <?php if (is_category('12') === TRUE){ ?>
        <!-- <title>YES Upcoming Events Page</title> -->

      <?php } ?>

<!-- hospitals -->
      <?php if (is_category('27') === TRUE){ ?>
        <title> Future Medicine India – Hospital News & Updates </title>
        <meta name= ”description” content= “Read latest top hospital news & updates on Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- medico-legal -->
      <?php if (is_category('36') === TRUE){ ?>
        <title> Future Medicine India – Medicolegal Cases </title>
        <meta name= ”description” content= “Read more about the medicolegal cases in Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- neurogenomics -->
      <?php if (is_category('39') === TRUE){ ?>
        <title> Future Medicine India – Neurogenomics </title>
        <meta name= ”description” content= “Read & learn more about various nerogenoimcs cases and news in Future Medicine  ndia today. Subscribe Now! ”/>
      <?php } ?>

<!-- news -->
      <?php if (is_category('12') === TRUE){ ?>
      <!-- <title>News Page</title> -->
      <?php } ?>

<!-- otc -->
      <?php if (is_category('34') === TRUE){ ?>
        <title> Future Medicine India – OTC Drugs </title>
        <meta name= ”description” content= “Read news about various OTC drugs in Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- primary-care -->
      <?php if (is_category('41') === TRUE){ ?>
       <title> Future Medicine India – Primary Care </title>
      <?php } ?>

<!-- public-health -->
      <?php if (is_category('43') === TRUE){ ?>
        <title> Future Medicine India – Public Health </title>
        <meta name= ”description” content= “Read news about various public health issues news in Future Medicine India today. Subscribe Now! ”/>
      <?php } ?>

<!-- regulations and policies -->
      <?php if (is_category('26') === TRUE){ ?>
        <title> Future Medicine India – Regulations & Polices </title>
        <meta name= ”description” content= “Read about latest news on regulations & polices in Future Medicine today. Subscribe Now! ”/>
      <?php } ?>

<!-- reviews -->
      <?php if (is_category('44') === TRUE){ ?>
    <title> Future Medicine India – Medical Reviews </title>
    <meta name= ”description” content= “Read more about various medical reviews in Future Medicine today. Subscribe Now! ”/>
      <?php } ?>

      <?php if (has_category('subscription-plan')){ ?>
        <!-- <title>YES Subscription Plan Page</title> -->

      <?php } ?>

<!-- surgery -->
      <?php if (is_category('35') === TRUE){ ?>
        <title> Future Medicine India – Medical Surgery </title>
        <meta name= ”description” content= “Learn more about various medical surgery in Future Medicine today. Subscribe Now! ”/>
      <?php } ?>

<!-- technology -->
      <?php if (is_category('4') === TRUE){ ?>
        <title> Future Medicine India – Medical Technology News & Updates</title>
        <meta name= ”description” content= “Read latest medical technology news & updates in Future Medicine India today. Subscribe Now! ”/>

      <?php } ?>


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'future-medicine-theme'); ?></a>
        <nav>
            <div class="mobile-navigation">
                <div class="logo-container"><a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo-main.svg" alt="Logo"></a></div>
                <div class="navigation-trigger">
                    <a href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="mobile-links-list-container">
                <ul>
                    <li><a href="javascript:void(0)" data-target="#topic-side-menu">Topics</a></li>
                      <?php
                        // Get the ID of a given category
                        $category_id_writersMob = get_cat_ID( 'Writer’s Column' );
                        // Get the URL of this category
                        $category_link_writersMob = get_category_link( $category_id_writersMob );
                      ?>
                    <li><a href="<?php echo esc_url( $category_link_writersMob ); ?>">Writer's Column</a></li>
                    <li><a href="javascript:void(0)" data-target="#event-side-menu">Events</a></li>
                    <li><a href="<?php the_permalink(get_page_by_path('contact')) ?>">Contact</a></li>
                    <!-- <li><a href="<?php //the_permalink(get_page_by_path('login')) ?>">Sign In</a></li> -->
                    <li><a class="fm-mobile-subscription" href="https://futuremedicineindia.com/landing/">Register</a></li>
                </ul>
            </div>
            <div class="side-menu" id="topic-side-menu">
                <a href="javascript:void(0)" class="side-menu-close-button"><i class="fas fa-times"></i></a>
                <?php wp_nav_menu(array('theme_location' => 'topics-menu')); ?>
            </div>
            <!-- <div class="side-menu" id="blog-side-menu">
                <a href="javascript:void(0)" class="side-menu-close-button"><i class="fas fa-times"></i></a>
                <?php //wp_nav_menu(array('theme_location' => 'blog-menu')); ?>
            </div> -->
            <div class="side-menu" id="event-side-menu">
                <a href="javascript:void(0)" class="side-menu-close-button"><i class="fas fa-times"></i></a>
                <?php wp_nav_menu(array('theme_location' => 'events-menu')); ?>
            </div>
        </nav>
        <div class="pusher"></div>
        <header class="hidden-xs stickyHeader">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main-menu-wrapper">
                            <div class="logo-container"><a class="site-logo" href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo-main.svg" alt="logo"></a></div>
                            <div class="nav-container">
                                <div class="upper-nav">
                                    <!-- <ul>
                                        <li><a href="<?php //echo get_permalink(get_page_by_path('login')) ?>">Sign in</a></li>
                                    </ul> -->
                                    <a href="https://futuremedicineindia.com/landing/" class="subscribe">Register</a>
                                    <?php //echo home_url('/subscription/') ?>
                                </div>
                            </div>
                            <div class="lower-nav">
                                <ul class="fm-main-nav">
                                    <li><a href="<?php echo get_site_url() ?>">Home
                                      <span class="fm-topcat"></span>
                                      <span class="fm-bottomcat"></span>
                                    </a></li>
                                    <li><a href="javascript:void(0)" data-has-menu="#topics-menu">Topics <i class="fab fa fa-caret-down"></i>
                                      <span class="fm-topcat"></span>
                                      <span class="fm-bottomcat"></span>
                                    </a></li>

                                    <li>
                                      <?php
                                          // Get the ID of a given category
                                          $category_id_writers = get_cat_ID( 'Writer’s Column' );
                                          // Get the URL of this category
                                          $category_link_writers = get_category_link( $category_id_writers );
                                      ?>
                                      <a href="<?php echo esc_url( $category_link_writers ); ?>">Writer's Column
                                      <span class="fm-topcat"></span>
                                      <span class="fm-bottomcat"></span>
                                    </a></li>
                                    <li><a href="javascript:void(0)" data-has-menu="#events-menu">Events <i class="fab fa fa-caret-down"></i>
                                      <span class="fm-topcat"></span>
                                      <span class="fm-bottomcat"></span>
                                    </a></li>
                                    <li><a href="javascript:void(0)" data-has-menu="#search-container" class="search"><i class="fab fa fa-search"></i>
                                    </a></li>
                                </ul>
                                <div class="navigation-dropdown spaces-1" id="topics-menu">
                                    <?php wp_nav_menu(array('theme_location' => 'topics-menu')); ?>

                                </div>
                                <!-- <div class="navigation-dropdown spaces-1" id="blog-menu">
                                    <?php //wp_nav_menu(array('theme_location' => 'blog-menu')); ?>
                                </div> -->
                                <div class="navigation-dropdown spaces-1" id="events-menu">
                                    <?php wp_nav_menu(array('theme_location' => 'events-menu')); ?>
                                </div>
                                <div class="navigation-dropdown spaces-1 search" id="search-container">
                                    <div class="search-block">
                                        <?php get_search_form() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <div class="media-checker"></div>
    <div class="image-preloader">
        <img src="<?php echo get_template_directory_uri() ?>/img/titles-bullet-circle-dark.svg" alt="">
    </div>
    <div id="content" class="main-content">
