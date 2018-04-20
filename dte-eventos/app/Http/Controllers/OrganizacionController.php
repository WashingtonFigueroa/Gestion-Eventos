<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\Organizador;
class OrganizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tipo = DB::('tipoeventos')->paginate(5);
        $organizacion = Organizador::paginate(5);
        return view('organizacion.index',array(
            'organizador' => $organizacion
        )); 
    }

    public function saveOrganizador(Request $request)
    {
        $validatedData = $this->validate($request,[
            'nombre' => 'required'
        ]);

        $organizador = new Organizador();
        $organizador->nombre = $request->input('nombre');
        $organizador->responsable = $request->input('responsable');
        $organizador->email = $request->input('email');
        $organizador->telefono = $request->input('telefono');
        $organizador->direccion = $request->input('direccion');
        $organizador->detalle = $request->input('detalle');
        $organizador->save();
        
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
