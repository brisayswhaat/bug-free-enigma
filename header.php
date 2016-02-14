<?php
/**
  * The header for our theme
  * This is the template that displays all of the <head> section and everything up until <div id="content">
  *
  * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
  * @package bug-free-enigma
  */

  ?> <!DOCTYPE html>
  <html <?php language_attributes(); ?>
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

	  <?php wp_head(); ?>
  </head>
