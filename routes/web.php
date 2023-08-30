<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use  App\Http\Controllers\AdministradorController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::controller(loginController::class)->group(function(){
    Route::get('/','inicioLogin')->name('inicio');
    Route::post('/login','validar')->name('validarLogin');
});

Route::controller(AdministradorController::class)->group(function(){
    Route::get('/dashboard','getDatos')->name('getDato');    
});
