<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<?php global $tpb_options; ?>
		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/manifest.json">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#222222">
		<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/browserconfig.xml">
		<meta name="theme-color" content="#222222">

		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300' rel='stylesheet' type='text/css'>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<script src="//use.typekit.net/qht7rmr.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>


		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>
		<header class="header">

	      <nav role="navigation">
	        <div class="navbar">
				<div class="container">
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->

				    <div class="navbar-header">
						<?php if ( ( '' != $tpb_options['site_logo']['url'] ) ) {
							$logo_url = $tpb_options['site_logo']['url'];
							$logo_compact_url = $tpb_options['site_compact_logo']['url'];
							$site_url = get_bloginfo('url');
							$site_name = get_bloginfo('name');
							$site_description = get_bloginfo('description');
						}// End IF Statement */

						if ( is_front_page() ) {
							if ( is_ssl() ) $logo_url = str_replace( 'http://', 'https://', $logo_url );
							echo '<a class="logo" href="' . esc_url( $site_url ) . '" title="' . esc_attr( $site_description ) . '"><img class="img-responsive" src="'.$logo_url.'" alt="'.esc_attr($site_name).'"/></a>' . "\n";
						} else {
							if ( is_ssl() ) $logo_url = str_replace( 'http://', 'https://', $logo_url );
							echo '<a class="logo" href="' . esc_url( $site_url ) . '" title="' . esc_attr( $site_description ) . '"><img class="img-responsive" src="'.$logo_compact_url.'" alt="'.esc_attr($site_name).'"/></a>' . "\n";
						} 

						?>
						 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<i class="fa fa-bars"></i>
							Menu
						</button>
				    </div>

				    <div class="navbar-collapse collapse navbar-responsive-collapse">
				      
						<?php secondary_nav('secondary-nav','nav_secondary nav navbar-nav navbar-right'); ?>
				     	<?php bones_main_nav(); ?>

				    </div>
						    

	        </div> 
	        
	      </nav>

		</header> <?php // end header ?>

	    