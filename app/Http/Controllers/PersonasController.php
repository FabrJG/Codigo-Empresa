<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        /*$personas = [
            ['titulo' => 'Persona 01'],
            ['titulo' => 'Persona 02'],
            ['titulo' => 'Persona 03'],
            ['titulo' => 'Persona 04'],
            ['titulo' => 'Persona 05'],
        ];*/
        $personas = Persona::latest()->paginate(2);
        return view('personas', compact('personas'));
    }

    public function show($nPerCodigo){
        return view('show',['persona' => Persona::find($nPerCodigo)]);
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
