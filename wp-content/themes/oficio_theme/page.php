<?php get_header() ?>
	<?php the_post() ?>

	<section class="my-5 text-center">
    <div class="container">
      <h3 class="text-fuccia mb-5"><?php the_title(); ?></h3>
			<?php the_content(); ?>

			<p><a href="<?php bloginfo('url') ?>" class="btn btn-fuccia mt-3">Volver al inicio</a></p>
    </div>
  </section>

<?php get_footer() ?>
