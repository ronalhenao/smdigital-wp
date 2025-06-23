<?php

function smdigital_lista_pilares() {
	$args = array(
		'post_type' => 'smdigital_pilares',
		'order' => 'ASC',
	);
					
	$pilares = new WP_Query($args);

	if ( $pilares->have_posts() ) :
		while($pilares->have_posts() ) : $pilares->the_post(); ?>
			<article class="relative group overflow-hidden rounded-xl cursor-pointer">
				<!-- Imagen -->
				<figure>
						<?php the_post_thumbnail('large', ['class' => 'w-full h-60 object-cover']); ?>
				</figure>

				<div class="absolute top-0 left-0 w-full h-full flex flex-col justify-between p-4 text-white">
					<div class="absolute inset-0 bg-gradient-to-t from-transparent to-blue-900/60 transition-all duration-500 group-hover:from-blue-900/90"></div>
					<!-- Título (siempre visible) -->
					<h3 class="text-3xl font-semibold z-10 relative text-center">
							<?php the_title(); ?>
					</h3>

					<!-- Fondo degradado -->
					<div class="relative z-10 translate-y-full opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 -in-out flex flex-col items-center text-center justify-center flex-grow">
						<!-- Descripción (solo aparece en hover) -->	
						<p class="text-sm mb-4">
							<?php echo wp_trim_words(get_the_content(), 30, '...'); ?> 
						</p>
						<!-- Botón (solo aparece en hover) -->	
						<a href="<?php the_permalink(); ?>" class="rounded-full bg-[#00A5E4] hover:bg-[#008AC9] text-base py-2 px-6 font-semibold inline-flex items-center space-x-2 transition-colors duration-200">
							<span>Leer más</span>
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
						</a>
					</div>
				</div>
			</article>
	<?php 
		endwhile;
			else: 
				echo '<p>No hay pilares registrados.</p>';
			endif;

			wp_reset_postdata();
		?>
	<?php
}

function smdigital_lista_logos() {
	$args = array(
		'post_type' => 'smdigital_logos',
		'order' => 'ASC',
	);
		
	$logos = new WP_Query($args);

	if ( $logos->have_posts() ) :
		while($logos->have_posts() ) : $logos->the_post(); ?>
			<article class="relative group overflow-hidden">
				<!-- Imagen -->
				<figure>
					<?php the_post_thumbnail('large', ['class' => '']); ?>
				</figure>
			</article>
<?php 
	endwhile;
		else: 
			echo '<p>No hay logos registrados.</p>';
		endif;

	wp_reset_postdata();
?>
<?php
}
