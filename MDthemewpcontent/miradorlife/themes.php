<?php

/*
	Template Name:All Themes Page
*/

get_header();

?>


<main id="main">

	<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $themesPageBanner = new WP_Query('category_name=themes-page-banner&posts_per_page=3'); ?>
				<?php if ($themesPageBanner->have_posts() ) : while ($themesPageBanner->have_posts() ) : $themesPageBanner->the_post(); ?>

      	<div class="col-4 themes-banner-col">
          <div class="container">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid" width="360px">
          </div>
      	</div>

       <?php endwhile; endif;  wp_reset_postdata(); ?>
   	</div>
   	<div class="row">
		  <div class="container" style="text-align: center;">
		    <p id="themeparent">themes</p>
		  </div>
   	</div>
	</section>

	<section id="cardthemes">
    <div class="container" style="padding-top: 2%;">
        <?php $AllthemesCol = new WP_Query('tag=mirador-themes&posts_per_page=-1&orderby=modified'); ?>
				<?php if ($AllthemesCol->have_posts() ) : while ($AllthemesCol->have_posts() ) : $AllthemesCol->the_post(); ?>
        <div class="row all-themes-col">
            <div class="container" style="padding-bottom: 3%;">
                <div class="view view-cascade overlay">
                  <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <a href="<?php the_permalink(); ?>">
                   <div class="tptitlecontainer">
                     <p> <?php the_title(); ?> </p>
                   </div>
                   <div class="mask rgba-white-slight" id="masky"></div>
                  </a>
                </div>
                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                  <!-- Text -->
                  <p class="card-text">
										<?php the_excerpt(); ?>
									</p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark waves-effect" id="theme-button1" style="width: 180px;
                        height: 90px font-size: 9px;">MORE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  →</a>
                </div>
            </div>
        </div>
        <?php endwhile; endif;  wp_reset_postdata(); ?>
    </div>
	</section>

  <?php get_template_part('book-consultation'); ?>

</main>

<?php get_footer(); ?>
