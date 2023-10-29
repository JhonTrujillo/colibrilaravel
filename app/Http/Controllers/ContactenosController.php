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
        $contacto = new contactenos();
        return view("contactenos")->with("datos", $contacto->listarContactenos());
     }
    public function vercontactenos($id)
      {
         $contacto = new contactenos();
         $dato = $contacto->buscarContactenos($id);
         return view("ver")->with("dato", $dato);
        //  dd($dato);
      }
    public function editarcontactenos(Request $request, $id){
            // dd($request->all(), $id);
            $contacto = new contactenos();
            $resultado = $contacto->actualizarContactenos($request, $id);
            // dd($resultado);
            $mensaje = "No se pudo actualizar";
            if($resultado == "1"){
                $mensaje = "Se pudo actualizar Exitosamente";
            }
            return view("ver")
            ->with("dato", $dato = $contacto->buscarContactenos($id))
            ->with("mensaje", $mensaje);
    }  
    public function eliminarContactenos($id){
        // dd($id);
        $contacto = new contactenos();
        $contacto->eliminarContactenos($id);
        // Alert::success("Se elimino El registro");
        return redirect()->back();
    }
    public function Crearcontactenos(Request $request){
    // dd($request->all());
         $contacto = new contactenos();
         $contacto->guardarBd($request);
    }
}