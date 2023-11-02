<?php

namespace App\Http\Controllers;

use App\Resource\contactenos;
use Illuminate\Http\Request;

class ContactenosControllerResources extends Controller
{
    public $manager;
    function __construct(){
        $this->manager = new contactenos();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("contactenos.index")
        ->with("datos", $this->manager->listarContactenos());
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("contactenos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->manager->guardarBd($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("contactenos.show")->with("dato", $this->manager->buscarContactenos($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    
      //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $resultado = $this->manager ->actualizarContactenos($request, $id);
        // dd($resultado);
        $mensaje = "No se pudo actualizar";
        if($resultado == "1"){
            $mensaje = "Se pudo actualizar Exitosamente";
        }
        return view("ver")
        ->with("dato", $dato = $this->manager->buscarContactenos($id))
        ->with("mensaje", $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->manager->eliminarContactenos($id);
        // Alert::success("Se elimino El registro");
        return redirect()->back();
    }
}
