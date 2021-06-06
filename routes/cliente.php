<?php
use App\Http\Controllers\ClienteController;

Route::get('/clientes', [ClienteController::class,'index'])->name('cliente.index');

Route::get('/cliente/delete/{cliente}',[ClienteController::class,'delete'])->name('cliente.delete');

Route::get('/cliente/edit/{cliente}',[ClienteController::class,'edit'])->name('cliente.edit');

Route::put('/cliente/update/{cliente}',[ClienteController::class,'update'])->name('cliente.update');

Route::get('/cliente/new',[ClienteController::class,'new'])->name('cliente.new');

Route::post('/cliente/create',[ClienteController::class,'create'])->name('cliente.create');

?>