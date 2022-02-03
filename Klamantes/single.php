<!-- muestra de contenido simple -->
<?php get_header(); ?>
  <!-- contenido de la pagina-->
  <div class="container">
    <div class="row">
      <!-- contenido del post Columna -->
      <div class="col-lg-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- titulo -->
        <h1 class="mt-4"><?php the_title(); ?></h1>
        <!-- autor -->
        <p class="lead">
          Por 
          <?php the_author(); ?>
        </p>
        <hr>
        <!-- fecha -->
        <p>Publicado <?php the_date();?> </p>
        <hr>
        <!-- imagen  -->
        <?php the_post_thumbnail('destacada',array( 'class' => 'img-fluid rounded' )); ?>
        <hr>
        <!-- contenido del post -->
        <?php the_content(); ?>
        <hr>
        <?php endwhile; else : ?>
            <p>Lo siento, no hemos encontrado ningún post.</p>
        <?php endif; ?>
      </div>
      <!-- widgets -->
      <?php get_sidebar(); ?>
    </div>
 
  </div>
  
<?php get_footer(); ?>