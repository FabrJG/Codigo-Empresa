@extends('layouts.master')

@section('title','Home')

@section('content')

<h2 align="center" class="texto_color" style="padding:10px">Home</h2>

<tr>
    <td colspan="4">
        @auth
            {{ auth()->user()->name }}
        @endauth
    </td>
</tr>


@endsection