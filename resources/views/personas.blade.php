@extends('layouts.master')

@section('content')
    
    <h2 align="center" class="texto_color">Personas</h2>



    <table class="tabla_personas">
        <tr style="background-color: #37474f">
            <th class="th_table_2" colspan="3">Listado de Personas</th>
            <th><a href="{{ route('personas.create') }}"><button style="margin-left:30%">Agregar Persona</button></a></th>
        </tr>
        <tr style="background-color: #546e7a">
            <th colspan="1" style="color: white">ID</th>
            <th class="th_table" colspan="3">Nombre y Apellido</th>
        </tr>
        @if ($personas)
            @foreach ($personas as $persona)
                <tr>
                    <td>
                        <a>{{ $persona->nPerCodigo }}</a>
                    </td>
                    <td align="left" colspan="2">
                        <a>{{ $persona->cPerNombre .' '. $persona->cPerApellido}}</a>
                    </td>
                    <td align="left">
                        <a href="{{ route('personas.show',$persona) }}"><button style="margin-left:60%">Ver</button></a>
                    </td>
                </tr>        
            @endforeach
        @else
            <td>No Existe Ninguna Persona Que Mostrar</td>
        @endif
        </tr>
    </table>
@endsection