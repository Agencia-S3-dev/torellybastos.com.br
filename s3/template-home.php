<?php

/*
  Template Name: Página Home
*/

//get_header();

//if (have_posts()) : while (have_posts()) : the_post();
include("header.php");
?>
<main role="main">

  <div id="banner">
    <?php
    for ($i = 1; $i <= 3; $i++) {
    ?>
      <div class="banner" style="background-image: url('https://img.elo7.com.br/product/zoom/23BCC82/painel-fotografico-cidade-preto-e-branco-new-york.jpg')">
        <div class="container">
          <div class="text-white position-absolute banner-conteudo">
            <div class="position-relative z-index-2 d-table d-lg-block mx-auto">
              <p>
                Há 25 anos <br> atendendo <b>clientes</b> <br>
                <b>empresariais</b>
              </p>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>

  </div>


  <section id="sobre" class="py-5 position-relative z-index-5">
    <div class="container py-lg-5">
      <div class="carousel position-relative mt-5 z-index-2">
        <?php
        for ($i = 1; $i <= 9; $i++) {
        ?>
          <div class="img px-sm-3">
            <img src="assets/img/upload/galeria.png" alt="">
          </div>
        <?php
        }
        ?>
      </div>
      <div class="row mt-5">
        <div class="col-lg-3 mb-5 mb-lg-0">
          <div class="pe-lg-4">
            <div class="text-primary textoDestaque font-32 fw-light border-top border-bottom py-4 border-primary">
              <p>
                Experiência, <br>
                visão <br>
                estratégica <br>
                e olhar para <br>
                o futuro
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-3 mb-lg-0">
          <div class="font-14 text-secondary">
            <p>
              A TORELLY BASTOS ADVOGADOS ASSOCIADOS tem uma trajetória de mais de vinte anos de dedicação no atendimento de clientes empresariais. Com atuação nacional, está sediada na cidade de Porto Alegre/RS, com excelente localização geográfica, situando-se em ponto estratégico e nobre da Capital, onde são concentrados os atos gerenciais e realizada a coordenação de todas as operações. Escritório sempre atualizado, com profissionais especializados, oportunizando excelentes resultados nas frentes de atuação.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="font-14 text-secondary">
            <p>
              Com recursos tecnológicos de ponta, possui uma estrutura organizacional e estratégica que permite estar preparado para o atendimento das mais diversas necessidades dos seus clientes, administrativas e judiciais. Referência no seguimento do Direito do Seguro, Previdência Privada, Responsabilidade Civil, Relações de Consumo, também atua no Direito Bancário, Trabalhista, Tributário, Recuperação Judicial e Ambiental.
            </p>
          </div>
        </div>
      </div>

      <div class="mt-5 pt-5">
        <div class="tituloMissao bg-primary py-3">
          <h3 class="text-white text-uppercase font-15 text-center mb-0">NORTEADORES ESTRATÉGICOS</h3>
        </div>
        <div class="border-pai p-lg-5 bg-white">
          <div class="row px-lg-4">

            <?php
            for ($i = 1; $i <= 3; $i++) {
            ?>
              <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="border-filha px-lg-3 px-5 py-4">
                  <div class="text-primary font-30">
                    <i class="fa-solid fa-bullseye"></i>
                  </div>
                  <h4 class="text-secondary font-16 text-uppercase fw-bold">MISSÃO</h4>
                  <div class="text-secondary font-14">
                    <p>Nosso maior compromisso é construir soluções inovadoras para nossos parceiros de negócios</p>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="equipe">
    <div class="container position-relative">
      <div>
        <h2 class="font-32 text-primary fw-light text-center">Conheça a Equipe</h2>
      </div>
      <div class="listaPessoas mt-5 position-relative">
        <div class="row position-relative z-index-9 mx-0 carousel-equipe">
          <?php
          for ($i = 1; $i <= 2; $i++) {
          ?>
            <?php include("partials/card-equipe.php"); ?>
          <?php } ?>
          <?php
          for ($i = 1; $i <= 2; $i++) {
          ?>
            <?php include("partials/card-equipe.php"); ?>
          <?php } ?>
          <?php
          for ($i = 1; $i <= 2; $i++) {
          ?>
            <?php include("partials/card-equipe.php"); ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <section id="abrangente" class="py-5">
    <div class="container py-lg-5 mt-5 mt-lg-0">
      <h2 class="text-center text-primary font-32 fw-light">
        Gestão Abrangente
      </h2>
      <div class="row mt-5">
        <?php
        for ($i = 1; $i <= 6; $i++) {
        ?>
          <div class="col-lg-4 mb-4">
            <div class="border border-primary p-4">
              <div class="d-flex w-100 row align-items-center">
                <div class="col-md-3 mb-2 mb-md-0 text-md-center text-start">
                  <div class="text-primary font-30 ">
                    <i class="fa-solid fa-clipboard-user"></i>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="font-16 fw-bold text-secondary text-left text-uppercase">
                    ATENDIMENTO PERSONALIZADO
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <section id="areas" class="py-5">
    <div class="container position-relative py-lg-5 mt-5 mt-lg-0">
      <h2 class="text-center text-primary font-32 fw-light">
        Áreas de Atuação
      </h2>
      <div class="row mt-5 carousel-areas">
        <?php
        for ($i = 1; $i <= 8; $i++) {
        ?>
          <div class="col-lg-3 mb-4 carousel-item-areas">
            <div class=" p-4">
              <div class="d-flex w-100 row align-items-center">
                <div class="col-md-3 mb-2 mb-md-0 text-md-center text-start">
                  <div class="text-primary font-30 ">
                    <i class="fa-solid fa-clipboard-user"></i>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="font-16 fw-bold text-secondary text-left text-uppercase">
                    SEGUROS
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <section id="clientes" class="py-5">
    <div class="container py-lg-5">
      <h2 class="text-center text-primary font-32 fw-light">
        Clientes
      </h2>
      <div class="mt-4 carousel-cliente">
        <?php
        for ($i = 1; $i <= 12; $i++) {
        ?>
          <div class="px-2 img">
            <img src="https://projetolocomotiva.com.br/wp-content/uploads/2017/08/hdi-seguros-logo-14FA67393D-seeklogo.com_.jpg" alt="">
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

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
        <?php
        for ($i = 1; $i <= 3; $i++) {
        ?>
          <div class="col-lg-3 mb-4 mb-lg-3">
            <?php include("partials/card-blog.php") ?>
          </div>
        <?php } ?>
      </div>
      <div class="text-center w-100 mt-5">
        <a href="" class="btn btn-primary text-white px-5 rounded-0" type="button">Conheça o Blog</a>
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