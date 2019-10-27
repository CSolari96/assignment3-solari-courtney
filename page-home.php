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

			<main class="col-md-12">

				<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<h2><?php the_title(); ?></h2>

							<?php the_content(); ?>
				<?php
						}  // End while
					}  // End if

				?>

			</main>

		</div>

		<div class="row">

			<div class="col-md-8">

				<?php dynamic_sidebar("bottom-left-home-page"); ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>