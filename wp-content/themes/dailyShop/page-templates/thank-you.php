<?php 
	/*

		Template Name: Thank You Template

	*/ 
?>
<?php get_header(); ?>
<?php the_post(); ?>
		<main id="main">
			<div class="gallery">
				<div class="container">
					<div class="thank-you">
						<?php echo get_the_content(); ?>
					</div>
				</div>
			</div>
		</main>
<?php get_footer(); ?>
