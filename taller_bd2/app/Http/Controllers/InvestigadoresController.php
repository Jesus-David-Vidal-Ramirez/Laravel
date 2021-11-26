<?php

namespace App\Http\Controllers;

use App\Models\investigadores;
use Illuminate\Http\Request;

class InvestigadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obtenerInves = investigadores::all();
        return view('Investigadores' , compact('obtenerInves'));
    }

    public function insert()
    {
        
        return view('InsertarInvestigador');
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
            'nombre' =>'required',
            'apellido' => 'required',
            'carrera' => 'required',
            'semestre' => 'required',
        ]);

        investigadores::create($request->all());

        return redirect()-> route('Investigador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\investigadores  $investigadores
     * @return \Illuminate\Http\Response
     */
    public function show(investigadores $investigadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\investigadores  $investigadores
     * @return \Illuminate\Http\Response
     */
    public function edit(investigadores $investigadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\investigadores  $investigadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, investigadores $investigadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\investigadores  $investigadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(investigadores $investigadores)
    {
        //
    }
}
