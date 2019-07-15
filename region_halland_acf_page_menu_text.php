<?php

	/**
	 * @package Region Halland ACF Page Menu Text
	 */
	/*
	Plugin Name: Region Halland ACF Page Menu Text
	Description: ACF-fält för menu text
	Version: 1.1.0
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	// Anropa function om ACF är installerad
	add_action('acf/init', 'my_acf_add_page_menu_text_field_groups');

	// Function för att lägga till "field groups"
	function my_acf_add_page_menu_text_field_groups() {

		if (function_exists('acf_add_local_field_group')):

			acf_add_local_field_group(array(
			    'key' => 'group_1000143',
			    'title' => 'Navigering',
			    'fields' => array(
			        0 => array(
			        	'key' => 'field_1000144',
			            'label' => __('Navigation', 'regionhalland'),
			            'name' => 'name_1000145',
			            'type' => 'text',
			            'instructions' => __('Skriv din meny-text här', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => '',
			            'prepend' => '',
			            'append' => '',
			            'maxlength' => '',
			        ),
			    ),
			    'location' => array(
			        0 => array(
			            0 => array(
			                'param' => 'post_type',
			                'operator' => '==',
			                'value' => 'page',
			            ),
			        )
			    ),
			    'menu_order' => 0,
			    'position' => 'normal',
			    'style' => 'default',
			    'label_placement' => 'top',
			    'instruction_placement' => 'label',
			    'hide_on_screen' => '',
			    'active' => 1,
			    'description' => '',
			));

		endif;
	
	}

	// Returnera navigation text
	function get_region_halland_acf_page_menu_text($id) {
		return get_field('name_1000145', $id);	
	}
	
	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_page_menu_text_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_acf_page_menu_text_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_acf_page_menu_text_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_acf_page_menu_text_deactivate');

?>