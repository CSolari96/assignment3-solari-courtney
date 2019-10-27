<?php get_header(); ?>

	<main class="container">

		<div class="row">

			<article class="col-md-12">

				<?php

					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>

							<h2><?php the_title(); ?></h2>

							<p class="post-info">
								<?php 

									echo "Published on " . get_the_date();
									echo " | ";
									echo "Written by " . get_the_author();

								?>
							</p>

							<div class="post-featured-image">

								<?php the_post_thumbnail("large"); ?>

							</div>

							<?php the_content(); ?>

				<?php	} // End while
					} // End if
				?>

			</article>

		</div>

	</main>

<?php get_footer(); ?>