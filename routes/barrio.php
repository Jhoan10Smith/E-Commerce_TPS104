<?php
use App\Http\Controllers\barrioController;

Route::get('/barrios', [barrioController::class,'index'])->name('barrio.index');

Route::get('/barrio/delete/{barrio}',[barrioController::class,'delete'])->name('barrio.delete');

Route::get('/barrio/edit/{barrio}',[barrioController::class,'edit'])->name('barrio.edit');

Route::put('/barrio/update/{barrio}',[barrioController::class,'update'])->name('barrio.update');

Route::get('/barrio/new',[barrioController::class,'new'])->name('barrio.new');

Route::post('/barrio/create',[barrioController::class,'create'])->name('barrio.create');

?>