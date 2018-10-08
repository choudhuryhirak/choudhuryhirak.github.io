<?php
/* Template Name: LoginPageTemplate */

/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 31-May-18
 * Time: 19:02
 */

global $user_ID;
$alreadyRegistered = false;
$userdata = wp_get_current_user();

if($user_ID){
    $alreadyRegistered = true;
}

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-page">
                        <?php if(!$alreadyRegistered): ?>
                        <div class="slogan-part">
                            <div class="slogan-inner">
                                <h2>For Latest Updates Register Now</h2>
                                <div class="explanation-block">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
                            </div>
                        </div>
                        <div class="form-part">
                            <div class="form-part-inner">
                                <h3>Log In With</h3>
                                <div class="social">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="face"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="javascript:void(0)" class="twitt"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)" class="gplus"><i class="fab fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <div class="divider"><span>OR</span></div>
                                <div class="login-form-container">
                                    <form name="loginform" id="loginform" action="http://localhost/future-medicine/wp-login.php" method="post">
                                        <div class="form-line"><input type="text" name="log" id="user_login" placeholder="User Name" required/></div>
                                        <div class="form-line"><input type="password" name="pwd" id="user_pass" placeholder="Password" required/></div>
                                        <div class="form-line">
                                            <div class="control-block"><input type="checkbox" name="rememberme" value="forever" id="rememberme"/><label for="rememberme"><span></span> Remember me?</label></div>
                                            <input type="submit" name="wp-submit" id="wp-submit" value="Login"/>
                                            <input type="hidden" name="redirect_to" value="http://localhost/future-medicine/login/">
                                        </div>
                                    </form>
                                    <div class="forgoten-block">
                                        <ul>
                                            <li><a href="javascript:void(0)">Register Now</a></li>
                                            <li><a href="javascript:void(0)">Forgot Password?</a></li>
                                        </ul>
                                    </div>
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


<?php get_footer(); ?>
