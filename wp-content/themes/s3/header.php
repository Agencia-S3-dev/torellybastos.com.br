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

<?php
global $wp;
?>

<body <?php body_class();
        ?> data-url="<?php echo home_url(); ?>" data-current="<?php echo home_url($wp->request) ?>">

    <?php wp_body_open();
    ?>
    `
    <header id="topo" class="z-index-10">
        <div class="bg-secondary">
            <div class="container">
                <ul class="nav justify-content-end">
                    <!-- <?php //if (have_rows('informacoes_da_empresa', 'option')) : ?>
                        <?php
 //                       while (have_rows('informacoes_da_empresa', 'option')) : the_row();
                        ?>
                            <li class="nav-item">
                                <a href="<?php //echo get_sub_field("link")["url"] ?>" class="nav-link text-white font-14 fw-light" target="<?php //echo get_sub_field("link")["target"] ?>">
                                    <span class="text-primary me-1">
                                        <?php //the_sub_field("icone"); ?>
                                    </span>
                                    <?php //echo get_sub_field("link")["title"] ?>
                                </a>
                            </li>
                        <?php //endwhile; ?>
                    <?php //endif; ?> -->

                    <?php if (have_rows('redes_sociais', 'option')) : ?>
                        <?php
                        while (have_rows('redes_sociais', 'option')) : the_row();
                        ?>
                            <li class="nav-item">
                                <a href="<?php echo get_sub_field("link")["url"] ?>" class="nav-link px-2" target="<?php echo get_sub_field("link")["target"] ?>">
                                    <?php the_sub_field("icone"); ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="topo">
            <div class="container">
                <div class="row d-flex align-items-center w-100 py-4">
                    <div class="col-4 d-block d-lg-none">
                        <div id="menu-mobile" class="justify-content-center d-flex d-lg-none">
                            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                <i class="fa-solid fa-bars text-white font-22 mt-1"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-8 text-end text-lg-start">
                        <a id="brand" href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'menu-desktop',
                            'menu_class'        => 'nav justify-content-end menu navMenuScroll',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="offcanvas offcanvas-start bg-secondary" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header d-flex justify-content-end d-lg-none">
            <button type="button" class="btn-close bg-secondary text-primary" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fa-solid fa-xmark font-24 text-primary"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div>
                <div class="ps-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mobile.svg" alt="">
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'menu-desktop',
                    'menu_class'        => 'nav flex-column mt-3 navMenuScroll',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
                <?php if (have_rows('redes_sociais', 'option')) : ?>
                    <nav class="nav mt-4">
                        <?php
                        while (have_rows('redes_sociais', 'option')) : the_row();
                        ?>
                            <a href="<?php echo get_sub_field("link")["url"] ?>" class="text-white nav-link font-36" target="<?php echo get_sub_field("link")["target"] ?>">
                                <?php the_sub_field("icone"); ?>
                            </a>
                        <?php endwhile; ?>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
    </div>