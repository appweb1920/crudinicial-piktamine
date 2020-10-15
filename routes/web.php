<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorGeneral;
use App\Http\Controllers\CpuntosReciclaje;
use App\Http\Controllers\CRecolectores;


Route::get('/',[ControladorGeneral::class,'index'])->name('r-index');//

//Recolectores

Route::get('/Recolectores',[CRecolectores::class,'inicio'])->name('r-rec');//

Route::post('Recolectores/submit',[CRecolectores::class,'submit'])->name('r-submit');//

Route::get('/Recolectores/editar/{id}',[CRecolectores::class,'editar'])->name('r-editaR');

Route::get('/Recolectores/elimina/{id}',[CRecolectores::class,'eliminar'])->name('r-eliminaR');

//Puntos de reciclaje

Route::get('/PuntosReciclaje',[CpuntosReciclaje::class,'inicio'])->name('r-pr');//

