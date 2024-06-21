@extends('layouts.master')

@section('title', 'Agregar Persona')

@section('content')

Formulario de Persona

<table cellpadding="3" cellspacing="5">
    <tr>
        <th colspan="4">Agregar Personas</th>
    </tr>
    <form action="{{ route('personas.store') }}" method="post">
        @csrf
        <tr>
            <th>Nombre:</th>
            <td><input type="text" name="cPerNombre"><br>{{ $errors->first('cPerNombre') }}</td>
        </tr>
        <tr>
            <th>Apellido:</th>
            <td><input type="text" name="cPerApellido"><br>{{ $errors->first('cPerApellido') }}</td>
        </tr>
        <tr>
            <th>Dirección:</th>
            <td><input type="text" name="cPerDireccion"><br>{{ $errors->first('cPerDireccion') }}</td>
        </tr>
        <tr>
            <th>Fecha de nacimiento:</th>
            <td><input type="date" name="dPerFecNac"><br>{{ $errors->first('dPerFecNac') }}</td>
        </tr>
        <tr>
            <th>Edad:</th>
            <td><input type="text" name="nPerEdad"><br>{{ $errors->first('nPerEdad') }}</td>
        </tr>
        <tr>
            <th>Sueldo:</th>
            <td><input type="text" name="nPerSueldo"><br>{{ $errors->first('nPerSueldo') }}</td>
        </tr>
        <tr>
            <th>Estado:</th>
            <td>
                <select name="nPerEstado">
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>
                <br>{{ $errors->first('nPerEstado') }}
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button>Guardar</button></td>
        </tr>
    </form>
</table>

@endsection