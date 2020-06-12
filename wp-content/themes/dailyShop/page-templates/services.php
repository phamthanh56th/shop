<?php 
	/*

		Template Name: Services Template

	*/ 
?>
<?php get_header(); ?>
<?php the_post(); ?>
		<main id="main">
			<div class="services">
				<?php  
				$args=array(
						'post_type' => 'services',
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'ASC',
						'posts_per_page' => -1,
						);
					?>
				<?php $k = 0; ?>
				<?php $my_query = new WP_Query($args); ?>
				<?php if( $my_query->have_posts() ) : ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<?php $stt = get_field('number', get_the_ID()); ?>
				<?php $k ++; ?>		
				<div class="services__inner <?php if($k%2 == 0) { echo 'services__child';} ?>">
					<div class="services__photo">
						<div class="services__img">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
						</div>
						<div class="field-number">
							<h1><?php echo $stt; ?></h1>
						</div>
					</div>
					<div class="services__detail">
						<div class="services__content">
							<div class="services__description">
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</main>
<?php get_footer(); ?>