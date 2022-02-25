<?php
add_filter( 'single_template', 'tsl_bhm_2022_template' );
function tsl_bhm_2022_template( $single_template ) {
        if (has_category("bhm-main")) {
            $single_template = dirname( __FILE__ ) . '/tsl-bhm-2022-main-template.php';
        }
        return $single_template;
}