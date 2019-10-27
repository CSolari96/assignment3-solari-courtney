<?php

	/*

	Template Name: Right Sidebar
	Template Post Type: page, post

	*/

	get_header(); 

?>

	<div class="container">

		<div class="row">

			<main class="col-md-9">

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

			<aside class="col-md-3">

				<?php get_sidebar(); ?>

			</aside>

		</div>

	</div>

<?php get_footer(); ?>