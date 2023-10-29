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

    public function votar(Request $request, $id_proyecto)
    {
       $ip = $request->ip();//obtengo la ip del usuario
       $id_proyecto = proyecto::find($id_proyecto);


       //Verificamos en nuestra bd si la IP ya ha votado antes
       $existevoto = Votaproyecto::where('ip_address', $ip)
       //->where('id_proyecto', $id_proyecto)
       ->first();//cogemos el primer elemento de la tabla que sea true

       if ($existevoto) {
        //el usuario ya votó y lo redirigo a mi welcome con mensaje de error
            return redirect()->back()->with('error','Ya has votado anteriormente, gracias!.');
        
        }else {
            
            // Proceso de votacion y Registro el voto en la tabla, el proyecto votado y la IP en la base de datos
           /* $voto = new votaproyecto();
            $voto->ip_adrres = $ip;
            $voto->id_proyecto = $id_proyecto;
            $voto->save();*/

            votaproyecto::created([
                'id_proyecto' => $id_proyecto,
                'ip_address' => $ip
            ]);

            return redirect()->back()->with('success', 'Tu voto ha sido registrado para este proyecto, gracias!');
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
