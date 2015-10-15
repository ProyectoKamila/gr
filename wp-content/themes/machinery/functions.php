<?php
//Cambior el logo de inicio de Sesion
add_action('login_head', 'custom_login_logo');
include('library/login-logo.php');
//Funciones para crear post y Caetegory personalizados
add_action('init', 'theme_custom_types');
include('library/custom-post-type.php');
//Texto de desarrollado por y el enlace a web de desarrollo
add_filter('admin_footer_text', 'left_admin_footer_text_output');
add_filter('update_footer', 'right_admin_footer_text_output', 11);
include('library/copyright.php');
//borrar dashboard y mensaje de actualizacion
//add_action('wp_dashboard_setup', 'custom_dashboard_widgets');
include('library/widget-delete.php');
//Debug para las consultas
include('library/debug.php');
//opciones del themplate
//include('library/options.php');
//generar las portadas
include('library/slideshow.php');
include('library/mensaje.php');
//funcion para extraer la url del thumbnail
include('library/imgurl.php');
//funcion para acortar cadenas
include('library/limited-caracter.php');
show_admin_bar( false );
add_theme_support('post-thumbnails');
//funcion para poner nombre de la pagina
add_filter( 'wp_title', 'pk_title', 10, 2 );
//Crear Post Personalizados
function theme_custom_types() {

    // add_custom_post_type(array(
    //     'type' => 'servicio',
    //     'singular' => 'servicio'
    // ));
   
  
      add_custom_post_type(array(
        'type' => 'portada',
        'singular' => 'portada'
     ));

    add_custom_taxonomy(array(
        'name' => 'sesion',
        'plural' => 'Categoria',
        'genero' => 'f',
        'post_type' => 'portada',
        'hierarchical' => true
    ));
    
     add_custom_post_type(array(
        'type' => 'productos',
        'plural' => 'Productos'
     ));

    add_custom_taxonomy(array(
        'name' => 'categoria-productos',
        'plural' => 'Categoria',
        'genero' => 'f',
        'post_type' => 'productos',
        'hierarchical' => true
    ));
    add_custom_post_type(array(
        'type' => 'videos',
        'plural' => 'videos'
     ));
    
    add_custom_taxonomy(array(
        'name' => 'categoria-videos',
        'plural' => 'Categoria',
        'genero' => 'f',
        'post_type' => 'videos',
        'hierarchical' => true
    ));
    
    
    
    
   /* add_custom_taxonomy(array(
        'name' => 'tipo',
        'singular' => 'tipo',
        'genero' => 'f',
        'post_type' => 'servicios',
        'hierarchical' => true
        
    ));*/
// add_custom_taxonomy(array(
//         'name' => 'posicion',
//         'singular' => 'posicion',
//         'genero' => 'f',
//         'post_type' => 'configuracion',
//         'hierarchical' => true
//     ));
 
}

function pk_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title";
        //$title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title" . sprintf( __( 'Page %s', 'Nayec' ), max( $paged, $page ) );

    return $title;
}



?>
