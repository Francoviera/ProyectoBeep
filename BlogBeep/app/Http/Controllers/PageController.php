<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function productos(Request $request){
            return view('productos'); 
        // if(empty($id)){
        //     $inventario= App\Producto::all();
        //     return view('productos', compact('inventario'));
        // }else{
        //     $producto= App\Producto::findOrFail($id);
        //     return view('detalleProducto', compact('producto')); 
        // }
    }
    public function compras($id= null){
        $compras= App\Compra::all();

        return view('compras', compact('compras'));
    }
}
