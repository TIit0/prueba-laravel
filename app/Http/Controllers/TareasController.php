<?php

namespace App\Http\Controllers;

use App\Models\Tareas;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos = Tareas::all();
        return view('welcome', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tarea = new Tareas();
        $tarea->nombre = $request->post('nombre');
        $tarea->save();
        return redirect()->route('tareas.index')->with('success', 'Tarea agregada con exito (-■_■)');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $tarea = Tareas::find($id);
        return view("eliminar", compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $tarea = Tareas::find($id);
        return view("actualizar", compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request ,$id)
    {
        //
        $tarea = Tareas::find($id);
        $tarea->nombre = $request->post('nombre');
        $tarea->save();
        return redirect()->route('tareas.index')->with('success', 'Tarea Actualizada con exito ◕ ◡ ◕');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $tarea = Tareas::find($id);
        $tarea->delete();
        return redirect()->route('tareas.index')->with('success', 'Tarea Eliminada con exito (╯°□°)╯︵ ┻━┻');
    }
}
