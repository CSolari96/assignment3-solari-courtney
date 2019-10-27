<?php

	/*==============================================

		Add stylesheet and JS files

	===============================================*/

	function custom_theme_scripts() {

		// Bootstrap Integration
		wp_enqueue_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css");

		// Main CSS
		wp_enqueue_style("main-styles", get_stylesheet_uri());

		// JavaScript
		wp_enqueue_script("bootstrap-js", get_template_directory_uri() . "/js/bootstrap.min.js");
	}

	add_action("wp_enqueue_scripts", "custom_theme_scripts");

	/*==============================================

		Custom Header Logo

	===============================================*/

	$custom_image_header = array(
		"width" => 227,
		"height" => 74,
		"uploads" => true,
	);

	add_theme_support("custom-header", $custom_image_header);

	/*==============================================

		Add featured image capability

	===============================================*/

	add_theme_support("post-thumbnails");

	/*==============================================

		Add menus to theme

	===============================================*/

	function register_my_menus() {

		register_nav_menus( array(
			"top-menu" => ("Top Menu")
		));
	}

	add_action("init", "register_my_menus");

	/*==============================================

		Add widget areas to theme

	===============================================*/

	function blank_widgets_init() {

		register_sidebar( array(
			"name"			=>	("Hero Image"),
			"id"			=>	"hero-image",
			"description"	=>	"Hero image on home page",
			"before_widget"	=>	"<div class='widget-hero-image'>",
			"after_widget"	=>	"</div>",
			"before_title"	=>	"<h3 class='hero-image-widget-title'>",
			"after_title"	=>	"</h3>"
		));

		register_sidebar( array(
			"name" 			=> 	("Bottom left home page"),
			"id" 			=> 	"bottom-left-home-page",
			"description" 	=> 	"Bottom left section on the home page",
			"before_widget" => 	"<div class='widget-bottom-left'>",
			"after_widget" 	=> 	"</div>",
			"before_title" 	=> 	"<h3 class='bottom-left-widget-title'>",
			"after_title" 	=> 	"</h3>"
		));

		register_sidebar( array(
			"name" 			=> 	("Left Footer"),
			"id" 			=> 	"left-footer",
			"description" 	=> 	"Left footer area for template",
			"before_widget" => 	"<div class='widget-left-footer'>",
			"after_widget" 	=> 	"</div>",
			"before_title" 	=> 	"<h4 class='left-footer-widget-title'>",
			"after_title" 	=> 	"</h4>"
		));

		register_sidebar( array(
			"name" 			=> 	("Middle Footer"),
			"id" 			=> 	"middle-footer",
			"description" 	=> 	"Middle footer area for template",
			"before_widget" => 	"<div class='widget-middle-footer'>",
			"after_widget" 	=> 	"</div>",
			"before_title" 	=> 	"<h4 class='middle-footer-widget-title'>",
			"after_title" 	=> 	"</h4>"
		));

		register_sidebar( array(
			"name" 			=> 	("Right Footer"),
			"id" 			=> 	"right-footer",
			"description" 	=> 	"Right footer area for template",
			"before_widget" => 	"<div class='widget-right-footer'>",
			"after_widget" 	=> 	"</div>",
			"before_title" 	=> 	"<h4 class='right-footer-widget-title'>",
			"after_title" 	=> 	"</h4>"
		));

		register_sidebar( array(
			"name" 			=> 	("Right Sidebar"),
			"id" 			=> 	"right-sidebar",
			"description" 	=> 	"Right sidebar area for template",
			"before_widget" => 	"<div class='widget-right-sidebar'>",
			"after_widget" 	=> 	"</div>",
			"before_title" 	=> 	"<h3 class='right-sidebar-widget-title'>",
			"after_title" 	=> 	"</h3>"
		));

		register_sidebar( array(
			"name" 			=> 	("404 Image"),
			"id" 			=> 	"404-image",
			"description" 	=> 	"Image area for 404 template",
			"before_widget" => 	"<div class='widget-404-image'>",
			"after_widget" 	=> 	"</div>",
			"before_title" 	=> 	"<h3 class='404-image-widget-title'>",
			"after_title" 	=> 	"</h3>"
		));
	}

	add_action("widgets_init", "blank_widgets_init");
?>