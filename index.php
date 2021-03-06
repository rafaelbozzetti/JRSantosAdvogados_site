<?php
if (! isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off' ) {
    $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: $redirect_url");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>J.R.Santos Advocacia</title>
		<meta name="description" content="Direito do Trabalho, Direito Previdenciário, Direito de Família, Direito Empresarial, Direito Imobiliário. Conte com nossa experiência para bem assessorá-lo!">
		<meta name="keywords" content="assessoria jurídica, processo trabalhista, previdencia, advogado, condominio, processo, processado, justiça, florianopolis">
    <meta property="og:title" content="J.R.Santos Advocavia - Assessoria Jurídica">
    <meta property="og:site_name" content="Assessoria Jurídica">
    <meta property="og:url" content="https://www.jrsantosadvocacia.com.br">
    <meta property="og:description" content="Direito do Trabalho, Direito Previdenciário, Direito de Família, Direito Empresarial, Direito Imobiliário. Conte com nossa experiência para bem assessorá-lo!">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.jrsantosadvocacia.com.br/assets/images/www_jrsantosadvocacia_com_br.jpg">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/law-icons/font/flaticon.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <strong>J.R.Santos</strong>
          <small style="font-size:12px;margin-left:-63px;top:12px;position:relative;">Advocacia</small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#section-sobre-nos">Sobre Nós</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-areas-de-atuacao">Áreas de Atuação</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-publicacoes">Publicações</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-contato">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/case-law-lady-justice-justice-right-court-scale.jpg)" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-end">
          <div class="col-md-6  order-md-1">

            <h2 class="heading mb-3">Assessoria Jurídica</h2>
            <div class="sub-heading">
            <p>
              Conte com nossa experiência para assessorá-lo.
            </p>
            <p>
              <i>"Só fazemos melhor aquilo que repetidamente insistimos em melhorar. A busca da excelência não deve ser um objetivo, e sim um hábito."</i>
            </p>
            <i style="float:right;">Aristóteles</i>
            <br />
            <br />
            <p><a href="#section-contato" role="button" class="btn smoothscroll pb_outline-light btn-xl pb_font-13 p-4 rounded-0 pb_letter-spacing-2">Consulte-nos</a></p>
            </div>
            
          </div>  
        </div>
      </div>
    </section>
    <!-- END section -->
    
    
    <section class="pb_section pb_section_v1" data-section="about" id="section-sobre-nos">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 pr-md-12 pr-sm-12">          
            <h2 class="mt-0 heading-border-top mb-3 font-weight-normal">Sobre Nós</h2>  
          </div>

          <br />
          <br />

          <div class="col-lg-5 pr-md-5 pr-sm-0">
            <br /><br />
            <br /><br />
            <h2 class="mt-0 heading-border-top mb-3 font-weight-normal">João Rodrigo dos Santos</h2>
            <p>Advogado</p>
            <p>OAB/SC 43.113</p>
          </div>
          <div class="col-lg-7">
            <div class="images" style="text-align:right;">
              <img class="img1 img-fluid" src="assets/images/joao_rodrigo_dos_santos.jpg" alt="João Rodrigo dos Santos - Advogado" style="border:40px solid #f8f9fa;">
            </div>
          </div>
        </div>
        <br /> 
        <br />                    
        <div class="row">
          <div class="col-lg-7">
            <div class="images" style="text-align:left;">
              <img class="img1 img-fluid" src="assets/images/vanessa.jpg" alt="Vanessa Patzsch - Contadora" style="border:40px solid #f8f9fa;">
            </div>
          </div>
          <div class="col-lg-5 pr-md-5 pr-sm-0">
            <br /><br />
            <br /><br />
            <h2 class="mt-0 heading-border-top mb-3 font-weight-normal">Vanessa Patzsch</h2>
            <p>Contadora</p>
            <p>CRC/SC 038557/O-5</p>
          </div>          
        </div>        
      </div>  
    </section>
    <!-- END section -->

    
    <section class="pb_section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="media pb_media_v2 d-block text-center mb-3">
              <div class="icon border border-gray rounded-circle d-block mr-3 display-4 mx-auto mb-4"><i class="flaticon text-secondary flaticon-courthouse"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-20">Assessoria Jurídica</h3>
                <p>Assessoria nas diversas áreas do direito. Consulte nossas áreas de atuação.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="media pb_media_v2 d-block text-center  mb-3">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><i class="flaticon text-secondary flaticon-law"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-20">Pareceres e Consultas</h3>
                <p>Emissão de pareceres técnicos jurídicos sobre áreas do direito.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="media pb_media_v2 d-block text-center  mb-3">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 mx-auto mb-4"><i class="flaticon text-secondary flaticon-jury"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-20">Extrajudiciais</h3>
                <p> Intermediação de acordos entre partes de forma extrajudicial.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
      
    
    <section class="pb_section pb_bg-half" data-section="practicing-areas" id="section-areas-de-atuacao">
      <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top font-weight-normal">Áreas de Atuação</h2>
            <p>Contamos com <i>know-how</i> em diversas áreas do direito.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">

            <div class="single-item pb_slide_v2">

              <div>
                <div class="d-lg-flex d-md-block slide_content">
                  <div class="pb_content-media" style="background-image: url(assets/images/1900x1200_img_7.jpg);"></div>
                  <div class="slide_content-text text-center">
                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-jury"></i></div>
                    <h3 class="font-weight-normal mt-0 mb-4">Direito do Trabalho</h3>
                    <p>Ramo do direito que se destina a reger as relações de trabalho.</p>
                    
                  </div>
                </div>
              </div>

              <div>
                <div class="d-lg-flex d-md-block slide_content">
                  <div class="pb_content-media" style="background-image: url(assets/images/1900x1200_img_3.jpg);"></div>
                  <div class="slide_content-text text-center">
                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-computer-security"></i></div>
                    <h3 class="font-weight-normal mt-0 mb-4">Direito Previdenciário</h3>
                    <p>Ramos do direito que se destina a reger a estrutura das organizações, o custeio, os benefícios e os beneficiários do sistema previdenciário.</p>
                  </div>
                </div>
              </div>

              <div>
                <div class="d-lg-flex d-md-block slide_content">
                  <div class="pb_content-media" style="background-image: url(assets/images/1900x1200_img_4.jpg);"></div>
                  <div class="slide_content-text text-center">
                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-courthouse"></i></div>
                    <h3 class="font-weight-normal mt-0 mb-4">Direito de Família</h3>
                    <p>Ramos do direito que se destina a reger as relações familiares e as relações que se estabelecem entre seus membros.</p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>  
    </section>
    <!-- END section -->

    <section class="pb_section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg">

            <div class="media pb_media_v1 mb-5">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-jury"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">Direito Empresarial</h3>
                <p class="pb_font-14">Ramo do direito que se destina a reger as relações que envolvem a empresa e o empresário.</p>
              </div>
            </div>

          </div>
          <div class="col-lg">
            <div class="media pb_media_v1 mb-5">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-law"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">Direito Imobiliário</h3>
                <p class="pb_font-14">Ramo do direito que se destina a reger as relações de aspectos da vida privada relacionada a imóveis. Condomínio, aluguel, compra e venda de imóveis, usucapião e  financiamentos.</p>
              </div>
            </div>
          </div>
          <div class="col-lg">
            <div class="media pb_media_v1 mb-5">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-courthouse"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">Direito das Obrigações</h3>
                <p class="pb_font-14">Ramo do direito que se destina a reger as relações de ordem patrimonial. Fornecer meios ao credor para exigir do devedor o cumprimento da prestação pactuada.</p>
              </div>
            </div>
          </div>
          <div class="w-100"></div>
          <div class="col-lg">

            <div class="media pb_media_v1 mb-5">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-jury"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">Direito das Coisas</h3>
                <p class="pb_font-14">Ramo do direito que se destina a reger as relações jurídicas concernentes aos bens materiais ou imateriais (propriedade literária, científica e artística – direito autoral; propriedade industrial – marcas e patentes).</p>
              </div>
            </div>

          </div>
          <div class="col-lg">
            <div class="media pb_media_v1 mb-5">
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-courthouse"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">Direito Das Sucessões</h3>
                <p class="pb_font-14">Ramo do direito que se destina a reger a transferência do patrimônio do morto ao herdeiro, em virtude de lei ou de testamento. </p>
              </div>
            </div>
          </div>
          <div class="col-lg">
            <div class="media pb_media_v1 mb-5">
              
              <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="flaticon flaticon-law"></i></div>
              <div class="media-body">
                <h3 class="mt-0 pb_font-17">Pareceres e Consultas</h3>
                <p class="pb_font-14">Emissão de pareceres técnicos jurídicos sobre áreas do direito.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    
    <section class="pb_section pb_testimonial_v1" data-section="publicacoes" id="section-publicacoes">
      <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top font-weight-normal">Publicações</h2>
            <p>Nosso Twitter reúne informações úteis na área jurídica, confira:</p>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-12 col-sm-12 mb-12" style="border:40px solid #f8f9fa;">
            <a class="twitter-timeline" data-height="500" data-link-color="#2B7BB9" href="https://twitter.com/JRSantosAdvoca1?ref_src=twsrc%5Etfw">Tweets by JRSantosAdvoca1</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            
          </div>
        </div>
      </div>
    </section>
    
    <section class="pb_section" data-section="contato" id="section-contato">
      <div class="container">

        <div class="row justify-content-md-center text-center mb-5">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top font-weight-normal">Entre em Contato</h2>
            <p>Envie suas dúvidas para que possamos assessorá-lo da melhor forma.</p>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-8 pr-md-5 pr-sm-0 mb-4">
            <form action="email.php" method="post">
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control p-3 rounded-0" id="name" name="name">
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control p-3 rounded-0" id="email" name="email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="name">Telefone</label>
                    <input type="text" class="form-control p-3 rounded-0" id="telefone" name="telefone">
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-group">
                    <label for="name">Celular</label>
                    <input type="text" class="form-control p-3 rounded-0" id="celular" name="celular">
                  </div>
                </div>
              </div>              
              <div class="form-group">
                <label for="message">Mensagem</label>
                <textarea cols="30" rows="10" class="form-control p-3 rounded-0" id="message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2 p-3 rounded-0" value="Enviar Mensagem">
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <ul class="pb_contact_details_v1">
              <li>
                <span class="text-uppercase">Email</span>
                contato@jrsantosadvocacia.com.br<br />
                joaorsantosadv@gmail.com
              </li>
              <li>
                <span class="text-uppercase">Telefone</span>
                (48) 99858-0002 <img src="assets/images/whatsapp.png" />
              </li>
              <li>
                <span class="text-uppercase">Endereço</span>
                Florianópolis, Santa Catarina
              </li>
            </ul>
          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->

    <footer class="pb_footer bg-light" role="contentinfo">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://twitter.com/JRSantosAdvoca1" class="p-2" target="_blank"><i class="fa fa-twitter"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <p class="pb_font-14">J.R.Santos Advocacia</p>
            <p>OAB 43.113</p>
            <small style="color:#d2d2d2;">Desenvolvido por rafaelbozzetti@gmail.com</small>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- loader -->
    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#1d82ff"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#fff"/></svg></div>


    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/main.js"></script>

	</body>
</html>