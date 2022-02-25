<?php
class tsl_bhm_2022_home extends WP_Widget{
    function __construct(){
        parent:: __construct(
            "tsl_bhm_2022_home", "TSL Black History Month Homepage Widget", array("description" => "Featuring BHM stories on homepage")
        );
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

    public function widget($args, $instance){
        echo $args["before_widget"];
?>
<div id="bhm-home-container">
    <div style="position: relative">
        <p class="bhm-uppercase">Black History Month 2022</p>
        <a href="">
            <h1>Black Studies, Bombings and Bsomething: Claremont’s forgotten Black History</h1>
        </a>
        <div class="bhm-home-columns">
            <a href="" class="bhm-home-middle">
                <img src="https://blinq.art/blog/wp-content/uploads/2018/04/blinq-art-black-white-default.jpg" alt="Lorem ipsum dolor et hello">
                <h2>A tribute to Blaremont: a timeline to the Black Studies Center</h2>
                <p class="bhm-author">Jenna McMurtry, Averi Sullivan, and Reia Li</p>
                <hr>
                <p class="bhm-home-about">
                    We dug through the past 100 years of archives and interviewed alumni to reconstruct the story of how students fought for Black inclusion on campus.
                </p>            
            </a>
            <div>
                <?php
                $args = array( 'posts_per_page' => 2, 'offset'=> 0, 'category_name' => 'black-history-month-2022' );
                $query = new WP_Query($args);
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                        <a class="bhm-home-post" href="<?php the_permalink()?>">
                            <div>
                                <img src="<?php echo $this->catch_that_image() ?>" alt="Lorem ipsum dolor et hello">
                            </div>
                            <div>
                                <h2><?php the_title()?></h2>
                                <p class="bhm-author"><?php coauthors()?></p></p>
                            </div>
                        </a>
                    <?php }
                }
                wp_reset_postdata();
                ?>
            </div>
            <div>
                <?php
                $args = array( 'posts_per_page' => 2, 'offset'=> 2, 'category_name' => 'black-history-month-2022' );
                $query = new WP_Query($args);
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                        <a class="bhm-home-post" href="<?php the_permalink()?>">
                            <div>
                                <img src="<?php echo $this->catch_that_image() ?>" alt="Lorem ipsum dolor et hello">
                            </div>
                            <div>
                                <h2><?php the_title()?></h2>
                                <p class="bhm-author"><?php coauthors()?></p>
                            </div>
                        </a>
                    <?php }
                }
                wp_reset_postdata();
                ?>
            </div>
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