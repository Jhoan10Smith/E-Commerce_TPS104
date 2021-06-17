<?php
use App\Http\Controllers\DetalleventaController;

Route::get('/detalleventa', [DetalleventaController::class,'index'])->name('venta.index');

Route::get('/detalleventa/delete/{venta}',[DetalleventaController::class,'delete'])->name('venta.delete');

Route::get('/detalleventa/edit/{venta}',[DetalleventaController::class,'edit'])->name('venta.edit');

Route::put('/detalleventa/update/{venta}',[DetalleventaController::class,'update'])->name('venta.update');

Route::get('/detalleventa/new',[DetalleventaController::class,'new'])->name('venta.new');

Route::post('detalleventa/create',[DetalleventaController::class,'create'])->name('venta.create');

?>