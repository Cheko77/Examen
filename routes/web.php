<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
    return view('login');
})->name('catalogo.login');


Route::get('/catalogo', 'App\Http\Controllers\CatalogoController@muestraCatalogo')->name('catalogo.index');
Route::post('/registraEmpleado', 'App\Http\Controllers\CatalogoController@registraEmpleado')->name('catalogo.registraEmpleado');

/*
  Route::get('/catalogo', function(){
    return view('Catalogo');
  });
*/
