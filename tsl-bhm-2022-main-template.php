<?php
$bhm_title = 'Illuminating 5C Black Legacies';
$bhm_about_text = 'TSL dove into a century of archives and oral histories to rediscover the stories of the BSU trailblazers who spearheaded the creation of the OBSA and Africana Studies department.';
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
    <i class="fas fa-chevron-down" style="margin-bottom: 48px"></i>
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