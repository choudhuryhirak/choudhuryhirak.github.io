<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mirador
 */

get_header();
?>

<?php //if(has_tag('an-unruly-collective')) { ?>
	<!-- <h1>Page Title is An Unruly Collective</h1> -->
<?php //} ?>


<!-- Single Page of MiraDor Themes -->
<?php if (has_category('mirador-theme')) { ?>

					<!-- True To Nature -->
			<?php if (get_the_ID() === 59) { ?>

				<!-- Banner Section-->
				<section id="head-mverlay">
					   <div class="row theme-single-page-banner">

								<?php $themesPageBanner1 = new WP_Query('category_name=true-to-nature-banner&posts_per_page=2'); ?>
								<?php if ($themesPageBanner1->have_posts() ) : while ($themesPageBanner1->have_posts() ) : $themesPageBanner1->the_post(); ?>
					       <div class="col-md-6" id="themeheader">
					           <div class="container">
					              <div class="overfixed" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
					              </div>
					           </div>
					       </div>
					       <?php endwhile; endif;  wp_reset_postdata(); ?>

					   </div>
					   <div class="container" id="themetitlecontainer">
					      <p><?php the_title();?></p>
					   </div>
				</section>
				<!--End Banner Section -->

				<section id="cover-overlay">
			  	<div class="container-flex" id="thememainimg" style="background-image: url(<?php the_post_thumbnail_url();?>);">

			   	</div>

			    <div class="container" id="collection-breadcrumb">
			      <nav aria-label="breadcrumb" id="collection-bc">
			        <ol class="breadcrumb themes-breadcrumb">
			          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
			          <li class="breadcrumb-item"><a href="<?php echo get_permalink(get_page_by_path('themes')); ?>">Themes</a></li>
			          <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
			        </ol>
			      </nav>
			    </div>
				</section>

				<section id="theme-content">
			    <div class="container" id="blockcc">
			    <p id="triggerbody">
			      <?php the_content() ?>
			    </p>
			    </div>

			    <div class="container" style="padding-top: 2%;">
			        <div class="row">
			        	<?php $themesGallerya = new WP_Query('category_name=true-to-nature-gallery-a&posts_per_page=-1'); ?>
								<?php if ($themesGallerya->have_posts() ) : while ($themesGallerya->have_posts() ) : $themesGallerya->the_post(); ?>
			            <div class="tile col-sm-6 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>

			        <div class="row color-palates-sec">
			        	<?php $themesColorPalate = new WP_Query('category_name=true-to-nature-color-palette&posts_per_page=1'); ?>
								<?php if ($themesColorPalate->have_posts() ) : while ($themesColorPalate->have_posts() ) : $themesColorPalate->the_post(); ?>
			            <div class="tile">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			            	</div>
			          	</div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="theme-content">
					<div class="container" style="padding-top: 2%;">
						<div class="row themesinglepage-gallary-b">
			        	<?php $themesGalleryb = new WP_Query('category_name=true-to-nature-gallery-b&posts_per_page=-1'); ?>
								<?php if ($themesGalleryb->have_posts() ) : while ($themesGalleryb->have_posts() ) : $themesGalleryb->the_post(); ?>
			            <div class="tile col-sm-4 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
					</div>
				</section>

				<section id="collections">
			    <div class="container">
			        <div class="row">
			          <div class="col-6 align-items-end">
			              <p id="cctitle">In this look</p>
			          </div>
			          <div class="col-6 align-items-end"></div>
			        </div>
			    </div>
			    <div class="container" id="owl-father" style="padding-top: 3%;">
			        <div class="owl-carousel inthisLook">
								<?php $truetonatureProduct = new WP_Query('tag=true-to-nature-product&posts_per_page=-1'); ?>
								<?php if ($truetonatureProduct->have_posts() ) : while ($truetonatureProduct->have_posts() ) : $truetonatureProduct->the_post(); ?>
			           <div class="owl-container">
			             <a href="javascript:void(0)" id="outcollec">
			              <div class="caro-img">
			                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">

			                  	<div class="carotitle"><?php //the_title() ?></div>
			              </div>
			             </a>
			                <div class="collection-title">
			                  <?php the_content(); ?>
			               </div>
			           </div>
			           <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="upnext">
			   <div class="container" style="padding-top: 2%;">
			        <div class="row">
			            <div class="col-6 align-items-end">
			                <p id="cctitle">Up Next</p>

			            </div>
			            <div class="col-6 align-items-end">
			                <a id="cclink" href="<?php echo get_permalink(get_page_by_path('themes')) ?>" class="pull-right">View all themes &nbsp;&nbsp;&nbsp;>></a>
			            </div>
			        </div>
			    </div>

			    <div class="container" style="padding-bottom: 2%;">

			        <div class="row" style="padding-top: 2%; ">
							<?php $themesCol = new WP_Query('tag=mirador-themes&posts_per_page=2&orderby=rand'); ?>
							<?php if ($themesCol->have_posts() ) : while ($themesCol->have_posts() ) : $themesCol->the_post(); ?>
			            <div class="col-md-6 col-12">
			                <div class="container" style="padding-bottom: 45px;">
			                    <!-- Card image -->
			                      <div class="view view-cascade overlay">
			                        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
			                        <a href="<?php the_permalink(); ?>">
			                        	<div class="tptitlecontainer">
			                     				<p> <?php the_title(); ?> </p>
			                   				</div>
			                          <div class="mask rgba-white-slight"></div>
			                        </a>
			                      </div>

			                      <!-- Card content -->
			                      <div class="card-body card-body-cascade text-center">
			                        <!-- Text -->
			                        <p class="card-text">
			                        	<?php the_excerpt(); ?>
			                        </p>
			                      </div>
			                    <!-- Card Regular -->
			                </div>
			            </div>
			            <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>

					</section>
			<?php } ?>
					<!--End True To Nature -->


				<!-- The Sun's Up -->
			<?php if (get_the_ID() === 65) { ?>

				<!-- Banner Section-->
				<section id="head-mverlay">
			   <div class="row theme-single-page-banner">

						<?php $themesPageBanner2 = new WP_Query('category_name=the-suns-up-banner&posts_per_page=2'); ?>
						<?php if ($themesPageBanner2->have_posts() ) : while ($themesPageBanner2->have_posts() ) : $themesPageBanner2->the_post(); ?>
			       <div class="col-md-6" id="themeheader">
			           <div class="container">
			              <div class="overfixed" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
			              </div>
			           </div>
			       </div>
			       <?php endwhile; endif;  wp_reset_postdata(); ?>

			   </div>
			   <div class="container" id="themetitlecontainer">
			      <p><?php the_title();?></p>
			   </div>
				</section>
				<!--End Banner Section -->

				<section id="cover-overlay">
			  	<div class="container-flex" id="thememainimg" style="background-image: url(<?php the_post_thumbnail_url();?>);">

			   	</div>

			   	<div class="container" id="collection-breadcrumb">
			      <nav aria-label="breadcrumb" id="collection-bc">
			        <ol class="breadcrumb themes-breadcrumb">
			          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
			          <li class="breadcrumb-item"><a href="<?php echo get_permalink(get_page_by_path('themes')); ?>">Themes</a></li>
			          <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
			        </ol>
			      </nav>
			    </div>
				</section>

				<section id="theme-content">
			    <div class="container" id="blockcc">
			    <p id="triggerbody">
			      <?php the_content() ?>
			    </p>
			    </div>

			    <div class="container" style="padding-top: 2%;">
			        <div class="row">
			        	<?php $themesGallerya1 = new WP_Query('category_name=the-suns-up-gallery-a&posts_per_page=-1'); ?>
								<?php if ($themesGallerya1->have_posts() ) : while ($themesGallerya1->have_posts() ) : $themesGallerya1->the_post(); ?>
			            <div class="tile col-sm-6 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>

			        <div class="row color-palates-sec">
			        	<?php $themesColorPalate2 = new WP_Query('category_name=the-suns-up-color-palette&posts_per_page=1'); ?>
								<?php if ($themesColorPalate2->have_posts() ) : while ($themesColorPalate2->have_posts() ) : $themesColorPalate2->the_post(); ?>
			            <div class="tile">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			            	</div>
			          	</div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="theme-content">
					<div class="container" style="padding-top: 2%;">
						<div class="row themesinglepage-gallary-b">
			        	<?php $themesGalleryb2 = new WP_Query('category_name=the-suns-up-gallery-b&posts_per_page=-1'); ?>
								<?php if ($themesGalleryb2->have_posts() ) : while ($themesGalleryb2->have_posts() ) : $themesGalleryb2->the_post(); ?>
			            <div class="tile col-sm-4 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
					</div>
				</section>

				<section id="collections">
			    <div class="container">
			        <div class="row">
			          <div class="col-6 align-items-end">
			              <p id="cctitle">In this look</p>
			          </div>
			          <div class="col-6 align-items-end"></div>
			        </div>
			    </div>
			    <div class="container" id="owl-father" style="padding-top: 3%;">
			        <div class="owl-carousel inthisLook">
								<?php $truetonatureProduct = new WP_Query('tag=the-suns-up-product&posts_per_page=-1'); ?>
								<?php if ($truetonatureProduct->have_posts() ) : while ($truetonatureProduct->have_posts() ) : $truetonatureProduct->the_post(); ?>
			           <div class="owl-container">
			             <a href="javascript:void(0)" id="outcollec">
			              <div class="caro-img">
			                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">

			                  	<div class="carotitle"><?php //the_title() ?></div>
			              </div>
			             </a>
			                <div class="collection-title">
			                  <?php the_content(); ?>
			               </div>
			           </div>
			           <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="upnext">
			   <div class="container" style="padding-top: 2%;">
			        <div class="row">
			            <div class="col-6 align-items-end">
			                <p id="cctitle">Up Next</p>

			            </div>
			            <div class="col-6 align-items-end">
			                <a id="cclink" href="<?php echo get_permalink(get_page_by_path('themes')) ?>" class="pull-right">View all themes &nbsp;&nbsp;&nbsp;>></a>
			            </div>
			        </div>
			    </div>

			    <div class="container" style="padding-bottom: 2%;">

			        <div class="row" style="padding-top: 2%; ">
							<?php $themesCol = new WP_Query('tag=mirador-themes&posts_per_page=2&orderby=rand'); ?>
							<?php if ($themesCol->have_posts() ) : while ($themesCol->have_posts() ) : $themesCol->the_post(); ?>
			            <div class="col-md-6 col-12">
			                <div class="container" style="padding-bottom: 45px;">
			                    <!-- Card image -->
			                      <div class="view view-cascade overlay">
			                        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
			                        <a href="<?php the_permalink(); ?>">
			                        	<div class="tptitlecontainer">
			                     				<p> <?php the_title(); ?> </p>
			                   				</div>
			                          <div class="mask rgba-white-slight"></div>
			                        </a>
			                      </div>

			                      <!-- Card content -->
			                      <div class="card-body card-body-cascade text-center">
			                        <!-- Text -->
			                        <p class="card-text">
			                        	<?php the_excerpt(); ?>
			                        </p>
			                      </div>
			                    <!-- Card Regular -->
			                </div>
			            </div>
			            <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
					</section>
			<?php } ?>
				<!--End The Sun's Up -->


				<!-- More From The Moors -->
			<?php if (get_the_ID() === 62) { ?>

				<!-- Banner Section-->
				<section id="head-mverlay">
			   <div class="row theme-single-page-banner">

						<?php $themesPageBanner3 = new WP_Query('category_name=more-from-the-moors-banner&posts_per_page=2'); ?>
						<?php if ($themesPageBanner3->have_posts() ) : while ($themesPageBanner3->have_posts() ) : $themesPageBanner3->the_post(); ?>
			       <div class="col-md-6" id="themeheader">
			           <div class="container">
			              <div class="overfixed" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
			              </div>
			           </div>
			       </div>
			       <?php endwhile; endif;  wp_reset_postdata(); ?>

			   </div>
			   <div class="container" id="themetitlecontainer">
			      <p><?php the_title();?></p>
			   </div>
				</section>
				<!--End Banner Section -->

				<section id="cover-overlay">
			  	<div class="container-flex" id="thememainimg" style="background-image: url(<?php the_post_thumbnail_url();?>)">

			   	</div>

			   	<div class="container" id="collection-breadcrumb">
			      <nav aria-label="breadcrumb" id="collection-bc">
			        <ol class="breadcrumb themes-breadcrumb">
			          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
			          <li class="breadcrumb-item"><a href="<?php echo get_permalink(get_page_by_path('themes')); ?>">Themes</a></li>
			          <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
			        </ol>
			      </nav>
			    </div>
				</section>

				<section id="theme-content">
			    <div class="container" id="blockcc">
			    <p id="triggerbody">
			      <?php the_content() ?>
			    </p>
			    </div>

			    <div class="container" style="padding-top: 2%;">
			        <div class="row">
			        	<?php $themesGallerya2 = new WP_Query('category_name=more-from-the-moors-gallery-a&posts_per_page=-1'); ?>
								<?php if ($themesGallerya2->have_posts() ) : while ($themesGallerya2->have_posts() ) : $themesGallerya2->the_post(); ?>
			            <div class="tile col-sm-6 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>

			        <div class="row color-palates-sec">
			        	<?php $themesColorPalate3 = new WP_Query('category_name=more-from-the-moors-color-palette&posts_per_page=1'); ?>
								<?php if ($themesColorPalate3->have_posts() ) : while ($themesColorPalate3->have_posts() ) : $themesColorPalate3->the_post(); ?>
			            <div class="tile">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			            	</div>
			          	</div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="theme-content">
					<div class="container" style="padding-top: 2%;">
						<div class="row themesinglepage-gallary-b">
			        	<?php $themesGallerya3 = new WP_Query('category_name=more-from-the-moors-gallery-b&posts_per_page=-1'); ?>
								<?php if ($themesGallerya3->have_posts() ) : while ($themesGallerya3->have_posts() ) : $themesGallerya3->the_post(); ?>
			            <div class="tile col-sm-4 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
					</div>
				</section>

				<section id="collections">
			    <div class="container">
			        <div class="row">
			          <div class="col-6 align-items-end">
			              <p id="cctitle">In this look</p>
			          </div>
			          <div class="col-6 align-items-end"></div>
			        </div>
			    </div>
			    <div class="container" id="owl-father" style="padding-top: 3%;">
			        <div class="owl-carousel inthisLook">
								<?php $moreFromtheMoresProduct = new WP_Query('tag=more-from-the-moors-product&posts_per_page=-1'); ?>
								<?php if ($moreFromtheMoresProduct->have_posts() ) : while ($moreFromtheMoresProduct->have_posts() ) : $moreFromtheMoresProduct->the_post(); ?>
			           <div class="owl-container">
			             <a href="javascript:void(0)" id="outcollec">
			              <div class="caro-img">
			                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">

			                  	<div class="carotitle"><?php //the_title() ?></div>
			              </div>
			             </a>
			                <div class="collection-title">
			                  <?php the_content(); ?>
			               </div>
			           </div>
			           <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="upnext">
			   <div class="container" style="padding-top: 2%;">
			        <div class="row">
			            <div class="col-6 align-items-end">
			                <p id="cctitle">Up Next</p>

			            </div>
			            <div class="col-6 align-items-end">
			                <a id="cclink" href="<?php echo get_permalink(get_page_by_path('themes')) ?>" class="pull-right">View all themes &nbsp;&nbsp;&nbsp;>></a>
			            </div>
			        </div>
			    </div>

			    <div class="container" style="padding-bottom: 2%;">

			        <div class="row" style="padding-top: 2%; ">
							<?php $themesCol = new WP_Query('tag=mirador-themes&posts_per_page=2&orderby=rand'); ?>
							<?php if ($themesCol->have_posts() ) : while ($themesCol->have_posts() ) : $themesCol->the_post(); ?>
			            <div class="col-md-6 col-12">
			                <div class="container" style="padding-bottom: 45px;">
			                    <!-- Card image -->
			                      <div class="view view-cascade overlay">
			                        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
			                        <a href="<?php the_permalink(); ?>">
			                        	<div class="tptitlecontainer">
			                     				<p> <?php the_title(); ?> </p>
			                   				</div>
			                          <div class="mask rgba-white-slight"></div>
			                        </a>
			                      </div>

			                      <!-- Card content -->
			                      <div class="card-body card-body-cascade text-center">
			                        <!-- Text -->
			                        <p class="card-text">
			                        	<?php the_excerpt(); ?>
			                        </p>
			                      </div>
			                    <!-- Card Regular -->
			                </div>
			            </div>
			            <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>

					</section>
			<?php } ?>
					<!--End More From The Moors -->

					<!-- An Unruly Collective -->
				<?php if (get_the_ID() === 68) { ?>

					<!-- Banner Section-->
				<section id="head-mverlay">
					   <div class="row theme-single-page-banner">

								<?php $themesPageBanner4 = new WP_Query('category_name=an-unruly-collective-banner&posts_per_page=2'); ?>
								<?php if ($themesPageBanner4->have_posts() ) : while ($themesPageBanner4->have_posts() ) : $themesPageBanner4->the_post(); ?>
					       <div class="col-md-6" id="themeheader">
					           <div class="container">
					              <div class="overfixed" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
					              </div>
					           </div>
					       </div>
					       <?php endwhile; endif;  wp_reset_postdata(); ?>

					   </div>
					   <div class="container" id="themetitlecontainer">
					      <p><?php the_title();?></p>
					   </div>
				</section>
					<!--End Banner Section -->

				<section id="cover-overlay">
			  	<div class="container-flex" id="thememainimg" style="background-image: url(<?php the_post_thumbnail_url();?>)">

			   	</div>

			   	<div class="container" id="collection-breadcrumb">
			      <nav aria-label="breadcrumb" id="collection-bc">
			        <ol class="breadcrumb themes-breadcrumb">
			          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
			          <li class="breadcrumb-item"><a href="<?php echo get_permalink(get_page_by_path('themes')); ?>">Themes</a></li>
			          <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
			        </ol>
			      </nav>
			    </div>
				</section>

				<section id="theme-content">
			    <div class="container" id="blockcc">
			    <p id="triggerbody">
			      <?php the_content() ?>
			    </p>
			    </div>

			    <div class="container" style="padding-top: 2%;">
			        <div class="row">
			        	<?php $themesGallerya3 = new WP_Query('category_name=an-unruly-collective-gallery-a&posts_per_page=-1'); ?>
								<?php if ($themesGallerya3->have_posts() ) : while ($themesGallerya3->have_posts() ) : $themesGallerya3->the_post(); ?>
			            <div class="tile col-sm-6 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>

			        <div class="row color-palates-sec">
			        	<?php $themesColorPalate4 = new WP_Query('category_name=an-unruly-collective-color-palette&posts_per_page=1'); ?>
								<?php if ($themesColorPalate4->have_posts() ) : while ($themesColorPalate4->have_posts() ) : $themesColorPalate4->the_post(); ?>
			            <div class="tile">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			            	</div>
			          	</div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="theme-content" style="padding-top: 1%; padding-bottom: 2%;">
					<div class="container" style="padding-top: 2%;">
						<div class="row themesinglepage-gallary-b">
			        	<?php $themesGallery54 = new WP_Query('category_name=an-unruly-collective-gallery-b&posts_per_page=-1'); ?>
								<?php if ($themesGallery54->have_posts() ) : while ($themesGallery54->have_posts() ) : $themesGallery54->the_post(); ?>
			            <div class="tile col-sm-4 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
					</div>
				</section>

				<section id="collections">
			    <div class="container">
			        <div class="row">
			          <div class="col-6 align-items-end">
			              <p id="cctitle">In this look</p>
			          </div>
			          <div class="col-6 align-items-end"></div>
			        </div>
			    </div>
			    <div class="container" id="owl-father" style="padding-top: 3%;">
			        <div class="owl-carousel inthisLook">
								<?php $anUnrulyCollectiveProduct = new WP_Query('tag=an-unruly-collective-product&posts_per_page=-1'); ?>
								<?php if ($anUnrulyCollectiveProduct->have_posts() ) : while ($anUnrulyCollectiveProduct->have_posts() ) : $anUnrulyCollectiveProduct->the_post(); ?>
			           <div class="owl-container">
			             <a href="javascript:void(0)" id="outcollec">
			              <div class="caro-img">
			                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">

			                  <div class="carotitle"><?php //the_title() ?></div>
			              </div>
			             </a>
			                <div class="collection-title">
			                  <?php the_content(); ?>
			               </div>
			           </div>
			           <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="upnext">
			   <div class="container" style="padding-top: 2%;">
			        <div class="row">
			            <div class="col-6 align-items-end">
			                <p id="cctitle">Up Next</p>

			            </div>
			            <div class="col-6 align-items-end">
			                <a id="cclink" href="<?php echo get_permalink(get_page_by_path('themes')) ?>" class="pull-right">View all themes &nbsp;&nbsp;&nbsp;>></a>
			            </div>
			        </div>
			    </div>

			    <div class="container" style="padding-bottom: 2%;">

			        <div class="row" style="padding-top: 2%; ">
							<?php $themesCol = new WP_Query('tag=mirador-themes&posts_per_page=2&orderby=rand'); ?>
							<?php if ($themesCol->have_posts() ) : while ($themesCol->have_posts() ) : $themesCol->the_post(); ?>
			            <div class="col-md-6 col-12">
			                <div class="container" style="padding-bottom: 45px;">
			                    <!-- Card image -->
			                      <div class="view view-cascade overlay">
			                        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
			                        <a href="<?php the_permalink(); ?>">
			                        	<div class="tptitlecontainer">
			                     				<p> <?php the_title();?> </p>
			                   				</div>
			                          <div class="mask rgba-white-slight"></div>
			                        </a>
			                      </div>

			                      <!-- Card content -->
			                      <div class="card-body card-body-cascade text-center">
			                        <!-- Text -->
			                        <p class="card-text">
			                        	<?php the_excerpt(); ?>
			                        </p>
			                      </div>
			                    <!-- Card Regular -->
			                </div>
			            </div>
			            <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>

					</section>

			<?php } ?>
					<!--An Unruly Collective -->

					<!-- A Nook Of Beauty -->
			<?php if (get_the_ID() === 253) { ?>

					<!-- Banner Section-->
				<section id="head-mverlay">
					   <div class="row theme-single-page-banner">

								<?php $themesPageBanner5 = new WP_Query('category_name=a-nook-of-beauty-banner&posts_per_page=2'); ?>
								<?php if ($themesPageBanner5->have_posts() ) : while ($themesPageBanner5->have_posts() ) : $themesPageBanner5->the_post(); ?>
					       <div class="col-md-6" id="themeheader">
					           <div class="container">
					              <div class="overfixed" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
					              </div>
					           </div>
					       </div>
					       <?php endwhile; endif;  wp_reset_postdata(); ?>

					   </div>
					   <div class="container" id="themetitlecontainer">
					      <p><?php the_title();?></p>
					   </div>
				</section>
					<!--End Banner Section -->

				<section id="cover-overlay">
			  	<div class="container-flex" id="thememainimg" style="background-image: url(<?php the_post_thumbnail_url();?>);">

			   	</div>

			   	<div class="container" id="collection-breadcrumb">
			      <nav aria-label="breadcrumb" id="collection-bc">
			        <ol class="breadcrumb themes-breadcrumb">
			          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
			          <li class="breadcrumb-item"><a href="<?php echo get_permalink(get_page_by_path('themes')); ?>">Themes</a></li>
			          <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
			        </ol>
			      </nav>
			    </div>
				</section>

				<section id="theme-content">
			    <div class="container" id="blockcc">
				    <p id="triggerbody">
				      <?php the_content() ?>
				    </p>
			    </div>

			    <div class="container" style="padding-top: 2%;">
			        <div class="row">
			        	<?php $themesGallerya4 = new WP_Query('category_name=a-nook-of-beauty-gallery-a&posts_per_page=-1'); ?>
								<?php if ($themesGallerya4->have_posts() ) : while ($themesGallerya4->have_posts() ) : $themesGallerya4->the_post(); ?>
			            <div class="tile col-sm-6 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>

			        <div class="row color-palates-sec">
			        	<?php $themesColorPalate5 = new WP_Query('category_name=a-nook-of-beauty-color-palette&posts_per_page=1'); ?>
								<?php if ($themesColorPalate5->have_posts() ) : while ($themesColorPalate5->have_posts() ) : $themesColorPalate5->the_post(); ?>
			            <div class="tile">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			            	</div>
			          	</div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="theme-content">
					<div class="container" style="padding-top: 2%;">
						<div class="row themesinglepage-gallary-b">
			        	<?php $themesGalleryb5 = new WP_Query('category_name=a-nook-of-beauty-gallery-b&posts_per_page=-1'); ?>
								<?php if ($themesGalleryb5->have_posts() ) : while ($themesGalleryb5->have_posts() ) : $themesGalleryb5->the_post(); ?>
			            <div class="tile col-sm-4 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
					</div>
				</section>

				<section id="collections">
			    <div class="container">
			        <div class="row">
			          <div class="col-6 align-items-end">
			              <p id="cctitle">In this look</p>
			          </div>
			          <div class="col-6 align-items-end"></div>
			        </div>
			    </div>
			    <div class="container" id="owl-father" style="padding-top: 3%;">
			        <div class="owl-carousel inthisLook">
								<?php $anookOfBeautyProduct = new WP_Query('tag=a-nook-of-beauty-product&posts_per_page=-1'); ?>
								<?php if ($anookOfBeautyProduct->have_posts() ) : while ($anookOfBeautyProduct->have_posts() ) : $anookOfBeautyProduct->the_post(); ?>
			           <div class="owl-container">
			             <a href="javascript:void(0)" id="outcollec">
			              <div class="caro-img">
			                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">

			                  	<div class="carotitle"><?php //the_title() ?></div>
			              </div>
			             </a>
			                <div class="collection-title">
			                  <?php the_content(); ?>
			               </div>
			           </div>
			           <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="upnext">
			   <div class="container" style="padding-top: 2%;">
			        <div class="row">
			            <div class="col-6 align-items-end">
			                <p id="cctitle">Up Next</p>

			            </div>
			            <div class="col-6 align-items-end">
			                <a id="cclink" href="<?php echo get_permalink(get_page_by_path('themes')) ?>" class="pull-right">View all themes &nbsp;&nbsp;&nbsp;>></a>
			            </div>
			        </div>
			    </div>

			    <div class="container" style="padding-bottom: 2%;">

			        <div class="row" style="padding-top: 2%; ">
							<?php $themesCol = new WP_Query('tag=mirador-themes&posts_per_page=2&orderby=rand'); ?>
							<?php if ($themesCol->have_posts() ) : while ($themesCol->have_posts() ) : $themesCol->the_post(); ?>
			            <div class="col-md-6 col-12">
			                <div class="container" style="padding-bottom: 45px;">
			                    <!-- Card image -->
			                      <div class="view view-cascade overlay">
			                        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
			                        <a href="<?php the_permalink(); ?>">
			                        	<div class="tptitlecontainer">
			                     				<p> <?php the_title(); ?> </p>
			                   				</div>
			                          <div class="mask rgba-white-slight"></div>
			                        </a>
			                      </div>

			                      <!-- Card content -->
			                      <div class="card-body card-body-cascade text-center">
			                        <!-- Text -->
			                        <p class="card-text">
			                        	<?php the_excerpt(); ?>
			                        </p>
			                      </div>
			                    <!-- Card Regular -->
			                </div>
			            </div>
			            <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>

					</section>

			<?php } ?>
					<!--End A Nook Of Beauty -->

					<!-- Cocooned In Timeless Comfort -->
			<?php if (get_the_ID() === 256) { ?>

					<!-- Banner Section-->
				<section id="head-mverlay">
					   <div class="row theme-single-page-banner">

								<?php $themesPageBanner6 = new WP_Query('category_name=cocooned-in-timeless-comfort-banner&posts_per_page=2'); ?>
								<?php if ($themesPageBanner6->have_posts() ) : while ($themesPageBanner6->have_posts() ) : $themesPageBanner6->the_post(); ?>
					       <div class="col-md-6" id="themeheader">
					           <div class="container">
					              <div class="overfixed" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
					              </div>
					           </div>
					       </div>
					       <?php endwhile; endif;  wp_reset_postdata(); ?>

					   </div>
					   <div class="container" id="themetitlecontainer">
					      <p><?php the_title();?></p>
					   </div>
				</section>
					<!--End Banner Section -->

				<section id="cover-overlay">
			  	<div class="container-flex" id="thememainimg" style="background-image: url(<?php the_post_thumbnail_url();?>);">

			   	</div>

			   	<div class="container" id="collection-breadcrumb">
			      <nav aria-label="breadcrumb" id="collection-bc">
			        <ol class="breadcrumb themes-breadcrumb">
			          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
			          <li class="breadcrumb-item"><a href="<?php echo get_permalink(get_page_by_path('themes')); ?>">Themes</a></li>
			          <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
			        </ol>
			      </nav>
			    </div>
				</section>

				<section id="theme-content">
			    <div class="container" id="blockcc">
			    <p id="triggerbody">
			      <?php the_content() ?>
			    </p>
			    </div>

			    <div class="container" style="padding-top: 2%;">
			        <div class="row">
			        	<?php $themesGallerya = new WP_Query('category_name=cocooned-in-timeless-comfort-gallery-a&posts_per_page=-1'); ?>
								<?php if ($themesGallerya->have_posts() ) : while ($themesGallerya->have_posts() ) : $themesGallerya->the_post(); ?>
			            <div class="tile col-sm-6 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>

			        <div class="row color-palates-sec">
			        	<?php $themesColorPalate6 = new WP_Query('category_name=cocooned-in-timeless-comfort-color-palette&posts_per_page=1'); ?>
								<?php if ($themesColorPalate6->have_posts() ) : while ($themesColorPalate6->have_posts() ) : $themesColorPalate6->the_post(); ?>
			            <div class="tile">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			            	</div>
			          	</div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="theme-content">
					<div class="container" style="padding-top: 2%;">
						<div class="row themesinglepage-gallary-b">
			        	<?php $themesGalleryb6 = new WP_Query('category_name=cocooned-in-timeless-comfort-gallery-b&posts_per_page=-1'); ?>
								<?php if ($themesGalleryb6->have_posts() ) : while ($themesGalleryb6->have_posts() ) : $themesGalleryb6->the_post(); ?>
			            <div class="tile col-sm-4 col-12">
			              <div class="tile-img container">
			              	<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			              </div>
			            </div>
			          <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
					</div>
				</section>

				<section id="collections">
			    <div class="container">
			        <div class="row">
			          <div class="col-6 align-items-end">
			              <p id="cctitle">In this look</p>
			          </div>
			          <div class="col-6 align-items-end"></div>
			        </div>
			    </div>
			    <div class="container" id="owl-father" style="padding-top: 3%;">
			        <div class="owl-carousel inthisLook">
								<?php $cocoonedTimelessComfortProduct = new WP_Query('tag=cocooned-in-timeless-comfort-product&posts_per_page=-1'); ?>
								<?php if ($cocoonedTimelessComfortProduct->have_posts() ) : while ($cocoonedTimelessComfortProduct->have_posts() ) : $cocoonedTimelessComfortProduct->the_post(); ?>
			           <div class="owl-container">
			             <a href="javascript:void(0)" id="outcollec">
			              <div class="caro-img">
			                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">

			                  	<div class="carotitle"><?php //the_title() ?></div>
			              </div>
			             </a>
			                <div class="collection-title">
			                  <?php the_content(); ?>
			               </div>
			           </div>
			           <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    </div>
				</section>

				<section id="upnext">
			   <div class="container" style="padding-top: 2%;">
			        <div class="row">
			            <div class="col-6 align-items-end">
			                <p id="cctitle">Up Next</p>

			            </div>
			            <div class="col-6 align-items-end">
			                <a id="cclink" href="<?php echo get_permalink(get_page_by_path('themes')) ?>" class="pull-right">View all themes &nbsp;&nbsp;&nbsp;>></a>
			            </div>
			        </div>
			    </div>

			    <div class="container" style="padding-bottom: 2%;">

			        <div class="row" style="padding-top: 2%; ">
							<?php $themesCol = new WP_Query('tag=mirador-themes&posts_per_page=2&orderby=rand'); ?>
							<?php if ($themesCol->have_posts() ) : while ($themesCol->have_posts() ) : $themesCol->the_post(); ?>
			            <div class="col-md-6 col-12">
			                <div class="container" style="padding-bottom: 45px;">
			                    <!-- Card image -->
			                      <div class="view view-cascade overlay">
			                        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
			                        <a href="<?php the_permalink(); ?>">
			                        	<div class="tptitlecontainer">
			                     				<p> <?php the_title(); ?> </p>
			                   				</div>
			                          <div class="mask rgba-white-slight"></div>
			                        </a>
			                      </div>

			                      <!-- Card content -->
			                      <div class="card-body card-body-cascade text-center">
			                        <!-- Text -->
			                        <p class="card-text">
			                        	<?php the_excerpt(); ?>
			                        </p>
			                      </div>
			                    <!-- Card Regular -->
			                </div>
			            </div>
			            <?php endwhile; endif;  wp_reset_postdata(); ?>
			        </div>
			    	</div>

					</section>

			<?php } ?>
					<!-- Cocooned In Timeless Comfort -->


<?php } ?>
<!--End Single Page of MiraDor Themes -->




