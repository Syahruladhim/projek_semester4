<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/hitung', [HitungController::class, 'index'])->name('hitung.index');
Route::resource('/nilai', NilaiController::class)->parameters(['nilai' => 'nilai']);
Route::resource('/kriteria', KriteriaController::class)->parameters(['kriteria' => 'kriteria']);
Route::resource('/alternatif', AlternatifController::class)->parameters(['alternatif' => 'alternatif']);
Route::get('/',  [PageController::class, 'home'])->name('home');
Route::get('/kriteria/{id}/edit', [KriteriaController::class, 'edit'])->name('kriteria.edit');
Route::put('/kriteria/{id}', [KriteriaController::class, 'update'])->name('kriteria.update');
