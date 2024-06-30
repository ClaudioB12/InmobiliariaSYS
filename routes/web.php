<?php

use App\Livewire\IndexLivewire;
use App\Livewire\InmueblesLivewire;
use App\Livewire\ProyectoLivewire;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('/',[IndexLivewire::class,'render'])->name('index');
Route::get('inmuebles',[InmueblesLivewire::class,'render'])->name('inmuebles');
Route::get('proyecto',[ProyectoLivewire::class,'render'])->name('proyecto');






require __DIR__.'/auth.php';
