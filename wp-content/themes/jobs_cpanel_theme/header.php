<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jobs_cpanel_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<div class="header-wrapper">
			<div class="jobs-container">
				<header id="masthead" class="site-header">
					<div class="site-branding">
						<a href="/" class="custom-logo-link" rel="home" aria-current="page"><img width="1" height="1" src="<?php echo get_template_directory_uri() ?>/assets/images/logo-cpanel.png" class="custom-logo" alt="logo"></a>
						<?php
						//the_custom_logo();
						?>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="<?php echo get_template_directory_uri() ?>/assets/images/hamburger_cpanel.svg" alt=""></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->

				</header>
			</div>
		</div>