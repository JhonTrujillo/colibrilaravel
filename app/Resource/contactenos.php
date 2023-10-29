<?php
namespace App\Resource;
use App\Models\contactenos as ContactenosModelos;

class Contactenos{
    // public function ejemploDesdeElModelo(){
    //     dd("Hola desde el modelo");
    // }
    public function guardarBd($datos){
        
       $contactenos= ContactenosModelos::create([
             'nombres' => $datos->nombres,
             'apellidos'=> $datos->apellidos,
             'cedula'=> $datos->identificacion,
             'correo'=> $datos->correo,
             'usuario'=> $datos->usuario,
             'observaciones'=> $datos->observaciones
        ]);
        // dd($contactenos);
        return $contactenos;
        
    }

    public function listarContactenos(){
        return ContactenosModelos::all();

    }
    public function buscarContactenos($id){
    return ContactenosModelos::find($id);
     // return ContactenosModelos::where("id",$id)->get();
    // return ContactenosModelos::where("id",$id)->first();
    // dd($id);
    }
    public function actualizarContactenos($request, $id){
        return ContactenosModelos::where("id", $id)->update([
            'nombres' => $request->nombres,
             'apellidos'=> $request->apellidos,
             'cedula'=> $request->identificacion,
             'correo'=> $request->correo,
             'usuario'=> $request->usuario,
             'observaciones'=> $request->observaciones
        ]); 
    }
    public function eliminarContactenos($id){
        return ContactenosModelos::where("id", $id)->delete();
    }
    
}