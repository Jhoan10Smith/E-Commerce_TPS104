<?php
use app\Http\Controllers\ArticuloController;

Route::get('/articulo', ([ArticuloController::class,'index'])->name('articulo.index');

?>
