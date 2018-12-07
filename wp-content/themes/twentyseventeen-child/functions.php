<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'child-style',
       get_stylesheet_directory_uri() . '/style.css',
       array('parent-style')
   );
}

// Makes Logging in harder for intruders

function obscure_login_errors(){
  return "If you don't like corgi butss, go away!";
}
add_filter( 'login_errors', 'obscure_login_errors' );

// Font Functions

// add_action( 'wp_enqueue_scripts', 'my_google_fonts' );
// function my_google_fonts() {
// wp_enqueue_style( 'my-google-fonts', 'https://fonts.googleapis.com/css?family=Libre+Baskerville', false );
// }​

?>