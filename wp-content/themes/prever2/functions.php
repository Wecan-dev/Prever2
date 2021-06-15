<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail(array(100, 100));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(1568, 9999);

/*****Banner *******/
function theme_customize_register($wp_customize)
{

	/////INGRESA TU HOJA DE VIDA
	$wp_customize->add_panel(
		'panel1',
		array(
			'title' => 'Home',
			'priority' => 1,
		)
	);

	$wp_customize->add_section('banner1', array(
		'title' => 'Banner principal',
		'panel' => 'panel1'
	));

	$wp_customize->add_setting('banner1_titulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner1_titulo_control', array(
		'label' => 'Título',
		'section' => 'banner1',
		'settings' => 'banner1_titulo'
	)));

	$wp_customize->add_setting('banner1_subtitulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner1_subtitulo_control', array(
		'label' => 'Subtitulo',
		'section' => 'banner1',
		'settings' => 'banner1_subtitulo',
		'type' => 'textarea'
	)));



	$wp_customize->add_setting('banner1_imagen');

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner1_imagen_control', array(
		'label' => 'Imagen',
		'section' => 'banner1',
		'settings' => 'banner1_imagen'
  )));
  
  $wp_customize->add_section('about', array(
		'title' => 'Quiénes Somos',
		'panel' => 'panel1'
  ));
  
  $wp_customize->add_setting('about_titulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about_titulo_control', array(
		'label' => 'Título',
		'section' => 'about',
		'settings' => 'about_titulo'
	)));

	$wp_customize->add_setting('about_subtitulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about_subtitulo_control', array(
		'label' => 'Subtitulo',
		'section' => 'about',
		'settings' => 'about_subtitulo',
  )));


	$wp_customize->add_setting('about_contenido', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about_contenido_control', array(
		'label' => 'Contenido',
		'section' => 'about',
    'settings' => 'about_contenido',
    'type' => 'textarea'
	)));



	$wp_customize->add_setting('about_imagen');

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_imagen_control', array(
		'label' => 'Imagen',
		'section' => 'about',
		'settings' => 'about_imagen'
  )));


  $wp_customize->add_section('products', array(
		'title' => 'Items cards',
		'panel' => 'panel1'
  ));
  

  $wp_customize->add_setting('products_titulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'products_titulo_control', array(
		'label' => 'Título',
		'section' => 'products',
		'settings' => 'products_titulo'
	)));

	$wp_customize->add_setting('products_subtitulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'products_subtitulo_control', array(
		'label' => 'Subtitulo',
		'section' => 'products',
		'settings' => 'products_subtitulo',
  )));


  $wp_customize->add_section('section4', array(
		'title' => 'Servicio directo',
		'panel' => 'panel1'
  ));
  

  $wp_customize->add_setting('section4_titulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section4_titulo_control', array(
		'label' => 'Título',
		'section' => 'section4',
		'settings' => 'section4_titulo'
	)));

	$wp_customize->add_setting('section4_subtitulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section4_subtitulo_control', array(
		'label' => 'Subtitulo',
		'section' => 'section4',
		'settings' => 'section4_subtitulo',
  )));
