<?php get_header(); ?>

	<div class="container">

		<main class="row">

			<div class="col-md-4">

				<?php dynamic_sidebar("404-image"); ?>

			</div>

			<div class="col-md-8">

				<h2>Oh no!</h2>

				<p>It looks like the page you are looking for cannot be found. Would you like to go back <a href="<?php echo home_url('/'); ?>">home?</a></p>

			</div>

		</main>

	</div>

<?php get_footer(); ?>