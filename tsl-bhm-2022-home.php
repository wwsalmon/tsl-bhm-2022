<?php
class tsl_bhm_2022_home extends WP_Widget{
    function __construct(){
        parent:: __construct(
            "tsl_bhm_2022_home", "TSL Black History Month Homepage Widget", array("description" => "Featuring BHM stories on homepage")
        );
    }

    public function widget($args, $instance){
        echo $args["before_widget"];
        echo <<<'EOD'
<div id="bhm-home-container">
    <p class="bhm-uppercase">Black History Month 2022</p>
    <a href="">
        <h1>Black Studies, Bombings and Bsomething: Claremont’s forgotten Black History</h1>
    </a>
    <div class="bhm-home-columns">
        <div>
            <a class="bhm-home-post" href="">
                <div>
                    <img src="https://blinq.art/blog/wp-content/uploads/2018/04/blinq-art-black-white-default.jpg" alt="Lorem ipsum dolor et hello">
                </div>
                <div>
                    <h2>Lorem ipsum dolor et hello</h2>     
                    <p class="bhm-author">Mariana Duran</p>           
                </div>
            </a>   
            <a class="bhm-home-post" href="">
                <div>
                    <img src="https://blinq.art/blog/wp-content/uploads/2018/04/blinq-art-black-white-default.jpg" alt="Lorem ipsum dolor et hello">
                </div>
                <div>
                    <h2>Lorem ipsum dolor et hello</h2>     
                    <p class="bhm-author">Mariana Duran</p>           
                </div>
            </a>     
        </div>
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
            <a class="bhm-home-post" href="">
                <div>
                    <img src="https://blinq.art/blog/wp-content/uploads/2018/04/blinq-art-black-white-default.jpg" alt="Lorem ipsum dolor et hello">
                </div>
                <div>
                    <h2>Lorem ipsum dolor et hello</h2>     
                    <p class="bhm-author">Mariana Duran</p>           
                </div>
            </a>   
            <a class="bhm-home-post" href="">
                <div>
                    <img src="https://blinq.art/blog/wp-content/uploads/2018/04/blinq-art-black-white-default.jpg" alt="Lorem ipsum dolor et hello">
                </div>
                <div>
                    <h2>Lorem ipsum dolor et hello</h2>     
                    <p class="bhm-author">Mariana Duran</p>           
                </div>
            </a>     
        </div>
    </div>
</div>
EOD;
        echo $args["after_widget"];
    }
}

function tsl_bhm_2022_widget(){
    register_widget("tsl_bhm_2022_home");
}

add_action("widgets_init", "tsl_bhm_2022_widget");