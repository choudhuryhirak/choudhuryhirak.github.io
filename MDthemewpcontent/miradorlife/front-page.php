
<?php

/*
	Template Name:Fornt Page
*/

get_header();

?>
<style>
	#logonav
	{
		opacity: 0;
	}


</style>
<main id="main">
	<section id="head-mverlay">
	  <div class="row">
	      <div class="col-md-2 d-none d-sm-block">
	        <div class="container d-flex align-items-center" id="Miradorlogo">
	        	<a href="<?php echo site_url(); ?>">
	          	<img src="<?php echo get_template_directory_uri() ?>/exports/Group%20132.png" alt="" class="img-fluid">
	          </a>
	        </div>
	      </div>
	    <div class="col-md-10">
	    	<div class="container-flex" style="padding-top: 10%;">

					<?php $homeHeroBanner = new WP_Query('category_name=mirador-home-hero-banner&posts_per_page=-1'); ?>

					<?php if ($homeHeroBanner->have_posts() ) : while ($homeHeroBanner->have_posts() ) : $homeHeroBanner->the_post(); ?>

						<div class="slider-anim">
	          	<div id="slidercontent1">
	            	<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                <div id="slidercopy1">
                    <!-- <p>She</p> <p>breathes</p> <p>life to every nook and corner</p> -->
                    <?php the_content(); ?>

                  </div>
	          	</div>
	        	</div>

					<?php endwhile; endif;  wp_reset_postdata(); ?>

	      </div>
	    </div>
	  </div>
	</section>


	<section id="why-us" style="background: url(<?php echo get_template_directory_uri() ?>/exports/backgroundmirador.jpg); background-attachment: fixed;">
	  <div class="row">
	   	<div class="container" id="taglineland">

				<?php query_posts('category_name=why-mirador&posts_per_page=1'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<p>
			     	<?php the_content();?>
			    </p>

		    	<div class="container" style="padding-top: 10%;">
		      	<a href="<?php echo get_permalink(get_page_by_path('about-us')) ?>" style="background-color:none" class="btn btn-outline-dark waves-effect"
		         	id="theme-button1">WHY MIRADOR&nbsp;&nbsp;&nbsp; →</a>
		    	</div>
	    	<?php endwhile; endif; ?>
	  	</div>
		</div>
	</section>


	<section id="Miradormatters">
    <div class="container" id="mdmatters1">
		<?php query_posts('category_name=about-mirador&posts_per_page=1'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="container">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid" width="500px;">
            </div>
        </div>
        <div class="col-lg-6">
          <div class="container">
                <p id="copy">
                  <?php the_content(); ?>
                </p>
                <div class="container">
                	<a href="<?php echo get_permalink(get_page_by_path('about-us')) ?>" class="btn btn-outline-dark waves-effect" id="theme-button1" style="">ABOUT MIRADOR&nbsp;&nbsp;&nbsp;  →</a>
                </div>
            </div>
      	</div>
    </div>
    <?php endwhile; endif; ?>
    </div>


	</section>


	<section id="themes" class="themes-col-section">
    <div class="container">
      <div class="row justify-content-between">

      	<?php $themesCol = new WP_Query('tag=mirador-themes&posts_per_page=4&orderby=modified'); ?>
				<?php if ($themesCol->have_posts() ) : while ($themesCol->have_posts() ) : $themesCol->the_post(); ?>
      	<div class="mdl-theme-box mdl-theme-col">
	        <div class="card card-cascade" id="cardo">
	        <!--card image-->
	          <div class="view view-cascade overlay" style="background-image: url(<?php //the_post_thumbnail_url(); ?>);background-size: contain;">
	          	<img class="card-img-top img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap" id="landing-img">
		          <a href="<?php the_permalink(); ?>">
		          	<div class="tptitlecontainer">
                  <p> <?php the_title(); ?> </p>
                </div>
		            <div class="mask rgba-dark-slight" id="masky2"></div>
		          </a>
	          </div>
	        <!--card-content-->
	          <div class="card-body card-body-cascade text-center mrtheme-text" id="cardotext">
	            <p class="card-text"><?php the_excerpt(); ?></p>
	            <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark waves-effect" id="theme-button1" style="width: 180px; font-size: 13px;">MORE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  →</a>
	          </div>
	        </div>
      	</div>
      	<?php endwhile; endif;  wp_reset_postdata(); ?>

      </div><!-- eo row -->
		</div><!-- eo container -->

   	<div class="container" style="padding-bottom: 5%; text-align: center;">
      <a href="<?php echo get_permalink(get_page_by_path('themes')); ?>" class="btn btn-outline-dark waves-effect" id="theme-button1" style="width: 240px;">VIEW ALL THEMES&nbsp;&nbsp;&nbsp;&nbsp;  →</a>
   	</div>
	</section>

	<section id="collections">
    <div class="container" style="padding-bottom: 2%;">
      <div class="row">
        <div class="col-md-6 col-9 align-items-end">
          <p id="cctitle">Our Custom Collections</p>
        </div>
        <div class="col-md-6 col-3 align-items-end">
          <a id="cclink" href="<?php echo get_permalink(get_page_by_path('collections')) ?>" class="pull-right">View all &nbsp;&nbsp;&nbsp;>></a>
        </div>
      </div>
    </div>
    <div class="container">
      From a wooden spoon, to a wicker basket, to a Moorish bed; no two pieces at Mirador are ever the same or even aimed to be identical. We play with wood, wicker, bamboo, cane, cotton, linen and other natural and organic elements; without altering their natural textures.
    </div>

    <div class="container" id="owl-father">
        <div class="owl-carousel owl-father">
          	<?php $collectionsCol = new WP_Query('tag=products-category&posts_per_page=-1'); ?>
						<?php if ($collectionsCol->have_posts() ) : while ($collectionsCol->have_posts() ) : $collectionsCol->the_post(); ?>

           	<div class="owl-container">
             	<a href="<?php the_permalink(); ?>" target="_blank" id="outcollec">
              <div class="caro-img">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <div class="transitionbox"></div>
                <div class="carotitle"> <?php the_title() ?> </div>
              </div>
              </a>
              <div class="collection-title">
              	<?php the_excerpt(); ?>
                <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae dolor lobortis. -->
             	</div>
           	</div>

           	<?php endwhile; endif;  wp_reset_postdata(); ?>
        </div>
    </div>
	</section>


<section id="Miradormatters">
	<div class="container" id="mdmatters2">
	<?php query_posts('category_name=store-mirador&posts_per_page=1'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row">
			<div class="col-lg-6">
				<div class="container">
					<p id="copy">
						<?php the_content(); ?>
					</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="container">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid" width="500px;">
				</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
</section>

	<!-- <section id="customerspeaks">
    <div class="container">
        <p id="tagline2" style="text-align: center;">
           Customers Speak
        </p>
    </div>
    <div class="container">

      <div class="owl-uncle1 owl-carousel owl-theme">
           <?php //$collectionsCol = new WP_Query('category_name=they-made-us-a-home&posts_per_page=-1'); ?>
					<?php //if ($collectionsCol->have_posts() ) : while ($collectionsCol->have_posts() ) : $collectionsCol->the_post(); ?>
           <div class="owl-container">
             	<div class="row">
                 <div class="col-md-7 col-12">
                  	<img src="<?php //the_post_thumbnail_url();?>" alt="" class="img-fluid">
                 </div>
                 <div class="col-md-5 col-12">
                    <div class="testimonials-copy">
                      <p>
                        <?php //the_content(); ?>
                      </p>
                    </div>
                 </div>
             	</div>
            </div>
           <?php //endwhile; endif; wp_reset_postdata(); ?>
      </div>

      </div>
       <div class="container" style="padding-top: 3%; padding-bottom: 5%; text-align: center;">
         <a href="<?php //echo get_permalink(get_page_by_path('testimonials')) ?>" class="btn btn-outline-dark" id="theme-button1" style="width: 240px;">VIEW ALL TESTIMONIALS&nbsp;&nbsp;&nbsp;&nbsp;  →</a>
     	</div>
	</section> -->


	<?php get_template_part('mirador-contact-form'); ?>


</main>

<?php get_footer(); ?>
