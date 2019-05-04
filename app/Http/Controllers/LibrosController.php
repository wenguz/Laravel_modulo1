<?php

namespace App\Http\Controllers;
//esta clasepermite recuperar la infodelformulario
use Illuminate\Http\Request;


//para query Builder semaneja la sig clase
use Illuminate\Support\Facades\DB;


class LibrosController extends Controller
{
    public function agregarLibro(){
        return view('libros/formagregarlibro');
    }

    public function guardarLibro(Request $request ){
        $res=DB::table('libros')
            ->insert(array(
                'titulo_libro'=>$request->input('titulo'),  //en input vael name del form del campo
                'autor'=>$request->input('autor'),
                'precio'=>$request->input('precio'),
                'cantidad'=>$request->input('cantidad'),
            ));
           //verificar si la variable de consulta esta llena

    }
}