<!-- ================ Collections Single Page ==================== -->


<!-- Single Page of Our Collections -->
<?php if(has_category('our-custom-collections')) { ?>

	<!-- Single Page of Bamboo Banner -->
	<?php if(get_the_ID() === 79) { ?>

		<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $BambooPageBanner = new WP_Query('category_name=bamboo-banner&posts_per_page=3'); ?>
				<?php if ($BambooPageBanner->have_posts() ) : while ($BambooPageBanner->have_posts() ) : $BambooPageBanner->the_post(); ?>

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

	<?php } ?>
	<!-- End Single Page of Bamboo Banner -->

	<!-- Single Page of Natural Wood Banner -->
	<?php if(get_the_ID() === 85) { ?>

		<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $NaturalWoodPageBanner = new WP_Query('category_name=natural-wood-banner&posts_per_page=3'); ?>
				<?php if ($NaturalWoodPageBanner->have_posts() ) : while ($NaturalWoodPageBanner->have_posts() ) : $NaturalWoodPageBanner->the_post(); ?>

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

	<?php } ?>
	<!-- End Single Page of Natural Wood Banner -->

	<!-- Single Page of Cane and Natural Fabrics Banner -->
	<?php if(get_the_ID() === 82) { ?>

		<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
	   	<div class="row">
	   			<?php $NaturalFabricsPageBanner = new WP_Query('category_name=cane-and-natural-fabrics-banner&posts_per_page=3'); ?>
					<?php if ($NaturalFabricsPageBanner->have_posts() ) : while ($NaturalFabricsPageBanner->have_posts() ) : $NaturalFabricsPageBanner->the_post(); ?>

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

	<?php } ?>
	<!-- End Single Page of Cane and Natural Fabrics Banner -->

	<!-- Single Page of Planters and Foliage Banner -->
	<?php if(get_the_ID() === 76) { ?>

		<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $PlantersAndPoliagePageBanner = new WP_Query('category_name=planters-and-foliage-banner&posts_per_page=3'); ?>
				<?php if ($PlantersAndPoliagePageBanner->have_posts() ) : while ($PlantersAndPoliagePageBanner->have_posts() ) : $PlantersAndPoliagePageBanner->the_post(); ?>

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

	<?php } ?>
	<!-- End Single Page of Planters and Foliage Banner -->

	<!-- Single Page of Cushions Banner -->
	<?php if(get_the_ID() === 269) { ?>

	<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $CushionsRugsBannerPageBanner = new WP_Query('category_name=cushions-rugs-banner&posts_per_page=3'); ?>
				<?php if ($CushionsRugsBannerPageBanner->have_posts() ) : while ($CushionsRugsBannerPageBanner->have_posts() ) : $CushionsRugsBannerPageBanner->the_post(); ?>

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

	<?php } ?>
	<!-- End Single Page of Cushions Banner -->

	<!-- Single Page of Tableware & Knick-Knacks Banner -->
	<?php if(get_the_ID() === 266) { ?>

		<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $TablewareKnickKnacksPageBanner = new WP_Query('category_name=tableware-knick-knacks-banner&posts_per_page=3'); ?>
				<?php if ($TablewareKnickKnacksPageBanner->have_posts() ) : while ($TablewareKnickKnacksPageBanner->have_posts() ) : $TablewareKnickKnacksPageBanner->the_post(); ?>

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

	<?php } ?>
	<!-- End Single Page of Tableware & Knick-Knacks Banner -->


	<!-- Single Page of Liquid glass Banner -->
	<?php if(get_the_ID() === 2476) { ?>

		<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $LiquidGlassPageBanner = new WP_Query('category_name=liquid-glass-banner&posts_per_page=3'); ?>
				<?php if ($LiquidGlassPageBanner->have_posts() ) : while ($LiquidGlassPageBanner->have_posts() ) : $LiquidGlassPageBanner->the_post(); ?>

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

	<?php } ?>
	<!-- End Single Page of Liquid Glass Banner -->

	<!-- Single Page of Cement & Stone Banner Banner -->
	<?php if(get_the_ID() === 887) { ?>

		<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $CementStonePageBanner = new WP_Query('category_name=cement-stone-banner&posts_per_page=3'); ?>
				<?php if ($CementStonePageBanner->have_posts() ) : while ($CementStonePageBanner->have_posts() ) : $CementStonePageBanner->the_post(); ?>

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

	<?php } ?>
	<!-- End Single Page of Cement & Stone Banner -->

	<!-- Single Page of Mirrors & Headboards Banner -->
	<?php if(get_the_ID() === 273) { ?>

		<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $MirrorsArtsPageBanner = new WP_Query('category_name=mirrors-arts-banner&posts_per_page=3'); ?>
				<?php if ($MirrorsArtsPageBanner->have_posts() ) : while ($MirrorsArtsPageBanner->have_posts() ) : $MirrorsArtsPageBanner->the_post(); ?>

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

	<?php } ?>
	<!-- End Single Page of Mirrors & Headboards Banner -->

<!-- Single Page of Candle Stands & Vases Banner -->
	<?php if(get_the_ID() === 1586) { ?>

		<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $CandleStandsVasesPageBanner = new WP_Query('category_name=candle-stands-and-vases-banner&posts_per_page=3'); ?>
				<?php if ($CandleStandsVasesPageBanner->have_posts() ) : while ($CandleStandsVasesPageBanner->have_posts() ) : $CandleStandsVasesPageBanner->the_post(); ?>

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

	<?php } ?>
	<!-- End Single Page of Candle Stands Banner -->


<!-- Single Page of Ceramics Banner -->

	<?php if(get_the_ID() === 1945) { ?>

		<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
   	<div class="row">
   			<?php $CeramicsBanner = new WP_Query('category_name=ceramics-banner&posts_per_page=3'); ?>
				<?php if ($CeramicsBanner->have_posts() ) : while ($CeramicsBanner->have_posts() ) : $CeramicsBanner->the_post(); ?>

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

	<?php } ?>
	<!-- End Single Page of Candle Stands Banner -->



	<!-- Single Page of Distressed furniture Banner -->

		<?php if(get_the_ID() === 1942) { ?>

			<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
	   	<div class="row">
	   			<?php $Distressedfurniturebanner = new WP_Query('category_name=distressed-furniture-banner&posts_per_page=3'); ?>
					<?php if ($Distressedfurniturebanner->have_posts() ) : while ($Distressedfurniturebanner->have_posts() ) : $Distressedfurniturebanner->the_post(); ?>

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

		<?php } ?>
		<!-- End Single Page of Candle Stands Banner -->

	<!-- Single Page of Arts Banner -->

		<?php if(get_the_ID() === 2422) { ?>

			<section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">
	   	<div class="row">
	   			<?php $Artsbanner = new WP_Query('category_name=arts-banner&posts_per_page=3'); ?>
					<?php if ($Artsbanner->have_posts() ) : while ($Artsbanner->have_posts() ) : $Artsbanner->the_post(); ?>

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

		<?php } ?>
		<!-- End Single Page of Arts Banner -->



		<section id="collection-group">
	    <div class="container" id="breadcrumb-collections"></div>

	    <div class="container" id="collection-breadcrumb">
	      <nav aria-label="breadcrumb" id="collection-bc">
	        <ol class="breadcrumb">
	          <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
	          <li class="breadcrumb-item"><a href="<?php echo get_permalink(get_page_by_path('collections')); ?>">Collections</a></li>
	          <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
	        </ol>
	      </nav>
	    </div>

	    <div class="container" id="collection-grid">
	        <div class="row">
	          <div class="col-4 pull-left">
	               <div class="container">
	                    <div class="dropdown" id="collections-drop">
	                        <button class="btn btn-outline-dark" type="button" id="theme-button1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        Collections &nbsp; ↓
	                        </button>
	                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                           	<!-- <a class="dropdown-item active" href="javascript:void(0)"><?php //the_title(); ?></a> -->
	                          <?php $collectionsCol = new WP_Query('tag=products-category&posts_per_page=-1'); ?>
	          								<?php if ($collectionsCol->have_posts() ) : while ($collectionsCol->have_posts() ) : $collectionsCol->the_post(); ?>

	                            <a class="dropdown-item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

	                          <?php endwhile; endif;  wp_reset_postdata(); ?>
	                      </div>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="row">
	            <div class="container" id="collection-item">
	              <p><?php the_title(); ?></p>
	            </div>
	        </div>

	        <div class="container">
	            <div id="collectionchildcopy" class="productpagetext">
	          		<?php the_content(); ?>
	            </div>
	        </div>
	    </div>
	  </section>



	<section class="products-cart-section">
	  	<!-- user guide alert -->

			<!-- <div class="user-guide-wrap modal hide fade" id="userGuideAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" id="helperui" role="document">
				    <div class="modal-content">

				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalCenterTitle">Helper Guide</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	<span aria-hidden="true">&times;</span>
				        </button>
				      </div>

				      <div class="modal-body">
				        <div class="user-guide-img-row owl-carousel owl-theme">
				        	<div class="user-guide-img-col">
				        		<img src="<?php //echo get_template_directory_uri() ?>/exports/cupboard@2x.png" alt="user-guide-img">
				        	</div>
				        	<div class="user-guide-img-col">
				        		<img src="<?php //echo get_template_directory_uri() ?>/exports/user-guide-img2.png" alt="user-guide-img">
				        	</div>
				        	<div class="user-guide-img-col">
				        		<img src="<?php //echo get_template_directory_uri() ?>/exports/user-guide-img3.png" alt="user-guide-img">
				        	</div>
				        </div>
				      </div>
				    </div>
				  </div>
			</div> -->
			<!-- eo user guide alert -->

		<div class="user-guide-alert-box" id="prdSelectAlert">
			<div class="user-guide-img">
				<img src="<?php echo get_template_directory_uri() ?>/exports/user-guide-img1.png" alt="user-guide-img">
			</div><!-- eo user-guide-img -->
			<div class="user-guide-text">
				<p>Click on product to add to request cart</p>
			</div>
		</div><!-- eo user-guide-alert-box -->

		<div class="user-guide-alert-box" id="sendPrdRequestAlert">
			<div class="user-guide-img">
				<img src="<?php echo get_template_directory_uri() ?>/exports/user-guide-img2.png" alt="user-guide-img">
			</div><!-- eo user-guide-img -->
			<div class="user-guide-text">
				<p>Click on the Floating Action Button to complete your request.</p>
			</div>
		</div><!-- eo user-guide-alert-box -->


		<div class="container product-cart-wrap">
			<div class="cart-box">
				<div class="cart-value">
					<input type="text" value="0" readonly>
				</div>
				<img src="<?php echo get_template_directory_uri() ?>/exports/cart-img.png" alt="">
			</div><!-- eo cart-box -->
	  </div>

		<div class="product-request-form modal hide fade" id="productRequestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document" style="margin-top:25px;">
		    <div class="modal-content">

		      <div class="modal-header">
		        <h2>Request Information</h2>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        	<span aria-hidden="true">&times;</span>
		        </button>
		      </div>

		      <div class="modal-body">
		      	<!-- Material form login -->
						<div class="card">

						  <!--Card content-->
						  <div class="card-body pt-0">

						    <!-- Form -->
						    <form class="text-center" style="color: #757575;" id="reqform">
<!-- needs to be checked -->

									<div class="md-form">
										<input type="text" id="materialRegisterFormPageTitle" name="colltitle" class="form-control requestInput" value="Category Title: <?php the_title(); ?>" readonly="readonly">
									</div>
									<!-- First name -->
                  <div class="md-form">
                    <input type="text" id="materialRegisterFormFirstName" class="form-control requestInput" name="requestfirstname" required>
                    <label for="materialRegisterFormFirstName">First name</label>
                  </div>

                  <!-- Last name -->
                  <div class="md-form">
                    <input type="text" id="materialRegisterFormLastName" class="form-control requestInput" name="requestlastname" required>
                    <label for="materialRegisterFormLastName">Last name</label>
                  </div>

						      <!-- Email -->
						      <div class="md-form">
						        <input type="email" id="materialLoginFormEmail" class="form-control requestInput" name="requestemail" required>
						        <label for="materialLoginFormEmail">E-mail</label>
						      </div>


									<!-- PhoneNumber -->

									<div class="md-form">
						        <input type="number" id="materialLoginFormPhoneNumber" class="form-control requestInput" name="requestphonenumber" max="9999999999"
									 min="1111111111" oninvalid="this.setCustomValidity('Phone Number must be 10 digits and valid')" oninput="this.setCustomValidity('')" required>
						        <label for="materialLoginFormPhoneNumber">Mobile Number</label>
						      </div>

						      <!--Message-->
			            <div class="md-form">
			            	<!-- <div id="materialContactFormMessage" class="dataAppend  form-control md-textarea">

			            	</div> -->
			             <textarea  type="text" id="materialContactFormMessage" class="dataAppend  form-control md-textarea requestInput" name="requestcontent" rows="3" readonly="readonly">

			             </textarea>
			            </div>
			            <!-- Copy -->
			            <div class="form-check p-0">
			            	<div class="row justify-content-left">
				              <div class="round col-2">
											  <input type="checkbox" id="checkbox" name="subscribe" value="yes"/>
											  <label for="checkbox"></label>
											</div>
											<div class="col-10 p-0">
												<span>Subscribe for future product updates</span>
											</div>
										</div>
			            </div>

			            <div class="row pt-4 p-0">
			            	<div class="col-8 pt-2">
			            		<span>Five Times Five Equals?</span>
			            	</div>
			            	<div class="col-3 p-0">
			            		<input type="number" id="materialRegisterFormCaptcha" class="form-control requestInput" min="0" max="99" name="captcha">
			            	</div>
			            </div>

						      <!-- Sign in button -->
						      <button class="btn btn-rounded btn-block my-4 waves-effect z-depth-0" id="submitPrdRequest" onclick="myFunction(); return false;" type="submit">SEND REQUEST</button>

						    </form>
						    <!-- Form -->

								<!-- ajax code for form submission -->


									<script type="text/javascript">

										function myFunction(e)
										{
											var captcha = document.getElementById("materialRegisterFormCaptcha").value;




											if(captcha == '25')
											{
												//AJAX code for form submission

												$.ajax({
													type: "POST",
													url:"<?php echo get_template_directory_uri(); ?>/request.php",
													data:$('#reqform').serialize(),
													success: function() {
														// alert('Just do it');
														$('#productRequestModal').modal('hide');
														$('#requestReceivedMessages').modal('show');

														}


												});

											}

											else {

												alert("wrong answer! please input correct answer!")
											}

											// e.preventDefault();
    									// e.stopPropagation();

										}


									</script>

						  </div>
						</div>
						<!-- Material form login -->
		      </div>
		    </div>
		  </div>
		</div>

		<div class="modal hide fade" id="requestReceivedMessages" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">

				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
				        		<span aria-hidden="true">&times;</span>
				        </button>
				      </div>

				      <div class="modal-body">
				        <div class="messages-box">
				        	<p>We have recieved your request</p>
				        	<div class="message-img">
				        		<img src="<?php echo get_template_directory_uri() ?>/exports/received-sms.png" alt="">
				        	</div>
				        	<p>Check your inbox for the quote</p>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>

	</section><!-- products-cart-section -->


	<!-- Single Page of Bamboo Product -->
	<?php if(get_the_ID() === 79) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
        <div class="row justify-content-center">
					<?php $BambooProduct = new WP_Query('category_name=bamboo&posts_per_page=-1'); ?>
					<?php if ($BambooProduct->have_posts() ) : while ($BambooProduct->have_posts() ) : $BambooProduct->the_post(); ?>
            <div class="line-content col-md-4 col-12 productselect">
              <div class="container category-card">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    <a href="javascript:void(0)">
	                    	<div class="mask rgba-white-slight"></div>
	                    </a>
                  </div>
                  <!-- Card content -->

                   <div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

                </div>
              </div>
            </div>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>

         <ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
      </div>
    </section>
	<?php } ?>
	<!--End Single Page of Bamboo Product-->

	<!-- Single Page of Natural Wood Product -->
	<?php if(get_the_ID() === 85) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
        <div class="row justify-content-center">
					<?php $NaturalWoodProduct = new WP_Query('category_name=natural-wood&posts_per_page=-1'); ?>
					<?php if ($NaturalWoodProduct->have_posts() ) : while ($NaturalWoodProduct->have_posts() ) : $NaturalWoodProduct->the_post(); ?>
            <div class="line-content col-md-4 col-12 productselect">
              <div class="container category-card">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    <a href="javascript:void(0)">
	                    	<div class="mask rgba-white-slight"></div>
												<!-- <p><php the_title() ></p> -->
	                    </a>
                  </div>
                  <!-- Card content -->

                  <div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

                </div>
              </div>
            </div>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>

        <ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
      </div>
    </section>
	<?php } ?>
	<!--End Single Page of Natural Wood Product-->

	<!-- Single Page of Cane and Natural Fabrics Product -->
	<?php if(get_the_ID() === 82) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
        <div class="row justify-content-center">
					<?php $NaturalFabricsProduct = new WP_Query('category_name=cane-and-natural-fabrics&posts_per_page=-1'); ?>
					<?php if ($NaturalFabricsProduct->have_posts() ) : while ($NaturalFabricsProduct->have_posts() ) : $NaturalFabricsProduct->the_post(); ?>
            <div class="line-content col-md-4 col-12 productselect">
              <div class="container category-card">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    <a href="javascript:void(0)">
	                    	<div class="mask rgba-white-slight"></div>
												<!-- <p><php the_title() ></p> -->
	                    </a>
                  </div>
                  <!-- Card content -->

                  <div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

                </div>
              </div>
            </div>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>

        <ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
      </div>
    </section>
	<?php } ?>
	<!--End Single Page of Cane and Natural Fabrics Product-->

	<!-- Single Page of Planters and Foliage Product -->
	<?php if(get_the_ID() === 76) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
        <div class="row justify-content-center">
					<?php $PlantersAndFoliageProduct = new WP_Query('category_name=planter-and-foliage&posts_per_page=-1'); ?>
					<?php if ($PlantersAndFoliageProduct->have_posts() ) : while ($PlantersAndFoliageProduct->have_posts() ) : $PlantersAndFoliageProduct->the_post(); ?>
            <div class="line-content col-md-4 col-12 productselect">
              <div class="container category-card">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    <a href="javascript:void(0)">
	                    	<div class="mask rgba-white-slight"></div>
												<!-- <p><php the_title() ></p> -->
	                    </a>
                  </div>
                  <!-- Card content -->

                  <div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

                </div>
              </div>
            </div>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>

        <ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
      </div>
    </section>
	<?php } ?>
	<!--End Single Page of Planters and Foliage Product-->

	<!-- Single Page of Cushions & Rugs Product -->
	<?php if(get_the_ID() === 269) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
        <div class="row justify-content-center">
					<?php $PlantersAndFoliageProduct = new WP_Query('category_name=cushions-and-rugs&posts_per_page=-1'); ?>
					<?php if ($PlantersAndFoliageProduct->have_posts() ) : while ($PlantersAndFoliageProduct->have_posts() ) : $PlantersAndFoliageProduct->the_post(); ?>
            <div class="line-content col-md-4 col-12 productselect">
              <div class="container category-card">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    <a href="javascript:void(0)">
	                    	<div class="mask rgba-white-slight"></div>
												<!-- <p><php the_title() ></p> -->
	                    </a>
                  </div>
                  <!-- Card content -->

                  <div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

                </div>
              </div>
            </div>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>
        <ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
      </div>
    </section>
	<?php } ?>
	<!--End Single Page of Cushions & Rugs Product-->

	<!-- Single Page of Tableware & Knick-Knacks Product -->
	<?php if(get_the_ID() === 266) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
        <div class="row justify-content-center">
					<?php $TablewareKnickKnacksProduct = new WP_Query('category_name=tableware-and-knick-knacks&posts_per_page=-1'); ?>
					<?php if ($TablewareKnickKnacksProduct->have_posts() ) : while ($TablewareKnickKnacksProduct->have_posts() ) : $TablewareKnickKnacksProduct->the_post(); ?>
            <div class="line-content col-md-4 col-12 productselect">
              <div class="container category-card">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    <a href="javascript:void(0)">
	                    	<div class="mask rgba-white-slight"></div>
												<!-- <p><php the_title() ></p> -->
	                    </a>
                  </div>
                  <!-- Card content -->

                  <div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

                </div>
              </div>
            </div>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>

        <ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
      </div>
    </section>
	<?php } ?>
	<!--End Single Page of Tableware & Knick-Knacks Product -->

	<!-- Single Page of Liquid Glass Product -->
	<?php if(get_the_ID() === 2476) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
        <div class="row justify-content-center">
					<?php $LiquidGlassProduct = new WP_Query('category_name=liquid-glass&posts_per_page=-1'); ?>
					<?php if ($LiquidGlassProduct->have_posts() ) : while ($LiquidGlassProduct->have_posts() ) : $LiquidGlassProduct->the_post(); ?>
            <div class="line-content col-md-4 col-12 productselect">
              <div class="container category-card">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    <a href="javascript:void(0)">
	                    	<div class="mask rgba-white-slight"></div>
												<!-- <p><php the_title() ></p> -->
	                    </a>
                  </div>
                  <!-- Card content -->

                  <div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

                </div>
              </div>
            </div>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>

        <ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
      </div>
    </section>
	<?php } ?>
	<!--End Single Page of Liquid Glass Product -->


	<!-- Single Page of Cement & Stone Product -->
	<?php if(get_the_ID() === 887) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
        <div class="row justify-content-center">
					<?php $CementStoneProduct = new WP_Query('category_name=cement-stone&posts_per_page=-1'); ?>
					<?php if ($CementStoneProduct->have_posts() ) : while ($CementStoneProduct->have_posts() ) : $CementStoneProduct->the_post(); ?>
            <div class="line-content col-md-4 col-12 productselect">
              <div class="container category-card">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    <a href="javascript:void(0)">
	                    	<div class="mask rgba-white-slight"></div>
	                    </a>
                  </div>

                  <div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>


                </div>
              </div>
            </div>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>

        <ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
      </div>
    </section>

	<?php } ?>
	<!--End Single Page of Cement & Stone Product -->

	<!-- Single Page of Mirrors & Arts Product -->
	<?php if(get_the_ID() === 273) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
        <div class="row justify-content-center">
					<?php $MirrorsArtsProduct = new WP_Query('category_name=mirrors-and-arts&posts_per_page=-1'); ?>
					<?php if ($MirrorsArtsProduct->have_posts() ) : while ($MirrorsArtsProduct->have_posts() ) : $MirrorsArtsProduct->the_post(); ?>
            <div class="line-content col-md-4 col-12 productselect">
              <div class="container category-card">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    <a href="javascript:void(0)">
	                    	<div class="mask rgba-white-slight"></div>
	                    </a>
                  </div>
                  <!-- Card content -->

                  <div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

                </div>
              </div>
            </div>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>

        <ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
      </div>
    </section>
	<?php } ?>
	<!--End Single Page of Mirrors & Arts Product -->

	<!-- Single Page of Candle Stands & Vases Product -->
	<?php if(get_the_ID() === 1586) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
        <div class="row justify-content-center">
					<?php $CandleStandsVasesProduct = new WP_Query('category_name=candle-stands-and-vases&posts_per_page=-1'); ?>
					<?php if ($CandleStandsVasesProduct->have_posts() ) : while ($CandleStandsVasesProduct->have_posts() ) : $CandleStandsVasesProduct->the_post(); ?>
            <div class="line-content col-md-4 col-12 productselect">
              <div class="container category-card">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    <a href="javascript:void(0)">
	                    	<div class="mask rgba-white-slight"></div>
	                    </a>
                  </div>
                  <!-- Card content -->

                  <div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

                </div>
              </div>
            </div>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>

        <ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
      </div>
    </section>
	<?php } ?>
	<!--End Single Page of Candle Stands & Vases Product -->


	<!-- Single Page of Ceramics Product -->
	<?php if(get_the_ID() === 1945) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
        <div class="row justify-content-center">
					<?php $CeramicsProduct = new WP_Query('category_name=ceramics&posts_per_page=-1'); ?>
					<?php if ($CeramicsProduct->have_posts() ) : while ($CeramicsProduct->have_posts() ) : $CeramicsProduct->the_post(); ?>
        <div class="line-content col-md-4 col-12 productselect">
              <div class="container category-card">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    <a href="javascript:void(0)">
	                    	<div class="mask rgba-white-slight"></div>
	                    </a>
                  </div>
                  <!-- Card content -->

                  <div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

                </div>
              </div>
            </div>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>

        <ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
      </div>
    </section>
	<?php } ?>
	<!--End Single Page of Ceramics Product -->


	<!-- Single Page of Distressed Furniture Product -->
	<?php if(get_the_ID() === 1942) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
				<div class="row justify-content-center">
					<?php $Distressedfurnitureproduct = new WP_Query('category_name=distressed-furniture&posts_per_page=-1'); ?>
					<?php if ($Distressedfurnitureproduct->have_posts() ) : while ($Distressedfurnitureproduct->have_posts() ) : $Distressedfurnitureproduct->the_post(); ?>
						<div class="line-content col-md-4 col-12 productselect">
							<div class="container category-card">
								<div class="card">
									<div class="view overlay">
										<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
											<a href="javascript:void(0)">
												<div class="mask rgba-white-slight"></div>
											</a>
									</div>
									<!-- Card content -->

									<div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

								</div>
							</div>
						</div>
					<?php endwhile; endif;  wp_reset_postdata(); ?>

				</div>

				<ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
			</div>
		</section>
	<?php } ?>



	<!-- Single Page of Arts Product -->
	<?php if(get_the_ID() === 2422) { ?>
		<section id="collection-group">
			<div class="container" id="collection-grid">
				<div class="row justify-content-center">
					<?php $Artsproduct = new WP_Query('category_name=arts&posts_per_page=-1'); ?>
					<?php if ($Artsproduct->have_posts() ) : while ($Artsproduct->have_posts() ) : $Artsproduct->the_post(); ?>
						<div class="line-content col-md-4 col-12 productselect">
							<div class="container category-card">
								<div class="card">
									<div class="view overlay">
										<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
											<a href="javascript:void(0)">
												<div class="mask rgba-white-slight"></div>
											</a>
									</div>
									<!-- Card content -->

									<div class="product-check-round">
									 	<input type="checkbox" value="<?php the_title() ?>"/>
									  <label></label>
									</div>

								</div>
							</div>
						</div>
					<?php endwhile; endif;  wp_reset_postdata(); ?>

				</div>

				<ul class="owl-pagination d-flex justify-content-center flex-wrap" id="pagin"></ul>
			</div>
		</section>
	<?php } ?>




