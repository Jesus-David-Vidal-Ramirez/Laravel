<?php

namespace App\Http\Controllers;

use App\Models\dotacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use App\Exports\DotacionExport;
use Maatwebsite\Excel\Facades\Excel;
// use DB;

class DotacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = DB::table('dotacions')->select('*')->paginate(20);
       
        $usuario = collect($usuarios);

       
        $fechas  = $this->fechas();
        return view('welcome', compact('usuarios', 'fechas'));
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
     
         $dotacion = new dotacion();
        // // VALIDACION DEL SELECT
        // $request ->validation([

        // ]);

        $dotacion->identificacion = $request->Identificacion;
        $dotacion->Camisa = $request->Camisa;
        $dotacion->Pantalon = $request->Pantalon;
        $dotacion->Botas = $request->Botas;
        $dotacion->updated_at = $request->Fecha;
        
          $dotacion->save();      
          $usuarios =$this->index();
        //   echo $usuarios;
        return redirect(route('/'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dotacion  $dotacion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate([
            'usuario' => 'required',
        ]);

        $usuario = $request->usuario;
        
        $usuarios = DB::table('dotacions')->select('*')
                                          ->where('Identificacion', 'LIKE', '%'. $usuario . '%')->get();
        
        $fechas  = $this->fechas();
        return view('welcome', compact('usuarios' , 'fechas'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dotacion  $dotacion
     * @return \Illuminate\Http\Response
     */
    public function edit(dotacion $dotacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dotacion  $dotacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dotacion $dotacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dotacion  $dotacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(dotacion $dotacion)
    {
        //
    }

    /** 
     *Retornar desde el año que desee hasta el actual
    */ 
    public function fechas(){
        $fecha=1999;
        $fechaActual =  date('Y');
        $fechas= array();
        for ($i = 2000; $i <  $fechaActual; $i++) {
            $fecha= $fecha+1;
            array_push($fechas, $fecha);
        }
        return $fechas;
    }

    /** 
     *Listar usuarios que se les entrego dotacion en un año en especifico
    */ 
    public function buscarPorFecha($fecha){
        $usuarios = DB::table('dotacions')->select('*')
        ->where('created_at', 'LIKE', '%'. $fecha . '%')->get();
        
        $fechas  = $this->fechas();
        // return redirect()->route('/');
        return view('welcome', compact('usuarios', 'fechas'));
        // Retorna dos fechas al tiempo sobreescribe la ruta
        // Desinegrar la fecha
    }


    public function export() 
    {
        return Excel::download(new DotacionExport(2011), 'Dotacion.xlsx');
    }
}
