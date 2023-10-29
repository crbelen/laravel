<?php

namespace App\Http\Controllers;

use App\Models\proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //recupero todos los proyectos desde la base de datos y los paso a la vista welcome donde se mostrará la lista de proyectos
        
        $proyectos = proyecto::all();//recuperamos todos los proyectos de la base de datos.
        return view('welcome', compact('proyectos'));//le indicamos la vista que vamos a cargar(welcome) y con compact pasamos la coleccion de proyectos a la vista.

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('proyecto');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nombre_proyecto = $request->validate([
            'nombre_proyecto' => 'required|string',
        ]);
    
        Proyecto::create($nombre_proyecto);

        return redirect()->route('proyecto.welcome')->with('success', 'Proyecto creado exitosamente.');//no aparece el mensaje.
    }

    /**
     * Display the specified resource.
     */
    public function show(proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proyecto $proyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(proyecto $proyecto)
    {
        //
    }
}
