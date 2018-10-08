<?php

/*
	Template Name:Our Collections
*/

get_header();

?>


<main id="main">

	<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $themesPageBanner = new WP_Query('category_name=collection-page-banner&posts_per_page=3'); ?>
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
		    <div class="container collections">

          <p id="collectionparent1">our curated</p>
          <p id="collectionparent">collections</p>

      </div>
		  </div>
   	</div>
	</section>


  <section id="cardthemes">
    <div class="container" style="padding-top: 2%;">
        <div class="row">
          <?php $collectionsCol = new WP_Query('tag=products-category&posts_per_page=-1&orderby=date&order=desc'); ?>
          <?php if ($collectionsCol->have_posts() ) : while ($collectionsCol->have_posts() ) : $collectionsCol->the_post(); ?>
           <div class="col-md-6 col-12">
              <div class="container" id="collcard">
                <div class="view view-cascade overlay">
                  <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="Card image cap">

                  <a href="<?php the_permalink(); ?>">
                  <div class="mask rgba-white-slight"></div>
                    <div class="cptitlecontainer">
                        <p><?php the_title(); ?> </p>
                    </div>

                    <div class="mask rgba-white-slight" id="masky4"></div>
                  </a>
                </div>
                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                  <!-- Text -->
                  <p class="card-text">
                    <?php the_excerpt(); ?>
                  </p>
                  <a href="<?php the_permalink() ?>" class="btn btn-outline-dark waves-effect" id="theme-button-1" style="width: 180px;
                        height: 90px font-size: 9px;">MORE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  →</a>

                </div>
              </div>
           </div>
           <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div><!-- Eo Row -->
    </div><!-- Eo Container -->
  </section><!-- Eo CardThemes Section -->






  <?php get_template_part('book-consultation'); ?>

</main>

<?php get_footer(); ?>
