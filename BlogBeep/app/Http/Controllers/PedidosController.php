<?php

namespace App\Http\Controllers;

use App\Exports\PedidosExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $pedidos= App\Pedido::all();
            return $pedidos;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function enviar($mensaje)
    {
        // https://api.whatsapp.com/send?phone=34695685920
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedidoNuevo= new App\Pedido();
        $pedidoNuevo->nombre= $request->nombre;
        $pedidoNuevo->cantidad= $request->cantidad;
        $pedidoNuevo->id_proveedor= $request->id_proveedor;

        $pedidoNuevo->save();

        return $pedidoNuevo;
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
        //
    }
    public function eliminar($id)
    {
        $pedido = App\Pedido::findOrFail($id);
        $pedido->delete();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedidos = App\Pedido::where('id_proveedor', $id)->get();
        foreach ($pedidos as $pedido){
            $pedido->delete();
        }
    }
}
