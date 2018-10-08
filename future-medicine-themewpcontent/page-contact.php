<?php

/* Template Name: ContactPageTemplate */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package future-medicine-theme
 */

get_header();
global $wpdb;
global $user_ID;
$success           = false;
$alreadyRegistered = false;
$user              = '';

if(isset($_GET['success'])){
    $success = (bool) $_GET['success'];
}

if(isset($_GET['user'])){
    $user = $_GET['user'];
}

$userdata = wp_get_current_user();

if($user_ID){
    $alreadyRegistered = true;
}

?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="login-page">
                            <div class="slogan-part">
                                <div class="slogan-inner">
                                    <div class="slogan-inner-content">
                                        <h2>Contact us</h2>
<!--                                        <div class="benefits">-->
<!---->
<!--                                            <ul>-->
<!--                                                <li>-->
<!--                                                    <div class="subscription-benefit">-->
<!--                                                        <div class="icon-block"><img src="--><?php //echo get_template_directory_uri() ?><!--/img/benefit-archive-icon-white.svg" alt="Archive"></div>-->
<!--                                                        <h3>Archives</h3>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <div class="subscription-benefit">-->
<!--                                                        <div class="icon-block"><img src="--><?php //echo get_template_directory_uri() ?><!--/img/benefit-newsletter-icon-white.svg" alt="Archive"></div>-->
<!--                                                        <h3>Newsletter</h3>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <div class="subscription-benefit">-->
<!--                                                        <div class="icon-block"><img src="--><?php //echo get_template_directory_uri() ?><!--/img/benefit-email-icon-white.svg" alt="Archive"></div>-->
<!--                                                        <h3>Emails</h3>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <div class="subscription-benefit">-->
<!--                                                        <div class="icon-block"><img src="--><?php //echo get_template_directory_uri() ?><!--/img/benefit-comments-icon-white.svg" alt="Archive"></div>-->
<!--                                                        <h3>Comments</h3>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    <div class="subscription-benefit">-->
<!--                                                        <div class="icon-block"><img src="--><?php //echo get_template_directory_uri() ?><!--/img/benefit-new-feature-icon-white.svg" alt="Archive"></div>-->
<!--                                                        <h3>New Features</h3>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!---->
<!--                                            </ul>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="form-part">
                                <div class="form-part-inner">
                                    <h3>Contact Us</h3>

                                    <div class="login-form-container">
                                        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                                            <input type="hidden" name="action" value="simplemessage"/>
                                            <div class="form-line"><input type="text" name="name" id="name" placeholder="Name" required /></div>
                                            <div class="form-line"><input type="email" name="email" id="email" placeholder="Email" required/></div>
                                            <div class="form-line"><textarea id="message" name="message" rows="10" placeholder="Message"></textarea></div>
                                            <div class="form-line right">
                                                <input type="submit" value="Send">
                                            </div>

                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
<?php get_footer() ?>