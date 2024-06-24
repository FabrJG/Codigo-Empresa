@extends('layouts.master')

@section('title', 'Agregar Persona')

@section('content')

Formulario de Persona

<table cellpadding="3" cellspacing="5">
    <tr>
        <th colspan="4">Agregar Personas</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{ route('personas.store') }}" method="post">
        @include('partials.form',['btnText' => 'Guardar'])
    </form>
</table>

@endsection