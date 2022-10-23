<div class="col-lg-6 carousel-item-equipe px-0">
  <div class="row bg-white mx-0 <?php echo get_field("reverse") ? "d-flex flex-row-reverse" : ""; ?>">
    <div class="col-md-6 px-0">
      <div class="img">
        <img src="<?php echo get_the_post_thumbnail_url($post->ID, '278x278'); ?>" alt="">
      </div>
    </div>
    <div class="col-md-6 px-0">
      <div class="position-relative w-100 h-100 d-flex align-items-center">
        <div class="px-4 py-4">
          <a class="text-primary font-24" aria-current="page" href="#">
            <i class="fa-brands fa-linkedin"></i>
          </a>
          <h3 class="font-24 text-secondary fw-bold">
            <?php the_title(); ?>
          </h3>
          <p class="font-14 text-secondary">
            <?php the_field("funcao"); ?>
          </p>
          <a 
          class="text-primary font-14 fw-light text-decoration-none abrirModal" 
          href="javascript:void(0)" 
          data-titulo="<?php the_title(); ?>" 
          data-setor="<?php the_field("funcao"); ?>" 
          data-link="<?php the_field("linkedin"); ?>" 
          data-descricao="<?php the_title(); ?>" 
          data-img="<?php echo get_the_post_thumbnail_url($post->ID, '278x278'); ?>">
            Saiba mais
            <i class="fa-solid fa-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>