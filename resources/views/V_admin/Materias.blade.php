@extends('administrador')
@section('admincontent')
    <style>
    * {
        margin:2px;
        padding:1px; 
    }
    </style>

<form action="{{route('GMateria')}}" method="POST" enctype='multipart/form-data'>                        
	{{csrf_field()}}
		<div class="container">
			<div class="row">
				<div class="alert alert-primary col-md-3" role="alert" align="left">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AMaterias">
						<i class="fa fa-fw fa-plus"></i>
					</button> &nbsp; Agregar nueva "Materia"
				</div>
			<!-- Modal -->
		    	<div class="modal fade" id="AMaterias" tabindex="-1" role="dialog" aria-labelledby="AMateriasLabel" aria-hidden="true">
		     		<div class="modal-dialog" role="document">
		        		<div class="modal-content">
		          			<div class="modal-header">
		            			<h5 class="modal-title" id="AMateriasLabel"> Materia </h5>
		            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              				<span aria-hidden="true">&times;</span>
		            			</button>
		          			</div>
							<div class="modal-body">
								@if($errors->first('IdMateria')) 
									<i> {{$errors->first('IdMateria')}} </i> 
								@endif
								<div class="form-group col-xl-2">
									<label for="ejemplo_email_1"> Clave </label>
									<input type="text" class="form-control" id="IdMateria" name="IdMateria" value="" readonly='readonly'>
								</div>
		        
								@if($errors->first('Materia')) 
									<i> {{$errors->first('Materia')}} </i> 
								@endif	
								<div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Materia </label>
									<input type="text" class="form-control" id="Materia" name="Materia" value="{{old('Materia')}}" 
										placeholder="Introduce la Materia">
								</div>
				  			</div>
      
	      		  			<div class="modal-footer">
	        					<button type="submit" class="btn btn-success btn-md">
	 								<span  aria-hidden="true"></span> Guardar
	 							</button>
	      		  			</div>
						</div>
	  		  		</div>
				</div>   
			</div>
		</div>
  	</form>
		
			<div class="col-md-12">
      			<div class="hidden-lg"></div>
      				<h3 class="page-header">
          				<small> Registros Obtenidos </small>
        			</h3>
					<hr color="black" size=1>
      		</div>
      		<div class="col-md-10"> 
				<table class="table">
					<thead align="center" class="thead-dark col-md-10">
						<tr>
							<th scope="col-md-10">Clave</th>
							<th scope="col-md-10">Materia</th>
							<th scope="col-md-10">Semestre</th>
							<th colspan="2" scope="col-md-10"><i class="fa fa-angle-down"></i> &nbsp;Opciones</th>

						</tr>
					</thead>
			
  					</tbody>
				</table>
      		</div>






<!-- ___________________________________________________- -->
<div class="container col-xs-12-md-12-lg-12">
    <div class="row">

    <div class="form-group col-xl-5">
		<label for="ejemplo_email_1"> Fecha </label>
		<input type="date" class="form-control" id="Edicion" name="Edicion" value="" placeholder="Introduce la Fecha">
	</div>
    <div class="form-group col-xl-5">
		<label for="ejemplo_email_1"> Ciclo Escolar </label>
		<input type="text" class="form-control" id="Edicion" name="Edicion" value="" placeholder="Introduce el Ciclo Escolar">
	</div>

        <div class="form-group col-xs-4 col-md-4">
            <label for="sel1">Selecciona la Materia:</label>
            <select class="form-control" id="sel1">
                <option>Matemáticas</option>
                <option>Orientación</option>
            </select>
        </div> 
<!-- ___________________________________________________- -->
        <div class="form-group col-xs-4 col-md-4">
        <label for="sel1">Seleccione al Profesor:</label>
        <select class="form-control" id="sel1">
            <option>Luis</option>
            <option>Mateo</option>
        </select>
        </div> 
    </div>
</div>
@stop