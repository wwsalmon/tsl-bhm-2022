<?php

class tsl_bhm_2022_home extends WP_Widget{
    function __construct(){
        parent:: __construct(
            "tsl_bhm_2022_home", "TSL Black History Month Homepage Widget", array("description" => "Featuring BHM stories on homepage")
        );
    }

    public function widget($args, $instance){
        echo $args["before_widget"];
?>
<div id="bhm-home-container">
    <div style="position: relative">
        <p class="bhm-uppercase">Black History Month 2022</p>
        <?php
        $query = get_main_query();
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                ?>
                <a href="<?php the_permalink() ?>">
                    <h1>Black Studies, Bombings and Bsomething: Claremont’s forgotten Black History</h1>
                </a>
                <?php
            }
        }
        ?>
        <div class="bhm-home-columns">
                <?php
                $args = array('category_name' => 'black-history-month-2022', 'tag' => 'bhm-main' );
                $query = get_main_query();

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                ?>
                <a href="<?php the_permalink() ?>" class="bhm-home-middle">
                    <img src="<?php echo catch_that_image()?>" alt="Lorem ipsum dolor et hello">
                    <h2><?php the_title() ?></h2>
                    <p class="bhm-author"><?php coauthors()?></p>
                    <hr>
                    <p class="bhm-home-about">
                        We dug through the past 100 years of archives and interviewed alumni to reconstruct the story of how students fought for Black inclusion on campus.
                    </p>
                </a>
                <?php
                    }
                }

                $num_posts = 2;
                $offset = 0;
                include "includes/col-posts.php";
                $offset = 2;
                include "includes/col-posts.php";
                ?>
        </div>
    </div>
</div>
<?php
        echo $args["after_widget"];
    }
}

function tsl_bhm_2022_widget(){
    register_widget("tsl_bhm_2022_home");
}

add_action("widgets_init", "tsl_bhm_2022_widget");