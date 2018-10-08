<?php

/*
	Template Name:For Designers Template
*/

get_header();

?>

<main id="main">
  <?php $ForDesigners = new WP_Query('category_name=for-designers&posts_per_page=1'); ?>
  <?php if ($ForDesigners->have_posts() ) : while ($ForDesigners->have_posts() ) : $ForDesigners->the_post(); ?>
  <section id="contactpage">
    <div class="row">
      <div class="col-md-6 d-none d-sm-block">
        <div class="container" id="storeimg3" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">

        </div>
      </div>
      <div class="col-md-6 pull-left">
        <div class="container" id="contactfcontainer" style="padding-bottom: 2%; padding-top: 10%;">

            <p id="tagline2contact">
              <?php the_title(); ?>
            </p>

            <p><?php the_content(); ?></p>

        </div>
        <div class="container" id="contactbox2">
         <div class="row">
            <div class="col-12">

              <?php get_template_part('fordesigners-form'); ?>

            </div>
         </div>
        </div>
      </div>
    </div>
  </section>

  <section id="map">
    <div class="container" id="contactbox">
         <div class="row">
                <div class="container" id="mapmdor">

                  <div class="mapouter"><div class="gmap_canvas" style="margin: auto;"><iframe width="100%" height="770" id="gmap_canvas" src="https://maps.google.com/maps?q=mirador%20homes&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{text-align:right;height:770px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:770px;width:100%;}</style></div>

                </div>
          </div>
    </div>
  </section>

  <?php endwhile; endif;  wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
