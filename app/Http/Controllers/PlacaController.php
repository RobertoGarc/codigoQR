<?php

namespace App\Http\Controllers;

use App\Models\Placa;
use App\Data\PlacaDT;
use Illuminate\Http\Request;

class PlacaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placas=Placa::select('placa.*','persona.nombres','persona.direccion','persona.telefono')
        ->join('persona','placa.id_persona','persona.id')
        ->get();
        return view('placas',compact('placas'));
    }

    public function printPlaca(Placa $placa){
        return view('generar_placa',compact('placa'));
    }

    public function VerPlaca($id){
        $placa=PlacaDT::GetDatosPlaca($id);
        return view('persona_placa',compact('placa'));
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
     * @param  \App\Models\Placa  $placa
     * @return \Illuminate\Http\Response
     */
    public function show(Placa $placa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Placa  $placa
     * @return \Illuminate\Http\Response
     */
    public function edit(Placa $placa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Placa  $placa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Placa $placa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Placa  $placa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Placa $placa)
    {
        //
    }
}
