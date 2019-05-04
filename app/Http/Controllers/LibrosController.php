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
             if(!empty($res)){
            //direccionamiento con actionpara llamar una funcion
            return redirect()->action('LibrosControler@listadoLibros')->with('mensaje','Registro Realizado');
        	}
    }
    public function listadoLibros(){
        $listado=DB::table('libros')
        ->get(); //metodo get es como hacer un select
        return view('libros/listado',array('biblioteca'=>$listado));
    }
}
