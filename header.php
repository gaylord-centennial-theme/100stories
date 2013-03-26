<?php
/**
 * This template, header.php, displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Hundred_Stories
 * @since Hundred Stories 1.0
 */
?>
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
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
  	$(document).ready(function(){
			var viewportWidth=jQuery(window).width();
			$(".menu-toggle").css("cursor","pointer");			$("#menu-centennial-menu").hide();
			$(".menu-toggle").click(function(){
					$("#menu-centennial-menu").slideToggle();
			});
		});
</script>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
        <hgroup id="standard">
			<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
        </hgroup><!-- #standard -->
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <h3 class="menu-toggle" title="Menu">><?php _e( 'Menu', 'hundredstories' ); ?></h3>
            <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'hundredstories' ); ?>"><?php _e( 'Skip to content', 'hundredstories' ); ?></a>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
	<div id="main" class="wrapper">
