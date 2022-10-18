<?php

//get_header();

if (have_posts()) : while (have_posts()) : the_post();
        include("header.php");
?>
        <main role="main">
            <section class="bg-primary padding-top-80 padding-bottom-80">
                <div class="container text-center">
                    <h1 class="text-white mb-0 fw-light">
                        <strong>BLOG</strong> | TORELLY BASTOS
                    </h1>
                </div>
            </section>
            <section class="margin-top-80 margin-bottom-150">
                <div class=" col-md-12 container mb-5">
                    <a class="text-decoration-none font-14" href="<?php echo home_url("blog"); ?>">
                        <i class="fa-solid fa-arrow-left"></i>
                        Voltar para Blog
                    </a>
                </div>
                <div class="blog col-md-12 container d-flex">
                    <div class="col-md-9 container d-flex">
                        <div class="img-blog col-md-12">
                            <h1 class="font-32 text-primary fw-light"><?php the_title(); ?></h1>
                            <p><i class="fa-solid text-primary fa-calendar-days"></i> <?php the_date(); ?></p>

                            <?php
                            if (has_post_thumbnail()) :
                                echo get_the_post_thumbnail($post->ID, "");
                            else :
                            ?>
                                <img class="w-100 mt-5" src="<?php echo get_template_directory_uri() ?>/assets/img/img-blog.png" alt="">

                            <?php endif; ?>
                            <p class="font-14 pt-2 font-16 mb-5"><?php the_excerpt(); ?></p>
                            <div class="d-flex">
                                <div class="col-md-6">
                                    <a class="text-decoration-none font-14" href="#">
                                        Tag#01, Tag#02, Tag#03
                                    </a>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end ">
                                    <p>Compartilhe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <?php get_template_part('partials/blog-aside'); ?>
                    </div>
                </div>
                <div class=" col-md-12 container mt-5">
                    <hr class="hr-blog">
                </div>

                <div class=" col-md-12 container d-flex mt-5">
                    <h1 class="font-32 text-primary fw-light">Você pode se interessar também</h1>
                </div>
                <div class=" col-md-12 container d-flex mt-5">
                    <?php get_template_part("partials/blog-post"); ?>
                </div>
                <div class=" py-2 text-center mt-5">
                    <a href="<?php echo home_url("blog"); ?>" class="text-decoration-none text-white bg-primary font-16 px-5 py-3 ">Ver todas as postagens</a>
                </div>
                </div>
            </section>
        </main>
<?php
        include("footer.php");
    endwhile;
endif;
//get_footer();
?>