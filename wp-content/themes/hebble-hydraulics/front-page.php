<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hebble_Hydraulics
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				get_template_part('partials/partial', 'jumbotron');
				get_template_part('partials/partial', 'services');
				while ( have_posts() ) : the_post();
				get_template_part('partials/partial', 'intro-sidebar');
				endwhile; // End of the loop.
				get_template_part('partials/partial', 'testimonials');
				get_template_part('partials/partial', 'clients');
				get_template_part('partials/partial', 'about');
				get_template_part('partials/partial', 'latest-work');
				get_template_part('partials/partial', 'social');
				get_template_part('partials/partial', 'page-links');
				get_template_part('partials/partial', 'suppliers');
				get_template_part('partials/partial', 'contact');
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
