<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursosController extends Controller
{
    // public function cursos(){
    //     dd("Hola Soy el cursos");
    //   }
    public function cursos(){
    return view("cursos");
    }
}