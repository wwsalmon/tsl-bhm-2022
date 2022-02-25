<?php
get_header();
include "includes/bhm-navbar.php";
?>
<div id="bhm-main">
    <div id="bhm-main-top" class="bhm-container">
        <h1>Black studies, bombings and bsomething</h1>
        <h3 class="bhm-main-subtitle">Claremont's forgotten Black History</h3>
        <p class="bhm-main-about">We dug through the past 100 years of archives and interviewed alumni to reconstruct the story of how students fought for Black inclusion on campus.</p>
        <a href="" class="bhm-uppercase bhm-main-about-link">More about</a>
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
<p class="bhm-uppercase" style="margin: 48px 0">scroll down</p>
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