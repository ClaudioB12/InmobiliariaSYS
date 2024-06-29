<?php

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

require __DIR__.'/auth.php';
Route::get('inmuibles',[InmueblesLivewire::class,'render'])->name('inmuibles');
Route::get('proyecto',[ProyectoLivewire::class,'render'])->name('proyecto');
