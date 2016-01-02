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
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:700,400,900,400italic,700italic' rel='stylesheet' type='text/css'>
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-48883683-1', 'bripiccari.me');
	ga('send', 'pageview');
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<nav id="navigation" class="main-navigation" role="navigation">
			<ul>
				<li>
					<a href="/about" title="About Bri" class="main-navigation-link">about</a>
				</li>
				<li>
					<a href="http://words.bripiccari.me" title="Blog" class="main-navigation-link">words</a>
				</li>
				<li>
					<a href="/contact" title="Contact Bri" class="main-navigation-link">contact</a>
				</li>
			</ul>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
