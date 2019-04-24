<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*para la vista saludo
Route::get('saludo',function(){
    return view('saludo');
});*/
/*para la vista layout/ejemplo1*/
Route::get('/saludo',function(){
    return view('saludo');
});


/**Para enviar parametro obligado(sin ? y sin ="valorpordefecto") por la ruta
Route::get('contacto/{nombre?}',function($nombre="valr por defecto"){
    return view('contacto',array("nombre"=>$nombre));
}); */
/**Para enviar dos parametro opcionales por la ruta
Route::get('contacto/{nombre?}/{edad?}',function($nombre="No se envio un nombre",$edad="no se envio la edad"){
    return view('contacto',array("nombre"=>$nombre,
                                  "edad"=>$edad
                                ));
}); */
/*paraenviar parametro utilizando with
Route::get('/contacto/{nombre?}/{edad?}',function($nombre="Jose Lopèz",$edad="5 años"){
    return view('contacto')
    ->with("nombre",$nombre)
    ->with("edad",$edad);
});*/

/*Vista con bootstrap */
/*
Route::get('servicio',function(){
    return view('servicios');
});*/

Route::get('nosotros',function(){
    return view('nosotros');
});
//Ruta para vista con controlador
Route::get('contacto','ContactoController@mostrarcontacto');

Route::get('servicio','ServicioController@mostrarServicio');

Route::get('nosotros','NosotrosController@mostrarNosotros');