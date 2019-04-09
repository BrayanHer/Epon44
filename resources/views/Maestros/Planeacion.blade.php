@extends('administrador')
@section('admincontent')
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Procesos Educativos</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <style>
.table-wrapper-scroll-y {
display: block;
max-height: 250px;
overflow-y: auto;
-ms-overflow-style: -ms-autohiding-scrollbar;
}
   </style>
   
<script type="text/javascript">
$(document).ready(function(){
    $("#Examen").click(function() {
         $("#Examen1").load('{{url('RegistroE')}}' + '?' + $(this).closest('form').serialize()) ;
       });
       $("#Planeacion").click(function() {
         $("#Planeancion1").load('{{url('RegistroP')}}' + '?' + $(this).closest('form').serialize()) ;
       });
        
});
</script>

</head>
<body>
<div class="container">
    <div class="row ">
    <table class="col-md-5">
            <thead>
                <tr>
                    <th>
                        <p>
                        
                            <a class="btn btn-info" data-toggle="collapse" href="#Examenes" role="button" aria-expanded="false" aria-controls="Examenes">
                            <i class="fa fa-fw fa-plus"></i>
                                Exámenes
                            </a>
                        </p>
                            <div class="collapse" id="Examenes">
                                <div class="card card-body">
                                    <form action="">
                                        <div class="input-group input-group-sm mb-3">  
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Semestre : &nbsp;</span>
                                            </div>
                                                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                            <!-- aqui creo que el primer foreach -->
                                            <div>
                                                <label for="ejemplo_email_1"> Turno: </label>
                                                    <select class="form-control" name=''>
                                                        <option value=''>Matutino</option>					
                                                        <option value=''>Vespertino</option>
                                                    </select><br>
                                            </div>
                                            <!-- Aqui el segundo foreach -->

                                            <div>
                                                <label for="ejemplo_email_1"> Ciclo Escolar: </label>
                                                    <select class="form-control" name=''>
                                                        <option value=''>Exámenes</option>					
                                                        <option value=''>Planeación</option>
                                                    </select><br>
                                            </div>
                                            <!-- Estas van predeterminadas agregar columno "TIPO" -->
                                            <div align="center"> 
                                            <label for="ejemplo_email_1"> Tipo de Actividad </label><br>    
                                         <input type="radio" name="radio" id="radioP"value="1"> &nbsp;Planeaciones &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input type="radio" name="radio" id="radioE"value="1"> &nbsp;Examenes
                                         </div><br>
                                                <label class="custom-file col-md-12">
                                                    <input type="file" id="file" class="custom-file-input">
                                                        <span class="custom-file-control">Seleccione el Archivo</span>
                                                </label>
                                    </form>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                </table>

    </div>  
    </div>    
<!-- _________Aqui Inicia la tabla de consulas_________ -->

<div class="container col-md-12">
<div>
            <div class="hidden-lg"></div>
            <hr color="black" size=1>
                <h5 class="page-header">
                    <p><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp; Visualizacion de Registros</p>
                </h5>
				
        </div> 
<p>
  <a class="btn btn-info" data-toggle="collapse" href="#Examenes1" role="button" aria-expanded="false" aria-controls="Examenes1" id="Examen" name="Examen">
  <i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp;Examenes
  </a>
  <a class="btn btn-info" data-toggle="collapse" href="#Planeaciones1" role="button" aria-expanded="false" aria-controls="Planeaciones1" id="Planeacion" name="Planeacion">
  <i class="fa fa-calendar-check-o" aria-hidden="true"></i> &nbsp; Planeaciones
  </a>
</p>

<div class="collapse" id="Examenes1">
  <div class="card card-body" id="Examen1">

 </div>
</div>

<div class="collapse" id="Planeaciones1">
  <div class="card card-body"id="Planeancion1">

  </div>
</div>
</div>

</div>
</div>
</body>
</html>
@stop
<!-- <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#Examenes1" role="button" aria-expanded="false" aria-controls="Examenes1">
             Examenes
            </a>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
             Planeaciones
                 </button>
        </p>
            <div class="collapse" id="Examenes1">
                <div class="card card-body">
                    Hola
                </div>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Adios
                </div>
            </div> -->