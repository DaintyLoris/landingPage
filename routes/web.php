<?php

use App\Http\Controllers\SitioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landingpage', [SitioController::class, 'landingpage']);

Route::get('/contacto/{codigo?}', [SitioController::class, 'contacto']);

Route::post('/recibe-form-contacto', [SitioController::class, 'recibeFormContacto']);

//Creacion de ruta de las funciones del controlador producto
//Route::get('/producto', [ProductoController::class, 'index']);
//Route::get('/producto/{id}', [ProductoController::class, 'show']);

//Route::resource('nombre_url_base', nombreControlador::class);

//el siguiente codigo asume que todos los parametros existen como index, create, etc.
//tendriamos que remplazar $id por $producto
Route::resource('producto', ProductoController::class);

Route::resource('libro', LibroController::class);