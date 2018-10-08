<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 31-May-18
 * Time: 09:58
 */

/**
 * facebook settings
 */


function OpengraphDoctype($output) {
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'OpengraphDoctype');

function FBOpengraphTwitterCard() {
    global $post;


    if(is_single()) {
        if(has_post_thumbnail($post->ID)) {
            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium')[0];
        } else {
            $img_src = get_stylesheet_directory_uri() . '/img/opengraph_image.jpg';
        }
        if($excerpt = $post->post_excerpt) {
            $excerpt = strip_tags($post->post_excerpt);
            $excerpt = str_replace("", "'", $excerpt);
        } else {
            $excerpt = get_bloginfo('description');
        }
        ?>

        <meta property="og:title" content="<?php echo the_title(); ?>"/>
        <meta property="og:description" content="<?php echo $excerpt; ?>"/>
        <meta property="og:type" content="article"/>
        <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
        <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
        <meta property="og:image" content="<?php echo $img_src; ?>"/>
        <meta name="twitter:card" value="summary" />
        <meta name="twitter:site" value="@futuremedicineindia" />
        <meta name="twitter:title" value="<?php echo the_title(); ?>" />
        <meta name="twitter:description" value="<?php echo $excerpt; ?>" />
        <meta name="twitter:image" content="<?php echo $img_src; ?>" />
        <meta name="twitter:url" value="<?php echo the_permalink(); ?>" />
        <?php
    } else {
        return;
    }
}
add_action('wp_head', 'FBOpengraphTwitterCard', 5);

