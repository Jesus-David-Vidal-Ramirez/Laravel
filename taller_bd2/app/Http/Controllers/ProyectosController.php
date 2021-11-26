<?php

namespace App\Http\Controllers;

use App\Models\investigadores;
use App\Models\proyectos;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obtenerProyecto = proyectos::all();
        
        return view('Proyecto' , compact('obtenerProyecto'));
    }

    public function insert()
    {
        $investigadores = investigadores::all();
        return view('InsertarProyecto' , compact('investigadores'));
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
        $request->validate([
            'codigo' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'objetivo' => 'required',
            'lineaDeInvestigacion' => 'required',
            'investigador' =>'required',   
        ]);

        proyectos::create($request->all());

        return redirect()-> route('Proyectos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function show(proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function edit($proyectos)
    {
        $proyecto = proyectos::find($proyectos);
        $investigadores = investigadores::all();
        return view('EditarProyecto', compact('proyecto','investigadores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyectos $proyecto)
    {
        $request->validate([
            'id',
            'codigo' =>'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'objetivo' => 'required',
            'lineaDeInvestigacion' => 'required',
            'investigador' => 'required',
        ]);

        $id = $request->id;
        $proyecto = proyectos::find($id);

        $proyecto -> codigo = $request->codigo;
        $proyecto -> titulo = $request->titulo;
        $proyecto -> descripcion = $request->descripcion;
        $proyecto -> objetivo = $request->objetivo; 
        $proyecto -> lineaDeInvestigacion = $request->lineaDeInvestigacion; 
        $proyecto -> investigador = $request->investigador; 
        $proyecto -> save();
        
        return redirect()-> route('Proyectos');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function destroy( $proyectos)
    {

        proyectos::destroy($proyectos);
        
        return redirect()-> route('Proyectos');
        
    }

}
