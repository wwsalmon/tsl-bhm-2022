<?php
function tsl_bhm_2022_add_styles(){ ?>
    <style>
        body {
            overflow-x: hidden;
        }

        .bhm-container {
            max-width: 1100px;
            padding-left: 16px;
            padding-right: 16px;
            box-sizing: content-box;
            margin: 0 auto;
        }

        #bhm-home-container {
            background-color: #111;
            color: white;
            padding: 32px 0;
            margin-bottom: 32px;
            position: relative;
        }

        #bhm-home-container::before {
            content: "";
            background-color: #111;
            position: absolute;
            top: 0;
            bottom: 0;
            width: 200vw;
            left: -50vw;
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
            margin: 8px auto 48px auto;
            color: white;
            font-weight: 600;
        }

        @media (min-width: 600px) {
            #bhm-home-container h1 {
                font-size: 48px;
            }
        }

        .bhm-home-columns {
            display: grid;
        }

        @media (min-width: 900px) {
            .bhm-home-columns {
                grid-template-columns: repeat(3, 1fr);
                grid-column-gap: 64px;
            }

            .bhm-home-columns > div:first-of-type {
                grid-row: 1;
            }

            .bhm-home-middle {
                grid-column: 2;
            }
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

        .bhm-home-post img {
            width: 140px;
            height: 100px;
            object-fit: cover;
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
            margin-bottom: 16px;
        }

        .bhm-navbar {
            position: fixed;
            top: 0;
            left: 0;
            height: 64px;
            background-color: #111;
            color: white;
            width: 100%;
            display: flex;
            align-items: center;
            padding: 0 16px;
        }

        .bhm-navbar-main {
            display: flex;
            align-items: center;
        }

        .bhm-navbar-proj-home {
            color: white;
            font-size: 12px;
            font-family: "Lora", serif;
            font-weight: 500;
            border-left: 1px solid rgba(255, 255, 255, 0.25);
            margin-left: 8px;
            padding-left: 16px;
            text-transform: uppercase;
            width: 160px;
        }

        @media (min-width: 600px) {
            .bhm-navbar-proj-home {
                font-size: 16px;
                width: auto;
            }
        }

        .bhm-navbar-main img {
            width: 16px;
            height: 16px;
        }

        .bhm-navbar-site-home {
            padding: 6px 12px;
            border-radius: 4px;
        }

        .bhm-navbar-site-home:hover {
            background-color: rgba(255, 255, 255, 0.25);
        }

        #bhm-main {
            padding: 96px 0 24px 0;
            background-color: #111;
            color: white;
        }

        #bhm-main-top {
            text-align: center;
        }

        #bhm-main h1{
            font-size: 42px;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            max-width: 700px;
            margin: 0 auto;
            font-family: "Lora", serif;
        }

        @media (min-width: 600px) {
            #bhm-main h1{
                font-size: 64px;
            }
        }

        h2.bhm-main-title {
            font-size: 32px;
            color: white;
            font-weight: 600;
        }

        .bhm-main-subtitle {
            font-size: 32px;
            color: white;
            font-weight: 500;
            font-family: "Lora", serif;
            margin: 32px 0;
        }

        .bhm-main-about {
            font-family: "PT Serif", serif;
            margin: 32px auto;
            font-size: 20px;
            max-width: 520px;
            color: rgba(255, 255, 255, 0.75);
        }

        #bhm-main .bhm-home-columns {
            margin-top: 64px;
        }

        .bhm-navbar-right {
            margin-left: auto;
        }

        #bhm-sidebar {
            width: 300px;
            height: 100%;
            position: fixed;
            right: -300px;
            top: 0;
            background-color: white;
            padding: 16px;
            transition: right 0.2s ease;
        }

        #bhm-sidebar.open {
            right: 0;
        }

        .bhm-sidebar-top {
            display: flex;
        }

        .bhm-sidebar-top button {
            margin-left: auto;
        }

        #bhm-sidebar a:not(:last-of-type) {
            display: block;
            padding-bottom: 12px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.25);
            margin: 12px 0;
        }
    </style>
    <?php
}
add_action("wp_head","tsl_bhm_2022_add_styles");