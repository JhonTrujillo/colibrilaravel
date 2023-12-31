<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get("/home2","App\Http\Controllers\Home2Controller@home2");
// Route::get("/contactenos","App\Http\Controllers\ContactenosController@contactenos");
// Route::get("/contactenos/{id?}","App\Http\Controllers\ContactenosController@vercontactenos");
// Route::put("/contactenos/{id?}","App\Http\Controllers\ContactenosController@editarcontactenos");
// Route::delete("/contactenos/{id?}/eliminar","App\Http\Controllers\ContactenosController@eliminarContactenos");
Route::get("/quienessomos","App\Http\Controllers\QuienessomosController@quienes");
Route::get("/login2","App\Http\Controllers\Login2Controller@login2");
Route::get("/cursos","App\Http\Controllers\CursosController@cursos");
Route::get("/construccion","App\Http\Controllers\ConstruccionController@construccion");
Route::get("/primaria","App\Http\Controllers\PrimariaController@primaria");
Route::get("/secundaria","App\Http\Controllers\SecundariaController@secundaria");

Route::resource('contactenos', "App\Http\Controllers\ContactenosControllerResources");


Route::post("/ejemplo","App\Http\Controllers\EjemplosController@CrearEjemplo");
Route::post("/contactenos","App\Http\Controllers\ContactenosController@Crearcontactenos");


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Auth::routes();
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);
    // dd($token->plainTextToken);
    return ['token' => $token->plainTextToken];
})->name("crear.token");