<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\Evento;
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tipo = DB::('tipoeventos')->paginate(5);
        $eventos = Evento::paginate(5);
        return view('evento.index',array(
            'eventos' => $eventos
        )); 
    }

    public function saveEvento(Request $request)
    {
        $validatedData = $this->validate($request,[
            'nombre' => 'required'
        ]);

        $evento = new Evento();
        $evento->idtipoevento = $request->input('idtipoevento');
        $evento->nombre = $request->input('nombre');
        $evento->detalle = $request->input('detalle');
        $evento->lugar = $request->input('lugar');
        $evento->fecha = $request->input('fecha');
        $evento->hora = $request->input('hora');
        $evento->imagen = $request->input('imagen');
        $evento->pdfcontrato = $request->input('pdfcontrato');
        $evento->contacto = $request->input('contacto');
        $evento->instructor = $request->input('instructor');
        $evento->duracion = $request->input('duracion');
        $evento->costo = $request->input('costo');
        $evento->save();
        
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
