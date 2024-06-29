@extends('layouts.master')

@section('title','Mensaje Recibido')

@section('content')

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta meta="viewport" content="width=device-width, initial-scale=1.0">
        <!--<title>Mensaje Recibido</title>-->
    </head>
    <body>
        <h6 style="padding:10px">[Empresa]: Recibiste un correo del sistema automatizado</h6>
        <table border="1" style="width:30%">
            <th colspan="2" style="text-align:center"><span>&#x1f4e5;</span> [ Mensaje Recibido ] <span>&#x1f4e5;</span></th>
            <tr>
                <td><b>Nombre:</b></td> <td align="center">{{ $mensaje['nombre'] }}</td>
            </tr>
            <tr>
                <td><b>Correo:</b></td> <td align="center">{{ $mensaje['email'] }}</td>
            </tr>
            <tr>
                <td><b>Asunto:</b></td> <td align="center">{{ $mensaje['asunto'] }}</td>
            </tr>
            <tr>
                <td><b>Mensaje:</b></td> <td align="center">{{ $mensaje['mensaje'] }}</td>
            </tr>
        </table>
    </body>
</html>

@endsection