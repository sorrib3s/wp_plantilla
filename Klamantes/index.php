<!--carga el header-->
	<?php get_header(); ?>


	

	<!-- prueba mostrar post-->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- mostrar contenido del post -->
 
        <div class="card mb-4">
			<?php the_post_thumbnail(); ?>
				<div class="card-body">
					<h2 class="card-title"><?php the_title(); ?></h2>
					<p class="card-text"><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más &rarr;</a>
				</div>
			<div class="card-footer text-muted">
				<?php echo get_the_date(); ?> - <?php the_author(); ?>
			</div>
        </div>
    <!-- si no hay posts -->  
    <?php endwhile; else : ?>
        <p>Lo siento, no hemos encontrado ningún post.</p>
	<?php endif; ?>

	
		
<!-- paginacion-->
	<nav class="klamantes-paginacion">
        <?php echo paginate_links(); ?>
    </nav>
	
	
<!-- barra widgets -->
    <?php get_sidebar(); ?>
	
          
<!--carga el footer-->		  
	<?php get_footer(); ?>