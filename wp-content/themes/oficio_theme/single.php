<?php get_header() ?>

<?php while ( have_posts() ) { ?>
	<?php the_post(); ?>
	<section>
		<div class="container">
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
			<p class="text-center">Volver a: <?php the_category(' <br> Volver a: '); ?></p>
			<p class="text-center"><a href="<?php bloginfo('url') ?>" class="btn btn-fuccia mt-3">Volver al inicio</a></p>
		</div>
	</section>
		<?php } wp_reset_query(); ?>

<?php get_footer() ?>
