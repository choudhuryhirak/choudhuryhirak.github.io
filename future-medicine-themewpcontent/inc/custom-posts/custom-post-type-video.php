<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 29-May-18
 * Time: 17:28
 */


function create_post_type_video() {
    register_post_type( 'video',
        array(
            'labels' => array(
                'name' => __( 'Videos' ),
                'singular_name' => __( 'Video' )
            ),
            'taxonomies'=>array('category'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'video'),
            'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
            'menu_icon'   => 'dashicons-media-video',
        )
    );
}
add_action( 'init', 'create_post_type_video' );




function video_add_meta_box() {
//this will add the metabox for the video post type
    $screens = array( 'video' );

    foreach ( $screens as $screen ) {

        add_meta_box(
            'video_sectionid',
            __( 'Video Details', 'video_textdomain' ),
            'video_meta_box_callback',
            $screen
        );
    }
}
add_action( 'add_meta_boxes', 'video_add_meta_box' );

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function video_meta_box_callback( $post ) {

// Add a nonce field so we can check for it later.
    wp_nonce_field( 'video_save_meta_box_data', 'video_meta_box_nonce' );

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $valueYouTubeVideoUrl = get_post_meta( $post->ID, '_video-youtube-url', true );
    echo '<table width="100%"><tr>';
    echo '<td width="15%"><label for="video-youtube-url">';
    _e( 'Youtube Url', 'video_textdomain' );
    echo '</label> </td>';
    echo '<td width="85%"><input type="text" id="video-youtube-url" name="video-youtube-url" value="' . esc_attr( $valueYouTubeVideoUrl ) . '" style="width:100%"  /></td></tr>';


    $valueVideoPosterImageUrl = get_post_meta( $post->ID, '_video-poster-image-url', true );

    echo '<tr><td><label for="video-poster-image-url">';
    _e( 'Video Poster Image Url', 'video_textdomain' );
    echo '</label></td> ';
    echo '<td><input type="text" id="video-poster-image-url" name="video-poster-image-url" value="' . esc_attr( $valueVideoPosterImageUrl ) . '" style="width:100%"  /></td>';
    echo '</tr></td></tbody></table>';
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function video_save_meta_box_data( $post_id ) {

    if ( ! isset( $_POST['video_meta_box_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['video_meta_box_nonce'], 'video_save_meta_box_data' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( isset( $_POST['post_type'] ) && 'video' == $_POST['post_type'] ) {

        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }

    } else {

        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    if ( ! isset( $_POST['video-youtube-url'] ) ) {
        return;
    }

    $my_video_url_data = sanitize_text_field( $_POST['video-youtube-url'] );

    update_post_meta( $post_id, '_video-youtube-url', $my_video_url_data );

    $my_video_poster_url_data = sanitize_text_field( $_POST['video-poster-image-url'] );

    update_post_meta( $post_id, '_video-poster-image-url', $my_video_poster_url_data );
}
add_action( 'save_post', 'video_save_meta_box_data' );