<?php 
$sliders= explode(',',ot_get_option('sliders'));

?>



<!-- slider -->
<section class="slider-block">

		<?php foreach($sliders as $imgs)  {?>
	<div class="slide-item">
		<img src="<?php echo wp_get_attachment_url($imgs)?>" alt="">

	</div>
	<?php } ?>
	

	</div>
</section>
<!-- mobile slider -->
<section class="mobile-slider-block">
	<div class="slide-item">
		<img src="<?php echo get_template_directory_uri() ?>/img/mobile-slide1.jpg" alt="">

	</div>
	<div class="slide-item">
		<img src="<?php echo get_template_directory_uri() ?>/img/mobile-slide2.jpg" alt="">

	</div>
	<div class="slide-item">
		<img src="<?php echo get_template_directory_uri() ?>/img/mobile-slide3.jpg" alt="">

	</div>


	</div>
</section>
