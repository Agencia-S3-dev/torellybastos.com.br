<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>
        <main role="main">
            <section class="bg-primary py-5" id="cabecalho">
                <div class="container py-lg-4 text-center text-white">
                    <h2 class=" fw-light"><i><b class="fw-bold">BLOG</b> | TORELLY BASTOS</i></h2>
                </div>
            </section>
            <section class="py-5">
                <div class="container py-lg-5">
                    <div>
                        <a class="text-primary font-14 fw-light text-decoration-none abrirModal" href="<?php echo home_url("blog"); ?>">
                            <i class="fa-solid fa-arrow-left me-1"></i>
                            Voltar para Blog
                        </a>
                    </div>
                    <div class="justify-content-end d-flex d-lg-none">
                        <a class="btn btn-primary text-white" data-bs-toggle="offcanvas" href="#offcanvas2" role="button" aria-controls="offcanvas2">
                            Filtros
                            <i class="fa-solid fa-filter"></i>
                        </a>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-9">
                            <div class="pe-0 pe-lg-3">
                                <h1 class="font-32 fw-light text-primary">
                                    <?php the_title(); ?>
                                </h1>
                                <div class="text-secondary font-14 mt-3">
                                    <i class="fa-solid fa-calendar me-1 text-primary"></i>
                                    00 / 00 / 0000
                                </div>
                                <article class="mt-5">
                                    <?php the_content(); ?>
                                </article>
                                <div class="mt-5">
                                    <?php the_tags(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-none d-md-flex">
                            <aside class="w-100">
                                <?php get_template_part('partials/aside'); ?>
                            </aside>
                        </div>
                    </div>
                    <?php
                    $blog = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                        )
                    );
                    if (!empty($blog->have_posts())) :
                    ?>
                        <div class="border-top border-primary mt-5 pt-5">
                            <h3 class="fw-light text-primary font-32">Você pode se interessar também</h3>
                            <div class="row mt-5">
                                <?php while ($blog->have_posts()) : $blog->the_post(); ?>
                                    <div class="col-lg-3 mb-4 mb-lg-3">
                                        <?php get_template_part('partials/card-blog'); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="text-center w-100 mt-5">
                                <a href="<?php echo home_url("blog"); ?>" class="btn btn-primary text-white px-5 rounded-0" title="Ver todas as postagens">Ver todas as postagens</a>
                            </div>
                        </div>
                    <?php endif; ?>
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
                        <?php get_template_part('partials/aside'); ?>
                    </div>
                </div>
            </div>

        </main>
<?php
    endwhile;
endif;
get_footer();
?>