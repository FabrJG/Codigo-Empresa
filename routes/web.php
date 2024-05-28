<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('servicios/{parametro?}', function ($parametro=NULL) {
    return view('servicios.index', ['parametro'=>$parametro]);
})->where('parametro', '[A-Za-z]+');

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