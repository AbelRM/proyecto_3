<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CHEFTSOFT</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php base_url() ?>https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="<?php base_url() ?>public/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- slider -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="<?php base_url() ?>public/css/font-awesome.css">
  <!-- <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="<?php base_url() ?>public/vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="<?php base_url() ?>https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="<?php base_url() ?>https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="<?php base_url() ?>https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
  <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'> -->

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="<?php base_url() ?>public/device-mockups/device-mockups.min.css">

  <!-- MATERIAL DESIGN ICONIC FONT -->
  <link rel="stylesheet" href="public/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
  <!-- DATE-PICKER -->
  <link rel="stylesheet" href="public/vendor/date-picker/css/datepicker.min.css">
  <!-- STYLE CSS -->
	<link rel="stylesheet" href="public/css/style_wizard.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>public/css/style_tabla.css">
  
  <link rel="stylesheet" href="<?php base_url() ?>public/css/misestilos.css">
  <link rel="stylesheet" href="<?php base_url() ?>public/css/card.css">
  <link rel="stylesheet" href="<?php base_url() ?>public/css/lightbox.css">
  <link href="<?php base_url() ?>public/css/new-age.css" rel="stylesheet">
  <link href="<?php base_url() ?>public/css/main.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="public/css/style.css"> -->
  <style>
    .swiper-container{
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide{
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;

    }
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <header>
		<div class="menu-bar-pc">
			<a href="#page-top" class="logo">
				<img src="<?php base_url() ?>public/img/chefsoftlogo.png" style="width:100%; height:auto;" alt="">
			</a>

			<nav class="menu-principal">
				<a href="#nosotros" class="scroll-suave">NOSOTROS</a>
        <a href="#reservacion" class="scroll-suave">RESERVACIÓN</a>
        <a href="#plan" class="scroll-suave">PLANES</a>
				<a href="#contacto" class="scroll-suave">CONTACTO</a>
			</nav>

			<div class="top-redes">
				<a href="#hola">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>

				<a href="#hola2">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>

				<a href="#hola3">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			</div>
		</div>

		<div class="menu-bar-movil">
			<a href="#page-top" class="logo">
				<img src="<?php base_url() ?>public/img/chefsoftlogo.png" style="width:100%; height:auto;" alt="">
			</a>

			<div class="burger-menu" id="burger_menu">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>

			<div class="slideMenu" id="slideMenu">
				<div class="top-redes">
					<a href="#hola">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>

					<a href="#hola2">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>

					<a href="#hola3">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
				</div>
				<nav class="menu-principal">
					<a href="#nosotros" class="scroll-suave">NOSOTROS</a>
          <a href="#reservacion" class="scroll-suave">RESERVACIÓN</a>
          <a href="#plan" class="scroll-suave">PLANES</a>
					<a href="#contacto" class="scroll-suave">CONTACTO</a>
				</nav>
			</div>

		</div>
	</header>

  <header class="header-movil header content ">
    <div class="header-video">
      <video src="<?php base_url() ?>public/video/video.mp4" autoplay loop></video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content">
      <img src="<?php base_url() ?>public/img/chefsoft-white.png" alt="Logo de la empresa">
      <!-- <h1 style="font-family: 'Catamaran';font-weight:800;color:#1A5276">CHEFT SOFT</h1> -->
      <p class="titulo-portada">EL SISTEMA DE PUNTO DE VENTA PARA TU <span>RESTAURANTE</span></p>
      <a href="#contactar" class="btn">CONTACTAR</a>
    </div>
  </header>

  <section class="main p-0" id="nosotros">
    <section class="chef" id="chef">
			<div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="titulo-seccion" id="borrar-parrafo">
              <h2>ADIASOFT</h2>
              <p>Corporación Adiasoft registrada como ADIASOFT EIRL. con RUC: 20455587116, desde inicios 2010, principales Clientes PNP, ATV SUR, LP
                  Legis.pe, Gold Car, Excelsus, Sygoes (USA), entre otros.</p>
              <p style="display:block;">Con más de 15 Analistas expertos en cada sector, en Latinoamérica garantizamos un idóneo soporte y perfeccionamiento progresivo de
                    nuestras plataformas para crear así sistemas competitivo a escala global.</p>
              
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
          <div class="bxslider">
            <div><img src="<?php base_url() ?>public/img/slider_1.jpg" title="Tienda virtual + ERP"></div>
            <div><img src="<?php base_url() ?>public/img/slider_2.jpg" title="Facturación electrónica"></div>
            <div><img src="<?php base_url() ?>public/img/slider_3.jpg" title="Diseño web personalizado"></div>
          </div>
          </div>
        </div>
      </div>
    </section>
  </section>
 
  <section class="download bg-primary text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <!-- <h2 class="section-heading" style="font-size:1.8em;font-family: 'Catamaran';font-weight: 900;">¿QUÉ ES?</h2> -->
          <a href="#plan"><img src="<?php base_url() ?>public/img/chefsoft-white.png" style="width:45%; height:auto"  alt=""></a> 
          <p style="font-family: 'Catamaran';font-weight:700; color:#fff;">Es una plataforma online que integra un sistema de punto de venta (POS) y un sistema de gestión administrativa, diseñado especialmente para impulsar el crecimiento de negocios gastronómicos como: Restaurantes, Bares, Cafés, Pastelerías, etc.!</p>
        </div>
        <div class="col-lg-6 mx-auto p-2">
          <div class="text-center p-1">
            <h3 style="font-family: 'Catamaran';font-weight:700; color:#fff;">PARA CADA <span style="color:#F1C40F ; font-weight: 700;">TIPO</span> DE NEGOCIO!</h3>
          </div>

          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide" style="background-image:url(public/img/img_1.jpg)"></div>
              <div class="swiper-slide" style="background-image:url(public/img/img_2.jpg)"></div>
              <div class="swiper-slide" style="background-image:url(public/img/img_3.jpg)"></div>
              <div class="swiper-slide" style="background-image:url(public/img/img_4.jpg)"></div>
              <div class="swiper-slide" style="background-image:url(public/img/img_5.jpg)"></div>
              <div class="swiper-slide" style="background-image:url(public/img/img_6.jpg)"></div>
              <div class="swiper-slide" style="background-image:url(public/img/img_7.jpg)"></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
        
        </div>
      </div>
      <div class="row d-flex justify-content-center p-3">
        <div class="col-6">
          <a class="p-2" href="#plan"><img src="<?php base_url() ?>public/img/google-play-badge.svg" style="width:45%; height:auto" alt=""></a> 
        </div>
        <div class="col-6">
          <a class="p-2" href="#plan"><img src="<?php base_url() ?>public/img/app-store-badge.svg" style="width:45%; height:auto" alt=""></a>
        </div>
          
        
      </div>
    </div>
  </section>

  <section class="features" style="padding-bottom: 0px;">
    <div class="container">
      <div class="text-center">
        <h2>Sácale el jugo a tu negocio con <span style="color:#1F618D; font-weight: 700;">cheftsoft.pe</span> ahora!</h2>
        <!-- <p class="text-muted">Check out what you can do with this app theme!</p> -->
        <hr>
      </div>
      <div class="row">
        <div class="col-lg-5 d-flex justify-content-center align-items-center d-block" id="img-borrar">
          <img src="<?php base_url() ?>public/img/comida_1.jpg" style="width:100%; height:auto;" alt="">
        </div>
        <div class="col-lg-7">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="feature-item" style="box-shadow:0px 2px 18px 0px rgba(0,0,0,0.3); margin-bottom:13%">
                  <div class="d-flex justify-content-center">
                    <img src="<?php base_url() ?>public/img/facil.png" style="width:50%; height:auto" height" alt="">
                  </div>  
                  <h3>Fácil de manejar</h3>
                  <p class="text-muted">Amigable, intuitivo y fácil de implementar.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feature-item" style="box-shadow:0px 2px 18px 0px rgba(0,0,0,0.3); margin-bottom:13%">
                  <div class="d-flex justify-content-center">
                    <img src="<?php base_url() ?>public/img/seguridad.png" style="width:50%; height:auto" height" alt="">
                  </div>
                  <h3>100% seguro</h3>
                  <p class="text-muted">Confidencialidad garantizada, limita el acceso de tu personal.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="feature-item" style="box-shadow:0px 2px 18px 0px rgba(0,0,0,0.3); margin-bottom:13%">
                  <div class="d-flex justify-content-center">
                    <img src="<?php base_url() ?>public/img/cloud.png" style="width:50%; height:auto" height" alt="">
                  </div>
                  <h3>Tecnología cloud</h3>
                  <p class="text-muted">Conserva toda la información. de tu negocio en la nube y accede a ella cuando quieras.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feature-item" style="box-shadow:0px 2px 18px 0px rgba(0,0,0,0.3); margin-bottom:13%">
                  <div class="d-flex justify-content-center">
                    <img src="<?php base_url() ?>public/img/report.png" style="width:50%; height:auto" height" alt="">
                  </div>
                  <h3>Reportes simultaneos</h3>
                  <p class="text-muted">Monitorea tu negocio de manera remota, revisando las ventas y más.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- style="background-image: url(public/img/barra_3.jpg);" -->
  <section class="features" id="reservacion" >
    <section class="main-3">
      <div class="text-center p-3">
        <h2>Ten el <span style="color:#1F618D; font-weight: 700;">control total</span> de tu <span style="color:#28B463; font-weight: 700;">empresa!</span></h2>
      </div>
      <section class="contacto-3">
        <div class="datos-3 parallax">
          <div class="overlay-3"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-ms-6" style="z-index:30">
                <div class="d-flex justify-content-center p-2">
                  <img src="<?php base_url() ?>public/img/icon_1.png" style="width:30%; height:auto;" alt="">
                </div>
                <div class="text-center p-3">
                  <h3 style="font-family: 'Catamaran';color:#fff; font-weight: 600;">CONTROL DE CAJA</h3>
                </div>
                
              </div>
              <div class="col-lg-3 col-md-6 col-ms-6" style="z-index:30">
                <div class="d-flex justify-content-center p-2">
                  <img src="<?php base_url() ?>public/img/icon_2.png" style="width:30%; height:auto;" alt="">
                </div>
                <div class="text-center p-3">
                  <h3 style="font-family: 'Catamaran';color:#fff; font-weight: 600;">PRODUCTOS</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-ms-6" style="z-index:30">
                <div class="d-flex justify-content-center p-2">
                  <img src="<?php base_url() ?>public/img/icon_3.png" style="width:30%; height:auto;" alt="">
                </div>
                <div class="text-center p-3">
                  <h3 style="font-family: 'Catamaran';color:#fff; font-weight: 600;">INSUMOS</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-ms-6" style="z-index:30">
                <div class="d-flex justify-content-center p-2">
                  <img src="<?php base_url() ?>public/img/icon_4.png" style="width:30%; height:auto;" alt="">
                </div>
                <div class="text-center p-3">
                  <h3 style="font-family: 'Catamaran';color:#fff; font-weight: 600;">RECETAS</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-ms-6" style="z-index:30">
                <div class="d-flex justify-content-center p-2">
                  <img src="<?php base_url() ?>public/img/icon_5.png" style="width:30%; height:auto;" alt="">
                </div>
                <div class="text-center p-3">
                  <h3 style="font-family: 'Catamaran';color:#fff; font-weight: 600;">ALMACENES</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-ms-6" style="z-index:30">
                <div class="d-flex justify-content-center p-2">
                  <img src="<?php base_url() ?>public/img/icon_6.png" style="width:30%; height:auto;" alt="">
                </div>
                <div class="text-center p-3" >
                  <h3 style="font-family: 'Catamaran';color:#fff; font-weight: 600;">OFERTAS</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-ms-6" style="z-index:30">
                <div class="d-flex justify-content-center p-2">
                  <img src="<?php base_url() ?>public/img/icon_7.png" style="width:30%; height:auto;" alt="">
                </div>
                <div class="text-center p-3">
                  <h3 style="font-family: 'Catamaran';color:#fff; font-weight: 600;">STOCK</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-ms-6" style="z-index:30">
                <div class="d-flex justify-content-center p-2">
                  <img src="<?php base_url() ?>public/img/icon_8.png" style="width:30%; height:auto;" alt="">
                </div>
                <div class="text-center p-3" >
                  <h3 style="font-family: 'Catamaran';color:#fff; font-weight: 600;">DELIVERY</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    
  </section>
  
  <!-- partial:index.partial.html -->
  <section class="features p-0" id="plan">
    <div class="text-center p-3" >
      <h2>Tenemos distintos <span style="color:#28B463; font-weight: 700;">planes</span> para cada tipo de <span style="color:#1F618D; font-weight: 700;">proyecto!</span></h2>
    </div>
    <main class="page-content" >
      <div class="card">
        <div class="content2">
          <h2 class="title">BÁSICO</h2>
          <!-- <img src="public/img/1.png" style="width:50%; height:auto;" alt="Imagen del plan basico"> -->
          <p class="copy">Cuenta con los servicios básico como Web administrable, carrito de compra y listado de pedidos</p>
          <a class="btn2" data-toggle="modal" data-target="#exampleModal">Más información!</a>
          <!-- <button class="btn2" href="#open-modal"></button> -->
        </div>
      </div>
      <div class="card">
        <div class="content2">
          <h2 class="title">ESTÁNDAR</h2>
          <p class="copy">En este plan se agrega reportes, seguimiento de clientes, aplicativo móvil, entre otros.</p>
          <a class="btn2" data-toggle="modal" data-target="#exampleModal">Más información!</a>
        </div>
      </div>
      <div class="card">
        <div class="content2">
          <h2 class="title">PREMIUM</h2>
          <p class="copy">Este plan cuenta con Kardex, mensajeria, calificaciones y presencia en las redes sociales.</p>
          <a class="btn2" data-toggle="modal" data-target="#exampleModal">Más información!</a>
        </div>
      </div>
    </main>
  </section>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">PLANES ERP - CRM EN LA NUBE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 60px;>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- <article> -->
            <ul>
              <li class="bg-purple active">
                <button>BÁSICO</button>
              </li>
              <li class="bg-blue">
                <button>INTERMEDIO</button>
              </li>
              <li class="bg-blue">
                <button>AVANZADO</button>
              </li>
            </ul>  
            <table>
              <thead>
                <tr>
                  <th class="hide"></th>
                  <th class="bg-purple default">BÁSICO</th>
                  <th class="bg-blue">INTERMEDIO</th>
                  <th class="bg-blue">AVANZADO</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>PAGO POR MES</td>
                  <td><span class="txt-top">S/.</span><span class="txt-l">29</span></td>
                  <td><span class="txt-top">S/.</span><span class="txt-l">50</span></td>
                  <td class="default"><span class="txt-top">S/.</span><span class="txt-l">100</span></td>
                  
                </tr>
                <tr>
                  <td colspan="4" class="sep">Detalles ERP sistema de ventas</td>
                </tr>
                <tr>
                  <td>Estructura personalizada</td>
                  <td><span class="tick">3%</span></td>
                  <td><span class="tick">5%</span></td>
                  <td class="default"><span class="tick">10%</span></td>
                  
                </tr>
                <tr>
                  <td>Cotizaciones</td>
                  <td><span class="tick">&#10004;</span></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                 
                </tr>
                <tr>
                  <td>Compras y gastos</td>
                  <td><span class="tick">&#10004;</span></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                  
                </tr>
                <tr>
                  <td>ordenes de compra de pago</td>
                  <td></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Ventas (Tickets, A4)</td>
                  <td><span class="tick">&#10004;</span></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Cobranzas y cuentas por pagar</td>
                  <td></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Inventarios y valorizaciones</td>
                  <td><span class="tick">&#10004;</span></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Bussoness Intelligence (Poryecciones)</td>
                  <td></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Módulo (Restaurantes, boticas, más)</td>
                  <td></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Kardex: Físico y valorizado</td>
                  <td></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Recursos humanos: Asistencias y adelantos</td>
                  <td></td>
                  <td></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Caja, reportes y comparaciones</td>
                  <td><span class="tick">&#10004;</span></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Contabilidad PLE Libros de planilla</td>
                  <td></td>
                  <td></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Portal de cliente de autoatención</td>
                  <td></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Espacio (MB)</td>
                  <td><span class="tick">500 Mb</span></td>
                  <td><span class="tick">1000 Mb</span></td>
                  <td class="default"><span class="tick">2000 Mb</span></td>
                </tr>
                <tr>
                  <td>Multiprecios (Mayorista y minorista)</td>
                  <td></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>Código de barras</td>
                  <td></td>
                  <td><span class="tick">&#10004;</span></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td>U. multiniveles (Cajero, vendedor, etc)</td>
                  <td><span class="tick">2</span></td>
                  <td><span class="tick">10</span></td>
                  <td class="default"><span class="tick">50</span></td>
                </tr>
                <tr>
                  <td>Financiero (Bancos y balances)</td>
                  <td></td>
                  <td></td>
                  <td class="default"><span class="tick">&#10004;</span></td>
                </tr>
                <tr>
                  <td colspan="4" class="sep">Precios de productos extra</td>
                </tr>
                <tr>
                  <td>Sucursal adicional (al MES)</td>
                  <td><span class="txt-top">S/.</span><span class="txt-l">10</span></td>
                  <td><span class="txt-top">S/.</span><span class="txt-l">10</span></td>
                  <td><span class="txt-top">S/.</span><span class="txt-l">10</span></td>
                </tr>
                <tr>
                  <td>Facturación electrónica PSE OSE (al MES)</td>
                  <td><span class="txt-top">S/.</span><span class="txt-l">70</span></td>
                  <td><span class="txt-top">S/.</span><span class="txt-l">70</span></td>
                  <td><span class="txt-top">S/.</span><span class="txt-l">70</span></td>
                </tr>
                
              </tbody>
            </table>
              
          <!-- </article> -->
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

  <section class="features">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url(public/img/caro_1.png)"></div>
        <div class="swiper-slide" style="background-image:url(public/img/caro_2.png)"></div>
        <div class="swiper-slide" style="background-image:url(public/img/caro_3.png)"></div>
        <div class="swiper-slide" style="background-image:url(public/img/caro_4.png)"></div>
        <div class="swiper-slide" style="background-image:url(public/img/caro_5.png)"></div>
        <div class="swiper-slide" style="background-image:url(public/img/caro_6.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(public/img/caro_7.jpg)"></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <section class="features p-5" id="contacto">
    <div class="row d-flex justify-content-center">
      <img src="<?php base_url() ?>public/img/educloud.jpg"  alt="Logo de la empresa">
    </div>
  </section>
  <!-- Contacto -->
  <section class="main-2 p-0">
    <section class="contacto p-0" >
      <div class="datos parallax">
        <div class="overlay"></div>
        <div class="container">
          <div class="blurb">
            <h3>ESCRÍBENOS</h3>
            <div class="row d-flex justify-content-center p-3">
              <i class="fa fa-envelope" aria-hidden="true" ></i>
            </div>
            <p>adiasoft@adiasoft.com</p>
          </div>

          <div class="blurb">
            <h3>VÍSITANOS</h3>
            <div class="row d-flex justify-content-center p-2">
              <i class="fa fa-globe" aria-hidden="true"></i>
            </div>
            <p>PERÚ: C.Octavio Muñoz Najar 223 of.225<br>AREQUIPA</p>
          </div>

          <div class="blurb">
            <h3>TELÉFONO</h3>
            <div class="row d-flex justify-content-center p-2">
              <i class="fa fa-mobile" aria-hidden="true"></i></i>
            </div>
            <p>951 358 378 
            <br><i class="fa fa-whatsapp" aria-hidden="true"></i> +51 943 865 749</p>
          </div>
        </div>
      </div>
      <div class="formulario">
        <form action="home/formularios" method="post" class="formulario_contacto" name="formulario_contacto">
          <div>
            <div class="input-group">
              <input type="text" id="nombre" name="nombre">
              <label class="label" for="nombre">Nombre</label>
            </div>

            <div class="input-group">
              <input type="email" id="email" name="email">
              <label class="label" for="email">Correo electrónico</label>
            </div>

            <div class="input-group">
              <textarea name="mensaje" id="mensaje"></textarea>
              <label class="label" for="mensaje">Mensaje</label>
            </div>
            <input type="submit" value="Enviar">
          </div>
        </form>
      </div>
    </section> <!-- Contacto -->
  </section>

  <!--Boton de ir hacia arriba-->
  <div id="button-up">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
  </div>

  <footer>
    <div class="container">
      <p>&copy; AMS - 2020. Derechos resevados.</p>
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="#contacto">Contacto</a>
        </li>
        <li class="list-inline-item">
          <a href="#nostros">Nosotros</a>
        </li>
        <li class="list-inline-item">
          <a href="#plnaes">Planes</a>
        </li>
      </ul>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <!-- slider -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!-- <script src="<?php base_url() ?>public/vendor/jquery/jquery.js"></script> -->
  <script src="<?php base_url() ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php base_url() ?>public/vendor/bootstrap/js/bootstrap.js"></script>
  <!-- Plugin JavaScript -->
  <script src="<?php base_url() ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php base_url() ?>public/js/new-age.js"></script>
  <script src="<?php base_url() ?>public/js/script_tabla.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="public/js/card.js"></script> -->
  <script src="<?php base_url() ?>public/js/lightbox.js"></script>
  <script src="<?php base_url() ?>public/js/menuMovil.js"></script>
  <script src="<?php base_url() ?>public/js/scroll.js"></script>
  <script src="<?php base_url() ?>public/js/formulario.js"></script>

  <!-- FORMULARIO WIZARD -->
  <!-- DATE-PICKER -->
  <script src="<?php base_url() ?>public/vendor/date-picker/js/datepicker.js"></script>
  <script src="<?php base_url() ?>public/vendor/date-picker/js/datepicker.en.js"></script>
  <!-- JQUERY STEP -->
  <script src="<?php base_url() ?>public/js/jquery.steps.js"></script>  
  <script src="<?php base_url() ?>public/js/main_wizard.js"></script>

  <!-- <script src="public/js/script.js"></script> -->
  <!-- <script>
    var swiper = new Swiper('.swiper-container ', {
      direction: 'vertical',
      pagination: {
        el: '.swiper-pagination-1',
        clickable: true,
      },
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
    });
  </script> -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      // Enable debugger
      debugger: true,
    });
  </script>
  <script>
    $(function(){
      $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true,
        slideWidth: 600,
        speed: 300
      });
    });
  </script>
  <script>
    // Scroll up
    document.getElementById("button-up").addEventListener("click", scrollUp);

    function scrollUp(){

        var currentScroll = document.documentElement.scrollTop;

        if (currentScroll > 0){
            window.requestAnimationFrame(scrollUp);
            window.scrollTo (0, currentScroll - (currentScroll / 10));
        }
    }

    buttonUp = document.getElementById("button-up");

    window.onscroll = function(){

        var scroll = document.documentElement.scrollTop;

        if (scroll > 500){
            buttonUp.style.transform = "scale(1)";
        }else if(scroll < 500){
            buttonUp.style.transform = "scale(0)";
        }

    }
  </script>
  


</body>

</html>