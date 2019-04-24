<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function mostrarNosotros(){
        return view('nosotros');
    }
}
