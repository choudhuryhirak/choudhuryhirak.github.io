<?php
/**
 * Web: www.agenzzia.com
 * Author: Branko Stevanovic (branko@agenzzia.com)
 * Date: 23-Jun-18
 * Time: 14:17
 */

class UpcomingEventsMetaBox {
    private $screens = array(
        'post',
    );
    private $fields = array(
        array(
            'id'    => 'date',
            'label' => 'Date',
            'type'  => 'date',
        ),
        array(
            'id'    => 'conference',
            'label' => 'Conference',
            'type'  => 'text',
        ),
        array(
            'id'    => 'place',
            'label' => 'Place',
            'type'  => 'text',
        ),
    );

    /**
     * Class construct method. Adds actions to their respective WordPress hooks.
     */
    public function __construct() {
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        add_action('save_post', array($this, 'save_post'));
    }

    /**
     * Hooks into WordPress' add_meta_boxes function.
     * Goes through screens (post types) and adds the meta box.
     */
    public function add_meta_boxes() {
        foreach($this->screens as $screen) {
            add_meta_box(
                'upcoming-events',
                __('Upcoming Events', 'upcoming-events-metabox'),
                array($this, 'add_meta_box_callback'),
                $screen,
                'advanced',
                'default'
            );
        }
    }

    /**
     * Generates the HTML for the meta box
     *
     * @param object $post WordPress post object
     */
    public function add_meta_box_callback($post) {
        wp_nonce_field('upcoming_events_data', 'upcoming_events_nonce');
        echo 'Upcoming Events custom data';
        $this->generate_fields($post);
    }

    /**
     * Generates the field's HTML for the meta box.
     */
    public function generate_fields($post) {
        $output = '';
        foreach($this->fields as $field) {
            $label    = '<label for="' . $field['id'] . '">' . $field['label'] . '</label>';
            $db_value = get_post_meta($post->ID, 'upcoming_events_' . $field['id'], true);
            switch($field['type']) {
                default:
                    $input = sprintf(
                        '<input %s id="%s" name="%s" type="%s" value="%s">',
                        $field['type'] !== 'color' ? 'class="regular-text"' : '',
                        $field['id'],
                        $field['id'],
                        $field['type'],
                        $db_value
                    );
            }
            $output .= $this->row_format($label, $input);
        }
        echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
    }

    /**
     * Generates the HTML for table rows.
     */
    public function row_format($label, $input) {
        return sprintf(
            '<tr><th scope="row">%s</th><td>%s</td></tr>',
            $label,
            $input
        );
    }

    /**
     * Hooks into WordPress' save_post function
     */
    public function save_post($post_id) {
        if(!isset($_POST['upcoming_events_nonce'])){
            return $post_id;
        }

        $nonce = $_POST['upcoming_events_nonce'];
        if(!wp_verify_nonce($nonce, 'upcoming_events_data')){
            return $post_id;
        }

        if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
            return $post_id;
        }

        foreach($this->fields as $field) {
            if(isset($_POST[ $field['id'] ])){
                switch($field['type']) {
                    case 'email':
                        $_POST[ $field['id'] ] = sanitize_email($_POST[ $field['id'] ]);
                        break;
                    case 'text':
                        $_POST[ $field['id'] ] = sanitize_text_field($_POST[ $field['id'] ]);
                        break;
                }
                update_post_meta($post_id, 'upcoming_events_' . $field['id'], $_POST[ $field['id'] ]);
            }
            else if($field['type'] === 'checkbox'){
                update_post_meta($post_id, 'upcoming_events_' . $field['id'], '0');
            }
        }
    }
}

new UpcomingEventsMetaBox;

function customadmin_feeguide() {
    if(is_admin()){
        $script = "
			<script type='text/javascript'>
				jQuery(document).ready(function($) {
				    console.log('vidimo se');
					$('#meta-feeguide-boxes').hide();
					$('#in-category-9').is(':checked') ? $('#upcoming-events').show() : $('#upcoming-events').hide();
					$('#in-category-9').click(function() {
						$('#upcoming-events').toggle(this.checked);
					});
				});
		</script>";
        echo $script;
    }
}

add_action('admin_footer', 'customadmin_feeguide');