<?php

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

Route::get('/CobranzasMatricula/{idVeterinario}', 'App\Http\Controllers\Voyager\PagosMatriculaController@pago_cliente');

Route::get('/pagos', 'App\Http\Controllers\Voyager\PagosMatriculaController@indexDT');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
