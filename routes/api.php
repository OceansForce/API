<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErabiltzaileakController;
use App\Http\Controllers\Erabiltzailea2Controller;
use App\Http\Controllers\LoginController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('erabiltzailea', [Erabiltzailea2Controller::class, 'show']);
Route::get('erabiltzaileak', [ErabiltzaileakController::class, 'show']);


Route::post('login', [LoginController::class, 'login']); // Ruta para login
//Route::post('logout', [LoginController::class, 'logout'])->middleware('auth:sanctum'); 