<?php

add_action('init', 'stm_motors_megamenu_init', 1);

function stm_motors_megamenu_init()
{

	$options = get_option('stm_post_types_options');

	$stm_megamenu_options = wp_parse_args($options, array(
		'stm_megamenu' => array(
			'title' => __('MegaMenu', 'stm_motors_megamenu'),
			'plural_title' => __('MegaMenu', 'stm_motors_megamenu'),
			'rewrite' => 'stm_megamenu',
		),
	));

	register_post_type('stm_megamenu', array(
		'labels' => array(
			'name' => $stm_megamenu_options['stm_megamenu']['plural_title'],
			'singular_name' => $stm_megamenu_options['stm_megamenu']['title'],
			'add_new' => __('Add New', 'stm_motors_megamenu'),
			'add_new_item' => __('Add New Item', 'stm_motors_megamenu'),
			'edit_item' => __('Edit Item', 'stm_motors_megamenu'),
			'new_item' => __('New Item', 'stm_motors_megamenu'),
			'all_items' => __('All Items', 'stm_motors_megamenu'),
			'view_item' => __('View Item', 'stm_motors_megamenu'),
			'search_items' => __('Search Items', 'stm_motors_megamenu'),
			'not_found' => __('No items found', 'stm_motors_megamenu'),
			'not_found_in_trash' => __('No items found in Trash', 'stm_motors_megamenu'),
			'parent_item_colon' => '',
			'menu_name' => __($stm_megamenu_options['stm_megamenu']['plural_title'], 'stm_motors_megamenu'),
		),
		'menu_icon' => 'dashicons-excerpt-view',
		'show_in_nav_menus' => true,
		'supports' => array('title', 'editor'),
		'rewrite' => array('slug' => $stm_megamenu_options['stm_megamenu']['rewrite']),
		'has_archive' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'taxonomies' => array(),
	));
}

function stm_mm_post_type_labels($name, $plural)
{
	$name = sanitize_text_field($name);
	$plural = sanitize_text_field($plural);
	$labels = array(
		'name'               => sprintf(__('%s', 'stm_motors_megamenu'), $plural),
		'singular_name'      => sprintf(__('%s', 'stm_motors_megamenu'), $name),
		'menu_name'          => sprintf(__('%s', 'stm_motors_megamenu'), $plural),
		'name_admin_bar'     => sprintf(__('%s', 'stm_motors_megamenu'), $name),
		'add_new'            => __('Add New', 'stm_motors_megamenu'),
		'add_new_item'       => sprintf(__('Add new %s', 'stm_motors_megamenu'), $name),
		'new_item'           => sprintf(__('New %s', 'stm_motors_megamenu'), $name),
		'edit_item'          => sprintf(__('Edit %s', 'stm_motors_megamenu'), $name),
		'view_item'          => sprintf(__('View %s', 'stm_motors_megamenu'), $name),
		'all_items'          => sprintf(__('All %s', 'stm_motors_megamenu'), $plural),
		'search_items'       => sprintf(__('Search %s', 'stm_motors_megamenu'), $plural),
		'parent_item_colon'  => sprintf(__('Parent %s', 'stm_motors_megamenu'), $plural),
		'not_found'          => sprintf(__('No %s found', 'stm_motors_megamenu'), $plural),
		'not_found_in_trash' => sprintf(__('No %s found in Trash.', 'stm_motors_megamenu'), $plural)
	);

	return apply_filters('stm_motors_megamenu_post_type_labels', $labels);
}

