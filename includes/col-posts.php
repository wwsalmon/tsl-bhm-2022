<div>
    <?php
    $bhm_main_tag = get_term_by('slug', 'bhm-main', 'post_tag');
    $bhm_about_tag = get_term_by('slug', 'bhm-about', 'post_tag');
    $args = array( 'posts_per_page' => $num_posts, 'offset'=> $offset, 'category_name' => 'black-history-month-2022', 'tag__not_in' => array($bhm_main_tag->term_id, $bhm_about_tag->term_id) );
    $query = new WP_Query($args);
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            include "home-post.php";
        }
    }
    wp_reset_postdata();
    ?>
</div>