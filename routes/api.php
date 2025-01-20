<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErabiltzaileakController;
use App\Http\Controllers\Erabiltzailea2Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModuloakController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('erabiltzailea', [Erabiltzailea2Controller::class, 'show']);
Route::get('erabiltzaileak', [ErabiltzaileakController::class, 'show']);


Route::post('login', [LoginController::class, 'login']); // Ruta para login
//Route::post('logout', [LoginController::class, 'logout'])->middleware('auth:sanctum'); 

Route::get('moludoak', [ModuloakController::class, 'index']);
//Route::get('moludoak/create', [ModuloakController::class, 'create']);
Route::post('moludoak/post', [ModuloakController::class, 'store']);
//Route::get('moludoak/{moludoa}/edit', [ModuloakController::class, 'edit']);
Route::put('moludoak/{moduloak}', [ModuloakController::class, 'update']);
Route::delete('moludoak/{moduloak}', [ModuloakController::class, 'destroy']);

Route::get('moludoak/ikaslemoduluak', [ModuloakController::class, 'ikasle_modulu']);
