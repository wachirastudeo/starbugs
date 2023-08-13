<?php
/* Template Name: Homepage */

$top_featured = new WP_Query(array(
	'category_name' => 'Featured',
	'posts_per_page' => 1,
	'orderby' => 'date',
	'order' => 'ASC'
));

$other_featured = new WP_Query(array(
	'category_name' => 'Featured',
	'posts_per_page' => 4,
	'offset' => 1,
	'orderby' => 'date',
	'order' => 'ASC'

));



?>



<?php get_header(); ?>

<?php get_template_part('views/slider') ?>

<!-- feature -->
<section class="feature-block">
	<div class="container">
		<h3>ENJOY SUMMER FLAVORS</h3>
		<div class="row">
			<!-- feature left -->
			<div class="col-md-6">

				<?php
				if ($top_featured->have_posts()) :
					while ($top_featured->have_posts()) : $top_featured->the_post();
				?>
						<a href="<?php the_permalink(); ?>" class="large-image" alt="<?php the_title(); ?>">
							<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">

						</a>
				<?php
					endwhile;
				endif;

				?>
			</div>
			<!-- feature rigth -->
			<?php
			if ($other_featured->have_posts()) : ?>
				<div class="col-md-6">

					<div class="row">
						<?php while ($other_featured->have_posts()) : $other_featured->the_post(); ?>
							<div class="col-6">
								<a href="<?php the_permalink(); ?>" class="small-image with-margin" alt="<?php the_title(); ?>">
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'product') ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				</div>

				
				</div>
				<div class="feature-banner">
					<a href="">
						<img src="<?php echo get_template_directory_uri() ?>/img/footer-banner.jpg" alt="">
					</a>
				</div>
		</div>

</section>


<?php get_footer(); ?>