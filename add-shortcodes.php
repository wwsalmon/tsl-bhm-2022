<?php
function tsl_bhm_2022_navbar($atts) {
    ?>
    <style>
        #masthead, #wpadminbar {display: none;}
        #primary {border-right: none; padding-right: 0; padding-top: 64px;}
    </style>
    <div class="bhm-navbar">
        <div class="bhm-navbar-main">
            <a href="<?php echo home_url() ?>" class="bhm-navbar-site-home">
                <img src="<?php echo plugin_dir_url( __FILE__ ) ?>tsl-logo.svg" alt="">
            </a>
            <a href="/sth" class="bhm-navbar-proj-home">Claremont's Forgotten Black History</a>
        </div>
    </div>
<?php
}

add_shortcode('tsl-bhm-2022-navbar', 'tsl_bhm_2022_navbar');