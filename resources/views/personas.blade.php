@extends('layouts.master')

@section('content')
    Personas!

    <table border="1" style="width: 100%;">
        <tr>
            @if ($personas)
                @foreach ($personas as $persona)
                    <td><a href="{{ route('personas.show',$persona) }}">{{ $persona->cPerNombre }}</a></td>            
                @endforeach
            @else
                <td>No Existe Ninguna Persona Que Mostrar</td>
            @endif
        </tr>
        <tr>
            <td colspan="4">{{ $personas->links() }}</td>
        </tr>
    </table>
@stop