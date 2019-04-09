@extends('home')
@section('homecontent')
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap Core CSS -->
    <link href="pagina/serv/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="pagina/serv/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="pagina/serv/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="pagina/serv/css/stylish-portfolio.min.css" rel="stylesheet">
<style>
a{
  color:black;
}
a:hover {
 color:yellow;
}
</style>
<script>
$(document).ready(function(){
    $("#Alias").click(function() {
         $("#Contenido").load('{{url('PageServicios')}}' + '?' + $(this).closest('form').serialize()) ;
       });
});
</script>
</head>
<body>
     <!-- Services -->
     <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h3 class="text-secondary mb-0"></h3>
          <h2 class="mb-5"></h2>
          <h2 class="mb-5">Servicios y Trámites</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <a href="{{route('Inscripciones')}}">
            <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="fa fa-pencil-square-o"></i>
            </span>
            </a>
            <h4>
              <strong>Inscripciones</strong>
            </h4>
            
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
           <a href="{{route('Reinscripciones')}}">
           <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="fa fa-handshake-o"></i>
            </span>
           </a>
            <h4>
              <strong>Reinscripciones</strong>
            </h4>
            
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
         <a href="{{route('Tramites')}}">
         <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="fa fa-file-text"></i>
            </span>
         </a>
            <h4>
              <strong>Pagos</strong>
            </h4>
           
          </div>

        </div>
         <!-- Aqui entra la seccion de pre-inscripcion -->
         <br><br>
         <button type="button" class="btn btn-light btn-sm" id="Alias"><i class="fa fa-search" aria-hidden="true"></i> &nbsp; Infomarcion sobre las fechas de inscripcion</button>
        <hr style="background-color:white;">
        
<section id="Contenido">
</section>
        <!-- Aqui acaba la seccion de pre-inscripcion --> 
        
        <br>

      </div>

      
    </section>
    
    <!-- Callout -->
    <section class="callout">
    </section>
     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

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