

<?php



/*

  Template Name: Testimonials Template

*/

  get_header();



?>



<main id="main">



  <section id="head-mverlay" style="padding-top: 5%; padding-right: 10%; padding-left: 10%;">

     <div class="row">



        <?php $ourClients = new WP_Query('category_name=our-clients&posts_per_page=-1'); ?>

        <?php if ($ourClients->have_posts() ) : while ($ourClients->have_posts() ) : $ourClients->the_post(); ?>

          

         <div class="col-md-3 d-none d-sm-block">

            <div class="container" id="themeshome_t">

              <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">

            </div>

         </div>



        <?php endwhile; endif;  wp_reset_postdata(); ?>       

     </div>

    

     <div class="row">

        <div class="container" style="text-align: center;">

          <p id="themeparent">TESTIMONIALS</p>    

        </div>

     </div>

  </section>



  <section class="testimonials">

     

     <div class="container" id="testimonial-container">

        <p>



          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.



        </p>

      </div>

     

      <div class="container" id="testimonial-nav-container">

         <!-- Nav tabs -->

          <ul class="nav nav-tabs nav-justified skyblue">



            <li class="nav-item">

                <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab" id="">They Made Us A Home <span id="arrowpill">→</span></a>

            </li>

            <li class="nav-item">

                <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><span id="arrowpill2">←</span>Spaces We Are Proud Of</a>

            </li>

            

          </ul>

      <!-- Tab panels -->



          <div class="tab-content card">

              <!--Panel 1-->

              <div class="tab-pane fade in show active" id="panel1" role="tabpanel">

                 <div class="container" id="testimonial-panel">

                     

                  <?php $TheMadeusaHome = new WP_Query('category_name=they-made-us-a-home&posts_per_page=-1'); ?>

                  <?php if ($TheMadeusaHome->have_posts() ) : while ($TheMadeusaHome->have_posts() ) : $TheMadeusaHome->the_post(); ?>

                     <div class="row">

                        <div class="col-md-4">

                           <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">

                        </div>



                        <div class="col-md-8">

                          <div class="testimonials-copy">

                            <p>

                              <?php the_content(); ?>

                            </p>

                          </div>

                        </div>

                      </div>

                    <?php endwhile; endif;  wp_reset_postdata(); ?>  

                 </div>



              </div>

              <!--/.Panel 1-->





              <!--Panel 2-->

              <div class="tab-pane fade" id="panel2" role="tabpanel">

                  <div class="container" id="testimonial-panel">

                    <?php $spacesWeAreProudOf = new WP_Query('category_name=spaces-we-are-proud-of&posts_per_page=-1'); ?>

                    <?php if ($spacesWeAreProudOf->have_posts() ) : while ($spacesWeAreProudOf->have_posts() ) : $spacesWeAreProudOf->the_post(); ?>

                     <div class="row">

                        <div class="col-md-4">

                           <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">

                        </div>



                        <div class="col-md-8">

                            <div class="testimonials-copy">

                               <p>

                                  <?php the_content(); ?>

                               </p>

                            </div>

                        </div>

                      </div>

                    <?php endwhile; endif;  wp_reset_postdata(); ?>



                 </div>

              </div>

              <!--/.Panel 2-->

          </div>

        </div>  

  </section>





  <?php get_template_part('book-consultation'); ?>



</main>



<?php get_footer(); ?>

