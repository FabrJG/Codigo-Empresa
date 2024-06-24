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
        return view('create',[
            'persona' => new Persona
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePersonaRequest $request)
    {               
        Persona::create($request->validated());
        return redirect()->route('personas.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $nPerCodigo)
    {
        return view('edit',[
            'persona' => $nPerCodigo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Persona $nPerCodigo, CreatePersonaRequest $request)
    {
        $nPerCodigo->update($request->validated());
        return redirect()->route('personas.show',$nPerCodigo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {   
        $persona->delete();
        return redirect()->route('personas.index');
    }
}
