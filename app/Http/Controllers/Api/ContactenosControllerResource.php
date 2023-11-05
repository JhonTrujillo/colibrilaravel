<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Resource\contactenos;
use Illuminate\Http\Request;

class ContactenosControllerResource extends Controller
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
        return response()->json($this->manager->listarContactenos());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
       $registro = $this->manager->guardarBd($request);
        return response()->json($registro);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd($id);
        return response()->json($this->manager->buscarContactenos($id));
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
        // dd($request->all(), $id);
        $result = $this->manager->actualizarContactenos($request, $id);
        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //   dd($id);
        $result = $this->manager->eliminarContactenos($id);
        return response()->json($result);
    }
}
