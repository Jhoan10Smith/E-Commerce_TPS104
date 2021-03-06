<?php
use App\Http\Controllers\ciudadController;

Route::get('/ciudades', [ciudadController::class,'index'])->name('ciudad.index')->middleware('myAuth');;

Route::get('/ciudad/delete/{ciudad}',[ciudadController::class,'delete'])->name('ciudad.delete');

Route::get('/ciudad/edit/{ciudad}',[ciudadController::class,'edit'])->name('ciudad.edit')->middleware('myAuth');;

Route::put('/ciudad/update/{ciudad}',[ciudadController::class,'update'])->name('ciudad.update')->middleware('myAuth');;

Route::get('/ciudad/new',[ciudadController::class,'new'])->name('ciudad.new')->middleware('myAuth');;

Route::post('/ciudad/create',[ciudadController::class,'create'])->name('ciudad.create');

?>