<?php } ?>
<!--End Single Page of Our Collections -->



<!-- ========== Blog Single Page =========== -->


<?php if(has_category('all-blogs')){ ?>

	<?php
		while ( have_posts() ) : the_post();
	?>
	<section id="blog-mverlay-child" style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></section>

	<section id="blog-child">
	  <div class="container">
	  	<h3 id="blog-child-title"><?php the_title(); ?></h3>
	  </div>
	</section>

	<section id="blog-child-post">
	  <div class="container child-post">
	   <?php the_content(); ?>
	  </div>
	</section>

	<!-- Disqus thread -->

<div class="container">

	<div class="container" style="padding: 5% 0 5% 0;">
		<div class="sharethis-inline-share-buttons"></div>
	</div>


<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://miradorlife.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


</div>


	<!-- End Disqus Thread -->


	<?php
		endwhile; // End of the loop.
	?>

	<section id="verticalother">
    <div class="container" id="owl-keep">
       <p id="highlightchild">Other Articles</p>
        <div class="owl-keep owl-carousel owl-theme">

          <?php $MiraDorBlogs = new WP_Query('category_name=all-blogs&posts_per_page=-1'); ?>
           <?php if ($MiraDorBlogs->have_posts() ) : while ($MiraDorBlogs->have_posts() ) : $MiraDorBlogs->the_post(); ?>
	        	<a href="<?php the_permalink(); ?>">
		          <div class="owl-container otherArticlesText">
		           	<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
		            <div class="container scrollable-item">
		              <p><?php the_title(); ?></p>
		            </div>
		            <div class="container scrollable-post">
		              <?php the_excerpt(); ?>
		            </div>
		          </div>
	        	</a>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>
    </div>
	</section>


<?php } ?>


