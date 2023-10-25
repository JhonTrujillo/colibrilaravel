<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimariaController extends Controller
{
    // public function construccion(){
    //      dd("Hola Soy Construccion");
    //    }
    public function primaria(){
    return view("primaria");
    }
}