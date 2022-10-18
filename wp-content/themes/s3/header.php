<!DOCTYPE html>
<html <?php language_attributes();
        ?>>

<head>
    <meta charset="<?php echo bloginfo('charset');
                    ?>" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="<?php nomeAgencia();
                                    ?>">
    <meta name="copyright" content="© 2022 <?php nomeAgencia();
                                            ?>" />
    <meta name="robots" content="all" />
    <meta name="robots" content="max-image-preview:standard" />
    <meta name="revisit-after" content="7 days" />
    <meta name="theme-color" />
    <meta name="msapplication-navbutton-color" />
    <meta name="msapplication-TileColor" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <title><?php s3_title();
            ?></title>

    <base href="<?php echo home_url();
                ?>" />

    <?php wp_head();
    ?>
</head>

<body <?php body_class();
        ?> data-url="<?php echo home_url(); ?>" data-current="<?php echo home_url($wp->request) ?>">

    <?php wp_body_open();
    ?>

    <header id="topo" class=" bg-secondary">
        <!--MENU DESKTOP-->
        <div class="second-nav bg-dark d-none d-lg-block">
            <div class="container py-2 d-flex justify-content-end gap-4">
                <div class="text-white font-14">
                    <?php
                    if (get_option('contato_fone') != "") {
                    ?>
                        <a class="px-5 px-lg-0 text-white d-flex text-decoration-none text-primary" href="<?php echo get_option('contato_fone_link'); ?>" target="_blank">
                            <i class="fa-solid fa-phone-volume text-primary px-2 align-self-center"></i> 
                            <?php echo get_option('contato_fone'); ?>
                        </a>
                    <?php
                    }
                    ?>
                </div>
                <div class="text-white font-14 font">
                    <?php
                    if (get_option('contato_email') != "") {
                    ?>
                        <a class="px-5 px-lg-0 text-white d-flex text-decoration-none text-primary" href="mailto:<?php echo get_option('contato_email'); ?>">
                            <i class="fa-solid fa-envelope text-primary px-2 align-self-center"></i> 
                            <?php echo get_option('contato_email'); ?>
                        </a>
                    <?php
                    }
                    ?>
                </div>
                <div class="text-white font-16 align-self-center">
                    <?php if (have_rows('redes_sociais', 'option')) : ?>
                        <ul class="nav">
                            <?php
                            while (have_rows('redes_sociais', 'option')) : the_row();
                            ?>
                                <li class="nav-item">
                                    <a href="<?php echo get_sub_field("link")["url"] ?>" class="icon-span text-primary px-2" target="<?php echo get_sub_field("link")["target"] ?>">
                                        <?php the_sub_field("icone"); ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="py-lg-4 p-0 bg-shadow">
            <div class="container d-flex">
                <div class="col-md-6">
                    <div class="logo-header">
                        <a href="">
                            <img class="brand" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 d-none d-lg-block">
                    <div class="">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location'    => 'menu-desktop',
                                    'menu_class'        => 'nav-link flex-column ',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ));
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-block d-lg-none p-4">
                    <div id="menu-mobile" class="d-flex d-lg-none">
                        <a class="btn bg-primary" href="javascript:void(0)">
                            <i class="fa-solid fa-bars text-white font-22 mt-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--MENU DESKTOP / FIM-->

        <!--MENU MOBILE-->
        <div id="menuMobile" class="position-fixed start-0 top-0 w-100 h-100 bg-secondary">
            <button class="closeMenu btn btn-white text-primary position-absolute end-0 top-0 me-2 mt-2 font-20">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="d-flex position-relative w-100 h-100 align-items-center menuMobile">
                <div class="w-100 px-5 text-center">
                    <img src="assets/img/Logo.svg" alt="">
                    <ul class="nav flex-column text-center mt-3 gap-4">
                        <li class="nav-item">
                            <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'menu-desktop',
                                'menu_class'        => 'nav-link flex-column ',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ));
                            ?>
                        </li>
                    </ul>

                    <div class="d-flex justify-content-center mt-4">
                        <?php if (have_rows('redes_sociais', 'option')) : ?>
                            <ul class="nav mt-3">
                                <?php
                                while (have_rows('redes_sociais', 'option')) : the_row();
                                ?>
                                    <li class="nav-item">
                                        <a href="<?php echo get_sub_field("link")["url"] ?>" class="icon-span text-primary p-2" target="<?php echo get_sub_field("link")["target"] ?>">
                                            <?php the_sub_field("icone"); ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--MENU MOBILE / FIM-->
    </header>