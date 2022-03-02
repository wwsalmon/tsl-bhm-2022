<?php
$args = array('category_name' => 'black-history-month-2022', 'tag' => 'bhm-about' );
$query = new WP_Query($args);
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        ?>
        <a href="<?php the_permalink() ?>" class="bhm-uppercase">Editor's note</a>
        <?php
    }
}
?>