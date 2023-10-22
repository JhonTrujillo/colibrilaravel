<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resource\Ejemplo;

class EjemplosController extends Controller
{
    public function ejemplo(){
        // dd("Hola Soy el ejemplo");
        // $eje = new Ejemplo();
        // $eje->ejemploDesdeElModelo();
        return view("ejemplo");
    }
    public function CrearEjemplo(Request $request){
        // dd($request->all());

        $eje = new Ejemplo();
        $eje->guardarBd($request);
    }

}
