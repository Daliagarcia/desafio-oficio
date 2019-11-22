<?php get_header() ?>
<section>
	<div class="container">
	<?php if (have_posts()) { ?>
				<h3 class="text-fuccia text-center">Categoría: <?php single_term_title(); ?></h3>
				<?php while ( have_posts() ) { the_post(); ?>
					<div class="offset-2 col-8 bg-light rounded p-5 my-5">
						<div class="row">
							<div class="offset-2 col-8 offset-md-0 col-md-3">
								<?php the_post_thumbnail('person', array('class' => 'w-100 h-auto rounded-circle mb-5')) ?>
							</div>

							<div class="col-md-9">
								<h4><?php the_title(); ?></h4>
								<?php the_content(); ?>
								<?php the_category(' / '); ?>
								<p class="text-right mt-5"><a href="<?php the_permalink(); ?>" class="btn btn-outline-fuccia">¡Contrátalo!</a></p>
							</div>
						</div>
					</div>
				<?php }; ?>

	<?php } else { ?>
				<h3 class="text-fuccia text-center">No hay trabajadores</h3>
	<?php } wp_reset_query(); ?>

	<p class="text-center"><a href="<?php bloginfo('url') ?>" class="btn btn-fuccia mt-3">Volver al inicio</a></p>
	</div>
</section>

<?php get_footer() ?>
