<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\Asistente;
class AsistentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tipo = DB::('tipoeventos')->paginate(5);
        $asistentes = Asistente::paginate(5);
        return view('asistentes.index',array(
            'asistentes' => $asistentes
        )); 
    }

    public function saveAsistente(Request $request)
    {
        $validatedData = $this->validate($request,[
            'nombre' => 'required'
        ]);

        $Asistente = new Asistente();
        $Asistente->idevento = $request->input('idevento');
        $Asistente->nombre = $request->input('nombre');
        $Asistente->apellido = $request->input('apellido');
        $Asistente->cedula = $request->input('cedula');
        $Asistente->institucion = $request->input('institucion');
        $Asistente->telefono = $request->input('telefono');
        $Asistente->email = $request->input('email');
        $Asistente->edad = $request->input('edad');
        $Asistente->genero = $request->input('genero');
        $Asistente->etnia = $request->input('etnia');
        $Asistente->instruccion = $request->input('instruccion');
        $Asistente->save();
        
        return redirect()->route('home');
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
        //
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
}
