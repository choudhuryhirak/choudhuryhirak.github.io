<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 30-May-18
 * Time: 19:14
 */

function CreatePostTypeSubscriptionPlan() {
    register_post_type( 'subscription_plan',
        array(
            'labels' => array(
                'name' => __( 'SubscriptionPlans' ),
                'singular_name' => __( 'SubscriptionPlan' )
            ),
            'taxonomies'=>array('category'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'subscription-plan'),
            'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
            'menu_icon'   => 'dashicons-welcome-write-blog',
        )
    );
}
add_action( 'init', 'CreatePostTypeSubscriptionPlan' );

function SubscriptionPlanAddMetaBox() {
//this will add the metabox for the video post type
    $screens = array( 'subscription_plan' );

    foreach ( $screens as $screen ) {

        add_meta_box(
            'subscription_plan_sectionid',
            __( 'Price', 'subscription_plans_textdomain' ),
            'SubscriptionPlanMetaBoxCallback',
            $screen
        );
    }
}
add_action( 'add_meta_boxes', 'SubscriptionPlanAddMetaBox' );

function SubscriptionPlanMetaBoxCallback( $post ) {

// Add a nonce field so we can check for it later.
    wp_nonce_field( 'subscription_plan_save_meta_box_data', 'subscription_plan_meta_box_nonce' );

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $valueSubscriptionPlanPrice = get_post_meta( $post->ID, '_subscription_plan_price', true );
    echo '<table width="100%"><tr>';
    echo '<td width="15%"><label for="subscritpion-plan-price">';
    _e( 'Subscription Plan Price', 'subscription_plans_textdomain' );
    echo '</label> </td>';
    echo '<td width="85%"><input type="text" id="subscritpion-plan-price" name="subscritpion-plan-price" value="' . esc_attr( $valueSubscriptionPlanPrice ) . '" style="width:100%"  /></td></tr>';
    echo '</tr></td></tbody></table>';
}


function SubscriptionPlanSaveMetaBoxData( $post_id ) {

    if ( ! isset( $_POST['subscription_plan_meta_box_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['subscription_plan_meta_box_nonce'], 'subscription_plan_save_meta_box_data' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( isset( $_POST['post_type'] ) && 'subscription_plan' == $_POST['post_type'] ) {

        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }

    } else {

        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    if ( ! isset( $_POST['subscritpion-plan-price'] ) ) {
        return;
    }

    $subscription_plan_price_data = sanitize_text_field( $_POST['subscritpion-plan-price'] );

    update_post_meta( $post_id, '_subscription_plan_price', $subscription_plan_price_data );


}
add_action( 'save_post', 'SubscriptionPlanSaveMetaBoxData' );