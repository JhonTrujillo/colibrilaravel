<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactenosController extends Controller
{
    // public function contactenos(){
    //      dd("Hola Soy el contatenos");
    //  }
     public function contactenos(){
         return view("contactenos");
     }
}