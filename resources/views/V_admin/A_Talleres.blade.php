@extends('administrador')
@section('admincontent')

@stop

periodo de semestre:<select name="" id="">
<option value="1">Agosto-febrero</option>
<option value="2">Febrero-julio</option>
</select>



1.- ciclo escolar
2.- periodo del semestre
3.- turno
4.- grupo
5.-archivo
6.-guardar /cancelar

|--------------------------------|
  Matutino     °     vespetirno
|_________________________________|

>primero semestre---------------------------------------



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







