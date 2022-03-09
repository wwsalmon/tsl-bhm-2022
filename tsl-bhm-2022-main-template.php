<?php
$bhm_title = 'Illuminating 5C Black Legacies';
$bhm_about_text = 'TSL dug through a century of archives and conducted oral histories to rediscover the stories of the BSU trailblazers who fought for Black inclusion on campus.';
get_header();
include "includes/bhm-navbar.php";
?>
<div id="bhm-main">
    <div id="bhm-main-top" class="bhm-container">
        <h1><?php echo $bhm_title ?></h1>
        <p class="bhm-main-about"><?php echo $bhm_about_text ?></p>
        <?php include "includes/about-link.php"?>
    </div>
    <div class="bhm-home-columns bhm-container">
        <div class="bhm-home-middle">
<?php
while ( have_posts() ) : the_post();
?>
    <img src="<?php echo catch_that_image() ?>" alt="">
            <h2 class="bhm-main-title">
                <?php
                the_title();
                ?>
            </h2>
<p class="bhm-uppercase" style="margin: 48px 0 12px 0">scroll down</p>
    <i class="fa fa-chevron-down" style="margin-bottom: 48px"></i>
            <?php
                endwhile;
                ?>
        </div>
        <?php

        $num_posts = 2;
        $offset = 0;
        include "includes/col-posts.php";
        $offset = 2;
        include "includes/col-posts.php";
        ?>
    </div>
</div>
<div class="bhm-container bhm-main-body">
    <div class="bhm-main-timeline">
        <?php
        $json = file_get_contents(plugin_dir_path(__FILE__) . 'timeline.json');
        $jsonData = json_decode($json);
        foreach ($jsonData as $event) {
            ?>
                <div class="bhm-timeline-item">
                    <div class="bhm-timeline-dot"></div>
                    <p class="bhm-timeline-date"><?php echo $event->date ?></p>
                    <?php if ($event->photo != "") {
                        ?>
                        <img src="<?php echo plugin_dir_url( __FILE__ ) ?>/photos/<?php echo $event->photo ?>.jpg" alt="">
                        <?php
                    } ?>
                    <p><?php echo $event->text ?></p>
                    <?php if ($event->link != "") {
                        ?>
                        <a href="<?php echo $event->link ?>">Read more</a>
                        <?php
                    } ?>
                </div>
        <?php
        }
        ?>
    </div>
    <div class="bhm-main-text">
        <?php the_content() ?>
    </div>
</div>