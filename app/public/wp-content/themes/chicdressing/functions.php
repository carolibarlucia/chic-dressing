<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
    
}

add_filter( 'big_image_size_threshold', '__return_false' );

function custom_header_meta(){
    ?>
    <meta name="title" content="Chic-Dressing Blog de marques de luxe" />
    <meta name="keywords" content="marque de luxe, achat-vente, créateur, prix cassés" />
    <meta name="description" content="Chic-Dressing vous propose des pièces de créateurs et de marques de luxe en achat-vente à prix cassés" />
    <?php
    }
    add_action('wp_head', 'custom_header_meta');

wp_get_attachment_image_src($size = 'thumbnail',$icon = false);


 