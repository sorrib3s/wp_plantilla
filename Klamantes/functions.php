
//tamaño de imagen 
	add_image_size( 'destacada', 750, 300,true );

// etiqueta de titulo 
	add_theme_support( 'title-tag' );	
	
//registrar estilos
	function klamantes_enqueue_styles() {

//Style.css
	wp_enqueue_style( 'style', get_stylesheet_uri() );

// Registrar bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . 'https://serv4.klamantes.es/css/bootstrap.min.css',false,'1.1','all');
	}
	add_action( 'wp_enqueue_scripts', 'klamantes_enqueue_styles');


// Registrar Scripts
	function klamantes_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . 'https://serv5.klamantes.es/js/bootstrap.bundle.min.js', array( 'jquery' ) );
	}
	add_action( 'wp_enqueue_scripts', 'klamantes_enqueue_scripts');
  
 // Mostrar logo personalizado desde la opcion seleccionar logo apariencia>personalizar>identidad del sitio
	add_theme_support( 'custom-logo', array(
	//ALTO
		'height'      => 50,
	//ANCHO
		'width'       => 250,
	//Permite la flexibilidad en el tamaño
		'flex-height' => true,
		'flex-width'  => true,
	//
		'header-text' => array( 'site-title', 'site-description' ),
	) );    
	 
// Registrar menu para poder modificarlo desde aparencia->menus
	add_action( 'after_setup_theme', 'klamantes_registrar_menu' );
	function raiola_registrar_menu() {
		register_nav_menu( 'menu-principal', 'Menu Principal' );
		}
		

//registrar el sidebar
	add_action( 'widgets_init', 'klamantes_registrar_sidebar' );
	 
	function klamantes_registrar_sidebar() {
		register_sidebar( array(
			'name' =>'Sidebar',
			'id' => 'sidebar-klamantes',
			'description' => 'Barra lateral del tema klamantes.',
			//DIVs del sidebar en documento HTML
			'before_widget' => '<div id="%1$s" class="card my-4 %2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h5 class="card-header">',
			'after_title'   => '</h5>
			<div class="card-body">',
		) );
	}