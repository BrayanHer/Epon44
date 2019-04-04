@extends('home')
@section('homecontent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Template</title>

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
        <hr style="background-color:white;">
        <br>
        <h4>
              <strong>Información para la Pre-Inscripción</strong>
            </h4>
<section>

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Información</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">

<p align="center">¿Qué tengo que hacer?</p>
<p align="left">
El Aspirante deberá Pre-Registrarse del 1 al 22 de febrero de 2019 de acuerdo 
a la primera letra de su CURP en las fechas señaladas en la convocatoria
en la página del gobierno del Estado de México.
<a href="https://ingresoms.edugem.gob.mx">https://ingresoms.edugem.gob.mx</a>
</p>
<p align="left"><strong>En esta página podrás obtener la solicitud de pre-registro y tu comprobante</strong></p>
<p align="left">
A) La Información para el pre-registro tendrá que ser recopilada con la asesoría de
tu orientador educativo, padre o tutor</p>
<p align="left">
B) Es de suma importancia requisitar el estudio socioeconómico, ya que es paso 
importante para el pre-registro</p>
<p align="left">
C) Contestar la encuesta de CENEVAL en línea (se solicita durante el proceso de pre-registro).
 Es requisito importante para el registro.</p>
 <p align="left">
D) Imprimir tu comprobante de Pre-registro y recuperar las firmas que se solicitan en el mismo</p>
          
      </th>
    </tr>
  </tbody>
</table>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Primer Letra de Apellido</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1-5 de Febrero-2019</th>
      <td>A - B</td>
    </tr>
    <tr>
      <th scope="row">1-5 de Febrero-2019</th>
      <td> C</td>
    </tr> 
    <tr>
      <th scope="row">5-6 de Febrero-2019</th>
      <td>D - E</td>
    </tr>
    <tr>
      <th scope="row">6-7 de Febrero-2019</th>
      <td>F - G</td>
    </tr> 
    <tr>
      <th scope="row">7-8 de Febrero-2019</th>
      <td>H - I</td>
    </tr>
    <tr>
      <th scope="row">8-11 de Febrero-2019</th>
      <td>J-K</td>
    </tr> 
    <tr>
      <th scope="row">11-12 de Febrero-2019</th>
      <td>L</td>
    </tr>
    <tr>
      <th scope="row">12-13 de Febrero-2019</th>
      <td>M</td>
    </tr> 
    <tr>
      <th scope="row">14-15 de Febrero-2019</th>
      <td>N-Ñ</td>
    </tr>
    <tr>
      <th scope="row">15-18 de Febrero-2019</th>
      <td>O - P - Q</td>
    </tr> 
    <tr>
      <th scope="row">18-19 de Febrero-2019</th>
      <td>R</td>
    </tr>
    <tr>
      <th scope="row">19-20 de Febrero-2019</th>
      <td>S - T</td>
    </tr> 
    <tr>
      <th scope="row">20-21 de Febrero-2019</th>
      <td>U - V - W </td>
    </tr>
    <tr>
      <th scope="row">21-22 de Febrero-2019</th>
      <td>X - Y -Z</td>
    </tr> 
  </tbody>

</table>
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