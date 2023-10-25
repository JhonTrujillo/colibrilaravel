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
        dd($contactenos);
    }
}