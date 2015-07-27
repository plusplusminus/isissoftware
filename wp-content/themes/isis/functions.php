<?php

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/

require('classes/theme-cpt.php');


add_action( 'wp_enqueue_scripts', 'ppm_scripts_and_styles', 999 );

function ppm_scripts_and_styles() {
    global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    if (!is_admin()) {
        
        wp_register_script( 'packery', get_stylesheet_directory_uri() . '/library/vendors/packery/dist/packery.pkgd.min.js', array('jquery'), '1.0.8',true);
     
        wp_register_script( 'third-party', get_stylesheet_directory_uri() . '/library/js/third-party.js', array('jquery'), '1.0.8',true);
        
        wp_register_script( 'ppm', get_stylesheet_directory_uri() . '/library/js/ppm.js', array('third-party','packery','jquery'), '1.0.49',true);

        wp_enqueue_script('packery');

        wp_localize_script( 'ppm', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        

        wp_enqueue_script('ppm');

      
    }
}

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="section_widget--heading"><h3 class="section_widget--title">',
    'after_title'   => '</h3></div>',
    ) );
}

add_filter('redux/options/tpb_options/sections', 'child_sections');
function child_sections($sections){
    //$sections = array();
    $sections[] = array(
        'icon'          => 'ok',
        'icon_class'    => 'fa fa-gears',
        'title'         => __('Theme Options', 'peadig-framework'),
        'desc'          => __('<p class="description">Theme modifications</p>', 'ppm'),
        'fields' => array(
                array(
                        'id'=>'site_logo',
                        'type' => 'media', 
                        'url'=> true,
                        'title' => __('Site Logo', 'ppm'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc'=> __('Select main logo from media gallery', 'ppm'),
                        'default'=>array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png'),
                        ),
                array(
                        'id'=>'site_compact_logo',
                        'type' => 'media', 
                        'url'=> true,
                        'title' => __('Site Logo - Compact', 'ppm'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc'=> __('Select compact logo from media gallery', 'ppm'),
                        'default'=>array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png'),
                        ),
                array(
                        'id'=>'footer_logo',
                        'type' => 'media', 
                        'url'=> true,
                        'title' => __('Site Footer Logo', 'ppm'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc'=> __('Select footer logo from media gallery', 'ppm'),
                        'default'=>array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png'),
                        ),
                array(
                        'id'=>'work_image',
                        'type' => 'media', 
                        'url'=> true,
                        'title' => __('Work Section Image', 'ppm'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc'=> __('Select work section image from media gallery', 'ppm'),
                        'default'=>array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png'),
                        ),
                array(
                        'id'=>'footer_legal',
                        'type' => 'textarea',
                        'title' => __('Legal Info', 'redux-framework-demo'),
                        'desc' => __('Enter your legal information', 'redux-framework-demo'),
                        ), 
                array(
                        'id'=>'products_extra',
                        'type' => 'textarea',
                        'title' => __('Products Extra Info', 'redux-framework-demo'),
                        'desc' => __('Enter your the products extra information', 'redux-framework-demo'),
                        ), 
 
        )
    );


     $sections[] = array(
        'icon'          => 'ok',
        'icon_class'    => 'fa fa-heart',
        'title'         => __('Social Profiles', 'ppm-framework'),
        'desc'          => __('<p class="description">Social Network URLS</p>', 'ppm'),
        'fields' => array(
            array(
                        'id'=>'weddingwire_url',
                        'type' => 'text',
                        'title' => __('Wedding Wire', 'redux-framework-demo'),
                        'desc' => __('Enter your wedding wire url', 'redux-framework-demo'),
                        ),  
            array(
                        'id'=>'twitter_url',
                        'type' => 'text',
                        'title' => __('Twitter', 'redux-framework-demo'),
                        'desc' => __('Enter your twitter url', 'redux-framework-demo'),
                        ),  
            array(
                        'id'=>'facebook_url',
                        'type' => 'text',
                        'title' => __('Facebook', 'redux-framework-demo'),
                        'desc' => __('Enter your Facebook URL', 'redux-framework-demo'),
                        ),  
            array(
                        'id'=>'pinterest_url',
                        'type' => 'text',
                        'title' => __('pinterest', 'redux-framework-demo'),
                        'desc' => __('Enter your pinterest URL', 'redux-framework-demo'),
                        ),  
            array(
                        'id'=>'instagram_url',
                        'type' => 'text',
                        'title' => __('Instagram', 'redux-framework-demo'),
                        'desc' => __('Enter your Instagram URL', 'redux-framework-demo'),
                        ),  
        )
    );



    

    return $sections;
}

function sergio($str) {
    echo '<pre>';
    print_r($str);
    echo '</pre>';
}

register_nav_menus(
    array(
        'secondary-nav' => __( 'Secondary Navigation', 'bonestheme' ),   // main nav in header
        'footer-nav' => __( 'Footer Nav', 'bonestheme' ),   // main nav in header
        'products-nav' => __( 'Products Nav', 'bonestheme' ),   // main nav in header
        'industry-nav' => __( 'Industry Nav', 'bonestheme' ),   // main nav in header
    )
);

function secondary_nav($nav = 'secondary-nav',$class='nav_secondary') {
    // display the wp3 menu if available
    wp_nav_menu(array(
        'container' => false,                                       // remove nav container
        'container_class' => 'menu clearfix',                       // class of container (should you choose to use it)
        'menu' => __( 'The Secondary Menu', 'bonestheme' ),              // nav name
        'menu_class' => $class,              // adding custom nav class
        'theme_location' => $nav,                             // where it's located in the theme
        'before' => '',                                             // before the menu
        'after' => '',                                            // after the menu
        'link_before' => '',                                      // before each link
        'link_after' => '',                                       // after each link
        'depth' => 2,                                             // limit the depth of the nav
        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',  // fallback
        'walker' => new wp_bootstrap_navwalker()                    // for bootstrap nav
    ));
} /* end bones main nav */

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

if ( ! function_exists( 'page_menu' ) ) {
    function page_menu ( $menu_name ) {
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $count = 0;
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);

            $menu_list = '<ul class="page_menu">';
            
            foreach ( (array) $menu_items as $key => $menu_item ) {
                $count++;
                $menu_list .= '<li class="page_menu--item"><a href="'.get_permalink($menu_item->object_id).'" class="img-menu-container">'.$menu_item->title.'</a></li>';
            }

            $menu_list .= '</ul>';
        } else {
            $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
        }
        // $menu_list now ready to output
        echo $menu_list;
    }
}


add_action( 'cmb2_init', 'campaign_register_metabox');

function campaign_register_metabox() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_ppm_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    
    $post_meta = new_cmb2_box( array(
        'id'            => $prefix . 'post_metabox',
        'title'         => __( 'Post Meta', 'cmb2' ),
        'object_types'  => array( 'page'), // Post type
        'show_on' => array('key'=>'child_of','value'=>array(4)),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );

    $menus = get_registered_nav_menus();

    foreach ( $menus as $location => $description ) {
        $options[$location] = $description;
    }

    $post_meta->add_field( array(
        'name'             => 'Menu Select',
        'desc'             => 'Select a menu to show',
        'id'               => $prefix.'menu_select',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'custom',
        'options'          => $options,
    ) );

    $post_meta->add_field( array(
        'name'             => 'Section Class',
        'desc'             => 'Enter section class',
        'id'               => $prefix.'section_class',
        'type'             => 'text',
        'default'          => 'col-md-6',
    ) );

    $post_meta->add_field( array(
        'name'             => 'View More Link',
        'desc'             => 'Enter view more link',
        'id'               => $prefix.'section_link',
        'type'             => 'text',
    ) );

    $products_meta = new_cmb2_box( array(
        'id'            => $prefix . 'products_metabox',
        'title'         => __( 'Products Meta', 'cmb2' ),
        'object_types'  => array( 'isis-product'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );

    $products_meta->add_field( array(
        'name'             => 'Product Subtitle',
        'desc'             => 'Enter the product subtitle',
        'id'               => $prefix.'product_subtitle',
        'type'             => 'text'
    ) );

    $industries_meta = new_cmb2_box( array(
        'id'            => $prefix . 'industries_metabox',
        'title'         => __( 'Industries Meta', 'cmb2' ),
        'object_types'  => array( 'industry'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );

    $industries_meta->add_field( array(
        'name'             => 'Industry Subtitle',
        'desc'             => 'Enter the industry subtitle',
        'id'               => $prefix.'industry_subtitle',
        'type'             => 'text'
    ) );

    $support_meta = new_cmb2_box( array(
        'id'            => $prefix . 'support_metabox',
        'title'         => __( 'Support Meta', 'cmb2' ),
        'object_types'  => array( 'page'), // Post type
        'show_on' => array('key'=>'child_of','value'=>array(54)),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );


    $support_meta->add_field( array(
        'name'             => 'Support Resources Title',
        'desc'             => 'Enter section title',
        'id'               => $prefix.'resource_title',
        'type'             => 'text',
    ) );

    $support_meta->add_field( array(
        'name'             => 'Support Resources Intro',
        'desc'             => 'Enter section intro',
        'id'               => $prefix.'resource_intro',
        'type'             => 'textarea',
    ) );

    $support_meta->add_field( array(
        'name'             => 'Support Premium Resources Title',
        'desc'             => 'Enter section title',
        'id'               => $prefix.'resource_premium_title',
        'type'             => 'text',
    ) );

    $support_meta->add_field( array(
        'name'             => 'Support Premium Resources Intro',
        'desc'             => 'Enter section intro',
        'id'               => $prefix.'resource_premium_intro',
        'type'             => 'textarea',
    ) );

    $video_meta = new_cmb2_box( array(
        'id'            => $prefix . 'video_metabox',
        'title'         => __( 'Video Meta', 'cmb2' ),
        'object_types'  => array( 'videos'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );


    $video_meta->add_field( array(
        'name'             => 'Video Description',
        'desc'             => 'Enter text to introduce video',
        'id'               => $prefix.'video_description',
        'type'             => 'textarea',
    ) );

    $video_meta->add_field( array(
        'name'             => 'Video Duration',
        'desc'             => 'Enter enter video duration (2:01s)',
        'id'               => $prefix.'video_duration',
        'type'             => 'text',
    ) );

    $header_meta = new_cmb2_box( array(
        'id'            => $prefix . 'header_metabox',
        'title'         => __( 'Header Meta', 'cmb2' ),
        'object_types'  => array( 'page'), // Post type
        'context'       => 'side',
        'priority'      => 'low',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );


    $header_meta->add_field( array(
        'name'             => 'Button Text',
        'desc'             => 'Enter section class',
        'id'               => $prefix.'header_text',
        'type'             => 'text',
    ) );

    $header_meta->add_field( array(
        'name'             => 'Button Link',
        'desc'             => 'Enter button link',
        'id'               => $prefix.'header_link',
        'type'             => 'text',
    ) );


}

function be_metabox_show_on_child_of( $display, $meta_box ) {
    if ( ! isset( $meta_box['show_on']['key'], $meta_box['show_on']['value'] ) ) {
        return $display;
    }

    if ( 'child_of' !== $meta_box['show_on']['key'] ) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = $_POST['post_ID'];
    }

    if ( ! $post_id ) {
        return $display;
    }

    $pageids = array();
    foreach( (array) $meta_box['show_on']['value'] as $parent_id ) {
        $pages = get_pages( array(
            'child_of'    => $parent_id,
            'post_status' => 'publish,draft,pending',
        ) );

        if ( $pages ) {
            foreach( $pages as $page ){
                $pageids[] = $page->ID;
            }
        }
    }
    $pageids_unique = array_unique( $pageids );

    return in_array( $post_id, $pageids_unique );
}
add_filter( 'cmb2_show_on', 'be_metabox_show_on_child_of', 10, 2 );

?>