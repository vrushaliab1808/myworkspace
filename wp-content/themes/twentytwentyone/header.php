<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- template assests start-->
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Required meta tags for SEO -->
	<meta name="description" content="designcafe for interior design">
	<meta name="keyword" content="designcafe,interior">
	<meta name="author" content="designcafe">
	<title>Design Cafe </title>
	<!-- Required canonical tag for SEO -->
	<link rel="canonical" href="index.html">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/template-assets/images/logo/favicon.ico"> 
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template-assets/css/bootstrap.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template-assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template-assets/css/animate.min.css"> 
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template-assets/css/theme.css"> 
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template-assets/css/style.css"> 
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template-assets/css/skin/skin.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template-assets/css/responsive.css">
	<!-- template assests end -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- Header -->
    <header id="main-header" class="main-header">
		<nav id="main-navbar" class="navbar_sticky fs-navbar navbar-default fs-navbar-transparent navbar navbar-expand-lg">
		   <div class="container"><!-- Container -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				    <img height="30px" width="30px" src="<?php echo get_stylesheet_directory_uri(); ?>/template-assets/images/logo/menu.png">
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				    <a class="navbar-brand logo" href="#."><img src="<?php echo get_stylesheet_directory_uri(); ?>/template-assets/images/logo/logo.png"></a>
				    <ul class="top-bar-contact">
		                <li>
		                 	<a href="tel:+91 8068367401">+91 8068367401</a>
		                </li>
		    
		            </ul>
				    <a class="theme-button theme-button-default btn-effect1" data-toggle="modal" data-target="#myModal">Book An Appointment</a>
				</div>
	        </div>
		</nav>
		<!-- /.fs-nav-bar -->
    </header>
    <!-- ./Header -->
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a> -->

	<?php //get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
