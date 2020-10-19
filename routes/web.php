<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorGeneral;
use App\Http\Controllers\CpuntosReciclaje;
use App\Http\Controllers\CRecolectores;


Route::get('/',[ControladorGeneral::class,'index'])->name('r-index');//

//Recolectores

Route::get('/Recolectores',[CRecolectores::class,'inicio'])->name('r-rec');//

Route::post('/Recolectores/submit',[CRecolectores::class,'submit'])->name('r-submit');//

Route::get('/Recolectores/editar/{id}',[CRecolectores::class,'editar'])->name('r-editaR');

Route::get('/Recolectores/elimina/{id}',[CRecolectores::class,'eliminar'])->name('r-eliminaR');

Route::post('/Recolectores/guardaredicion',[CRecolectores::class,'guardaredicion'])->name('r-guardarR');

//Puntos de reciclaje

Route::get('/PuntosReciclaje',[CpuntosReciclaje::class,'inicio'])->name('r-pr');//

Route::post('/PuntosReciclaje/submit',[CpuntosReciclaje::class,'submit'])->name('r-submitpr');//

Route::get('/PuntosReciclaje/editar/{id}',[CpuntosReciclaje::class,'editar'])->name('r-editaRpr');

Route::get('/PuntosReciclaje/elimina/{id}',[CpuntosReciclaje::class,'eliminar'])->name('r-eliminaRpr');

Route::post('/PuntosReciclaje/guardaredicion',[CpuntosReciclaje::class,'guardaredicion'])->name('r-guardarRpr');

Route::post('/PuntosReciclaje/submitrel',[CpuntosReciclaje::class,'submitrel'])->name('r-submitrel');//

//Relacion
Route::get('/DetallesRelaciones',[ControladorGeneral::class,'inicio'])->name('r-det');//

Route::get('/DetallesRelaciones/eliminar/{id}',[ControladorGeneral::class,'eliminar'])->name('r-deteli');
