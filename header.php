<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bug-free-enigma
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Bri Piccari | Designer & Front End Developer</title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<script src="https://use.typekit.net/swx1oyy.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<nav id="navigation" class="main-navigation" role="navigation">
			<ul>
				<li>
					<a href="/" title="Go Home"  class="main-navigation-link"><i class="fa fa-home"></i></a>
				</li>
				<li>
					<a href="/words" title="Blog" class="main-navigation-link">/ words</a>
				</li>
			</ul>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
