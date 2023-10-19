<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resource\Ejemplo;

class EjemplosController extends Controller
{
    public function ejemplo(){
        // dd("Hola Soy el ejemplo");
        $eje = new Ejemplo();
        $eje->ejemploDesdeElModelo();
    }
}
