<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title> EPO No.44 </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="pagina/img/favicon.png" rel="icon">
  <link href="pagina/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->

  <!-- Bootstrap CSS File -->
  <link href="pagina/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="pagina/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="pagina/css/style1.css" rel="stylesheet">
</head>

<body id="body">
  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"> </i> 
        <a href="mailto:contact@example.com"> Preparatoria_oficial@EPO44.org </a>
        <i class="fa fa-phone"> </i> 01(712)265-2075
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"> <i class="fa fa-twitter"> </i> </a>
        <a href="#" class="facebook"> <i class="fa fa-facebook"> </i> </a>
        <a href="#" class="google-plus"> <i class="fa fa-envelope"> </i> </a>
      </div>
    </div>
  </section>
  <!--==========================
   Encabezado
  ============================-->

  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1> <a href="{{route('apin')}}" class="scrollto"> Epo <span> &nbsp; No.44 </span> </a> </h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li class="menu-active"> <a href="{{route('apin')}}"> Inicio </a> </li>
          <li> <a href="{{route('Servicios')}}"> Servicios y Tramites </a> </li><!--poner la vista respectiva con el codigo "('aqui va el nombre de la ruta')"-->
          <li> <a href="{{route('Acerca')}}"> Acerca de la EPO No.44 </a> </li>
          <li> <a href="{{route('Vinculacion')}}"> Talleres y Actividades  </a> </li>
          <li> <a href="{{route('Ubicacion')}}"> Ubicación </a> </li>
          <li> <a href="{{route('Login')}}"> Iniciar Sesión </a> </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
@extends('Inicio')
@section('slider')
@stop
  <script src="pagina/lib/jquery/jquery.min.js"></script>
  <script src="pagina/lib/jquery/jquery-migrate.min.js"></script>
  <script src="pagina/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="pagina/lib/easing/easing.min.js"></script>
  <script src="pagina/lib/superfish/hoverIntent.js"></script>
  <script src="pagina/lib/superfish/superfish.min.js"></script>
  <script src="pagina/lib/wow/wow.min.js"></script>
  <script src="pagina/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="pagina/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="pagina/lib/sticky/sticky.js"></script>
  <!-- Uncomment below if you want to use dynamic Google Maps -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

  <!-- Contact Form JavaScript File -->
  <script src="pagina/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="pagina/js/main.js"></script>
</body>
<div id="page-wrapper2">
        @yield('homecontent')

        <!-- /.container-fluid -->
</div>  
</html>