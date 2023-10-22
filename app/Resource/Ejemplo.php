<?php
namespace App\Resource;
use App\Models\Ejemplos as EjemplosModelos;

class Ejemplo{
    public function ejemploDesdeElModelo(){
        dd("Hola desde el modelo");
    }
    public function guardarBd($datos){
        
       $ejemplo= EjemplosModelos::create([
            'nombres' => $datos->nombres,
            'edad'=> $datos->edad,
            'tipo_documento'=> $datos->tipo_documento,
            'documento'=> $datos->documento
       ]);
       dd($ejemplo);
    }
}