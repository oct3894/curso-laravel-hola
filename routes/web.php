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
    echo "<h1>hola mundo<h1>";
    return view('welcome');
});
Route::get('/custom', function () {
    $msj = "mensaje desde la ruta :3";
    $data = ['msj' => $msj];
    return view('custom', $data);
});
