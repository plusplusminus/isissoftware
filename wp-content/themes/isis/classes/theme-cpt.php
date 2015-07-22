<?php
class isisCustomPostTypes {

	public function __construct() {

		add_action( 'init', array($this,'isis_products'));

		
    }


    function isis_products()
	{

		$result = add_role( 'client', __('Client' ),
 
			array(
			 
					'read' => true, // true allows this capability

					 
				)
		 
		);
		
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
					'query_var' 		=> "isis-product", // This goes to the WP_Query schema
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

		register_post_type(	'industry', 
			array(	'label' 			=> __('Industries'),
					'labels' 			=> array(	'name' 					=> __('Industries'),
													'singular_name' 		=> __('Industry'),
													'add_new' 				=> __('Add New'),
													'add_new_item' 			=> __('Add New Industry'),
													'edit' 					=> __('Edit'),
													'edit_item' 			=> __('Edit Industry'),
													'new_item' 				=> __('New Industry'),
													'view_item'				=> __('View Industry'),
													'search_items' 			=> __('Search Industries'),
													'not_found' 			=> __('No Industry found'),
													'not_found_in_trash' 	=> __('No Industry found in trash')	),
					'public' 			=> true,
					'can_export'		=> true,
					'show_ui' 			=> true, // UI in admin panel
					'_builtin' 			=> false, // It's a custom post type, not built in
					'_edit_link' 		=> 'post.php?post=%d',
					'capability_type' 	=> 'post',
					'menu_icon' 		=> 'dashicons-awards',
					'hierarchical' 		=> true,
					'has_archive' 		=> false,
					'rewrite' 			=> array(	"slug" => "industry"	), // Permalinks
					'query_var' 		=> "industry", // This goes to the WP_Query schema
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

		register_post_type(	'videos', 
			array(	
				'label' 			=> __('Videos'),
				'labels' 			=> array(	'name' 					=> __('Videos'),
												'singular_name' 		=> __('Video'),
												'add_new' 				=> __('Add New'),
												'add_new_item' 			=> __('Add New Video'),
												'edit' 					=> __('Edit'),
												'edit_item' 			=> __('Edit Video'),
												'new_item' 				=> __('New Video'),
												'view_item'				=> __('View Video'),
												'search_items' 			=> __('Search Video'),
												'not_found' 			=> __('No Video found'),
												'not_found_in_trash' 	=> __('No Video found in trash')	),
				'public' 			=> true,
				'can_export'		=> true,
				'show_ui' 			=> true, // UI in admin panel
				'_builtin' 			=> false, // It's a custom post type, not built in
				'_edit_link' 		=> 'post.php?post=%d',
				'capability_type' 	=> 'post',
				'menu_icon' 		=> 'dashicons-video',
				'hierarchical' 		=> false,
				'has_archive' 		=> true,
				'rewrite' 			=> array(	"slug" => "video"	), // Permalinks
				'query_var' 		=> "video", // This goes to the WP_Query schema
				'supports' 			=> array(	'title',																
												'editor',
												'thumbnail'
												),
				'show_in_nav_menus'	=> false ,
				'taxonomies'		=> array('post_tag')
			)
		);	

		register_taxonomy(	"type", 
			array(	"videos"	), 
			array (	"hierarchical" 		=> true, 
					"label" 			=> "Types", 
					'labels' 			=> array(	'name' 				=> __('Types'),
													'singular_name' 	=> __('Type'),
													'search_items' 		=> __('Search Type'),
													'popular_items' 	=> __('Popular Types'),
													'all_items' 		=> __('All Types'),
													'parent_item' 		=> __('Parent Type'),
													'parent_item_colon' => __('Parent Type:'),
													'edit_item' 		=> __('Edit Type'),
													'update_item'		=> __('Update Type'),
													'add_new_item' 		=> __('Add New Type'),
													'new_item_name' 	=> __('New Type Name')	), 
					'public' 			=> true,
					'show_ui' 			=> true,
					"rewrite" 			=> array('slug' => 'type', 'hierarchical' => false)	
				)
		);	
	}

	
	
}
global $cpt; 
$cpt = new isisCustomPostTypes(); 
