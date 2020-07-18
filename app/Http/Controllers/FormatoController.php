<?php

namespace App\Http\Controllers;

use App\Formato;
use Illuminate\Http\Request;
use App\Notifications\NotificacionConsulta;  

use App\User;

class FormatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function show(Formato $formato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function edit(Formato $formato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formato $formato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formato $formato)
    {
        //
    }

    public function enviocorreo(Request $request)
    {
        //
        $Nombre_cliente = $request->Nombre_cliente;
        $Numero_celular_cliente = $request->Numero_celular_cliente;
        $Correo_cliente = $request->Correo_cliente;
        $Mensage_cliente = $request->Mensage_cliente;
        $user = new user();
        $user->email = 'dilarflow@gmail.com';
        $user->notify(new NotificacionConsulta($Nombre_cliente, $Numero_celular_cliente, $Correo_cliente, $Mensage_cliente));
        // return response()->json($request->id);

        return back()->with('Mensaje', 'Correo enviado con exito');
    }

}
