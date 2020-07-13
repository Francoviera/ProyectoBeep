<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $proveedores= App\Proveedor::all();
            return $proveedores;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedorNuevo= new App\Proveedor();
        $proveedorNuevo->name= $request->name;
        $proveedorNuevo->email= $request->email;
        $proveedorNuevo->telefono= $request->telefono;

        $proveedorNuevo->save();

        return $proveedorNuevo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedor= App\Proveedor::findOrFail($id);
        $proveedor->name= $request->name;
        $proveedor->email= $request->email;
        $proveedor->telefono= $request->telefono;

        $proveedor->save();

        return $proveedor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = App\Proveedor::findOrFail($id);
        $proveedor->delete();
    }
}
