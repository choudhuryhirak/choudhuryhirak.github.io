<?php
/* Template Name: SuccessPageTemplate */

/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 31-May-18
 * Time: 19:37
 */
$mode    = '';
$message = '';
if(isset($_GET['mode'])){
    $mode = $_GET['mode'];
}
switch($mode) {
    case 'newsletter':
        $message = 'Your subscription to our newsletter is successfully completed. Thanks for your interest in our articles.';
        break;
    case 'simple-message':
        $message = 'Your contact message is sent successfully. We will return to you very soon. Thanks for contact us.';
        break;
    default:
        $message = 'Some generic message here';
}
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="success-page">
                            <h1>Success</h1>
                            <p><?php echo $message ?> Return to <a href="<?php echo home_url() ?>">homepage</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

<?php get_footer(); ?>