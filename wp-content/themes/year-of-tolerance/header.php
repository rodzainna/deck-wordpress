<?php
/**
 * The header for our theme
 *
 * @package year-of-tolerance
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="revisit-after" content="3 days">
	<meta name="robots" content="index, follow">
	<meta name="baseurl" content="<?php echo home_url(); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/public/images/favicon.ico" type="image/x-icon" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="app">
	<header class="site-header">
		
	</header>

	<div class="site-content">
