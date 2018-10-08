
<?php

/*
  Template Name: Blog Template
*/
  get_header();

?>

<main id="main">

	<?php $spacesWeAreProudOf = new WP_Query('category_name=blog-page-banner&posts_per_page=1'); ?>
  <?php if ($spacesWeAreProudOf->have_posts() ) : while ($spacesWeAreProudOf->have_posts() ) : $spacesWeAreProudOf->the_post(); ?>
	<section id="blog-mverlay" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
   <div class="container" id="blog-content">

      <p id="blogtitle">Comfort + Luxury = MiradorLife</p>
      <p id="blogstitle">finest collections of furniture & decor</p>
      <a href="#highlights" class="smooth-down btn btn-outline-dark waves-effect" id="theme-button-blog" style="width: 180px;">Read More  →</a>

   </div>
  </section>
	<?php endwhile; endif;  wp_reset_postdata(); ?>


	<section id="highlights">
   	<div class="container">
      <p id="highlightmain">Highlights</p>
       <div class="row">
           <div class="col-md-8">
           	  <?php $HighlightsBlog = new WP_Query('category_name=highlights-blog&posts_per_page=2'); ?>
              <?php if ($HighlightsBlog->have_posts() ) : while ($HighlightsBlog->have_posts() ) : $HighlightsBlog->the_post(); ?>

              <div class="row">
                   <div class="col-md-4 blogtainer">
                    	<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                   </div>
                   <div class="col-md-8">
                       <div class="container blogtainer">
                           <a href="<?php the_permalink(); ?>"><p id="highlightstitle">
                              <?php the_title(); ?></a>
                           </p>
                           <p id="highlightscopy">
                              <?php the_excerpt(); ?>
                           </p>
                           <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark waves-effect" id="theme-button-blog2">Read More  →</a>
                       </div>
                   </div>
              </div>

              <?php endwhile; endif;  wp_reset_postdata(); ?>
           </div>

           <div class="col-md-4">

               <div class="blog-scrollable">
               	<?php $MiraDorBlogs = new WP_Query('category_name=all-blogs&posts_per_page=-1'); ?>
              	<?php if ($MiraDorBlogs->have_posts() ) : while ($MiraDorBlogs->have_posts() ) : $MiraDorBlogs->the_post(); ?>
                  <div class="container scrollable-item">
                  	<p><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></p>
                  </div>
                 <?php endwhile; endif;  wp_reset_postdata(); ?>
               </div>
           </div>
       </div>
   </div>
	</section>

	<section id="blog-tile-two">
    <div class="container tiletwo">
        <div class="row">

						<?php $MiraDorBlogs = new WP_Query('category_name=all-blogs&posts_per_page=-1'); ?>
            <?php if ($MiraDorBlogs->have_posts() ) : while ($MiraDorBlogs->have_posts() ) : $MiraDorBlogs->the_post(); ?>
            <div class="col-md-4">
              <div class="container category-card">
               	<div class="container card-title-tile">
                    <p><?php the_title(); ?></p>
                </div>

                <div class="card">
                		<a href="<?php the_permalink(); ?>">
                    <div class="view-overlay">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="card-img-top img-fluid">

                        <div class="mask rgba-white-slight"></div>

                        <div class="card-body card-text">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    </a>
                </div>
            	</div>
            </div>
            <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>
    </div>
</section>









  <?php get_template_part('book-consultation'); ?>

</main>

<?php get_footer(); ?>
