<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InmuebleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('inmuebles',[InmuebleController::class,'index']);
Route::post('inmuebles',[InmuebleController::class,'store']);
Route::put('inmuebles/{inmueble}',[InmuebleController::class,'update']);
Route::get('inmuebles/{inmueble}',[InmuebleController::class,'show']);
Route::delete('inmuebles/{inmueble}',[InmuebleController::class,'destroy']);

Route::get('clientes',[ClienteController::class,'index']);
Route::post('clientes',[ClienteController::class,'store']);
Route::put('clientes/{cliente}',[ClienteController::class,'update']);
Route::get('clientes/{cliente}',[ClienteController::class,'show']);
Route::delete('clientes/{cliente}',[ClienteController::class,'destroy']);
