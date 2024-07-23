<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/*Route::get('personas','App\Http\Controllers\PersonasController@index')->name('personas.index');

Route::get('personas/crear','App\Http\Controllers\PersonasController@create')->name('personas.create');

Route::get('personas/{nPerCodigo}/editar','App\Http\Controllers\PersonasController@edit')->name('personas.edit');

Route::patch('personas/{nPerCodigo}','App\Http\Controllers\PersonasController@update')->name('personas.update');

Route::post('personas','App\Http\Controllers\PersonasController@store')->name('personas.store');

Route::get('personas/{nPerCodigo}','App\Http\Controllers\PersonasController@show')->name('personas.show');

Route::delete('personas/{persona}','App\Http\Controllers\PersonasController@destroy')->name('personas.destroy');*/

Route::resource('personas', 'App\Http\Controllers\PersonasController')->names('personas');

Route::get('proyectos/{parametro?}', function ($parametro=NULL) {
    return view('proyectos', ['parametro'=>$parametro]);
})->where('parametro', '[A-Za-z]+');

Route::get('clientes/{parametro?}', function ($parametro=NULL) {
    return view('clientes', ['parametro'=>$parametro]);
})->where('parametro', '[A-Za-z]+');

Route::get('blog/{parametro?}', function ($parametro=NULL) {
    return view('blog', ['parametro'=>$parametro]);
})->where('parametro', '[0-9]+');

Route::view('contacto','contacto')->name('contacto');

Route::post('contacto','App\Http\Controllers\ContactoController@store');

Auth::routes(['register' => false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
