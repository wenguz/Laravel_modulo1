{{--ANIDARPLANTILLAS--}}
@extends('layout.base')
@section('servicio','SERVICIO')
@section('contenido')
<div class="container">
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<h3>CONTACTANOS A TRAVES DE LOS SIGUIENTES DATOS</h3>
</div>
<div class="row">
	<div class="col-md-4 col-sm-6">
        <img src="images/perfil3.jpg" class="img-fluid rounded-circle">
        <h2>Presidente: {{$nombre}}</h2>
        <p class="lead">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p>Telefono: 236544
        	<br>Email: presidente@laravel.org
        	<br>Ciclo: {{$edad}}
        </p>

    </div>
    <div class="col-md-4 col-sm-6">
        <img src="images/perfil2.jpg" class="img-fluid rounded-circle">
        <h2>Vice-Presidente</h2>
        <p class="lead">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
         <p>Telefono: 2458741
        	<br>Email: vice-presidente@laravel.org
        </p>
    </div>
    <div class="col-md-4 col-sm-6">
       <img src="images/perfil1.jpg" class="img-fluid rounded-circle">
        <h2>Representante</h2>
        <p class="lead">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
         <p>Telefono: 214523654
        	<br>Email: representante@laravel.org
        </p>
    </div>

</div>
</div>
@endsection