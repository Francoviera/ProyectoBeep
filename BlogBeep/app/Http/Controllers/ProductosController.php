<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use App;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $inventario= App\Producto::all();
            return $inventario;
        }else{
            return view('productos');
        }
        
        // return json_encode([
        //     'productos'=> $inventario 
        // ]);
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
        $data = json_decode($request->data);
        $path= '';
        $productoNuevo= new App\Producto();
        $productoNuevo->nombre= $data->nombre;
        $productoNuevo->precio= $data->precio;
        $productoNuevo->cantidad= $data->cantidad;
        $productoNuevo->id_categoria= $data->id_categoria;
        $productoNuevo->id_proveedor= $data->id_proveedor;
        if ($request->hasFile('image')) {
            // $path= $request->file('image')->store('imgProductos'); 
            $nombre=time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move('imgProductos', $nombre);
            $productoNuevo->img= $nombre;
        }
        // $productoNuevo->img= $path;
        $productoNuevo->save();
        
        return $productoNuevo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->wantsJson()){
            return App\Producto::where('id', $id)->get();
        }else{
            return view('detalleProducto');
        }
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
        $producto= App\Producto::findOrFail($id);
        $producto->nombre= $request->nombre;
        $producto->precio= $request->precio;
        $producto->cantidad= $request->cantidad;
        $producto->id_categoria= $request->id_categoria;
        $producto->id_proveedor= $request->id_proveedor;

        $producto->save();

        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = App\Producto::findOrFail($id);
        $producto->delete();
    }
}
