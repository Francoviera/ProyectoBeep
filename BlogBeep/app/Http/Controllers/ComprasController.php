<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->wantsJson()){
            return Compra::all();
        }else{
            return view('compras');
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
        // if(!empty(auth()->id()))
        $compraNueva= new Compra();
        $compraNueva->id_user=  auth()->id();
        $compraNueva->nombre= $request->nombre;
        $compraNueva->precio= $request->precio;
        $compraNueva->cantidad= $request->cantidad;
        $compraNueva->pago= $request->pago;

        $compraNueva->save();

        return $compraNueva;
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
        $compraNueva= Compra::findOrFail($id);
        $compraNueva->nombre= $request->nombre;
        $compraNueva->precio= $request->precio;
        $compraNueva->cantidad= $request->cantidad;
        $compraNueva->pago= $request->pago;

        $compraNueva->save();

        return $compraNueva;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compra = Compra::findOrFail($id);
        $compra->delete();
    }
}
