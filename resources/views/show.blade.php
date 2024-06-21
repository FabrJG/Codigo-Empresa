@extends('layouts.master')

@section('title','Persona | ' . $persona->cPerNombre)

@section('content')

<tr>
    <td colspan="4">{{$persona->cPerNombre}}</td>
</tr>
<tr>
    <td colspan="4">{{$persona->cPerDireccion}}</td>
</tr>
<tr>
    <td colspan="4">{{ $persona->created_at }}</td>
</tr>

@endsection