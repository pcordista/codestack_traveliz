<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>


<section class="inicio relative">
  <img src="uploads/banner.jpg" width="100%" class="desktop" />
  <img src="uploads/banner_mobile.jpg" width="100%" class="mobile" />
  <div class="inicio_container valign-wrapper">
    <div class="inicio_content center">
      <div class="inicio_title">
        Viajar é sempre uma boa ideia
      </div>
      <div class="inicio_subtitle margin_1_top">
        Nós ajudamos a escolher seu próximo destino. Cadastre seu e-mail e receba novidades dos melhores destinos!
      </div>
      <div class="inicio_cta margin_2_top center">
        <input type="email" placeholder="Insira seu e-mail" class="inicio_input" />
        <button class="btn waves-effect waves-light inicio_btn" type="submit">enviar
        </button>
      </div>
    </div>
  </div>
</section>

<a name="servicos"></a>
<section class="servicos margin_1_top">

  <div class="servicos_title justifycenter valign-wrapper relative">
    Serviços
  </div>

  <div class="servicos_grid margin_1_top container">
    <div class="row">

      <div class="servicos_item col s12 m4">
        <div class="servicos_img">
          <img src="uploads/service_one.jpg" width="100%" />
        </div>

        <div class="servicos_line line_red"></div>

        <div class="servicos_subtitle colorRed">
          Pacotes prontos
        </div>

        <div class="servicos_text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>

      </div>

      <div class="servicos_item col s12 m4">
        <div class="servicos_img">
          <img src="uploads/service_two.jpg" width="100%" />
        </div>

        <div class="servicos_line line_blue"></div>

        <div class="servicos_subtitle colorBlue">
          Serviço de reserva
        </div>

        <div class="servicos_text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>

      <div class="servicos_item col s12 m4">
        <div class="servicos_img">
          <img src="uploads/service_three.jpg" width="100%" />
        </div>

        <div class="servicos_line line_yellow"></div>

        <div class="servicos_subtitle colorYellow">
          Roteiros Personalizados
        </div>

        <div class="servicos_text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>


    </div>
  </div>

</section>

<div class="parallax-container margin_2_top relative">
  <div class="parallax"><img src="uploads/parallax.jpg" /></div>
  <div class="parallax_content valign-wrapper justifycontent">
    <div class="parallax_text center">
      Trabalhamos com pacotes prontos para todo o mundo com parceria com as
      melhores operadoras <span class="bold">Nacionais e internacionais</span>, mas também ajudamos você a montar um <span class="bold">roteiro exclusivo</span> para uma viagem mais livre!
    </div>
  </div>
</div>

<section class="destaques">
  <div class="row relative">

    <div class="col s12 m6 relative margin_1_bottom_mobile">

      <div class="carousel carousel-slider center" id="carouselDestaque" data-indicators="true">

        <!-- ITEM UM -->
        <div class="carousel-item" href="#one!">
          <div class="carousel_img left">
            <img src="uploads/destaque_one.jpg" />
          </div>
          <div class="carousel_img right">
            <img src="uploads/destaque_two.jpg" />
          </div>
        </div>
        <!-- 
          COPIA SÓ O DE CIMA E DELETA PRA BAIXO, NÃO ESQUE DO HREF="#two!" "#three!"
         -->
        <div class="carousel-item " href="#two!">
          <div class="carousel_img left">
            <img src="uploads/destaque_one.jpg" />
          </div>
          <div class="carousel_img right">
            <img src="uploads/destaque_two.jpg" />
          </div>
        </div>
        <div class="carousel-item " href="#three!">
          <div class="carousel_img left">
            <img src="uploads/destaque_one.jpg" />
          </div>
          <div class="carousel_img right">
            <img src="uploads/destaque_two.jpg" />
          </div>
        </div>
        <div class="carousel-item" href="#four!">
          <div class="carousel_img left">
            <img src="uploads/destaque_one.jpg" />
          </div>
          <div class="carousel_img right">
            <img src="uploads/destaque_two.jpg" />
          </div>
        </div>
      </div>
      <div class="center middle-indicator">
        <!-- NEXT -->
        <div class="right">
          <a href="Siguiente" class=" moveNextCarousel middle-indicator-text content-indicator">
            <img src="assets/img/icon_right.png" width="25px" /></a>
        </div>
        <!-- PREV -->
        <div class="right">
          <a href="Previo" class="movePrevCarousel middle-indicator-text content-indicator">
            <img src="assets/img/icon_left.png" width="25px" /></a>
        </div>
      </div>
    </div>

    <div class="col s12 m5 textJustify">
      <div class="servicos_subtitle colorYellow right-align destaqueline">
        Destinos mais escolhidos
      </div>
      <P class="margin_2_top">
        Confira os melhores destinos de viagens, experiências e tendências dos especialistas em viagens: nossos clientes. Planeje sua viagem incrível com a Traveliz!
      </P>
      <P>
        Oferecemos um serviço de montagem de roteiro totalmente personalizado respeitando seu estilo, orçamento e gostos pessoais, indicando as melhores opções de hospedagem e passeios para cada destino, aproveitando o máximo o tempo dispensado para a viagem.
      </P>
      <P>
        Seja como for: a pé, automóvel, barco, avião, ônibus. Apenas, viaje!
      </p>

    </div>

  </div>


