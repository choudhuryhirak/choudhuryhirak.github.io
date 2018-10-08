
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mirador
 */

?>

	</div><!-- #content -->

		<div class="fabs socialSticky">
		 <a href="https://www.facebook.com/miradorlife/" target="_blank" class="fab facebook socialtag" tooltip="Facebook"><i class="sec animated"><img src="<?php echo get_template_directory_uri(); ?>/exports/if_facebook_112689.svg" alt="" width="20px" height="20px"></i></a>

		 <a href="https://www.instagram.com/miradorlife/" target="_blank" class="fab instagram socialtag" tooltip="Instagram"><i class="sec animated"><img src="<?php echo get_template_directory_uri(); ?>/exports/noun_Camera_40714.svg" alt="" width="20px" height="20px"></i></a>

		 <a href="https://pinterest.com/miradorlife/" target="_blank" class="fab pinterest socialtag" tooltip="Pinterest"><i class="sec animated"><img src="<?php echo get_template_directory_uri(); ?>/exports/if_pinterest_324891.svg" alt="" width="20px" height="20px"></i></a>

		 <a target="_blank" class="fab share-btn"  tooltip="Follow Us:"><i class="prime  animated rotateIn fa fa-chain"></i></a>
	 </div>

	 <footer id="footer">

            <div class="row">

                <div class="col-md-3">
                    <div class="container" id="foocolumn">
                        <div id="footertitle">
                            <p>Mirador Life</p>
                        </div>
                            <div class="container-flex" id="foosub">

																<?php wp_nav_menu(array('theme_location' => 'footer-miradorlife')); ?>

                            </div>

                    </div>
                </div>
                <div class="col-md-3">
                   <div class="container" id="foocolumn">
                        <div id="footertitle">
                            <p>collections</p>
                        </div>
                            <div class="container-flex" id="foosub">

                                <?php wp_nav_menu(array('theme_location' => 'footer-accessories')); ?>

                            </div>

                    </div>

                </div>

                <div class="col-md-3">
                    <div class="container" id="foocolumn">
                        <div id="footertitle">
                            <p>&nbsp;</p>
                        </div>
                            <div class="container-flex" id="foosub">

                                <?php wp_nav_menu(array('theme_location' => 'footer-accessories-col2')); ?>

                            </div>
                    </div>

                </div>
                <div class="col-md-3">

                    <div class="container" id="foocolumn">
                        <div id="footertitle">
                            <p>contact us</p>
                        </div>
                            <div class="container-flex" id="foosub">
                               <!-- <div class="row">
                                   <div class="col-2">
                                       <span><img src="<?php //echo get_template_directory_uri(); ?>/exports/Group%20146.svg" alt="" width="35px" height="35px"></span>
                                   </div>
                                   <div class="col-9">
                                       <p> 428, Ground Floor, Shri Krishna Temple Road, Indira Nagar 1st Stage,Bengaluru, Karnataka 560038</p>
                                   </div>
                               </div> -->

                               <div class="row">
                                   <div class="col-2">
                                       <span><img src="<?php echo get_template_directory_uri(); ?>/exports/Group%20359.svg" alt="" width="35px" height="35px"></span>
                                   </div>
                                   <div class="col-9 supportph">
                                       <p><a href="tel:+918040909757">+91 8040909757</a></p>
                                   </div>

                               </div>
                               <div class="row">
                                   <div class="col-2">
                                       <span><img src="<?php echo get_template_directory_uri(); ?>/exports/Group%20360.svg" alt="" width="35px" height="35px"></span>
                                   </div>
                                   <div class="col-9 supportemail">
                                        <p><a href="mailto:support@miradorlife.com">support@miradorlife.com</a></p>

                                   </div>

                               </div>

                            </div>

                    </div>

                </div>

            </div>

            <div class="row">

                     <div class="container pull-left" style="padding-bottom: 2%; margin-left: 3%;">

                       <div id="footertitle">
                            <p>follow us</p>
                        </div>


                        <div class="row">
                           <div class="container">
                            <span style="padding-right: 1%;">
                              <a href="https://www.instagram.com/miradorlife/">
                                <img src="<?php echo get_template_directory_uri(); ?>/exports/noun_Camera_40714.svg" alt="" width="20px" height="20px">
                              </a>
                            </span>
                            <span style="padding-right: 1%;">
                              <a href="https://in.pinterest.com/miradorlife/">
                                <img src="<?php echo get_template_directory_uri(); ?>/exports/if_pinterest_324891.svg" alt="" width="20px" height="20px">
                              </a>
                            </span>
                            <span>
                              <a href="https://www.facebook.com/miradorlife/">
                                <img src="<?php echo get_template_directory_uri(); ?>/exports/if_facebook_112689.svg" alt="" width="20px" height="20px">
                              </a>
                            </span>

                          </div>

                        </div>


                      </div>

              </div>

            <div class="row">
                  <div class="col-5">
                  <div class="container pull-left" style="padding-bottom: 2%; margin-left: 3%;">
                      <div class="container-flex" id="foosub">
                          <span>
                              ©MiradorLife 2018
                          </span>

                      </div>

                  </div>
                  </div>
                  <!-- <div class="col-7">
                     <div class="container pull-left" style="padding-bottom: 2%;">
                     <div class="container-flex" id="foosub">
                      <span>
                          Privacy Policy&nbsp;|
                      </span>
                      <span>
                          &nbsp;Terms of use
                      </span>
                      </div>
                      </div>
                  </div> -->
              </div>

    </footer>
</div><!-- #page -->




	<script src="https://code.jquery.com/jquery-3.3.1.min.js?v=001" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <?php wp_footer(); ?>

	<script id="dsq-count-scr" src="//miradorlife.disqus.com/count.js" async></script>

	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b879d2976a075cb"></script>

  <script type="text/javascript">

  $(document).ready(function(){

    $(window).on('load',function(){

      setTimeout(function(){

          $('#prdSelectAlert').css({'bottom':'40px'});

        }, 2000);

    });


  });


  </script>

</body>
</html>
