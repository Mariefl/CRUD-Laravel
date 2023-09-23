<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EmployeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/employé', [EmployeController::class, 'liste_employé']);
Route::get('/ajouter', [EmployeController::class, 'ajouter_employé']);
Route::get('/modifier-employé/{id}', [EmployeController::class, 'modifier_employé']);
Route::get('/supprimer-employé/{id}', [EmployeController::class, 'supprimer_employé']);
Route::post('/ajouter/traitement', [EmployeController::class, 'ajouter_employé_traitement']);
Route::post('/modifier/traitement', [EmployeController::class, 'modifier_employé_traitement']);
