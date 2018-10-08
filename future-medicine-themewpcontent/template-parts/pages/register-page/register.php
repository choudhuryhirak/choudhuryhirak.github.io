<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 31-May-18
 * Time: 11:14
 */
global $wpdb;
global $user_ID;

if($user_ID && $user_ID != 1){
    header('Location:' . home_url());
}
else {
    $errors = array();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Check username is present and not already in use
        $username = esc_sql($_REQUEST['userName']);
        if(strpos($username, ' ') !== false){
            $errors['username'] = "Sorry, no spaces allowed in usernames";
        }
        if(empty($username)){
            $errors['username'] = "Please enter a username";
        }
        elseif(username_exists($username)) {
            $errors['username'] = "Username already exists, please try another";
        }

        // Check email address is present and valid
        $email = esc_sql($_REQUEST['userEmail']);
        if(!is_email($email)){
            $errors['email'] = "Please enter a valid email";
        }
        elseif(email_exists($email)) {
            $errors['email'] = "This email address is already in use";
        }

        // Check password is valid
        if(0 === preg_match("/.{6,}/", $_POST['userPass'])){
            $errors['password'] = "Password must be at least six characters";
        }

        // Check password confirmation_matches
        if(0 !== strcmp($_POST['userPass'], $_POST['userPassConfirm'])){
            $errors['password_confirmation'] = "Passwords do not match";
        }

        // Check terms of service is agreed to
        if($_POST['terms'] != "Yes"){
            $errors['terms'] = "You must agree to Terms of Service";
        }

        if(0 === count($errors)){

            $password = $_POST['userPass'];

            $new_user_id = wp_create_user($username, $password, $email);
            $success     = 1;
            wp_redirect(home_url().'/success-page?action=register&success='.$success.'&u=' . $username);
            exit;

            //header('Location:' . get_bloginfo('url') . '/success-page/?action=register&success=1&u=' . $username);
        }
    }
}
?>

<div class="login-page register">
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
                    <div class="form-line"><input type="text" name="userName" id="userName" placeholder="Name" required/></div>
                    <div class="form-line"><input type="email" name="userEmail" id="userEmail" placeholder="Email" required/></div>
                    <div class="form-line"><input type="password" name="userPass" id="userPass" placeholder="Password" value="" required/></div>
                    <div class="form-line"><input type="password" name="userPassConfirm" id="userPassConfirm" placeholder="Confirm Password" value="" required/></div>
                    <div class="form-line">
                        <div class="control-block"><input type="checkbox" name="terms" value="Yes" id="terms"><label for="terms"><span></span> I agree to the Terms of Service</label></div>
                        <input type="submit" value="Register">
                    </div>
                    <!--                    <div class="form-line">-->
                    <!--                        <div class="control-block"></div>-->
                    <!--                        <input type="submit" value="Register"/>-->
                    <!--                    </div>-->
                </form>

            </div>
            <div class="divider"><span>OR</span></div>
            <h3>Login With</h3>
            <div class="social">
                <ul>
                    <li><a href="javascript:void(0)" class="face"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="javascript:void(0)" class="twitt"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="javascript:void(0)" class="gplus"><i class="fab fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
