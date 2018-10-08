<?php

/* Template Name: RegisterPageTemplate */
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
                        <div class="login-page register">
                            <?php if($success && !$alreadyRegistered): ?>
                                <div class="success-info">
                                    Dear <?php echo $user ?>, you are succesfuly registered on Future Medicine, thanks for your support and loyality.
                                </div>
                            <?php endif ?>
                            <?php if(!$alreadyRegistered): ?>
                                <div class="slogan-part">
                                    <div class="slogan-inner">
                                        <div class="slogan-inner-content">
                                            <h2>Stay Upto Data With <span class="important">Freshly</span> Brewed Content</h2>
                                            <div class="benefits">

                                                <ul>
                                                    <li>
                                                        <div class="subscription-benefit">
                                                            <div class="icon-block"><img src="<?php echo get_template_directory_uri() ?>/img/benefit-archive-icon-white.svg" alt="Archive"></div>
                                                            <h3>Archives</h3>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subscription-benefit">
                                                            <div class="icon-block"><img src="<?php echo get_template_directory_uri() ?>/img/benefit-newsletter-icon-white.svg" alt="Archive"></div>
                                                            <h3>Newsletter</h3>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subscription-benefit">
                                                            <div class="icon-block"><img src="<?php echo get_template_directory_uri() ?>/img/benefit-email-icon-white.svg" alt="Archive"></div>
                                                            <h3>Emails</h3>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subscription-benefit">
                                                            <div class="icon-block"><img src="<?php echo get_template_directory_uri() ?>/img/benefit-comments-icon-white.svg" alt="Archive"></div>
                                                            <h3>Comments</h3>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subscription-benefit">
                                                            <div class="icon-block"><img src="<?php echo get_template_directory_uri() ?>/img/benefit-new-feature-icon-white.svg" alt="Archive"></div>
                                                            <h3>New Features</h3>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-part">
                                    <div class="form-part-inner">
                                        <h3>Register</h3>

                                        <div class="login-form-container">
                                            <form action="<?php echo home_url() ?>/register/" method="post">
                                                <input type="hidden" name="registration-form" value="registration-form"/>
                                                <div class="form-line"><input type="text" name="userName" id="userName" placeholder="Name" required/></div>
                                                <div class="form-line"><input type="email" name="userEmail" id="userEmail" placeholder="Email" required/></div>
                                                <div class="form-line"><input type="password" name="userPass" id="userPass" placeholder="Password" value="" required/></div>
                                                <div class="form-line"><input type="password" name="userPassConfirm" id="userPassConfirm" placeholder="Confirm Password" value="" required/></div>
                                                <div class="form-line">
                                                    <div class="control-block"><input type="checkbox" name="terms" value="Yes" id="terms"><label for="terms"><span></span> I agree to the Terms of Service</label></div>
                                                    <input type="submit" value="Register">
                                                </div>

                                            </form>

                                        </div>
                                        <div class="divider"><span>OR</span></div>
                                        <h3>Login With</h3>
                                        <div class="social">
                                            <?php do_action('oa_social_login') ?>

                                            <ul>
                                                <li><a href="javascript:void(0)" class="face"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="javascript:void(0)" class="twitt"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="javascript:void(0)" class="gplus"><i class="fab fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="success-info">

                                    Dear <?php echo $userdata->data->user_nicename ?>, you are already registered on our site. Go to <a href="javascript:history.back()">previous page</a>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php get_footer() ?>