<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/formularioCuerpoEjercito',[ArmycorpController::class,'create']);
Route::post('/crearCuerpo',[ArmycorpController::class,'agg_corp'])->name('armycorp.ss');

Route::get('/formularioCuartel',[BarracksController::class,'create']);
Route::post('/crearCuartel',[BarracksController::class,'agg_barracks'])->name('barracks.ss');

Route::get('/formularioCompania',[CompanyController::class,'create']);
Route::post('/crearCompania',[CompanyController::class,'agg_company'])->name('company.ss');

Route::get('/consultas',[ConsultasController::class,'consulta']);


