<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;


Route::resource('pacientes', PacienteController::class);
Route::resource('medicos', MedicoController::class);

