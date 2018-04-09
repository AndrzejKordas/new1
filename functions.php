<?php

/********************************************************************************************

									REJESTRACJA MENU

*********************************************************************************************/


function register_my_menus() {
	register_nav_menus(array(
	'TopMenu' => __('Menu w topie'),
    'extra-menu' => __( 'Extra Menu' )
	));
	
}
add_action( 'init', 'register_my_menus' );


/********************************************************************************************

									WCZYTYWANIE SKRYPTÓW I ARKUSZY

*********************************************************************************************/



function load_styles_and_scripts() {
  //wczytywanie CSS
  wp_enqueue_style (
    'bootstrap-styles',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css'
  );

  wp_enqueue_style (
    'simple_v1',
    get_template_directory_uri() . '/style.css'
  );

 
  
  // wczytywanie JS
  
  wp_enqueue_script (
    'jquery',
    'https://code.jquery.com/jquery-3.2.1.min.js',
	false,
    '3.2.1',
    true
  );
  
 wp_enqueue_script (
			'Cloudflare',
			 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js',
			 array('jquery'),
			'1.2',
			true
		  ); 


 wp_enqueue_script (
			'link',
			 get_template_directory_uri() .'/js/link.js',
			 array('jquery'),
			'1.2',
			true
		  ); 





		  
  wp_enqueue_script (
    'bootstrap-scripts',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js',
	array('jquery'),
	  false,
    '3.2.0',
    true
  );
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

/********************************************************************************************

									OBRAZKI WYRÓŻNIAJĄCE

*********************************************************************************************/

add_theme_support( 'post-thumbnails');	

/********************************************************************************************

									REJESTRACJA WIGETÓW

*********************************************************************************************/

add_action('widgets_init', 'smashing_register_sidebars');
function smashing_register_sidebars(){
	register_sidebar();
	register_sidebar(array('id' => 'lid1', 'name' => 'obszar na wyszukiwarkę','before_widget' => '<span>', 'after_widget' => '</span>'));
	register_sidebar(array('id' => 'lid2', 'name' => 'tekst w stopce','before_widget' => '<span>', 'after_widget' => '</span>'));
	register_sidebar(array('id' => 'lid3', 'name' => 'trzecie tekstowe na strone główną','before_widget' => '<span>', 'after_widget' => '</span>'));
	register_sidebar(array('id' => 'produkty', 'name' => 'Menu produktowe', 'before_widget' => '<h1>', 'after_widget' => '</h1>'));
	register_sidebar(array('id' => 'Facebook', 'name' => 'Ikona Facebook'));
	}


?>