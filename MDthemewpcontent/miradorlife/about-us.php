<?php

/*
	Template Name:About Us Template
*/

get_header();

?>


<main id="main">

	<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $aboutusPageBanner = new WP_Query('category_name=about-us-page-banner&posts_per_page=3'); ?>
				<?php if ($aboutusPageBanner->have_posts() ) : while ($aboutusPageBanner->have_posts() ) : $aboutusPageBanner->the_post(); ?>

      	<div class="col-4 themes-banner-col">
          <div class="container">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid" width="360px">
          </div>
      	</div>

       <?php endwhile; endif;  wp_reset_postdata(); ?>
   	</div>
   	<div class="row">
		  <div class="container" style="text-align: center;">
		    <div class="container collections">
          <p id="collectionparent">About Us</p>
        </div>
		  </div>
   	</div>
	</section>

  <hr>

  <section id="brandphilosophy" style="padding: 60px 0px 60px 0px;">
    <div class="container">
      <p>Brand Philosophy</p>
    </div>
  </section>

  <section id="Miradormatters">
    <div id="mdmatters2">

        <?php $livingNature = new WP_Query('tag=living-with-nature&posts_per_page=1'); ?>
        <?php if ($livingNature->have_posts() ) : while ($livingNature->have_posts() ) : $livingNature->the_post(); ?>
        <div class="row" style="padding: 0 0 10% 0;">
            <div class="col-md-6">
                <div class="container">
                    <p id="subtitle">
                        <?php the_title(); ?>
                    </p>
                    <p id="copy">
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container" id="mdm21" style="background-image:url(<?php the_post_thumbnail_url(); ?>);background-position: bottom;background-size: auto; background-repeat: no-repeat;">
                </div>
            </div>
        </div>
        <?php endwhile; endif;  wp_reset_postdata(); ?>

        <?php $perfectImperWood = new WP_Query('tag=perfect-imperfections-of-wood&posts_per_page=1'); ?>
        <?php if ($perfectImperWood->have_posts() ) : while ($perfectImperWood->have_posts() ) : $perfectImperWood->the_post(); ?>
        <div class="row" style="padding: 0 0 10% 0;">
            <div class="col-md-6">
                <div class="container" id="mdm22" style="background-image:url(<?php the_post_thumbnail_url(); ?>);background-position: left;background-size: auto; background-repeat: no-repeat;">

                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <p id="subtitle">
                        <?php the_title(); ?>
                    </p>
                    <p id="copy">
                        <?php the_content();?>
                    </p>
                </div>
            </div>
        </div>
        <?php endwhile; endif;  wp_reset_postdata(); ?>
    </div>
  </section>

  <section id="journey">

    <?php $theJourney = new WP_Query('category_name=the-journey-banner&posts_per_page=1'); ?>
    <?php if ($theJourney->have_posts() ) : while ($theJourney->have_posts() ) : $theJourney->the_post(); ?>
      <div class="container-flex" id="journeyimg" style="background-image:url(<?php the_post_thumbnail_url(); ?>);background-repeat: no-repeat;background-attachment: fixed;background-size: contain;background-position: center bottom 20px;">
          <div class="journeytitle">
            <p>
              <?php the_content(); ?>
            </p>
          </div>
      </div>
    <?php endwhile; endif;  wp_reset_postdata(); ?>

    <div class="container" id="jrnytrigger">
      <?php $aboutTheJourney = new WP_Query('category_name=about-the-journey&posts_per_page=1'); ?>
      <?php if ($aboutTheJourney->have_posts() ) : while ($aboutTheJourney->have_posts() ) : $aboutTheJourney->the_post(); ?>
        <div class="row">
            <div class="col-12 col-md-6">
              <div class="container">
                <p id="jbody">
                  <?php the_content() ?>
                </p>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="container" id="doorimg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">

              </div>
            </div>
         </div>
        <?php endwhile; endif;  wp_reset_postdata(); ?>
    </div>
  </section>


  <?php get_template_part('book-consultation'); ?>

</main>

<?php get_footer(); ?>
