@extends('libros.master')
@section('titulo','AGREGAR LIBROS')
@section('cabecera')
<h2 class="text-center">Registro de Libros</h2>
@endsection


@section('pie')
<h5>Proyecto Modulo 1  - Laravel</h5>
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="post" action="{{url('guardarlibro')}}">
            @csrf
            <!-- Este token se usa para verificar que el usuario autenticado es el que realiza las solicitudes a la aplicación.-->
                <div class="form-group">
                    <label>Titulo</label>
                    <!--form control es paraque ocupe todo el ancho-->
                    <input type="text" class="form-control" name="titulo">
                </div>
                <div class="form-group">
                    <label>Autor</label>
                    <!--form control es paraque ocupe todo el ancho-->
                    <input type="text" class="form-control" name="autor">
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <!--form control es paraque ocupe todo el ancho.    step="any" permiteaceptar valores decimales-->
                    <input type="number" class="form-control" name="precio" step="any">
                </div>
                <div class="form-group">
                    <label>Cantidad</label>
                    <!--form control es paraque ocupe todo el ancho-->
                    <input type="number" class="form-control" name="cantidad" value="0" min="0" max="100">
                </div>
                <div class="text-center">
                <!--pOR SER SUBMIT DEBELLAMAR UN ACTION EN LA PARTE DE ARRIBA-->
                    <input type="submit" value="Guardar" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection