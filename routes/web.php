<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/proyectos', ProyectoController::class)->middleware('auth');

Route::get('/pdf',[App\Http\Controller\ProyectoController::class,'getPDF'])->name('proyecto.pdf');

Route::get('/proyectos/imprimir','ProyectoController@imprimir');
