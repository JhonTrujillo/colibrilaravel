<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function login(){
    //     dd("Hola Soy el login");
    //  }
    public function login(){
        return view("login");
    }
}