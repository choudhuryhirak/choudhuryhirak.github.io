<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package future-medicine-theme
 */
global $magazineCoverImageUrl;
?>

	</div><!-- #content -->

<footer>
    <!-- <div class="upper-footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="upper-inner">
                        <div class="subscribe-form">
                            <h3>Subscribe to our mailing list</h3>
                            <form action="<?php //echo esc_url(admin_url('admin-post.php')); ?>" id="subscribe-footer-form" method="post">
                                <input type="hidden" name="action" value="newslettermessage"/>
                                <input type="email" name="subscribe-email" id="subscribe-email" required placeholder="Please enter your email"/>
                                <input type="submit" value="submit"/>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="lower-footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="lower-inner">
                        <div class="top-block">
                            <div class="info-block">
                                <div class="logo-container"><a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo-footer-white.svg" alt="Logo"></a></div>

                            </div>
                            <div class="menus">
                                <div class="upper-menus">
                                    <div class="bottom-menu">
                                        <h4>Topics</h4>
                                        <?php wp_nav_menu(array('theme_location' => 'footer-menu-left', 'container'=>false)); ?>

                                    </div>
                                    <div class="bottom-menu">
                                        <?php wp_nav_menu(array('theme_location' => 'footer-menu-middle', 'container'=>false)); ?>
                                    </div>
                                    <div class="bottom-menu">
                                        <h4>Events</h4>
                                        <?php wp_nav_menu(array('theme_location' => 'footer-menu-right', 'container'=>false)); ?>

                                        <div class="nav-container footer-subscribebtn">
                                            <div class="upper-nav">
                                                <!-- <ul>
                                                    <li><a href="<?php //echo get_permalink(get_page_by_path('login')) ?>">Sign in</a></li>
                                                </ul> -->
                                                <a href="https://futuremedicineindia.com/landing/" class="subscribe">Register</a>
                                                <?php //echo home_url('/subscription/') ?>
                                            </div>
                                        </div>
                                        <div class="social-menu">
                                            <h5>Connect with us</h5>
                                            <ul>
                                                <li><a target="_blank" href="<?php echo FutureMedicineGlobalVars()['facebook-link'] ?>"><i class="fab fa-facebook-square"></i></a></li>
                                                <li><a target="_blank" href="<?php echo FutureMedicineGlobalVars()['linkedin-link'] ?>"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a target="_blank" href="<?php echo FutureMedicineGlobalVars()['twitter-link'] ?>"><i class="fab fa-twitter-square"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="bottom-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bottom-footer-content copyright">&copy; Future Medicine India 2018</div>
                    <div class="bottom-footer-content bottom-menu">
                          <ul>
                            <!-- <li><a href="javascript:void(0)">About Us</a></li>
                            <li><a href="javascript:void(0)">Privacy policy</a></li>
                            <li><a href="javascript:void(0)">Site map</a></li> -->
                          </ul>
                      </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ############################## video modal ######################################### -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <a href="javascript:void(0)" class="button-close-modal"><i class="fas fa-times"></i></a>
                <div class="video-container">
                    <iframe width="560" height="315" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- ########################## end of video modal ###################################### -->

<!-- <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="4a1cbf3e-1406-4ed4-9ed6-87d5e4da99b5";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script> -->



<?php wp_footer(); ?>

<script id="dsq-count-scr" src="//future-medicine.disqus.com/count.js" async></script>

</body>
</html>
