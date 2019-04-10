<?php// Para mostrar el parametro enviado en la ruta de contacto con injeccion en laravel ?>
<h1>Bienvenid:{{$nombre}}</h1>
<h1>Edad:{{$edad}}</h1>

{{--Mostrar varaible como php--}}
<?=$edad?>

{{--ANIDARPLANTILLAS--}}
@include('layout.ejemplo1')
@include('saludo')

