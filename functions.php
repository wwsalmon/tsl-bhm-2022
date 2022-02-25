<?php
function get_main_query() {
    $args = array('category_name' => 'black-history-month-2022', 'tag' => 'bhm-main' );
    $query = new WP_Query($args);
    return $query;
}

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];

    if(empty($first_img)) {
        $first_img = "/path/to/default.png";
    }
    return $first_img;
}
?>