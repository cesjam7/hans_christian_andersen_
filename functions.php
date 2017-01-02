<?php
/*Adding css and jquery in header open*/
	function theme_scripts(){
		    wp_enqueue_style('bootstrap',get_template_directory_uri() . '../css/css/bootstrap.min.css');
			wp_enqueue_style('plugin',get_template_directory_uri() . '../css/plugin.css');
			wp_enqueue_style('responsive',get_template_directory_uri() . '../css/responsive.css');	
	}
	add_action('wp_enqueue_scripts', 'theme_scripts');
/*Adding css and jquery in header close*/
	
/* Add css and jquery to footer open*/
	function add_this_script_footer(){ 
			wp_enqueue_script('plugin',get_template_directory_uri() . '../js/plugin.js');
			wp_enqueue_script('main',get_template_directory_uri() . '../js/main.js');
 	} 

	add_action('wp_footer', 'add_this_script_footer'); 
/* Add css and jquery to footer close*/

/*Add featured images to my posts open*/
	add_theme_support( 'post-thumbnails' );
/*Add featured images to my posts close*/


	add_image_size( 'entradas', 65, 65, true );

/* Add description open */
add_action('wp_head','metadescription');
function metadescription() {

     $codigometadescription = ''; 
   
     if( is_single() ) {

          $post = get_queried_object();
          
          if( !empty( $post->post_excerpt ) ) {
              $descripcion = $post->post_excerpt;
          } else {
              $descripcionn = wp_trim_words( $post->post_content );
          }

          if( $descripcion != '' ) {
              $codigometadescription = '<meta name="description" content="' . esc_attr($descripcion) . '">';
          }
     }
     echo $codigometadescription;
}
/* Add description close */ 

/* Limit description open*/
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/* Limit description close*/

/* Add read more entry open*/
function mi_excerpt_leermas() {
       global $post;
	return '<a style="color:fff;" href="'. get_permalink($post->ID) . '"> Leer más...</a>';
}
add_filter('excerpt_more', 'mi_excerpt_leermas');
/* Add read more entry close*/

?>