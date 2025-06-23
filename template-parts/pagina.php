<?php 
	while( have_posts() ): the_post(); ?>
		<h1 class=""><?php the_title(); ?></h1>
		<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('large', ['class' => 'w-full h-auto']);
			}
		?>
		<?php the_content(); ?>
<?php	endwhile; ?>