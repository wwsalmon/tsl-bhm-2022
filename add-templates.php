<?php
add_filter( 'single_template', 'tsl_bhm_2022_template' );
function tsl_bhm_2022_template( $single_template ) {
        if (has_tag("bhm-main")) {
            $single_template = dirname( __FILE__ ) . '/tsl-bhm-2022-main-template.php';
        } else if (has_tag("datavis-tuition-2022")) {
            $single_template = dirname( __FILE__ ) . '/datavis-tuition-2022/template.php';
        }
        return $single_template;
}