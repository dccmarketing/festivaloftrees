<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Festival of Trees
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php

wp_head();

?></head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'festival-of-trees' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap wrap">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo festival_of_trees_get_svg( 'logo2' ); ?></a>
			</div><!-- .site-branding --><?php

			get_template_part( 'menus/menu', 'social' );
			get_template_part( 'menus/menu', 'header' );

		?></div><!-- .header_wrap -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'festival-of-trees' ); ?></button><?php

				wp_nav_menu( array( 'theme_location' => 'primary' ) );

		?></nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="content-wrap wrap">