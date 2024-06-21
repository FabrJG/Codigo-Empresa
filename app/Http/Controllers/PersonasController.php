<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePersonaRequest;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = Persona::get();
        return view('personas', compact('personas'));
    }

    public function show($nPerCodigo)
    {
        return view('show',['persona' => Persona::find($nPerCodigo)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePersonaRequest $request)
    {        
        /*$camposv = request()->validate([
            'cPerNombre' => 'required',
            'cPerApellido' => 'required',
            'cPerDireccion' => 'required',
            'dPerFecNac' => 'required',
            'nPerEdad' => 'required',
            'nPerSueldo' => 'required',
            'nPerEstado' => 'required'
        ]);

        Persona::create($camposv);*/
        
        Persona::create($request->validated());

        return redirect()->route('personas.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
