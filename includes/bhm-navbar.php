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
                <a href="<?php the_permalink() ?>" class="bhm-navbar-proj-home">Illuminating 5C Black legacies</a>
                <?php
            }
        }
        ?>
    </div>
    <div class="bhm-navbar-right">
        <button onclick="onToggleSidebar()">
            <i class="fa fa-bars"></i>
        </button>
    </div>
</div>
<div id="bhm-sidebar">
    <div class="bhm-sidebar-top">
        <button onclick="onToggleSidebar()">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <?php
    $args = array('category_name' => 'black-history-month-2022');
    $query = new WP_Query($args);
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            ?>
            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    <?php
        }
    }
    ?>
</div>
<script>
    function onToggleSidebar() {
        const sidebar = document.getElementById("bhm-sidebar");
        console.log(sidebar);
        sidebar.classList.toggle("open");
    }
</script>