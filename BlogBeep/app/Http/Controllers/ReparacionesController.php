<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ReparacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $reparaciones= App\Reparacion::all();
            return $reparaciones;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function misReparaciones($id)
    {
        $reparaciones = App\Reparacion::where('telefono', $id)->get();
        return response()->json($reparaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reparacionNueva= new App\Reparacion();
        $reparacionNueva->nombre= $request->nombre;
        $reparacionNueva->telefono= $request->telefono;
        $reparacionNueva->daño= $request->daño;
        $reparacionNueva->rtaTecnico= $request->rtaTecnico;
        $reparacionNueva->rtaUsuario= $request->rtaUsuario;
        $reparacionNueva->articulo= $request->articulo;
        $reparacionNueva->marca= $request->marca;
        $reparacionNueva->modelo= $request->modelo;
        $reparacionNueva->codigo= $request->codigo;
        $reparacionNueva->estado= $request->estado;

        $reparacionNueva->save();

        return $reparacionNueva;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($codigo)
    {
        $reparacion = App\Reparacion::where('codigo', $codigo)->get();
        return response()->json($reparacion);
        // return $reparacion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function responder(Request $request)
    {
        $reparacion= App\Reparacion::findOrFail($request->id);
        if($request->opcion === "reparar"){
            $reparacion->estado= "en curso";
            $reparacion->rtaUsuario= $request->rtaUsuario;
        }else{
            $reparacion->estado= "terminada";
            $reparacion->rtaUsuario= $request->rtaUsuario;
        }

        $reparacion->save();

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
        $reparacionNueva= App\Reparacion::findOrFail($id);
        $reparacionNueva->nombre= $request->nombre;
        $reparacionNueva->telefono= $request->telefono;
        $reparacionNueva->daño= $request->daño;
        $reparacionNueva->rtaTecnico= $request->rtaTecnico;
        $reparacionNueva->rtaUsuario= $request->rtaUsuario;
        $reparacionNueva->articulo= $request->articulo;
        $reparacionNueva->marca= $request->marca;
        $reparacionNueva->modelo= $request->modelo;
        $reparacionNueva->codigo= $request->codigo;
        $reparacionNueva->estado= $request->estado;

        $reparacionNueva->save();

        return $reparacionNueva;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reparacion = App\Reparacion::findOrFail($id);
        $reparacion->delete();
    }
}
