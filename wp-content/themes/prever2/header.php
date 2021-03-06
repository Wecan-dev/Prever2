<!DOCTYPE html>
<html lang="es">
  <head>
 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siempre</title>
   
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/red.png" />
	<link  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!--===============================================================================================-->
	  <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.css"
    />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate/animate.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/assets/vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->

    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/assets/vendor/daterangepicker/daterangepicker.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/assets/vendor/lightbox2/css/lightbox.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/util.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" />
    <!--===============================================================================================-->
	    <?php wp_head(); ?>
  </head>

  <body>
	  
	  <div class="main-content__global">
		  
	  
    <!-- header fixed -->
    <header class="header__main navbar-me back container-fluid">
      <a class="logo-main"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-blanco.png" alt="logo" /> </a>

      <button class="responsive-menu-btn">
        <svg
          class="open"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 100 125"
        >
          <path
            d="M14.000002 15.99999c-3.3137 0-6 2.68619-6 6 0 3.31359 2.6863 6 6 6h71.999996c3.3137 0 6-2.68641 6-6 0-3.31381-2.6863-6-6-6zm0 28.00003c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6zm0 28c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6z"
            style="text-indent: 0; text-transform: none; block-progression: tb"
            overflow="visible"
            color="#000"
          />
        </svg>

        <svg
          class="close"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 16 20"
        >
          <path
            d="M14.7 1.3c-.4-.4-1-.4-1.4 0L8 6.6 2.7 1.3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4L6.6 8l-5.3 5.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3L8 9.4l5.3 5.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4L9.4 8l5.3-5.3c.4-.4.4-1 0-1.4z"
          />
        </svg>
      </button>
      <nav class="nav__menu">
        <div class="nav-item">
          <a class="nav-link nav-scrolling" href="#about">Qui??nes somos</a>
        </div>
        <div class="nav-item">
          <a class="nav-link nav-scrolling" href="#products">Productos y Servicios</a>
        </div>
        <div class="nav-item">
          <a class="nav-link nav-scrolling" href="#orbituarios">Obituarios</a>
        </div>
        <div class="nav-item">
          <a class="nav-link nav-scrolling"  href="#duelo">Ayuda al duelo</a>
        </div>
        <div class="nav-item">
			<button type="button" class="contact" data-toggle="modal" data-target=".bd-example-modal-lg">
 				CONT??CTANOS
			</button>
		


        </div>
		<div class="buttons-header d-block d-sm-none">
			<button class="btn btn-1 btn-sep fa-phone"><p><a href=""> <span style="font-size: 12px;">??Necesita reportar un servicio?</span>  <br> <span style="font-size: 11px;">L??nea Gratuita Nacional</span>  <br> <span style="font-size: 16px;">018000 518910</span> </a></p></button>
			<button style="position: relative;" class="btn btn-2 btn-sep2 fa-phone"><p><a href=""> <span style="font-size: 11px;">Tienda de la Memoria</span>   </a></p></button>
			<button class="btn btn-3 btn-sep3 fa-phone"><p><a href=""> <span style="font-size: 11px;">Centros Memoriales <br> y Funerarias</span>   </a></p></button>
		</div>
      </nav>
    </header>
    <div href="#" class="toTop"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top.png" alt=""></div>
		  
		  
		