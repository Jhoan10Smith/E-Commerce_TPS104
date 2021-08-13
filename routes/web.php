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

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

Route::get('/template', function(){
	return view('template.templateBase');
});

Route::get('/admin', function(){
	return view('admin');
})->name('admin')->middleware('myAuth');

Route::get('/documentacion', function(){
	return view('documentacion');
})->name('document');

require_once('articulo.php');
require_once('auth.php');
require_once('cart.php');
require_once('ciudad.php');
require_once('detalleventa.php');
require_once('factura.php');
require_once('galeria.php');
require_once('permisos.php');
require_once('proveedor.php');
require_once('roles.php');
require_once('rolespermisos.php');
require_once('usRol.php');
require_once('usuario.php');



