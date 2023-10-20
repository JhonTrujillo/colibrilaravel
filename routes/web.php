<?php

use Illuminate\Support\Facades\Route;

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
Route::get("/ejemplo","App\Http\Controllers\EjemplosController@ejemplo");
Route::get("/home","App\Http\Controllers\HomeController@home");
Route::get("/contactenos","App\Http\Controllers\ContactenosController@contactenos");
Route::get("/quienessomos","App\Http\Controllers\QuienessomosController@quienes");
Route::get("/login","App\Http\Controllers\LoginController@login");
Route::get("/cursos","App\Http\Controllers\CursosController@cursos");
Route::get("/construccion","App\Http\Controllers\ConstruccionController@construccion");
Route::get("/primaria","App\Http\Controllers\ConstruccionController@construccion");
Route::get("/secundaria","App\Http\Controllers\ConstruccionController@construccion");

