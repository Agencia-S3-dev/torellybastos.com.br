<!DOCTYPE html>
<html <?php //language_attributes(); 
        ?>>

<head>
    <meta charset="<?php //echo bloginfo('charset'); 
                    ?>" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="<?php //nomeAgencia(); 
                                    ?>">
    <meta name="copyright" content="© 2022 <?php //nomeAgencia(); 
                                            ?>" />
    <meta name="robots" content="all" />
    <meta name="robots" content="max-image-preview:standard" />
    <meta name="revisit-after" content="7 days" />
    <meta name="theme-color" />
    <meta name="msapplication-navbutton-color" />
    <meta name="msapplication-TileColor" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <title><?php //s3_title(); 
            ?></title>

    <link rel='stylesheet' href='assets/css/app.css' type='text/css' media='all' />

    <base href="<?php //echo home_url(); 
                ?>" />

    <?php //wp_head(); 
    ?>
</head>

<body <?php //body_class(); 
        ?>>

    <?php //wp_body_open(); 
    ?>

    <header id="topo" class="z-index-10">
        <div class="bg-secondary">
            <div class="container">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-white font-14 fw-light" href="#">
                            <span class="text-primary me-1">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            51 3092.7700
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-14 fw-light" href="#">
                            <span class="text-primary me-1">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            torellybastos@torellybastos.com.br
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
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
                            <img src="assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <ul class="nav justify-content-end menu">
                            <li class="nav-item">
                                <a href="" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Áreas de Atuação</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Contato</a>
                            </li>
                        </ul>
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
                    <img src="assets/img/logo-mobile.svg" alt="">
                </div>
                <ul class="nav flex-column mt-3">
                    <li class="nav-item">
                        <a href="" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Áreas de Atuação</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Contato</a>
                    </li>
                </ul>
                <nav class="nav mt-4">
                    <a class="nav-link font-36" aria-current="page" href="#">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a class="nav-link font-36" aria-current="page" href="#">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a class="nav-link font-36" aria-current="page" href="#">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </nav>
            </div>
        </div>
    </div>