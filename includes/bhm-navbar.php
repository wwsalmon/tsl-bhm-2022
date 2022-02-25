<style>
    #masthead, #wpadminbar {display: none;}
    #primary {border-right: none; padding-right: 0; padding-top: 64px;}
</style>
<div class="bhm-navbar">
    <div class="bhm-navbar-main">
        <a href="<?php echo home_url() ?>" class="bhm-navbar-site-home">
            <img src="<?php echo plugin_dir_url( __FILE__ ) ?>../tsl-logo.svg" alt="">
        </a>
        <?php
        $query = get_main_query();
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                ?>
                <a href="<?php the_permalink() ?>" class="bhm-navbar-proj-home">Claremont's Forgotten Black History</a>
                <?php
            }
        }
        ?>
    </div>
</div>