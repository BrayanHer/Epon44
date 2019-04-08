@extends('administrador')
@section('admincontent')
<style>
    *{margin:2px;padding:1px;}#Bcol{color:#000;}#tamsa{font-size:80%;color:black;}#cen{align:center;}
</style>

<form action="{{route('Gtarea')}}" method="POST" enctype='multipart/form-data'>                        
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
                            @if($errors->first('IdTarea')) 
                                <i> {{$errors->first('IdTarea')}} </i> 
                            @endif
                            <input name="IdTarea" id="IdTarea" value="{{$IdTarea}}" hidden>
		            		<h5 class="modal-md" id="IdLibrosLabel">Subir Nueva Tarea</h5>
		            		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            			<span aria-hidden="true">&times;</span>
		        			</button>
                        </div>
      
		          		<div class="modal-body"><!-- contenido del modal empieza -->
                            <div class="container">
                                <div class="row" align="center">
                                    <div class="form-group col-xl-12">
									    <strong for="ejemplo_email_1"> Seleccione el Grupo</strong><br>
                                        @foreach($Cursos as $cur)
                                        <input type="checkbox" class="inlineRadio1" id="SelGrupo" name="SelGrupo[]" value="{{$cur->IdCurso}}">{{$cur->IdCurso}}
                                        @endforeach
                                    </div>
                     
    <!-- aqui creo que el primer foreach -->
                                    <div class="row col-xl-12">
                                        <strong class="col-xl-10" id="cen"> Materia </strong>
    
                                        <select class="form-control" name='Materia' id="Materia">
                                            @foreach($Materia as $mat)
                                                <option value='{{$mat->IdMateria}}'>{{$mat->Materia}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                    </div>
     <!-- Aqui el segundo foreach -->
                                    <strong class="col-xl-10" id="cen"> Fecha y Hora </strong>
                                    <div class="row col-xl-12">
                                        @if($errors->first('FechaInicio')) 
                                            <i> {{$errors->first('FechaInicio')}} </i> 
                                        @endif
                                        <div class="form-group col-xl-6">
                                            <span>Fecha de Inicio</span>
                                            <input type="date" class="form-control" id="FechaInicio" name="FechaInicio">
                                            
                                            @if($errors->first('FechaEntrega')) 
                                                <i> {{$errors->first('FechaEntrega')}} </i> 
                                            @endif
                                            <span>Fecha de Entrega</span>
                                            <input type="date" class="form-control" id="FechaEntrega" name="FechaEntrega" >
                                        </div>

                                        @if($errors->first('HoraInicio')) 
                                            <i> {{$errors->first('HoraInicio')}} </i> 
                                        @endif
                                        <div class="form-group col-xl-5">
                                            <span>Hora de Inicio</span>
                                            <input type="time" class="form-control" id="HoraInicio" name="HoraInicio">
                                           
                                            @if($errors->first('HoraEntrega')) 
                                                <i> {{$errors->first('HoraEntrega')}} </i> 
                                            @endif
                                            <span>Hora de Entrega</span>
                                            <input type="time" class="form-control" id="HoraEntrega" name="HoraEntrega">
                                        </div>
                                    </div>

                                    @if($errors->first('Tema')) 
                                        <i> {{$errors->first('Tema')}} </i> 
                                    @endif
                                    <div class="form-group col-xl-11">
                                        <strong class="col-xl-10" id="cen"> Nombre de la Tarea </strong>
                                        <input type="text" class="form-control" id="Tema" name="Tema">
                                    </div>

                                    @if($errors->first('Descripción')) 
                                        <i> {{$errors->first('Descripción')}} </i> 
                                    @endif
                                    <div class="form-group col-xl-11">
                                        <strong  id="cen"> Descripcion de la Tarea </strong>
                                        <textarea class="form-control"id="Descripción" name="Descripción"></textarea>
                                    </div>

                                    @if($errors->first('TipoTarea')) 
                                        <i> {{$errors->first('TipoTarea')}} </i> 
                                    @endif
                                    <div class="form-group col-xl-11">
                                        <strong class="col-xl-10" id="cen"> Nombre de la Tarea </strong><br>
                                        <input type="radio" name="TipoTarea" id="TipoTarea" value="Fisica"> Tarea Fisica<br>
                                        <input type="radio" name="TipoTarea" id="TipoTarea" value="Digital"> Tarea Digital
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
@stop

