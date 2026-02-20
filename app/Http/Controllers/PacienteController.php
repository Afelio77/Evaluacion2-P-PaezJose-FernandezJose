<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Medico;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicos = Medico::all();
        return view('pacientes.create', compact('medicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|alpha',
            'dni'=> 'required|digits:8|unique:pacientes',
            'fecha_nacimiento' => 'required|date',
            'medico_id' => 'required|exists:medicos,id'
        ]);

        Paciente::create($request->all());

        return redirect()->route('pacientes.index')->with('succes', 'Paciente registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
