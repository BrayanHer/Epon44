@extends('administrador')
@section('admincontent')
<style>
* {
	margin:2px;
	padding:1px;
}

</style>
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
                <option>Matematicas</option>
                <option>Orientacion</option>
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