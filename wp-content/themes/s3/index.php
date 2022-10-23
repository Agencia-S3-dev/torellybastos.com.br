<?php

get_header();

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
            <?php
            $blog = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                )
            );
            if (!empty($blog->have_posts())) :
            ?>
                <div class="slider-blog mt-5 position-relative">
                    <?php while ($blog->have_posts()) : $blog->the_post(); ?>
                        <div class="slider-item position-relative" style="background-image: url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID) : get_template_directory_uri()."/assets/img/upload/blog.png"; ?>')">
                            <div class="w-100 px-5 d-flex position-relative h-100 align-items-center">
                                <div class="w-100">
                                    <h4 class="font-24 text-white fw-bold text-center w-100 mb-3">
                                        <?php the_title(); ?>
                                    </h4>
                                    <div class="text-center w-100 w-100">
                                        <a href="" class="btn btn-primary text-white px-5 rounded-0" type="button">Confira a Matéria</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="justify-content-end d-flex d-lg-none mt-4">
                <a class="btn btn-primary text-white" data-bs-toggle="offcanvas" href="#offcanvas2" role="button" aria-controls="offcanvas2">
                    Filtros
                    <i class="fa-solid fa-filter"></i>
                </a>
            </div>
            <div class="row mt-5">
                <div class="col-md-9">
                    <div class="row">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="col-lg-4 mb-4">
                                    <?php get_template_part('partials/card-blog'); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="col-12 mt-5">
                            <?php get_template_part('partials/pagination'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-none d-md-flex">
                    <aside class="w-100">
                        <?php get_template_part('partials/aside'); ?>
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
                <?php get_template_part('partials/aside'); ?>
            </div>
        </div>
    </div>

</main>
<?php
get_footer();
?>