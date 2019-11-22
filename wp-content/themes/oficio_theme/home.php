<?php get_header() ?>

  <section class="text-center">
    <div class="container">
      <h2><?php bloginfo('description'); ?></h2>
      <p><a href="info" class="btn btn-fuccia mt-3">+ información</a></p>
    </div>
  </section>

  <section class="my-5 py-5 text-center">
    <div class="container">
      <h3 class="text-fuccia">Oficios disponibles</h3>
      <div class="row my-5">
      <?php $arg = array(
       'post_type'     => 'oficio',
       'posts_per_page' => -1,
       'orderby' => 'title',
       'order' => 'ASC'
       );

       $get_arg = new WP_Query( $arg );

       while ( $get_arg->have_posts() ) {
       $get_arg->the_post();
       ?>

       <?php $term = get_field('taxonomia'); ?>
         <div class="col-4 col-md-2">
           <a href="<?php echo get_term_link( $term ); ?>">
             <?php the_post_thumbnail('categories', array('class' => 'w-100 h-auto rounded categories')) ?>
             <p class="text-blue"><?php echo $term->name; ?></p>
           </a>
         </div>
       <?php } wp_reset_postdata(); ?>
     </div>

    </div>
  </section>

  <section>
    <div class="container">
      <h3 class="text-fuccia text-center">Trabajadores destacados</h3>

      <?php $arg = array(
       'post_type'     => 'post',
       'category_name'   => 'destacado',
       'posts_per_page' => -1
       );

       $get_arg = new WP_Query( $arg );

       while ( $get_arg->have_posts() ) {
       $get_arg->the_post();
       ?>

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

       <?php } wp_reset_postdata(); ?>
    </div>
  </section>

  <p class="text-center"><a href="#" class="btn btn-fuccia mt-3"><i class="fas fa-arrow-up"></i></a></p>
<?php get_footer() ?>
