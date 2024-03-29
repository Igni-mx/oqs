<?php
	/**
	 * The Header for our theme.
	 *
	 * Displays all of the <head> section and everything up till <div id="content">
	 *
	 * @package thim
	 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>">

	<?php wp_head(); ?>
	
	<!-- Igni Scripts-->
	<script src="http://reservacion.ojosquesienten.org/site/js/jquery.validate.min.js"></script>
    <script src="http://www.ojosquesienten.com/js/init.js"></script>
    <!-- Engage Web Tracking Code -->


<!-- Silverpoop Tracking -->
<meta name="com.silverpop.brandeddomains" content="www.pages05.net,dev.goigni.com,goigni.com,goigni.net,ignisa.mkt4247.com,ojosquesienten.com,pages05.net" />



<script src="http://contentz.mkt51.net/lp/static/js/iMAWebCookie.js?572b8dd-132cb581cc5-c6f842ded9e6d11c5ffebd715e129037&h=www.pages05.net" type="text/javascript"></script>

</head>
<body <?php body_class(); ?>>

	<?php do_action('thim_loading'); ?>
	
	<?php get_template_part( 'inc/header/main-menu' ); ?>
	
	<div id="wrapper-container" class="wrapper-container">
		<div class="content-pusher <?php thim_site_layout() ?>">

				<?php if ( !(is_page() && basename(get_page_template()) == 'comingsoon.php') ) : ?>
					<!-- Aquí va el logo -->		
					<?php do_action('thim_header_toolbar'); ?>

					<?php do_action('thim_header_site'); ?>

				<?php endif; ?>
				<div id="main-content">