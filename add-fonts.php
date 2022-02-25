<?php
function tsl_bhm_2022_fonts(){
    wp_enqueue_script( 'webfontloader', plugin_dir_url( __FILE__) . "./webfontloader.js", NULL, '', true );

    $config_string = "
WebFont.load({
  google: {
    families: [
        'Lora:400,500,600,700',
        'Inter:400,500,600,700'    
    ]
  }
});
	";

    wp_add_inline_script( 'webfontloader', $config_string, 'after' );
}
add_action("wp_enqueue_scripts", "tsl_bhm_2022_fonts");

function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa');