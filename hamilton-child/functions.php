<?php
/*opret en funktion kaldet 'add_styles' som bruger child-themets styling*/
function add_styles(){
    /*difiner en variabel kaldet '$parent_style' med værdien 'hamilton-style'*/
    $parent_style = 'hamilton-style';
    /*difiner en variabel kaldet '$child_style' med værdien 'child-style'*/
    $child_style = 'child-style';
    
   /*wp_enqueue_style = inkluder denne styling, brug variabelen $parent_style, og link til filen '/style.css'  */
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css');
    
    /*wp_enqueue_style = inkluder denne styling, brug variabelen $child_style, og link til filen '/style.css' og brug den nyeste version*/
    wp_enqueue_style(  $child_style, get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version') 
    );      
}
/*udfør indhold og funktion*/
add_action('wp_enqueue_scripts','add_styles');

//opret en funktion kaldet 'pb_add_google_fonts' som henter en bestemt font fra google fonts
function wpb_add_google_fonts() {
 /*inkluder en bnestemt google google font kaldet 'Shadows+Into+Light'*/
wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Shadows+Into+Light', false ); 
}
/*udfør indhold og funktion*/
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );



?>