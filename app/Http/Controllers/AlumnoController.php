<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lista-alumnos', [
            'alumnos' => Alumno::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => ['required', 'email', 'max:255'],
            'city' => ['required', 'min:3']
        ]);
        $alumno = new Alumno();
        $alumno->name = $request->name;
        $alumno->email = $request->email;
        $alumno->fecha_nac = $request->fecha_nac;
        $alumno->city = $request->city;
        $alumno->save();

        return redirect('/alumnos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show-alumno', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit-alumno', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => ['required', 'email', 'max:255'],
            'city' => ['required', 'min:8']
        ]);
        $alumno->name = $request->name;
        $alumno->email = $request->email;
        $alumno->fecha_nac = $request->fecha_nac;
        $alumno->city = $request->city;
        $alumno->save();

        return redirect()->route('alumnos.show', $alumno);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
