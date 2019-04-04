@extends('administrador')
@section('admincontent')

@stop

Período de semestre:<select name="" id="">
<option value="1">Agosto-febrero</option>
<option value="2">Febrero-julio</option>
</select>



1.- Ciclo escolar
2.- Período del semestre
3.- Turno
4.- Grupo
5.- Archivo
6.- Guardar / Cancelar

|--------------------------------|
  Matutino     °     Vespetirno
|_________________________________|

>Primer Semestre---------------------------------------



if(==1){
--- primero 1 
|           |
|           |
|___________| 
>Tercero semestre---------------------------------------
--- segundo 1
|           |
|           |
|___________|

>Quinto semestre---------------------------------------
--- tercero 1
|           |
|           |
|___________|

}

__________________________________________________________
__________________________________________________________|
else{
    >segundo semestre---------------------------------------
--- Primero 1 
|           |
|           |
|___________| 
>Cuarto semestre---------------------------------------
--- segundo 1
|           |
|           |
|___________|

>Sexto semestre---------------------------------------
--- tercero 1
|           |
|           |
|___________|
}