<?php if(has_category('highlights-blog')){ ?>
	<?php
		while ( have_posts() ) : the_post();
	?>
	<section id="blog-mverlay-child" style="background-image:url(<?php the_post_thumbnail_url(); ?>);background-position:bottom"></section>

	<section id="blog-child">
	  <div class="container">
	  	<h3 id="blog-child-title"><?php the_title(); ?></h3>
	  </div>
	</section>

	<section id="blog-child-post">
	  <div class="container child-post">
	   <?php the_content(); ?>
	  </div>
	</section>

	<?php
		endwhile; // End of the loop.
	?>

	<!-- Disqus thread -->

	<div class="container">
		<div class="sharethis-inline-share-buttons"></div>
		<div id="disqus_thread"></div>
		<script>

		/**
		*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
		*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
		/*
		var disqus_config = function () {
		this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
		this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
		};
		*/
		(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');
		s.src = 'https://miradorlife.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
		})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

	</div>
	<!-- End Disqus Thread -->

	<section id="verticalother">
    <div class="container" id="owl-keep">
       <p id="highlightchild">Other Articles</p>
        <div class="owl-keep owl-carousel owl-theme">

          <?php $MiraDorBlogs = new WP_Query('category_name=all-blogs&posts_per_page=-1'); ?>
           <?php if ($MiraDorBlogs->have_posts() ) : while ($MiraDorBlogs->have_posts() ) : $MiraDorBlogs->the_post(); ?>
	        	<a href="<?php the_permalink(); ?>">
		          <div class="owl-container otherArticlesText">
		           	<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
		            <div class="container scrollable-item">
		              <p><?php the_title(); ?></p>
		            </div>
		            <div class="container scrollable-post">
		              <?php the_excerpt(); ?>
		            </div>
		          </div>
	        	</a>
          <?php endwhile; endif;  wp_reset_postdata(); ?>

        </div>
    </div>
	</section>

<?php } ?>

<?php get_template_part('book-consultation'); ?>

<?php
get_footer();

?>
