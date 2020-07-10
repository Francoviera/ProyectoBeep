<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UsuariosController extends Controller
{  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $usuarios= App\User::all();
            return $usuarios;
        }else{
            return view('usuarios');
        }
    }
    public function getTipo(Request $request){
        if($request->wantsJson() && auth()->check()){
            if(auth()->user()->type === 'admin'){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    public function getUserlogged(Request $request){
        if($request->wantsJson() && auth()->check()){
            return auth()->user();
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
        //
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
        $usuarioNuevo= App\User::findOrFail($id);

        if($request->type === 'admin'){
            $usuarioNuevo->type= 'user';
        }else{
            $usuarioNuevo->type= 'admin';
        }

        $usuarioNuevo->save();

        return $usuarioNuevo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = App\User::findOrFail($id);
        $usuario->delete();
    }
}
