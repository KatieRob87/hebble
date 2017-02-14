<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hebble_Hydraulics
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt=""></a>
				</div>
				<div class="col-sm-8">
					<ul class="list list--inline">
						<li><?php the_field('phone_number', 'option'); ?></li>
						<li><a href="mailto: <?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
						<li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
					</ul>
					<?php wp_nav_menu(array(
						'theme_location' => 'primary_menu',
						'menu_class' => 'list list--inline'
					)) ?>
					
				</div>
			</div>
		</div>
		<!--       <div class="menu-toggle">
			<h2>Navigation Menu</h2>
		</div> -->
	</header>
	<!-- /.header -->
	<div id="content" class="site-content">