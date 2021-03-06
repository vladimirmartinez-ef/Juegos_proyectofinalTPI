<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juego;
use App\Clasificacion;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            //return Juego::where('estado', 'disponible')->get();
            return Juego::join("clasificacions", "juegos.idclasificacion", "=", "clasificacions.idclasificacion")->where('estado', 'disponible')->get();

            // return Juego::join("clasificacions","juegos.idclasificacion","=","clasificacions.idclasificacion")->where('estado','disponible')->where('clasificacions.clasificacion', 'combate')->get();
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
        $juego = Juego::find($id);
        $juego->estado = $request->estado;
        $juego->save();
        // return $juego;
        return view('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function carrera(Request $request)
    {
        if ($request->ajax()) {
            return Juego::join("clasificacions", "juegos.idclasificacion", "=", "clasificacions.idclasificacion")->where('estado', 'disponible')->where('clasificacions.clasificacion', 'carreras')->get();
        }
    }

    public function estrategia(Request $request)
    {
        if ($request->ajax()) {
            return Juego::join("clasificacions", "juegos.idclasificacion", "=", "clasificacions.idclasificacion")->where('estado', 'disponible')->where('clasificacions.clasificacion', 'estrategia')->get();
        }
    }
    public function RPG(Request $request)
    {
        if ($request->ajax()) {
            return Juego::join("clasificacions", "juegos.idclasificacion", "=", "clasificacions.idclasificacion")->where('estado', 'disponible')->where('clasificacions.clasificacion', 'RPG')->get();
        }

    }

    public function aventura(Request $request)
    {
        if ($request->ajax()) {
            return Juego::join("clasificacions", "juegos.idclasificacion", "=", "clasificacions.idclasificacion")->where('estado', 'disponible')->where('clasificacions.clasificacion', 'aventura')->get();
        }
    }

    public function accion(Request $request)
    {
        if ($request->ajax()) {
            return Juego::join("clasificacions", "juegos.idclasificacion", "=", "clasificacions.idclasificacion")->where('estado', 'disponible')->where('clasificacions.clasificacion', 'accion')->get();
        }
    }
}
