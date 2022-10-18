<?php
$image = get_field('banner-blog');
if (!empty($image)) : ?>
    <div class="img-carousel-index align-self-center" style="background-image: url(<?php echo $image['url']; ?>); height: 300px;">
        <p class="font-24 fw-bold text-center">
            <?php the_field('titulo_banner_blog'); ?>
        </p>
        <div class="text-center pt-5">
            <a href="" class=" ">Confira a Matéria</a>
            <a class="text-decoration-none text-white bg-primary font-16 px-5 py-3" href="<?php echo get_field("botao_banner_blog")["url"] ?>" target="<?php echo get_field("botao_banner_blog")["target"] ?>">
                <?php echo get_field('botao_banner_blog')['title']; ?>
            </a>
        </div>
    </div>
<?php endif; ?>