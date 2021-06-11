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
    return view('home');
})->name('home');

Route::get('/template', function(){
	return view('template.templateBase');
});

Route::get('/admin', function(){
	return view('admin');
});

Route::get('/documentacion', function(){
	return view('documentacion');
})->name('document');

require_once('empleado.php');
require_once('cliente.php');
require_once('proveedor.php');
require_once('detalleventa.php');
require_once('factura.php');
require_once('articulo.php');
