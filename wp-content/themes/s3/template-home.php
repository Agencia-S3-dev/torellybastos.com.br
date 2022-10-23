<?php

/*
  Template Name: Página Home
*/

get_header();

?>
<main role="main" id="modeloHome" class="modeloHome">
  <?php
  $banner = new WP_Query(
    array(
      'post_type' => 'banners',
      'posts_per_page' => -1,
    )
  );
  if (!empty($banner->have_posts())) :
  ?>
    <div id="banner">
      <?php while ($banner->have_posts()) : $banner->the_post(); ?>
        <div class="banner" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, '1600x768'); ?>')">
          <div class="container">
            <div class="text-white position-absolute banner-conteudo">
              <div class="position-relative z-index-2 d-table d-lg-block mx-auto">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <section id="sobre" class="py-5 position-relative z-index-5">
        <div class="container py-lg-5">
          <div class="carousel position-relative mt-5 z-index-2">
            <?php
            $images = get_field('galeria_sobre');
            if ($images) : ?>
              <?php foreach ($images as $image) : ?>
                <div class="img px-sm-3">
                  <img src="<?php echo esc_url($image['sizes']['350x230']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <div class="row mt-5">
            <div class="col-lg-3 mb-5 mb-lg-0">
              <div class="pe-lg-4">
                <div class="text-primary textoDestaque font-32 fw-light border-top border-bottom py-4 border-primary">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
              <div class="font-14 text-secondary">
                <?php the_field("texto_1"); ?>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="font-14 text-secondary">
                <?php the_field("texto_2"); ?>
              </div>
            </div>
          </div>

          <div class="mt-5 pt-5">
            <div class="tituloMissao bg-primary py-3">
              <h3 class="text-white text-uppercase font-15 text-center mb-0">NORTEADORES ESTRATÉGICOS</h3>
            </div>
            <div class="border-pai p-lg-5 bg-white">
              <div class="row px-lg-4">

                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="border-filha px-lg-3 px-5 py-4">
                    <div class="text-primary font-30">
                      <?php the_field("icone_missao"); ?>
                    </div>
                    <h4 class="text-secondary font-16 text-uppercase fw-bold"><?php the_field("titulo_missao"); ?></h4>
                    <div class="text-secondary font-14">
                      <?php the_field("texto_missao"); ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="border-filha px-lg-3 px-5 py-4">
                    <div class="text-primary font-30">
                      <?php the_field("icone_visao"); ?>
                    </div>
                    <h4 class="text-secondary font-16 text-uppercase fw-bold"><?php the_field("titulo_visao"); ?></h4>
                    <div class="text-secondary font-14">
                      <?php the_field("texto_visao"); ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="border-filha px-lg-3 px-5 py-4">
                    <div class="text-primary font-30">
                      <?php the_field("icone_valores"); ?>
                    </div>
                    <h4 class="text-secondary font-16 text-uppercase fw-bold"><?php the_field("titulo_valores"); ?></h4>
                    <div class="text-secondary font-14">
                      <?php the_field("texto_valores"); ?>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
  <?php
    endwhile;
  endif;
  ?>

  <?php
  $equipe = new WP_Query(
    array(
      'post_type' => 'equipe',
      'posts_per_page' => -1,
    )
  );
  if (!empty($equipe->have_posts())) :
  ?>
    <section id="equipe">
      <div class="container position-relative">
        <div>
          <h2 class="font-32 text-primary fw-light text-center">Conheça a Equipe</h2>
        </div>
        <div class="listaPessoas mt-5 position-relative">
          <div class="row position-relative z-index-9 mx-0 carousel-equipe">
            <?php while ($equipe->have_posts()) : $equipe->the_post(); ?>
              <?php get_template_part('partials/card-equipe'); ?>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <?php
  $gestao = new WP_Query(
    array(
      'post_type' => 'gestao',
      'posts_per_page' => -1,
    )
  );
  if (!empty($gestao->have_posts())) :
  ?>
    <section id="abrangente" class="py-5">
      <div class="container py-lg-5 mt-5 mt-lg-0">
        <h2 class="text-center text-primary font-32 fw-light">
          Gestão Abrangente
        </h2>
        <div class="row mt-5">
          <?php while ($gestao->have_posts()) : $gestao->the_post(); ?>
            <div class="col-lg-4 mb-4">
              <div class="border border-primary p-4">
                <div class="d-flex w-100 row align-items-center">
                  <div class="col-md-3 mb-2 mb-md-0 text-md-center text-start">
                    <div class="text-primary font-30 ">
                      <?php the_field("icone"); ?>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="font-16 fw-bold text-secondary text-left text-uppercase">
                      <?php the_title(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php
  $areas = new WP_Query(
    array(
      'post_type' => 'areas',
      'posts_per_page' => -1,
    )
  );
  if (!empty($areas->have_posts())) :
  ?>
    <section id="areas" class="py-5">
      <div class="container position-relative py-lg-5 mt-5 mt-lg-0">
        <h2 class="text-center text-primary font-32 fw-light">
          Áreas de Atuação
        </h2>
        <div class="row mt-5 carousel-areas">
          <?php while ($gestao->have_posts()) : $gestao->the_post(); ?>
            <div class="col-lg-3 mb-4 carousel-item-areas">
              <div class=" p-4">
                <div class="d-flex w-100 row align-items-center">
                  <div class="col-md-3 mb-2 mb-md-0 text-md-center text-start">
                    <div class="text-primary font-30 ">
                      <?php the_field("icone"); ?>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="font-16 fw-bold text-secondary text-left text-uppercase">
                      <?php the_title(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php
  $clientes = new WP_Query(
    array(
      'post_type' => 'clientes',
      'posts_per_page' => -1,
    )
  );
  if (!empty($clientes->have_posts())) :
  ?>
    <section id="clientes" class="py-5">
      <div class="container py-lg-5">
        <h2 class="text-center text-primary font-32 fw-light">
          Clientes
        </h2>
        <div class="mt-4 carousel-cliente">
          <?php while ($clientes->have_posts()) : $clientes->the_post(); ?>
            <div class="px-2 img">
              <?php
              if (has_post_thumbnail()) :
                echo get_the_post_thumbnail($post->ID, "200x200");
              endif;
              ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <?php
  $blog = new WP_Query(
    array(
      'post_type' => 'post',
      'posts_per_page' => 3,
    )
  );
  if (!empty($blog->have_posts())) :
  ?>
    <section id="blog" class="py-5">
      <div class="container py-lg-5">
        <div class="row">
          <div class="col-lg-3 mb-3 mb-lg-3">
            <div class="text-primary textoDestaque text-center text-lg-start font-32 fw-light ">
              <p>
                Confira as Últimas <br> Notícias do Blog
              </p>
            </div>
          </div>
          <?php while ($blog->have_posts()) : $blog->the_post(); ?>
            <div class="col-lg-3 mb-4 mb-lg-3">
              <?php get_template_part('partials/card-blog'); ?>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="text-center w-100 mt-5">
          <a href="<?php echo home_url("blog"); ?>" class="btn btn-primary text-white px-5 rounded-0" title="Conheça o Blog">Conheça o Blog</a>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section id="contato" class="py-5 bg-secondary">
    <div id="contatoContainer" class="container py-lg-5">
      <div class="row d-flex flex-row-reverse">
        <div class="col-lg-8">
          <div>
            <h2 class="text-start text-primary font-32 fw-light">
              Contato
            </h2>
            <?php echo do_shortcode(get_field('formulario', 'option')); ?>
          </div>
        </div>
        <div class="col-lg-4 mapa">
          <iframe id="mapa" height="356" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.62086728416!2d-51.18892738454642!3d-30.01904098189159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951979d0fd164371%3A0xc882ec3c2ee7465c!2sR.%20Dom%20Pedro%20II%2C%201351%20-%203%C2%BA%20Andar%20-%20S%C3%A3o%20Jo%C3%A3o%2C%20Porto%20Alegre%20-%20RS%2C%2090550-143!5e0!3m2!1spt-BR!2sbr!4v1666293927411!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <div class="bg-secondary">
    <div class="container">
      <hr class="border-primary m-0">
    </div>
  </div>

</main>
<?php
get_footer();
?>