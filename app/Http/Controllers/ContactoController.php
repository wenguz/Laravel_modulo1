<?php

namespace App\Http\Controllers;
// php artisan make:controller ContactoController

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function mostrarcontacto(){
        return view('contacto')
        ->with("nombre",'Manuel')
        ->with("edad",'20');
    }
}
