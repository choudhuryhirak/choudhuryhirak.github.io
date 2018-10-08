
<?php

/*
  Template Name: Contact Template
*/

  get_header();

?>

<section id="contactpage">

  <?php $ContactText = new WP_Query('category_name=contact-us-text&posts_per_page=1'); ?>
  <?php if ($ContactText->have_posts() ) : while ($ContactText->have_posts() ) : $ContactText->the_post(); ?>
  <div class="row">
     <div class="col-md-3 d-none d-sm-block">
        <div class="container" id="storeimg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
     </div>

     <div class="col-md-3 d-none d-sm-block">
        <div class="container" id="storeimg2" style="background-image: url(<?php echo get_template_directory_uri();?>/exports/store1.png);"></div>
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

              <?php get_template_part('forcontact-form'); ?> 

            </div>
         </div>
      </div>
      </div>
    </div>
  <?php endwhile; endif;  wp_reset_postdata(); ?>
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



<?php get_footer(); ?>
