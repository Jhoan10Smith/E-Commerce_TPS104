<?php
<<<<<<< HEAD
use App\Http\Controllers\articuloController;

Route::get('/articulos', [articuloController::class,'index'])->name('articulo.index');

Route::get('/articulo/delete/{articulo}',[articuloController::class,'delete'])->name('articulo.delete');

Route::get('/articulo/edit/{articulo}',[articuloController::class,'edit'])->name('articulo.edit');

Route::put('/articulo/update/{articulo}',[articuloController::class,'update'])->name('articulo.update');

Route::get('/articulo/new',[articuloController::class,'new'])->name('articulo.new');

Route::post('/articulo/create',[articuloController::class,'create'])->name('articulo.create');

?>
=======
use App\Http\Controllers\ArticuloController;

Route::get('/articulo',[ArticuloController::class,'index'])->name('articulo.index');

Route::get('/articulo/delete/{articulo}',[ArticuloController::class,'delete'])->name('articulo.delete');

Route::get('/articulo/edit/{articulo}',[ArticuloController::class,'edit'])->name('articulo.edit');

Route::put('/articulo/update/{articulo}',[ArticuloController::class,'update'])->name('articulo.update');

Route::get('/articulo/new',[ArticuloController::class,'new'])->name('articulo.new');

Route::post('/articulo/create',[ArticuloController::class,'create'])->name('articulo.create');

?>
>>>>>>> 5fbc6325a081f587c5e31a062327478ebb5ec416
