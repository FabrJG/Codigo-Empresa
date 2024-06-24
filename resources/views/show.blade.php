@extends('layouts.master')

@section('title','Persona | ' . $persona->cPerNombre)

@section('content')

<table class="tabla_personas_2" style="margin-top: 50px">
    <tr style="background-color: #37474f">
        <th colspan="3" style="color: white">Persona</th>
        <th colspan="1" style="color: white">
            <a href="{{ route('personas.edit',$persona) }}">
                <button>Editar Persona</button>
            </a>
        </th>
    </tr>
    <tr style="background-color: #546e7a">
        <th style="color: white">ID</th>
        <th style="color: white">Nombre y Apellido</th>
        <th style="color: white">Dirección</th>
        <th style="color: white">Fecha</th>
    </tr>
    <tr>
        <td>{{$persona->nPerCodigo}}</td>
        <td>{{$persona->cPerNombre .' '. $persona->cPerApellido}}</td>
        <td>{{$persona->cPerDireccion}}</td>
        <td>{{ $persona->created_at }}</td>
    </tr>
    <tr>
        <td colspan="4" align="right">
            <form action="{{ route('personas.destroy', $persona) }}" method="POST">
                @csrf @method('DELETE')
                <button>Eliminar</button>
            </form>
        </td>
    </tr>
</table>

<a style="margin-left:10%" href="{{ route('personas.index') }}"><button>Volver</button></a>

@endsection