<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdminController extends Controller
{
    public function agregarProducto(Request $request){

        $productoNuevo= new App\Producto;
        $productoNuevo->nombre= $request->nombre;
        $productoNuevo->precio= $request->precio;
        $productoNuevo->cantidad= $request->cantidad;
        $productoNuevo->id_categoria_fk= $request->id_categoria_fk;

        $productoNuevo->save();

        return back()->with('mensaje', 'Producto Guardado!');
    }
}
