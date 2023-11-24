<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewsBlog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>
</head>

<body>
	<!-- header -->
	<header class="w3l-header">
		<div class="container">
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-sm-3 px-0">
				<a class="navbar-brand" href="<?php echo home_url(); ?>">
					<span class="fa fa-newspaper-o"></span><?php bloginfo('name'); ?></a>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->


				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<nav class="mx-auto">
						<?php get_search_form(); ?>
					</nav>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'     => 'ul',
							'menu_class' => 'navbar-nav',
							'walker' => new Custom_Walker_Nav_Menu(),
						)
					);

					class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
					{

						private $top_level = true; //made a variable to wrap submenus a tag with div

						function start_lvl(&$output,  $depth = 0, $args = null)
						{

							$output .= '<ul>';
						}

						function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
						{

							if ($depth > 0) {
							} else {
								$output .= '<li class="nav-item dropdown';
								// Check if $item->classes is an array before using in_array
								if (is_array($item->classes) && in_array('current-menu-item', $item->classes)) {
									$output .= ' active';
								}
							}




							if ($depth > 0) {
							} else {
								$output .= '">';
							}

							if ($depth > 0) {
								// We are at the top level
								if ($this->top_level) {
									// Wrap all top-level items with a single <div>
									$output .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
									$this->top_level = false; // Mark that we wrapped the top-level items
								}
							}

							if ($depth > 0) {

								$output .= '<a href="' . esc_url($item->url) . '"';
							} else {
								$output .= '<a href="' . esc_url($item->url) . '"';
							}

							$output .= ' class="nav-link';

							if ($depth > 0) {
								$output .= ' dropdown-item';
							}

							$has_children = in_array('menu-item-has-children', $item->classes);
							if ($has_children) {
								$output .= ' dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
								$output .= esc_html($item->title);
								$output .= '<span class="fa fa-angle-down"></span>';
							} else {
								$output .= '">';
								$output .= esc_html($item->title);
							}

							$output .= '</a>';
						}
						function end_el(&$output, $item, $depth = 0, $args = null, $id = 0)
						{
							if ($depth > 0) {
							} else {
								$output .= '</li>';
							}
						}
						function end_lvl(&$output, $depth = 0, $args = null)
						{
							$output .= '</ul>';
						}
					}
					?>
				</div>
				<!-- toggle switch for light and dark theme -->
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
				<!-- //toggle switch for light and dark theme -->
		</div>
		</nav>
		<!--//nav-->
	</header>
	<!-- //header -->