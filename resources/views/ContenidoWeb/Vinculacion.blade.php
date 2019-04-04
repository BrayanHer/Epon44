@extends('home')
@section('homecontent')
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="pagina/serv/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="pagina/serv/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="pagina/serv/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="pagina/serv/css/stylish-portfolio.min.css" rel="stylesheet">
    <style>
    #tcol{
      font-size:150%;
    }
    </style>
</head>
<body>
    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h2 class="mb-5">Becas y Avisos</h2>
        </div>
        
        <div class="container" >
        <div class="row">
          <div class="portfolio-item col-lg-6">
            <a  href="#">
              <img class="img-fluid" src="pagina/serv/img/beca.jpg" alt="">
            </a>
          </div>
          
          <div class="col-lg-6">
              <span class="caption">
                <span class="caption-content"> 
                  <p  id="tcol"class="mb-2" align="justify">Si cumples con los requisito, aplicá para la beca.. ¡NO TE QUEDES AFUERA!</p>
                </span>
              </span>

          </div>
        </div>
        <div class="content-section-heading text-center">
          <h2 class="mb-5">Talleres</h2>
        </div>
        <br>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Lectura y Redacción</h2>
                  <p class="mb-0">Se ofrece un taller de lectura para los alumnos para reforzar su capacidad en Español</p>
                </span>
              </span>
              <img class="img-fluid" src="pagina/serv/img/Biblioteca.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Baile</h2>
                  <p class="mb-0">Cada mes se realiza un concurso de baile, en el cual los alumnos forman sus grupos y desarrollan su coreografía</p>
                </span>
              </span>
              <img class="img-fluid" src="pagina/serv/img/Baile.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Concurso de Ofrendas</h2>
                  <p class="mb-0">Todos los años se realiza el concurso de ofrendas en la cual los alumnos representan cada cultura mexicana</p>
                </span>
              </span>
              <img class="img-fluid" src="pagina/serv/img/Ofrenda.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Certificación Office</h2>
                  <p class="mb-0">La Preparatoria ofrece a sus alumnos de tercer año una certificación en Office </p>
                </span>
              </span>
              <img class="img-fluid" src="pagina/serv/img/Computacion.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- Bootstrap core JavaScript -->
    <script src="pagina/serv/vendor/jquery/jquery.min.js"></script>
    <script src="pagina/serv/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="pagina/serv/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="pagina/serv/js/stylish-portfolio.min.js"></script>
</body>
</html>
@stop