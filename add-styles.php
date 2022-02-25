<?php
function tsl_bhm_2022_add_styles(){ ?>
    <style>
        #bhm-home-container {
            background-color: #111;
            color: white;
            padding: 32px 0;
        }

        .bhm-uppercase {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: bold;
            font-family: "Inter", sans-serif;
            text-align: center;
        }

        #bhm-home-container h1 {
            text-transform: uppercase;
            font-family: "Lora", serif;
            text-align: center;
            max-width: 900px;
            margin: 8px auto 48px auto;
            color: white;
            font-weight: 600;
        }

        .bhm-home-columns {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-column-gap: 64px;
        }

        .bhm-home-post {
            display: flex;
            margin-bottom: 32px;
        }

        .bhm-home-post h2 {
            color: white;
            font-size: 14px;
        }

        .bhm-author {
            font-size: 12px;
            opacity: 0.5;
            margin-top: auto;
            margin-bottom: 0;
            color: white;
        }

        .bhm-home-post > div:first-of-type {
            width: 140px;
            flex-shrink: 0;
            margin-right: 16px;
        }

        .bhm-home-post > div:last-of-type {
            display: flex;
            flex-direction: column;
        }

        .bhm-home-middle {
            text-align: center;
        }

        .bhm-home-middle h2 {
            color: white;
            font-size: 20px;
            font-weight: 600;
            margin-top: 24px;
        }

        .bhm-home-middle hr {
            margin: 24px 0;
            background-color: rgba(255, 255, 255, 0.25);
        }

        .bhm-home-about {
            font-family: "PT Serif", serif;
            color: rgba(255, 255, 255, 0.75);
        }
    </style>
    <?php
}
add_action("wp_head","tsl_bhm_2022_add_styles");