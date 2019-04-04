@extends('administrador')
@section('admincontent')
<style>
*{margin:2px;padding:1px;}#Bcol{color:#000;}#tamsa{font-size:80%;color:black;}#cen{align:center;}
</style>
    <form action="{{route('GEditoriales')}}" method="POST" enctype='multipart/form-data'>                        
    {{csrf_field()}}
    <div class="container">
        <div class="row">
            <div class="alert alert-success col-md-12" role="alert" align="center">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#IdLibros">
                        <i class="fa fa-fw fa-plus"></i>
                    </button> &nbsp; Agregar nuevo "Tarea"
                </div>
<!-- Modal -->
<div class="modal fade" id="IdLibros" tabindex="-1" role="dialog" aria-labelledby="IdLibrosLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
		        	<div class="modal-content">
		          		<div class="modal-header">

		            			    <h5 class="modal-md" id="IdLibrosLabel"> Subir Nueva Tarea</h5>
		            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              				<span aria-hidden="true">&times;</span>
		            			</button>
                                </div>

                              
		          			  <div class="modal-body"><!-- contenido del modal empieza -->
                              
                              <div class="container">
                              <div class="row" align="center">
                                    <div class="form-group col-xl-12">
									<strong for="ejemplo_email_1"> Seleccione el Grupo</strong><br>
									<input type="checkbox" class="inlineRadio1" id="SelGrupo" name="SelGrupo">&nbsp;1°-1&nbsp;
                                    <input type="checkbox" class="inlineRadio1" id="SelGrupo" name="SelGrupo">&nbsp;1°-2&nbsp;
                                    <input type="checkbox" class="inlineRadio1" id="SelGrupo" name="SelGrupo">&nbsp;1°-3&nbsp;
                                    <input type="checkbox" class="inlineRadio1" id="SelGrupo" name="SelGrupo">&nbsp;1°-4
								</div>
                                <strong class="col-xl-10" id="cen"> Fecha y Hora </strong>
                                <div class="row col-xl-12">         
                        </div>
                        <!-- aqui creo que el primer foreach -->
                        <div>
                                                <label for="ejemplo_email_1"> Materia: </label>
                                                    <select class="form-control" name='Materia' id="Materia">
                                                        <option value=''>Matutino</option>
                                                    </select><br>
                                            </div>
                                            <!-- Aqui el segundo foreach -->
                        <div class="form-group col-xl-12">
                                <strong for="ejemplo_email_1"> Selccione el Grupo</strong><br>
                                        <input type="checkbox" class="inlineRadio1" id="Grupo" name="Grupo">&nbsp;1°-1&nbsp;
                                        <input type="checkbox" class="inlineRadio1" id="Grupo" name="Grupo">&nbsp;1°-2&nbsp;
                                        <input type="checkbox" class="inlineRadio1" id="Grupo" name="SelGrupo">&nbsp;1°-3&nbsp;
                                        <input type="checkbox" class="inlineRadio1" id="Grupo" name="SelGrupo">&nbsp;1°-4
                            </div>
                        <strong class="col-xl-10" id="cen"> Fecha y Hora </strong>
                                <div class="row col-xl-12">
                                                    <div class="form-group col-xl-6">
                                                        <span>Fecha de Inicio</span>
                                                                <input type="date" class="form-control" id="IdLibro" name="IdLibro">
                                                        <span>Fecha de Entrega</span>
                                                                <input type="date" class="form-control" id="IdLibro" name="IdLibro" >
                                                    </div>
                                                    <div class="form-group col-xl-5">
                                                        <span>Hora de Inicio</span>
                                                                <input type="time" class="form-control" id="IdLibro" name="IdLibro">
                                                        <span>Hora de Entrega</span>
                                                                <input type="time" class="form-control" id="IdLibro" name="IdLibro" >
                                                    </div>
                                </div>

                                    <div class="form-group col-xl-11">
                            <strong class="col-xl-10" id="cen"> Nombre de la Tarea </strong>
                                                <input type="text" class="form-control" id="IdLibro" name="IdLibro">
                                    </div>


                                    <div class="form-group col-xl-11">
                            <strong  id="cen"> Descripcion de la Tarea </strong>
                                                <textarea class="form-control"></textarea>
                                    </div>


                                    <div class="form-group col-xl-11">

                            <strong class="col-xl-10" id="cen"> Nombre de la Tarea </strong><br>
                                        <input type="radio" name="gender" value="TF"> Tarea Fisica<br>
                                        <input type="radio" name="gender" value="TD"> Tarea Digital
                                    </div>


                                    
                                    <div class="modal-footer">
                                            <button type="submit" class="btn btn-success btn-md">
                                                <span  aria-hidden="true"></span> Enviar
                                            </button>
                                    </div>
                    </div>
                </div>  
            </div> 
<!-- Modal close -->
        </div>
    </div>
</form>

<div class="col-md-12" align="center">
            <div class="hidden-lg"></div>
            <h3 class="page-header">
                <small>Registros Obtenidos</small>
            </h3>
			<hr color="black" size=1>
        </div>
        <!-- inicia tabla de registros -->
        <div class="col-md-11"> 
			<table class="table">
				<thead align="center" class="thead-dark col-md-11">
					<tr>
						<th scope="col-md-10">Fecha</th>
						<th scope="col-md-10">Tarea</th>
                        <th scope="col-md-10">Descripción</th>
                        <th scope="col-md-10"><i class="fa fa-file"></i> &nbsp;Archivo</th>
                        <th colspan="2" scope="col-md-10"><i class="fa fa-angle-down"></i> &nbsp;Opciones</th>


					</tr>
				</thead>
			
				<tbody class="col-md-10" align="center">
                    <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    </tr>
  				</tbody>
	        </table>
        </div>
@stop