</section>

<a name="blog"></a>
<section class="blog margin_1_top relative">

  <div class="blog_title justifycenter valign-wrapper relative blogline">
    Blog Traveliz
  </div>

  <div class="carousel relative" style="height: 250px !important">
    <div class="carousel_control carousel_left" id="carouselBlog">
      <img src="assets/img/icon_left.png" width="25px" />
    </div>
    <div class="carousel_control carousel_right">
      <img src="assets/img/icon_right.png" width="25px" />
    </div>

    <a class="carousel-item" href="#one!"><img src="uploads/blog_one.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="uploads/blog_two.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="uploads/blog_three.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="uploads/blog_one.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="uploads/blog_two.jpg"></a>
  </div>

  </div>

  <a href="#0" class="btn blog_cta">ver todos</a>

</section>

<a name="sobre"></a>
<section class="sobre">
  <div class="row relative">
    <div class="col s12 m4 sobre_img relative">
      <img src="assets/img/woman.png" class="" />
      <div class="womanline"></div>
    </div>
    <div class="col s12 m7 textRight">
      <div class="servicos_subtitle colorYellow right-align destaqueline">
        Um pouco sobre a Traveliz
      </div>
      <P class="margin_2_top">
        Apaixonada por viagem desde cedo, Liz Menegaz Cordeiro procurou ir atrás da realização de seu sonho: conhecer o mundo. Isso foi feito através das viagens que faz e estudando cada destino para montar o roteiro ideal para cada cliente.
      </P>
      <P>
        São mais de 20 anos de experiência na área desde a sua formação. Já fez intercâmbio, trabalhou como comissária de bordo, Resort, operadora de turismo e há 3 anos, devido as mudanças constantes do seu esposo que é oficial do exército e as novas ferramentas para trabalhar online, ela administra sua própria agência de viagens.
      </P>
      <P>
        Sempre em busca de aprimoramento constante através de treinamentos, cursos e eventos, para proporcionar a seus clientes satisfação plena no momento de realizar o sonho de uma viagem.
      </P>
      <P>
        Com portfólio versátil, trabalha desde a venda de passagens aéreas até tours mais sofisticados e exclusivos tendo a marca registrada da busca das melhores tarifas e oportunidades mantendo um atendimento personalizado para cada cliente.
      </P>
    </div>
  </div>
</section>

<?php include 'section-depoimentos.php'; ?>

<section class="partners">
  <div class="partner_container">
    <section class="black">
      <div class="carousel carousel-slider" data-indicators="true" id="carouselMarcas">

        <div class="thumbnailgallery">
          <div class="showrooms clearfix">
            <a href="" class="logo"><img src="uploads/partner_one.png"></a>
            <a href="" class="logo"><img src="uploads/partner_two.png"></a>
            <a href="" class="logo"><img src="uploads/partner_one.png"></a>
            <a href="" class="logo"><img src="uploads/partner_two.png"></a>
            <a href="" class="logo"><img src="uploads/partner_one.png"></a>
            <a href="" class="logo"><img src="uploads/partner_two.png"></a>
            <a href="" class="logo"><img src="uploads/partner_one.png"></a>
            <a href="" class="logo"><img src="uploads/partner_two.png"></a>
            <a href="" class="logo"><img src="uploads/partner_one.png"></a>
            <a href="" class="logo"><img src="uploads/partner_two.png"></a>
            <a href="" class="logo"><img src="uploads/partner_one.png"></a>
            <a href="" class="logo"><img src="uploads/partner_two.png"></a>
            <a href="" class="logo"><img src="uploads/partner_one.png"></a>
            <a href="" class="logo"><img src="uploads/partner_two.png"></a>
            <a href="" class="logo"><img src="uploads/partner_one.png"></a>
            <a href="" class="logo"><img src="uploads/partner_two.png"></a>

          </div>
          <!-- End Showrooms -->
        </div>
        <!-- End items -->
        <!-- <span class="arrowleft" id="prev"><i class="icon-chevron-left"></i></span>
        <span class="arrowright" id="next"><i class="icon-chevron-right"></i></span> -->
      </div>
    </section>
  </div>
</section>

<?php include 'footer.php'; ?>


<?php include 'assets/php/js_include.php'; ?>

</body>

</html>