@extends('layouts.master')

@section('content')
    
    <h2 align="center" class="texto_color">Personas</h2>

    <table>
        <tr>
            <td colspan="4">
                <a href="{{ route('personas.create') }}">Agregar Persona</a>
            </td>
        </tr>
        <tr>
            <th colspan="4">Listado de Personas</th>
        </tr>
        @if ($personas)
            @foreach ($personas as $persona)
                <tr>
                    <td>
                        <a>{{ $persona->nPerCodigo }}</a>
                    </td>
                    <td>
                        <a href="{{ route('personas.show',$persona) }}">{{ $persona->cPerNombre .' '. $persona->cPerApellido}}</a>
                    </td>
                </tr>        
            @endforeach
        @else
            <td>No Existe Ninguna Persona Que Mostrar</td>
        @endif
        </tr>
    </table>
@endsection