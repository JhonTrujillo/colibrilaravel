<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function home(){
    //     dd("Hola Soy el Home");
    // }
    public function home(){
        return view("home");
    }
}
