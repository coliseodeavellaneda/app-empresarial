<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::resource('persona', PersonaController::class);
Route::resource('cliente', ClienteController::class);
Route::resource('producto', ProductoController::class);
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//   GET|HEAD        persona .......................... persona.index › PersonaController@index
//   POST            persona .......................... persona.store › PersonaController@store
//   GET|HEAD        persona/create ................... persona.create › PersonaController@create
//   GET|HEAD        persona/{persona} ............... persona.show › PersonaController@show
//   PUT|PATCH       persona/{persona} ............... persona.update › PersonaController@update
//   DELETE          persona/{persona} ............... persona.destroy › PersonaController@destroy
//   GET|HEAD        persona/{persona}/edit .......... persona.edit › PersonaController@edit