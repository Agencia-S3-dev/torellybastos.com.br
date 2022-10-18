<div class="img-blog col-md-4 padding-right-15 padding-left-15">
    <?php
    if (has_post_thumbnail()) :
        echo get_the_post_thumbnail($post->ID, "h400");
    else :
    ?>
        <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/img-blog.png" alt="">
        
        <?php endif; ?>
    <h2 class="font-18 pt-3 fw-bold font-18"><?php the_title(); ?></h2>
    <p class="font-14 pt-2 font-16 m-0"><?php the_excerpt(); ?></p>
    <a class="text-decoration-none font-14" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        Ver mais
        <i class="fa-solid fa-arrow-right"></i>
    </a>
</div>