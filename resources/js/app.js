require("jquery");
require("bootstrap");
require("@fortawesome/fontawesome-free");
require("slick-carousel");
require("jquery-mask-plugin/dist/jquery.mask.min");
require('@fancyapps/fancybox');

window._ = require("lodash");

try {
  window.Popper = require("@popperjs/core").default;
  window.$ = window.jQuery = require("jquery");
} catch (e) {}

jQuery(function () {
  themeColor();
  masks();
  fixaMenu();
  carolseuEquipe()
  carolseuAreas()

  $(window).scroll(function () {
    fixaMenu();
  });

  $(window).on("resize", function () {
    fixaMenu();
    carolseuEquipe()
    carolseuAreas()
  });

  $(window).ready(function () {});

  $(window).on("load", function () {});

  //Adiciona cor principal do thema nos meta tags do header
  function themeColor() {
    const themeColor = $(
      '[name="theme-color"], [name="msapplication-navbutton-color"], [name="msapplication-TileColor"]'
    );
    const value = getComputedStyle(document.documentElement).getPropertyValue(
      "--bs-primary"
    );
    themeColor.attr("content", value);
  }

  //Adiciona pré-definidas, com base nos nomes, id ou types de inputs
  function masks() {
    //Telefone
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, "").length === 11
          ? "(00) 00000-0000"
          : "(00) 0000-00009";
      },
      spOptions = {
        onKeyPress: function (val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
        },
      };
    $('.mask-phone , [type="tel"], [id="tel"]').mask(SPMaskBehavior, spOptions);

    //CEP
    let cep = $('.mask-cep, [name="cep"], [id="cep"]');
    cep.mask("00000-000", {
      reverse: true,
    });
    cep.attr("inputmode", "numeric");

    //CPF
    let cpf = $('.mask-cpf, [name="cpf"], [id="cpf"]');
    cpf.mask("000.000.000-00", {
      reverse: true,
    });
    cpf.attr("inputmode", "numeric");

    //CNPJ
    let cnpj = $('.mask-cnpj, [name="cnpj"], [id="cnpj"]');
    cnpj.mask("00.000.000/0000-00", {
      reverse: true,
    });
    cnpj.attr("inputmode", "numeric");

    //CPF ou CNPJ
    let cpfCnpj = $('.mask-cpf-cnpj, [name="cpf-cnpj"], [id="cpf-cnpj"]');
    let options = {
      onKeyPress: function (cpf, ev, el, op) {
        let masks = ["000.000.000-000", "00.000.000/0000-00"];
        cpfCnpj.mask(cpf.length > 14 ? masks[1] : masks[0], op);
      },
    };
    cpfCnpj.length > 11
      ? cpfCnpj.mask("00.000.000/0000-00", options)
      : cpfCnpj.mask("000.000.000-00#", options);
    cpfCnpj.attr("inputmode", "numeric");

    //Números cartão de crédito
    let creditCard = $(
      '.mask-credit-card, [name="credit-card"], [id="credit-card"]'
    );
    creditCard.mask("0000 0000 0000 0000", {
      reverse: true,
    });
    creditCard.attr("inputmode", "numeric");

    //CVV
    let cvv = $('.mask-cvv, [name="cvv"], [id="cvv"]');
    cvv.mask("000", {
      reverse: true,
    });
    cvv.attr("inputmode", "numeric");

    //Data
    let date = $('.mask-date, [name="date"], [id="date"], [type="date"]');
    date.mask("00/00/0000", {
      reverse: true,
    });
    date.attr("inputmode", "numeric");

    //Mes e ano
    let mesAno = $('.mask-mesAno, [name="mesAno"], [id="mesAno"]');
    mesAno.mask("00/0000", {
      reverse: true,
    });
    mesAno.attr("inputmode", "numeric");
  }

  $("#banner").slick({
    infinite: true,
    dots: true,
    arrows: false,
    autoplay: true,
  });
  $('.carousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  function fixaMenu() {
    let valor = 200;
    let w = $(window).width();
    let rolagem = $(window).scrollTop();
    if (w > 960) {
      if (rolagem > valor) {
        $("#topo").addClass("ativo");
      } else {
        $("#topo").removeClass("ativo");
      }
    } else {
      $("#topo").addClass("ativo");
    }
  }

  function abrirModal() {
    $(".abrirModal").on("click", function(){
      let titulo = $(this).attr("data-titulo")
      let link = $(this).attr("data-link")
      let setor = $(this).attr("data-setor")
      let texto  = $(this).attr("data-descricao")
      let foto  = $(this).attr("data-img")
      $.fancybox.open(`
        <div class="modal-equipe">
          <div class="row">
          <div class="col-lg-4 mb-3 mb-lg-0">
            ${foto !== "" ? `
              <div class="img">
                <img src="${foto}" alt="">
              </div>
            ` : ``}
          </div>
          <div class="col-lg-8">
            ${link !== "" ? `
              <a class="text-primary font-24" aria-current="page" href="${link}" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
              </a>
            ` : ``}
            <h2 class="text-secondary font-32 fw-bold">${titulo}</h2>
            <h3 class="text-secondary font-16 fw-light">${setor}</h3>
            <div class="font-12 text-secondary">
              ${texto}
            </div>
          </div>
          </div>
        </div>
      `);
    })
  }
  abrirModal()

  

  function carolseuEquipe() {
    let w = $(window).width();
    if(w > 720){
      if($('.carousel-equipe').hasClass("slick-slider")){
        $('.carousel-equipe').slick('unslick');
        $(".carousel-equipe").addClass("row")
        $(".carousel-equipe .carousel-item-equipe").addClass("col-lg-6")
        abrirModal()
      }
    }else{
      $(".carousel-equipe").removeClass("row")
      $(".carousel-equipe .carousel-item-equipe").removeClass("col-lg-6")
      $(".carousel-equipe").not('.slick-initialized').slick({
        infinite: true,
        dots: true,
        arrows: false,
        autoplay: true,
      });
    }
  }

  function carolseuAreas() {
    let w = $(window).width();
    if(w > 720){
      if($('.carousel-areas').hasClass("slick-slider")){
        $('.carousel-areas').slick('unslick');
        $(".carousel-areas").addClass("row")
        $(".carousel-areas .carousel-item-areas").addClass("col-lg-3")
        abrirModal()
      }
    }else{
      $(".carousel-areas").removeClass("row")
      $(".carousel-areas .carousel-item-areas").removeClass("col-lg-3")
      $(".carousel-areas").not('.slick-initialized').slick({
        infinite: true,
        dots: true,
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
      });
    }
  }

  $('.carousel-cliente').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 3,
    autoplay: true,
    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
    ]
  });
  

});