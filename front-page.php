<?php
	get_header();
?>
	<section class="swiper mySwiper w-full overflow-hidden mb-10 md:h-[500px]">
		<div class="swiper-wrapper" id="slider-content">
			<!-- Slides se insertan dinámicamente -->
		</div>
		<!-- Controles -->
		<div class="swiper-pagination mt-4"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</section>
	<main class="max-w-6xl mx-auto">
		<div class="px-4 text-[#003E6D] text-center font-semibold">
			<?php the_content(); ?>
		</div>
		<div class="flex flex-wrap justify-center gap-6 py-12">
			<?php smdigital_lista_pilares(); ?>
		</div>
	</main>
	<section class="border-t-1 border-gray-200">
		<div class="max-w-5xl mx-auto flex flex-wrap md:flex-nowrap justify-center items-center gap-6 py-12">
			<?php smdigital_lista_logos(); ?>
		</div>
	</section>
<?php 
	get_footer(); 
?>