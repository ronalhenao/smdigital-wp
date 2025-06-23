<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> class=" bg-white">
		<header class="bg-[linear-gradient(to_top,rgba(0,62,109,0.4),#0f2b46)] absolute left-0 right-0 z-50">
			<div class="mx-auto relative max-w-7xl flex items-center justify-end pt-2.5 pb-3">
				<figure class="absolute top-0 left-0">
					<a href="<?php echo site_url('/'); ?>">
						<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
					</a>
				</figure>
				<div class="">
					<div class="flex justify-between items-center mb-2.5">
						<?php
							$args = array (
								'theme_location' => 'menu-superior',
								'container' => 'nav',  
								'menu_class' => 'flex space-x-8', // Clases Tailwind opcionales
							);

							wp_nav_menu($args);
						?>
						<div class=" flex items-center space-x-4">
							<?php get_search_form(); ?>
							
							<?php dynamic_sidebar('social'); ?>
						</div>
					</div>
					<?php
						$args = array (
							'theme_location' => 'menu-principal',
							'container' => 'nav', 
							'menu_class' => 'flex space-x-10', // Clases Tailwind opcionales
						);

						wp_nav_menu($args);
					?>

				</div>

			</div>


		</header>