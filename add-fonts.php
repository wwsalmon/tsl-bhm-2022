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