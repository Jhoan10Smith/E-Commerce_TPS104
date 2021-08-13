<?php
use App\Http\Controllers\articuloController;

Route::get('/articulos', [articuloController::class,'index'])->name('articulo.index')->middleware('myAuth');;

Route::get('/articulo/delete/{articulo}',[articuloController::class,'delete'])->name('articulo.delete');

Route::get('/articulo/edit/{articulo}',[articuloController::class,'edit'])->name('articulo.edit')->middleware('myAuth');;

Route::put('/articulo/update/{articulo}',[articuloController::class,'update'])->name('articulo.update');

Route::get('/articulo/new',[articuloController::class,'new'])->name('articulo.new');

Route::post('/articulo/create',[articuloController::class,'create'])->name('articulo.create');


