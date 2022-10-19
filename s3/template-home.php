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


  <section style="height: 1000px"></section>

</main>
<?php
include("footer.php");
//endwhile; 
//endif; 
//get_footer();
?>