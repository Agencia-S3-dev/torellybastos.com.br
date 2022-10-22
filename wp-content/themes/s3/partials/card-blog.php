<div>
    <div class="img">
        <?php
        if (has_post_thumbnail()) :
            echo get_the_post_thumbnail($post->ID, "350x230");
        else :
        ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/upload/blog.png" alt="">
        <?php endif; ?>
    </div>
    <h3 class="font-18 text-secondary fw-bold mt-3 mb-3">
        <?php the_title(); ?>
    </h3>
    <div class="text-secondary fw-light font-14">
        <?php the_excerpt(); ?>
    </div>
    <a class="text-primary font-14 fw-light text-decoration-none abrirModal" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        Ver mais
        <i class="fa-solid fa-arrow-right ms-1"></i>
    </a>
</div>