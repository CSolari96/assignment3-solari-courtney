<?php get_header(); ?>

<main class="container">

	<div class="row">

		<?php

			if (have_posts()) {
				while (have_posts()) {
					the_post(); ?>

					<div class="col-md-4 post-preview">

						<h3><?php the_title(); ?></h3>

						<p class="post-info">

							<?php 
								echo "Written by: " . get_the_author(); 
								echo " <br /> "; 
								echo "Published on " . get_the_date();
							?>
								
						</p>

						<div class="post-featured-image">

							<?php the_post_thumbnail("medium"); ?>

						</div>

						<?php the_excerpt(); ?>

						<a class="btn btn-sm" href="<?php the_permalink(); ?>">Read More</a>

					</div>

		<?php 	} // End while
			} // End if
		?>

	</div>

</main>


<?php get_footer(); ?>