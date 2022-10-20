<?php

//get_header();

//if (have_posts()) : while (have_posts()) : the_post();
include("header.php");
?>
<main role="main">
    <section class="bg-primary py-5" id="cabecalho">
        <div class="container py-lg-4 text-center text-white">
            <h1 class=" fw-light"><i><b class="fw-bold">BLOG</b> | TORELLY BASTOS</i></h1>
        </div>
    </section>
    <section class="py-5">
        <div class="container py-lg-5">
            <h2 class="font-32 text-primary fw-light text-center">Confira as Últimas Notícias do Blog</h2>
            <div class="justify-content-end d-flex d-lg-none mt-4">
                <a class="btn btn-primary text-white" data-bs-toggle="offcanvas" href="#offcanvas2" role="button" aria-controls="offcanvas2">
                    Filtros
                    <i class="fa-solid fa-filter"></i>
                </a>
            </div>
            <div class="row mt-5">
                <div class="col-md-9">
                    <div class="row">
                        <?php
                        for ($i = 1; $i <= 9; $i++) {
                        ?>
                            <div class="col-lg-4 mb-4">
                                <?php include("partials/card-blog.php") ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-3 d-none d-md-flex">
                    <aside class="w-100">
                        <?php include("partials/aside.php"); ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>


    <div class="offcanvas offcanvas-start bg-white" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvas2">
        <div class="offcanvas-header d-flex justify-content-end d-lg-none">
            <button type="button" class="btn-close bg-white text-secondary" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fa-solid fa-xmark font-24 text-primary"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div>
                <?php include("partials/aside.php"); ?>
            </div>
        </div>
    </div>

</main>
<?php
include("footer.php");
//endwhile; 
//endif; 
//get_footer();
?>