<?php
class isisCustomPostTypes {

	public function __construct() {

		add_action( 'init', array($this,'isis_products'));

		
    }


    function isis_products()
	{
		// Register custom post types
		register_post_type(	'isis-product', 
			array(	'label' 			=> __('Isis Product'),
					'labels' 			=> array(	'name' 					=> __('Isis Products'),
													'singular_name' 		=> __('Isis Product'),
													'add_new' 				=> __('Add New'),
													'add_new_item' 			=> __('Add New Isis Product'),
													'edit' 					=> __('Edit'),
													'edit_item' 			=> __('Edit Isis Product'),
													'new_item' 				=> __('New Isis Product'),
													'view_item'				=> __('View Isis Product'),
													'search_items' 			=> __('Search Isis Products'),
													'not_found' 			=> __('No Isis products found'),
													'not_found_in_trash' 	=> __('No Isis products found in trash')	),
					'public' 			=> true,
					'can_export'		=> true,
					'show_ui' 			=> true, // UI in admin panel
					'_builtin' 			=> false, // It's a custom post type, not built in
					'_edit_link' 		=> 'post.php?post=%d',
					'capability_type' 	=> 'post',
					'menu_icon' 		=> 'dashicons-awards',
					'hierarchical' 		=> true,
					'has_archive' 		=> false,
					'rewrite' 			=> array(	"slug" => "isis-product"	), // Permalinks
					'query_var' 		=> "isis product", // This goes to the WP_Query schema
					'supports' 			=> array(	'title',																
													'editor',
													'thumbnail',
													'page-attributes'
													),
					'show_in_nav_menus'	=> true ,
					'taxonomies'		=> array(	

													)
				)
			);			
	}

	
	
}
global $cpt; 
$cpt = new isisCustomPostTypes(); 
