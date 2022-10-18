<?php

//get_header();

//if (have_posts()) : while (have_posts()) : the_post();
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


    <section id="blog-index">
    
        <div class="container text-center padding-top-70 padding-bottom-70">
            <h1 class="text-primary mb-0 fw-light font-32">
                Confira as Últimas Notícias do Blog
            </h1>
        </div>
        <div class="col-lg-4 bg-primary py-5 fundo-blog">
    </div>
        <div class="col-md-10" style="margin: 0 auto;">
            <div class="carousel-index padding-left-25">
                <div class="img-carousel-index align-self-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/imagem-banner-blog.png'); height: 300px;">
                    <p class="font-24 fw-bold text-center">
                        Lorem ipsum dolor sit amet, consetetur<br> sadipscing elitr, sed diam nonumy eirmod
                    </p>
                    <div class="text-center pt-5">
                        <a href="" class="text-decoration-none text-white bg-primary font-16 px-5 py-3 ">Confira a Matéria</a>
                    </div>
                </div>
                <div class="img-carousel-index align-self-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/imagem-banner-blog.png'); height: 300px;">
                    <p class="font-24 fw-bold text-center">
                        Lorem ipsum dolor sit amet, consetetur<br> sadipscing elitr, sed diam nonumy eirmod
                    </p>
                    <div class="text-center pt-5">
                        <a href="" class="text-decoration-none text-white bg-primary font-16 px-5 py-3 ">Confira a Matéria</a>
                    </div>
                </div>
                <div class="img-carousel-index align-self-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/imagem-banner-blog.png'); height: 300px;">
                    <p class="font-24 fw-bold text-center">
                        Lorem ipsum dolor sit amet, consetetur<br> sadipscing elitr, sed diam nonumy eirmod
                    </p>
                    <div class="text-center pt-5">
                        <a href="" class="text-decoration-none text-white bg-primary font-16 px-5 py-3 ">Confira a Matéria</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="margin-top-80 margin-bottom-150">
        <div class="blog col-md-12 container d-flex">
            <?php while (have_posts()) : the_post(); ?>

            <div class=" col-md-9 container d-flex">
                <?php get_template_part("partials/blog-post"); ?>
            </div>
             <?php endwhile; ?>
            <div class="col-md-3">
                <?php get_template_part('partials/blog-aside'); ?>
            </div>
        </div>
    </section>

</main>
<?php
include("footer.php");
//endwhile; 
//endif; 
//get_footer();
?>