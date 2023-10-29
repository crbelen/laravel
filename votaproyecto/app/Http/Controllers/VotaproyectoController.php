<?php

namespace App\Http\Controllers;

use App\Models\proyecto;
use App\Models\votaproyecto;
use Illuminate\Http\Request;

class VotaproyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //return view('proyecto.welcome');
    }


/*
    public function votar(Request $request, $proyecto_id)
{
    $ip = $request->ip();//obtengo la ip del usuario

    //registro en la tabla votaproyecto el voto y la ip
    $voto = new votaproyecto();
    $voto->id_proyecto = $proyecto_id;
    $voto->ip_address = $ip;
    $voto->save();

    // mostrar un mensaje de éxito en una ventana emergente.
    return redirect()->route('proyecto.welcome')->with('success', 'Voto registrado satisfactoriamente.');
}
*/

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    //FUNCION RESTRINGIENDO POR IP

    public function votar(Request $request, $proyecto_id)
    {
       $ip = $request->ip();//obtengo la ip del usuario


       //Verificamos en nuestra bd si la IP ya ha votado antes
       $existevoto = Votaproyecto::where('ip_address', $ip)
       ->first();//cogemos el primer elemento de la tabla que sea true

       if ($existevoto) {
        //el usuario ya votó y lo redirigo a mi welcome con mensaje de error
            return redirect()->route('proyecto.welcome')->with('error','Ya has votado anteriormente, gracias!.');
        
        }else {
            
        $voto = new votaproyecto();
        $voto->id_proyecto = $proyecto_id;
        $voto->ip_address = $ip;
        $voto->save();

            //  mensaje de éxito en una ventana emergente.
            return redirect()->route('proyecto.welcome')->with('success', 'Voto registrado satisfactoriamente.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(votaproyecto $votaproyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(votaproyecto $votaproyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, votaproyecto $votaproyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(votaproyecto $votaproyecto)
    {
        //
    }
}