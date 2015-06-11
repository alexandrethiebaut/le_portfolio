<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php echo bloginfo('name'); echo ' &#8226; '; echo bloginfo('description'); ?></title>

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.png" type="image/png">


		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
		
	<?php do_action( 'foundationpress_layout_start' ); ?>
	
	<a class="menu-icon" id="menu-off-canvas" href="#"><span class="icon-menu"></span></a>

	<?php get_template_part( 'parts/menu-overlay' ); ?>


<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
