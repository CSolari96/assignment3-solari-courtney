<?php

	/*

	Template Name: Home Page Layout
	Tempate Post Type: page
	
	*/

	get_header();

?>

	<?php dynamic_sidebar("hero-image"); ?>

	<div class="container">

		<div class="row">

			<main class="col-md-12 home-page">

				<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<?php the_content(); ?>
				<?php
						}  // End while
					}  // End if

				?>

			</main>

		</div>

		<div class="row">

			<section class="col-md-8">

				<?php dynamic_sidebar("bottom-left-home-page"); ?>

			</section>

			<aside class="col-md-4">

				<?php get_sidebar(); ?>

			</aside>

		</div>

	</div>

<?php get_footer(); ?>