$wp_customize->add_setting('section4_imagen');

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section4_imagen_control', array(
		'label' => 'Imagen Grande',
		'section' => 'section4',
		'settings' => 'section4_imagen'
  )));
	
	$wp_customize->add_setting('section4_mobile_imagen');

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section4_mobile_imagen_control', array(
		'label' => 'Imagen Pequeña',
		'section' => 'section4',
		'settings' => 'section4_mobile_imagen'
  )));

  $wp_customize->add_section('noticias', array(
		'title' => 'Noticias',
		'panel' => 'panel1'
  ));
  
  $wp_customize->add_setting('noticias_titulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'noticias_titulo_control', array(
		'label' => 'Título',
		'section' => 'noticias',
		'settings' => 'noticias_titulo'
	)));

	$wp_customize->add_setting('noticias_subtitulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'noticias_subtitulo_control', array(
		'label' => 'Subtitulo',
		'section' => 'noticias',
		'settings' => 'noticias_subtitulo',
  )));
  

	$wp_customize->add_setting('noticias_contenido', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'noticias_contenido_control', array(
		'label' => 'Contenido',
		'section' => 'noticias',
    'settings' => 'noticias_contenido',
    'type' => 'textarea'
	)));
	
	$wp_customize->add_setting('noticias_imagen');

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'noticias_imagen_control', array(
		'label' => 'Imagen',
		'section' => 'noticias',
		'settings' => 'noticias_imagen'
  )));


	$wp_customize->add_section('orbituarios', array(
		'title' => 'Orbituarios',
		'panel' => 'panel1'
  ));
  
  $wp_customize->add_setting('orbituarios_titulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbituarios_titulo_control', array(
		'label' => 'Título',
		'section' => 'orbituarios',
		'settings' => 'orbituarios_titulo'
	)));

	$wp_customize->add_setting('orbituarios_subtitulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbituarios_subtitulo_control', array(
		'label' => 'Subtitulo',
		'section' => 'orbituarios',
		'settings' => 'orbituarios_subtitulo',
	)));
	
	$wp_customize->add_setting('orbituarios_btn', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbituarios_btn_control', array(
		'label' => 'Texto del botón',
		'section' => 'orbituarios',
    'settings' => 'orbituarios_btn',
	)));

	$wp_customize->add_setting('orbituarios_url', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbituarios_url_control', array(
		'label' => 'Url',
		'section' => 'orbituarios',
    'settings' => 'orbituarios_url',
    'type' => 'url'
	)));


	$wp_customize->add_section('help', array(
		'title' => 'Ayuda al duelo',
		'panel' => 'panel1'
  ));
  
  $wp_customize->add_setting('help_titulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'help_titulo_control', array(
		'label' => 'Título',
		'section' => 'help',
		'settings' => 'help_titulo'
	)));

	$wp_customize->add_setting('help_subtitulo', array(
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'help_subtitulo_control', array(
		'label' => 'Subtitulo',
		'section' => 'help',
		'settings' => 'help_subtitulo',
	)));
}
add_action('customize_register', 'theme_customize_register');


