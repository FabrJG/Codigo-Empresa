@extends('layout')

@section('title','Persona | ' . $persona->cPerNombre)

@section('content')

<tr>
    <td colspan="4">{{$persona->cPerNombre}}</td>
</tr>
<tr>
    <td colspan="4">{{$persona->cPerDireccion}}</td>
</tr>
<tr>
    <td colspan="4">{{ $persona->created_at->diffForHumas() }}</td>
</tr>

@endsection