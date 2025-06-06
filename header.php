<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="shortcut icon" href="/wp-content/themes/longtheme/assets/images/logo.png">


    <?php
    wp_head()
    ?>

</head>

<body>

    <header class="header text-center">
        <a class="site-title pt-lg-4 mb-0" href="index.html"><?php echo get_bloginfo('name') ?></a>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }

                ?>
                <img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo">

                <?php

                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu' => 'primary',
                    'container' => '',
                    'items_wrap' => ' <ul class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>',

                ))
                ?>



                <hr>


            </div>
        </nav>

        <?php
        dynamic_sidebar('sidebar-1');
        ?>

    </header>


    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <h1 class="heading"><?php the_title(); ?></h1>
        </header>



        <div class="profile-header">
            <div class="cover-image"></div>
            <div class="profile-content">
                <img src="avatar.jpg" alt="Avatar" class="avatar" />
                <div class="profile-info">
                    <h2>Md Alamin Bali</h2>
                    <p>I am a Technician</p>
                    <div class="socials">
                        <button>📘</button>
                        <button>📸</button>
                        <button>💼</button>
                    </div>
                </div>
                <div class="details">
                    <div><strong>Email:</strong> example@gmail.com</div>
                    <div><strong>Birthday:</strong> 20 August</div>
                    <div><strong>Phone:</strong> +880123456789</div>
                    <div><strong>Location:</strong> Barisal, Bangladesh</div>
                </div>
            </div>
        </div>