<?php
use App\Http\Controllers\ciudadController;

Route::get('/ciudades', [ciudadController::class,'index'])->name('ciudad.index');

Route::get('/ciudad/delete/{ciudad}',[ciudadController::class,'delete'])->name('ciudad.delete');

Route::get('/ciudad/edit/{ciudad}',[ciudadController::class,'edit'])->name('ciudad.edit');

Route::put('/ciudad/update/{ciudad}',[ciudadController::class,'update'])->name('ciudad.update');

Route::get('/ciudad/new',[ciudadController::class,'new'])->name('ciudad.new');

Route::post('/ciudad/create',[ciudadController::class,'create'])->name('ciudad.create');

?>