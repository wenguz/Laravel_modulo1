{{--ANIDARPLANTILLAS--}}
@extends('layout.base')
@section('servicio','Servicio')
@section('contenido')

<div class="container">
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		<h3>BIENVENIDO !!!</h3>
	</div>
	<div class="row card-deck mb-3 text-center">
		<!--cada fila debe tener 12 colum.Siquiero generar 3 columnas sera.-->
		<div class="col-md-4">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal">Columna 1</h4>
			</div>
			<div class="card-body bg-info text-light">
				<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cumque adipisci architecto id corporis porro soluta earum quia praesentium unde temporibus, voluptates sed odit recusandae culpa modi ad minus! Sint.</p>
			</div>
		</div>
		<div class="col-md-4 ">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal">Columna 2</h4>
			</div>
			<!--con la clasese adapta una imagengrande-->
			<div class="card-body bg-secondary ">
				<p><img src="images/fondo1.jpg" class="img-fluid"></p>
                <!--Otraforma decargar archivos cuandose tiene muchos.Cuando setiene el archivodentro del proyecto
                	<p><img src={{asset('images/fondo1.jpg')}} class="img-fluid"></p>-->
                </div>
            </div>
            <div class="col-md-4  ">
            	<div class="card-header">
            		<h4 class="my-0 font-weight-normal">Columna 3</h4>
            	</div>
            	<div class="card-body bg-info text-light">
            		<p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe nisi quas perferendis officia quidem reiciendis temporibus, eum fugiat aliquid unde.</p>
            	</div>
            </div>
        </div>
    </div>
    @endsection
