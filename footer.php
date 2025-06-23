		<footer class="bg-[#1F4E85]">
			<div class="max-w-6xl mx-auto py-2.5 flex-wrap md:flex justify-between items-center">
				<?php
					$args = array (
							'theme_location' => 'menu-footer',
							'container' => 'nav',
							'container_class' => 'menu-footer',
							'menu_class' => 'flex-wrap md:flex md:space-x-6 text-center', // Clases Tailwind opcionales
					);

					wp_nav_menu($args);
				?>
				<?php dynamic_sidebar('linea'); ?>
			</div>
			<div class="bg-[#173D6A] text-center py-3">
				<p class=" text-[#68788C]">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
			</div>
    </footer>
		<?php wp_footer(); ?>
	</body>
</html>