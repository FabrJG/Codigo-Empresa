<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('personas','App\Http\Controllers\PersonasController@index')->name('personas.index');

Route::get('personas/crear','App\Http\Controllers\PersonasController@create')->name('personas.create');

Route::post('personas','App\Http\Controllers\PersonasController@store')->name('personas.store');

Route::get('personas/{nPerCodigo}','App\Http\Controllers\PersonasController@show')->name('personas.show');

Route::get('proyectos/{parametro?}', function ($parametro=NULL) {
    return view('proyectos', ['parametro'=>$parametro]);
})->where('parametro', '[A-Za-z]+');

Route::get('clientes/{parametro?}', function ($parametro=NULL) {
    return view('clientes', ['parametro'=>$parametro]);
})->where('parametro', '[A-Za-z]+');

Route::get('blog/{parametro?}', function ($parametro=NULL) {
    return view('blog', ['parametro'=>$parametro]);
})->where('parametro', '[0-9]+');

Route::get('contacto', function () {
    return view('contacto.contacto');
});