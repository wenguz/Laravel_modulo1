@extends('libros.master')
@section('titulo','MOSTRAR LIBROS')
@section('cabecera')
<h2 class="text-center">Mostrar de Libros</h2>
@endsection


@section('pie')
<h5>Proyecto Modulo 1  - Laravel</h5>
@endsection

@section('contenido')
<div class="container">
    <!--Para el mensaje q se envia desde guardar libro para confirmarinsercion-->
    <div class="row bg-warning" >
    <h2>
        @if(session('mensaje'))
            {{session('mensaje')}}
        @endif
        </h2>
    </div>
    <div class="row">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">TITULO</th>
                <th scope="col">AUTOR</th>
                <th scope="col">PRECIO</th>
                <th scope="col">CANTIDAD</th>
                <th scope="col">OPCIONES</th>
            </tr>
            </thead>
            <tbody>
                @foreach($biblioteca as $libro)
                    <tr>
                        <th scope="row">{{$libro->id}}</th>
                        <td>{{$libro->titulo_libro}}</td>
                        <td>{{$libro->autor}}</td>
                        <td>{{$libro->precio}}</td>
                        <td>{{$libro->cantidad}}</td>
                        <td>
                            <a href="{{url('eliminarlibro/'.$libro->id)}}" class="btn btn-warning">Eliminar</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection