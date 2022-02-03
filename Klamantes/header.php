<!DOCTYPE html>
<html lang="es">
 
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--muestra descripcion autor y titulo-->
		<?php wp_head(); ?>
 
  <!-- Bootstrap y CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
 
</head>
 
<body>
 
  <!-- Barra de navegacion -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
	
      <!-- muestra el logo definido desde functions y comprueba si esta configurado --> 
		<?php 
			// comprueba compatibilidad de la funcion
			if( function_exists( 'the_custom_logo')){
				//comprueba si esta configurado
				if(has_custom_logo()){
					the_custom_logo();
				}
			else{
				//Hay que configurar un logo predeterminado
				//echo get_template_directory_uri().'';
				echo "Mostrar logo predeterminado";
				}
			}
		?>
		
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php 
			function wp_nav_menu();
		?>
    </div>
  </nav>