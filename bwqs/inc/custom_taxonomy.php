<?php


function wp_quickstart_theme_custom_taxonomy() {
	register_taxonomy(
		'service_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'service_items',                  //post type name
		array(
			'hierarchical'          => true,
			'label'                         => 'Service Category',  //Display name
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'service-category', // This controls the base slug that will display before each term
				'with_front'    => true // Don't display the category base before
				)
			)
	);
}
add_action( 'init', 'wp_quickstart_theme_custom_taxonomy');   








?>