// Register Custom Post Type
function section4()
{

	$labels = array(
		'name'                  => _x('Items cards', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Sección 4', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Items cards', 'text_domain'),
		'name_admin_bar'        => __('Items cards', 'text_domain'),
		'archives'              => __('Archivo', 'text_domain'),
		'attributes'            => __('Atributos', 'text_domain'),
		'parent_item_colon'     => __('Artículo principal', 'text_domain'),
		'all_items'             => __('Todos los artículos', 'text_domain'),
		'add_new_item'          => __('Agregar ítem nuevo', 'text_domain'),
		'add_new'               => __('Agregar nuevo', 'text_domain'),
		'new_item'              => __('Nuevo artículo', 'text_domain'),
		'edit_item'             => __('Editar artículo', 'text_domain'),
		'update_item'           => __('Actualizar artículo', 'text_domain'),
		'view_item'             => __('Ver ítem', 'text_domain'),
		'view_items'            => __('Ver artículos', 'text_domain'),
		'search_items'          => __('Artículo de búsqueda', 'text_domain'),
		'not_found'             => __('Extraviado', 'text_domain'),
		'not_found_in_trash'    => __('No encontrado en la papelera', 'text_domain'),
		'featured_image'        => __('Foto principal', 'text_domain'),
		'set_featured_image'    => __('Establecer imagen destacada', 'text_domain'),
		'remove_featured_image' => __('Eliminar imagen destacada', 'text_domain'),
		'use_featured_image'    => __('Usar como imagen destacada', 'text_domain'),
		'insert_into_item'      => __('Insertar en el artículo', 'text_domain'),
		'uploaded_to_this_item' => __('Subido a este artículo', 'text_domain'),
		'items_list'            => __('Lista de artículos', 'text_domain'),
		'items_list_navigation' => __('Navegación de lista de elementos', 'text_domain'),
		'filter_items_list'     => __('Lista de elementos de filtro', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Items cards', 'text_domain'),
		'description'           => __('.', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('section4', $args);
}
add_action('init', 'section4', 0);




function help()
{

	$labels = array(
		'name'                  => _x('Ayuda al duelo', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Ayuda al duelo', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Ayuda al duelo', 'text_domain'),
		'name_admin_bar'        => __('Ayuda al duelo', 'text_domain'),
		'archives'              => __('Archivo', 'text_domain'),
		'attributes'            => __('Atributos', 'text_domain'),
		'parent_item_colon'     => __('Artículo principal', 'text_domain'),
		'all_items'             => __('Todos los artículos', 'text_domain'),
		'add_new_item'          => __('Agregar ítem nuevo', 'text_domain'),
		'add_new'               => __('Agregar nuevo', 'text_domain'),
		'new_item'              => __('Nuevo artículo', 'text_domain'),
		'edit_item'             => __('Editar artículo', 'text_domain'),
		'update_item'           => __('Actualizar artículo', 'text_domain'),
		'view_item'             => __('Ver ítem', 'text_domain'),
		'view_items'            => __('Ver artículos', 'text_domain'),
		'search_items'          => __('Artículo de búsqueda', 'text_domain'),
		'not_found'             => __('Extraviado', 'text_domain'),
		'not_found_in_trash'    => __('No encontrado en la papelera', 'text_domain'),
		'featured_image'        => __('Foto principal', 'text_domain'),
		'set_featured_image'    => __('Establecer imagen destacada', 'text_domain'),
		'remove_featured_image' => __('Eliminar imagen destacada', 'text_domain'),
		'use_featured_image'    => __('Usar como imagen destacada', 'text_domain'),
		'insert_into_item'      => __('Insertar en el artículo', 'text_domain'),
		'uploaded_to_this_item' => __('Subido a este artículo', 'text_domain'),
		'items_list'            => __('Lista de artículos', 'text_domain'),
		'items_list_navigation' => __('Navegación de lista de elementos', 'text_domain'),
		'filter_items_list'     => __('Lista de elementos de filtro', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Ayuda al duelo', 'text_domain'),
		'description'           => __('.', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('help', $args);
}
add_action('init', 'help', 0);



function orbituarios()
{

	$labels = array(
		'name'                  => _x('Orbituarios', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Orbituarios', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Orbituarios', 'text_domain'),
		'name_admin_bar'        => __('Orbituarios', 'text_domain'),
		'archives'              => __('Archivo', 'text_domain'),
		'attributes'            => __('Atributos', 'text_domain'),
		'parent_item_colon'     => __('Artículo principal', 'text_domain'),
		'all_items'             => __('Todos los artículos', 'text_domain'),
		'add_new_item'          => __('Agregar ítem nuevo', 'text_domain'),
		'add_new'               => __('Agregar nuevo', 'text_domain'),
		'new_item'              => __('Nuevo artículo', 'text_domain'),
		'edit_item'             => __('Editar artículo', 'text_domain'),
		'update_item'           => __('Actualizar artículo', 'text_domain'),
		'view_item'             => __('Ver ítem', 'text_domain'),
		'view_items'            => __('Ver artículos', 'text_domain'),
		'search_items'          => __('Artículo de búsqueda', 'text_domain'),
		'not_found'             => __('Extraviado', 'text_domain'),
		'not_found_in_trash'    => __('No encontrado en la papelera', 'text_domain'),
		'featured_image'        => __('Foto principal', 'text_domain'),
		'set_featured_image'    => __('Establecer imagen destacada', 'text_domain'),
		'remove_featured_image' => __('Eliminar imagen destacada', 'text_domain'),
		'use_featured_image'    => __('Usar como imagen destacada', 'text_domain'),
		'insert_into_item'      => __('Insertar en el artículo', 'text_domain'),
		'uploaded_to_this_item' => __('Subido a este artículo', 'text_domain'),
		'items_list'            => __('Lista de artículos', 'text_domain'),
		'items_list_navigation' => __('Navegación de lista de elementos', 'text_domain'),
		'filter_items_list'     => __('Lista de elementos de filtro', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Orbituarios', 'text_domain'),
		'description'           => __('.', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('orbituarios', $args);
}
add_action('init', 'orbituarios', 0);




function funerarias()
{

	$labels = array(
		'name'                  => _x('Centros memoriales y funerarias', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Centros memoriales y funerarias', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Centros memoriales y funerarias', 'text_domain'),
		'name_admin_bar'        => __('Centros memoriales y funerarias', 'text_domain'),
		'archives'              => __('Archivo', 'text_domain'),
		'attributes'            => __('Atributos', 'text_domain'),
		'parent_item_colon'     => __('Artículo principal', 'text_domain'),
		'all_items'             => __('Todos los artículos', 'text_domain'),
		'add_new_item'          => __('Agregar ítem nuevo', 'text_domain'),
		'add_new'               => __('Agregar nuevo', 'text_domain'),
		'new_item'              => __('Nuevo artículo', 'text_domain'),
		'edit_item'             => __('Editar artículo', 'text_domain'),
		'update_item'           => __('Actualizar artículo', 'text_domain'),
		'view_item'             => __('Ver ítem', 'text_domain'),
		'view_items'            => __('Ver artículos', 'text_domain'),
		'search_items'          => __('Artículo de búsqueda', 'text_domain'),
		'not_found'             => __('Extraviado', 'text_domain'),
		'not_found_in_trash'    => __('No encontrado en la papelera', 'text_domain'),
		'featured_image'        => __('Foto principal', 'text_domain'),
		'set_featured_image'    => __('Establecer imagen destacada', 'text_domain'),
		'remove_featured_image' => __('Eliminar imagen destacada', 'text_domain'),
		'use_featured_image'    => __('Usar como imagen destacada', 'text_domain'),
		'insert_into_item'      => __('Insertar en el artículo', 'text_domain'),
		'uploaded_to_this_item' => __('Subido a este artículo', 'text_domain'),
		'items_list'            => __('Lista de artículos', 'text_domain'),
		'items_list_navigation' => __('Navegación de lista de elementos', 'text_domain'),
		'filter_items_list'     => __('Lista de elementos de filtro', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Centros memoriales y funerarias', 'text_domain'),
		'description'           => __('.', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('funerarias', $args);
}
add_action('init', 'funerarias', 0);


function Productos()
{

	$labels = array(
		'name'                  => _x('Productos y Servicios', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Productos y Servicios', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Productos y Servicios', 'text_domain'),
		'name_admin_bar'        => __('Productos y Servicios', 'text_domain'),
		'archives'              => __('Archivo', 'text_domain'),
		'attributes'            => __('Atributos', 'text_domain'),
		'parent_item_colon'     => __('Artículo principal', 'text_domain'),
		'all_items'             => __('Todos los artículos', 'text_domain'),
		'add_new_item'          => __('Agregar ítem nuevo', 'text_domain'),
		'add_new'               => __('Agregar nuevo', 'text_domain'),
		'new_item'              => __('Nuevo artículo', 'text_domain'),
		'edit_item'             => __('Editar artículo', 'text_domain'),
		'update_item'           => __('Actualizar artículo', 'text_domain'),
		'view_item'             => __('Ver ítem', 'text_domain'),
		'view_items'            => __('Ver artículos', 'text_domain'),
		'search_items'          => __('Artículo de búsqueda', 'text_domain'),
		'not_found'             => __('Extraviado', 'text_domain'),
		'not_found_in_trash'    => __('No encontrado en la papelera', 'text_domain'),
		'featured_image'        => __('Foto principal', 'text_domain'),
		'set_featured_image'    => __('Establecer imagen destacada', 'text_domain'),
		'remove_featured_image' => __('Eliminar imagen destacada', 'text_domain'),
		'use_featured_image'    => __('Usar como imagen destacada', 'text_domain'),
		'insert_into_item'      => __('Insertar en el artículo', 'text_domain'),
		'uploaded_to_this_item' => __('Subido a este artículo', 'text_domain'),
		'items_list'            => __('Lista de artículos', 'text_domain'),
		'items_list_navigation' => __('Navegación de lista de elementos', 'text_domain'),
		'filter_items_list'     => __('Lista de elementos de filtro', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Productos y Servicios', 'text_domain'),
		'description'           => __('.', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('Productos', $args);
}
add_action('init', 'Productos', 0);


