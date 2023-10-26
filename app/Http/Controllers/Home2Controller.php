<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    // public function home(){
    //     dd("Hola Soy el Home");
    // }
    public function home2(){
        return view("home2");
    }
}
