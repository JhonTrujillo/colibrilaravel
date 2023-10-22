<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resource\contactenos;

class ContactenosController extends Controller
{
    // public function contactenos(){
    //      dd("Hola Soy el contatenos");
    //  }
     public function contactenos(){
         return view("contactenos");
     }
    public function Crearcontactenos(Request $request){
    // dd($request->all());

         $contacto = new contactenos();
         $contacto->guardarBd($request);
     }

}