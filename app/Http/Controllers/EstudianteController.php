<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $estudiantes = Estudiante::orderByDesc('id')->paginate(10);
        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   $data = $r->validate([
            'nombre' => ['required','string','max:100'],
            'apellido' => ['required','string','max:100'],
            'telefono' => ['nullable','string','max:30'],
            'fecha_inscripcion' => ['required','date'],
        ]);
        Estudiante::create($data);
        return redirect()->route('estudiantes.index')->with('ok','Estudiante creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
         return view('estudiantes.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
       return view('estudiantes.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $estudiante)
    {
       $data = $r->validate([
            'nombre' => ['required','string','max:100'],
            'apellido' => ['required','string','max:100'],
            'telefono' => ['nullable','string','max:30'],
            'fecha_inscripcion' => ['required','date'],
        ]);
        $estudiante->update($data);
        return redirect()->route('estudiantes.index')->with('ok','Estudiante actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
       $estudiante->delete();
        return redirect()->route('estudiantes.index')->with('ok','Estudiante eliminado');
    }
}
