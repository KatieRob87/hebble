<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hebble_Hydraulics
 */




	get_template_part('partials/partial', 'jumbotron');

	get_template_part('partials/partial', 'intro');

	if (is_page(7)) {
		get_template_part('partials/partial', 'timeline');
	}

	if (is_child(9) || is_page(98)) {
		get_template_part('partials/partial', 'gallery');
	}

	get_template_part('partials/partial', 'testimonials');

	get_template_part('partials/partial', 'clients');

	get_template_part('partials/partial', 'about');

	get_template_part('partials/partial', 'latest-work');

	get_template_part('partials/partial', 'social');

	get_template_part('partials/partial', 'page-links');

	get_template_part('partials/partial', 'suppliers');

	get_template_part('partials/partial', 'contact');


?>
