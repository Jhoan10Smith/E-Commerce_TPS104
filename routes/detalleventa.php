<?php
use App\Http\Controllers\detalleventaController;

Route::get('/detalleventa/{venta}', [detalleventaController::class,'index'])->name('venta.index')->middleware('myAuth');; 

Route::get('/detalleventa/delete/{venta}',[detalleventaController::class,'delete'])->name('venta.delete');

Route::get('/detalleventa/edit/{venta}',[detalleventaController::class,'edit'])->name('venta.edit')->middleware('myAuth');;

Route::put('/detalleventa/update/{venta}',[detalleventaController::class,'update'])->name('venta.update');

Route::get('/detalleventa/new',[detalleventaController::class,'new'])->name('venta.new')->middleware('myAuth');;

Route::post('detalleventa/create',[detalleventaController::class,'create'])->name('venta.create');
?>