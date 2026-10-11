<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


function wens_travel_hub_scripts(){
   // enqueue parent style
	wp_enqueue_style('wens-travel-hub-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wens_travel_hub_scripts');


function wens_travel_hub_register_block_pattern_categories(){
    register_block_pattern_category(
        'wens-travel-hub',
        array( 'label' => __( 'WENS Travel Hub', 'wens-travel-hub' ) )
    );

}
add_action('init', 'wens_travel_hub_register_block_pattern_categories');
