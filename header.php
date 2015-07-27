<?php ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<!-- Start Favicon -->
	<?php if( get_field('field_552f91819f538', 'option') ) { ?>
		<link rel="shortcut icon" href="<?php echo get_field('field_552f91819f538', 'option'); ?>" type="image/x-icon">
		<link rel="icon" href="<?php echo get_field('field_552f91819f538', 'option'); ?>" type="image/x-icon">
	<?php } else { ?>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon-webbird.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon-webbird.ico" type="image/x-icon">
	<?php } ?>
	<!-- End Favicon -->
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
	<!-- Start Google Site Verification Code -->
	<?php if( get_field('field_54fc5f58c3898', 'option') ) :
		$google_html_tag_id = get_field('field_54fc5f58c3898', 'option');
		echo '<meta name="google-site-verification" content="' . $google_html_tag_id . '" />';
	endif; ?>
	<!-- End Google Site Verification Code -->
	
	<!-- Start Global Code -->
	<?php if( get_field('field_552fa3edb21a1', 'option') === 'active' ) :
		echo get_field('field_552fa43fb21a2', 'option');
	endif; ?>
	<!-- End Global Code -->
	
	<!-- Start Page Code -->
	<?php if( get_field('field_552fa3edb21a1') === 'active' ) :
		echo get_field('field_552fa43fb21a2');
	endif; ?>
	<!-- End Page Code -->
	
	<!-- Start Google Corporate Contacts Code -->
	<?php if( is_front_page() ) : ?>
		<?php the_field('field_552fa9010a4f8', 'option'); ?>
	<?php endif; ?>
	
	<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/styles.less" />
	<script>
	  less = {
	    env: "development",
	    async: false,
	    fileAsync: false,
	    poll: 1000,
	    functions: {},
	    dumpLineNumbers: "comments",
	    relativeUrls: false,
	    rootpath: ":/a.com/"
	  };
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/less.min.js" type="text/javascript"></script>
		
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>
	
<div id="header">
	<div class="header-cntr1">
		<a href="<?php echo get_home_url(); ?>">
			<div class="logo">
				<div class="name">
					Web<span>Bird</span>
				</div>
			</div>
		</a>
		<nav>
			<?php {
				$mnav = array(
					'theme_location'  => 'header-mnav',
					'menu'            => '',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'mnav',
					'menu_id'         => 'mnav-desktop',
					'echo'            => true,
					'fallback_cb'     => '',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu( $mnav ); }
			?>
		</nav>
	</div>
</div>