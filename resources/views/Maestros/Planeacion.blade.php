@extends('administrador')
@section('admincontent')
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Procesos Educativos</title>
   <style>
.table-wrapper-scroll-y {
display: block;
max-height: 250px;
overflow-y: auto;
-ms-overflow-style: -ms-autohiding-scrollbar;
}
   </style>
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
                                Examenes
                            </a>
                        </p>
                            <div class="collapse" id="Examenes">
                                <div class="card card-body">
                                    <form action="">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"> Ciclo Escolar : &nbsp;</span>
                                            </div>
                                                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> &nbsp; &nbsp;
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Semestre : &nbsp;</span>
                                            </div>
                                                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                            <div>
                                                <label for="ejemplo_email_1"> Tipo de actividad: </label>
                                                    <select class="form-control" name=''>
                                                        <option value=''>Examenes</option>					
                                                        <option value=''>Planeación</option>
                                                    </select><br>
                                            </div>
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
<!-- _________Aqui Inicia la tabla de consulas_________ -->
                <form  class="col-md-7" action="">
    <p>
            <a class="btn btn-info" data-toggle="collapse" href="#RegistroE" role="button" aria-expanded="false" aria-controls="RegistroE">
            <i class="fa fa-list" aria-hidden="true"></i>
                Registro de examenes
            </a>
        </p>
            <div class="collapse" id="RegistroE">
                <div class="card card-body">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend col-lg-12">
                        <div class="table-wrapper-scroll-y ">

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Ciclo Escolar</th>
      <th scope="col">Materia</th>
      <th scope="col">Archivo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">11-Enero-2019</th>
      <td>2018 - 2019</td>
      <td>Civica - Primero-1</td>
      <td>MMMMM</td>
    </tr>
    
  </tbody>
</table>

</div>       
                         </div>
                    </div>
                </div>   
            </div>
    </form>
    <!-- _________Aqui Terminala tabla de consulas_________ -->
    </div>  </div>    

           
<!-- ________________________________________________________________________________________________________ -->
</div>
</div>
</body>
</html>
@stop
