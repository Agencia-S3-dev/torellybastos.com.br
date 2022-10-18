<?php

/*
  Template Name: Página Home
*/

get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>
<main role="main">
  <section id="carousel-principal">

    <div class="carousel-principal" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/carousel.png');">
      <div class="container">
        <div class="d-flex w-100 h-100 position-relative justify-content-start align-items-center">
          <div class="block align-self-end col-md-6 margin-left-200">
            <h1 class="font-40 font font-italic">
              Há 25 anos<br>
              atendendo <strong class="font-weight-bold">clientes<br>
                empresariais
              </strong>
            </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-principal" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/carousel.png');">
      <div class="container">
        <div class="d-flex w-100 h-100 position-relative justify-content-start align-items-center">
          <div class="block align-self-end col-md-6 margin-left-200">
            <h1 class="font-40 font font-italic">
              Há 25 anos<br>
              atendendo <strong class="font-weight-bold">clientes<br>
                empresariais
              </strong>
            </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-principal" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/carousel.png');">
      <div class="container">
        <div class="d-flex w-100 h-100 position-relative justify-content-start align-items-center">
          <div class="block align-self-end col-md-6 margin-left-200">
            <h1 class="font-40 font font-italic">
              Há 25 anos<br>
              atendendo <strong class="font-weight-bold">clientes<br>
                empresariais
              </strong>
            </h1>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section id="fundo-galeria">
    <div class="col-lg-6 bg-primary py-5 fundo-galeria">
    </div>
  </section>

  <section id="galeria" class="">
    <div class="col-md-10" style="margin: 0 auto;">
      <div class="carousel-galeria">
        <div class="img-carousel-blog col-md-4 padding-right-15 padding-left-15">
          <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/img-blog.png" alt="">
        </div>
        <div class="img-carousel-blog col-md-4 padding-right-15 padding-left-15">
          <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/img-blog.png" alt="">
        </div>
        <div class="img-carousel-blog col-md-4 padding-right-15 padding-left-15">
          <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/img-blog.png" alt="">
        </div>
        <div class="img-carousel-blog col-md-4 padding-right-15 padding-left-15">
          <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/img-blog.png" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-10 d-flex mb-5" style="margin: 0 auto;">
      <div class="col-md-4">
        <div class="">
          <hr class="hr-galeria">
          <p class="text-primary font-32">Experiência,<br> visão<br> estratégica<br> e olhar para<br> o futuro</p>
          <hr class="hr-galeria">
        </div>
      </div>
      <div class="col-md-8 d-flex">
        <div class="col-md-6 padding-right-30">
          <p class="font-14 pt-2 m-0">A TORELLY BASTOS ADVOGADOS ASSOCIADOS tem uma trajetória de mais de vinte anos de dedicação no atendimento de clientes empresariais. Com atuação nacional, está sediada na cidade de Porto Alegre/RS, com excelente localização geográfica, situando-se em ponto estratégico e nobre da Capital, onde são concentrados os atos gerenciais e realizada a coordenação de todas as operações. Escritório sempre atualizado, com profissionais especializados, oportunizando excelentes resultados nas frentes de atuação.</p>
        </div>
        <div class="col-md-6">
          <p class="font-14 pt-2 m-0">Com recursos tecnológicos de ponta, possui uma estrutura organizacional e estratégica que permite estar preparado para o atendimento das mais diversas necessidades dos seus clientes, administrativas e judiciais. Referência no seguimento do Direito do Seguro, Previdência Privada, Responsabilidade Civil, Relações de Consumo, também atua no Direito Bancário, Trabalhista, Tributário, Recuperação Judicial e Ambiental.</p>
        </div>
      </div>
    </div>
    <div class="col-md-7 text-center pt-5" style="margin: 0 auto;">
      <p href="" class="text-decoration-none text-white bg-primary font-16 px-5 py-3 ">NORTEADORES ESTRATÉGICOS</p>
    </div>
    <div class="container col-md-12 d-flex py-5 px-5">
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/people-arrows.png" alt="">
        <h2 class="fw-bold">MISSÃO</h2>
        <p class="font-16  m-0">Nosso maior compromisso é construir soluções inovadoras para nossos parceiros de negócios</p>
      </div>
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/people-arrows.png" alt="">
        <h2 class="fw-bold">MISSÃO</h2>
        <p class="font-16  m-0">Nosso maior compromisso é construir soluções inovadoras para nossos parceiros de negócios</p>
      </div>
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/people-arrows.png" alt="">
        <h2 class="fw-bold">MISSÃO</h2>
        <p class="font-16  m-0">Nosso maior compromisso é construir soluções inovadoras para nossos parceiros de negócios</p>
      </div>
    </div>
  </section>

  <section id="abrangente" class="">
    <div class="pt-5 mt-5 mb-5">
      <div class="py-2 text-center mb-5">
        <h2 class="btn text-primary font-32">Gestão Abrangente</h2>
      </div>
      <div class="container col-md-12 d-flex justify-content-center">
        <div class="col-md-4 d-flex px-4 py-4 mx-3 card-abrangente">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/people-arrows.png" alt="">
          <span class="px-3"></span>
          <p class="font-16 fw-bold m-0">ATENDIMENTO<br> PERSONALIZADO</p>
        </div>
        <div class="col-md-4 d-flex px-4 py-4 mx-3 card-abrangente">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/people-arrows.png" alt="">
          <span class="px-3"></span>
          <p class="font-16 fw-bold m-0">ATENDIMENTO<br> PERSONALIZADO</p>
        </div>
        <div class="col-md-4 d-flex px-4 py-4 mx-3 card-abrangente">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/people-arrows.png" alt="">
          <span class="px-3"></span>
          <p class="font-16 fw-bold m-0">ATENDIMENTO<br> PERSONALIZADO</p>
        </div>
      </div>
      <div class="container col-md-12 pt-5 d-flex justify-content-center">
        <div class="col-md-4 d-flex px-4 py-4 mx-3 card-abrangente">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/people-arrows.png" alt="">
          <span class="px-3"></span>
          <p class="font-16 fw-bold m-0">ATENDIMENTO<br> PERSONALIZADO</p>
        </div>
        <div class="col-md-4 d-flex px-4 py-4 mx-3 card-abrangente">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/people-arrows.png" alt="">
          <span class="px-3"></span>
          <p class="font-16 fw-bold m-0">ATENDIMENTO<br> PERSONALIZADO</p>
        </div>
        <div class="col-md-4 d-flex px-4 py-4 mx-3 card-abrangente">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/people-arrows.png" alt="">
          <span class="px-3"></span>
          <p class="font-16 fw-bold m-0">ATENDIMENTO<br> PERSONALIZADO</p>
        </div>
      </div>
    </div>
  </section>

  <section id="atuacao" class="">
    <div class="pt-5 mt-5 mb-5" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/fundo-atuacao.png'); background-size: cover; height: 700px;">
      <div class="py-2 text-center mb-5">
        <h2 class="btn text-primary font-32">Áreas de Atuação</h2>
      </div>
      <div class="container col-md-12 d-flex">
        <div class="col-md-3 d-flex justify-content-center">
          <i class="fa-solid fa-check"></i><span class="px-2"></span>
          <p class="font-16 fw-bold">SEGUROS</p>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
          <i class="fa-solid fa-check"></i><span class="px-2"></span>
          <p class="font-16 fw-bold">SEGUROS</p>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
          <i class="fa-solid fa-check"></i><span class="px-2"></span>
          <p class="font-16 fw-bold">SEGUROS</p>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
          <i class="fa-solid fa-check"></i><span class="px-2"></span>
          <p class="font-16 fw-bold">SEGUROS</p>
        </div>
      </div>
      <div class="container col-md-12 d-flex mt-4">
        <div class="col-md-3 d-flex justify-content-center">
          <i class="fa-solid fa-check"></i><span class="px-2"></span>
          <p class="font-16 fw-bold">SEGUROS</p>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
          <i class="fa-solid fa-check"></i><span class="px-2"></span>
          <p class="font-16 fw-bold">SEGUROS</p>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
          <i class="fa-solid fa-check"></i><span class="px-2"></span>
          <p class="font-16 fw-bold">SEGUROS</p>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
          <i class="fa-solid fa-check"></i><span class="px-2"></span>
          <p class="font-16 fw-bold">SEGUROS</p>
        </div>
      </div>
    </div>
  </section>

  <section id="clientes" class="">
    <div class="container pb-5 pt-5 px-lg-0">

      <div class="py-2 text-center">
        <h2 class="btn text-primary font-32">Clientes</h2>
      </div>
      <div class="carousel-clientes pt-5">
        <div class="img-carousel">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/hdi.png" alt="">
        </div>
        <div class="img-carousel">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/sompo.png" alt="">
        </div>
        <div class="img-carousel">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/zurich.png" alt="">
        </div>
        <div class="img-carousel">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/alfa-seguradora.png" alt="">
        </div>
        <div class="img-carousel">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/BERKLEY.png" alt="">
        </div>
        <div class="img-carousel">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/chubb.png" alt="">
        </div>
        <div class="img-carousel">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/banco-alfa.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="blog" class="pt-5">
    <div class="col-md-12 d-flex">
      <div class="col-md-5">
        <div class="">
          <h2 class="text-primary font-32">Confira as<br> Últimas Notícias<br> do Blog</h2>
        </div>
      </div>
      <div class="col-md-7">

        <div class="carousel-blog">
          <div class="img-carousel-blog col-md-4 padding-right-30">
            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/img-blog.png" alt="">
            <h2 class="font-18 pt-3 fw-bold font-18">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</h2>
            <p class="font-14 pt-2 font-16 m-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
            <a class="text-decoration-none font-14" href="#">
              Ver mais
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="img-carousel-blog col-md-4 padding-right-30 mb-5">
            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/img-blog.png" alt="">
            <h2 class="font-18 pt-3 fw-bold font-18">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</h2>
            <p class="font-14 pt-2 font-16 m-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
            <a class="text-decoration-none font-14" href="#">
              Ver mais
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="img-carousel-blog col-md-4 padding-right-30">
            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/img-blog.png" alt="">
            <h2 class="font-18 pt-3 fw-bold font-18">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</h2>
            <p class="font-14 pt-2 font-16 m-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
            <a class="text-decoration-none font-14" href="#">
              Ver mais
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="img-carousel-blog col-md-4 padding-right-30">
            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/img-blog.png" alt="">
            <h2 class="font-18 pt-3 fw-bold font-18">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</h2>
            <p class="font-14 pt-2 font-16 m-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
            <a class="text-decoration-none font-14" href="#">
              Ver mais
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
        <div class=" py-2 text-center mb-2">
          <a href="" class="text-decoration-none text-white bg-primary font-16 px-5 py-3 ">Conheça o Blog</a>
        </div>
      </div>
    </div>
  </section>

  <section class="contact margin-top-100" id="contato">
    <div class=" bg-dark pt-5 d-flex">
      <div class="col-lg-5 bg-primary py-5 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.638275587732!2d-51.18832898488553!3d-30.01854128189177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951979d0e2cdb58d%3A0xaf0659c38479bfd3!2sTorelly%20Bastos%20Advogados%20Associados!5e0!3m2!1spt-BR!2sbr!4v1666035193576!5m2!1spt-BR!2sbr" style=" width: 47%; height: 365px; margin-top: 180px; position: absolute; border: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-1 bg-dark">
      </div>
      <div class="col-lg-5 bg-dark pr-5">
        <div class="pb-5">
          <h1 class="text-primary font24">Contato</h1>
        </div>
        <div role="form">
          <form action="" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
            <div class="row g-4">
              <div class="col-md-6"><span class="wpcf7-form-control-wrap" data-name="nome"><input type="text" name="nome" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Nome"></span></div>
              <div class="col-md-6"><span class="wpcf7-form-control-wrap" data-name="email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="E-mail"></span></div>
              <div class="col-md-6"><span class="wpcf7-form-control-wrap" data-name="tel"><input type="tel" name="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" aria-required="true" aria-invalid="false" placeholder="Telefone" maxlength="15"></span></div>
              <div class="col-md-6"><span class="wpcf7-form-control-wrap" data-name="assunto"><input type="text" name="assunto" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Assunto"></span></div>
              <div class="col-12"><span class="wpcf7-form-control-wrap" data-name="mensagem"><textarea name="mensagem" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Mensagem"></textarea></span></div>
              <div class="col-12"><span class="wpcf7-form-control-wrap politicas"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><label><span class="wpcf7-form-control-wrap" data-name="receberemails"><span class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item"><input type="checkbox" name="receberemails" value="1" aria-invalid="false"></span></span></span><span class="wpcf7-list-item-label">Aceito receber e-mails</span></label></span><span class="wpcf7-list-item last"><label><span class="wpcf7-form-control-wrap" data-name="politicas"><span class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item"><input type="checkbox" name="politicas" value="1" aria-invalid="false"></span></span></span><span class="wpcf7-list-item-label">Li e aceito os termos de <a onclick="politicas();" class="">política de privacidade</a></span></label></span></span></span></div>
              <div class="col-3 "><button type="submit" class="btn bg-primary forPrimary rounded-0 border-0 py-2 text-white w-100">ENVIAR</button></div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
</main>
<?php
endwhile; 
endif; 
get_footer();
?>