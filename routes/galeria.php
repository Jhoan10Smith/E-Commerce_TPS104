<?php   
use App\Http\Controllers\GaleriaController;

Route::get('/galeria', [GaleriaController::class,'index'])->name('galeria.index')->middleware('myAuth');;

Route::get('/',[GaleriaController::class,'home'])->name('home');

Route::get('/galeria/delete/{galeria}',[GaleriaController::class,'delete'])->name('galeria.delete');

Route::get('/galeria/edit/{galeria}',[GaleriaController::class,'edit'])->name('galeria.edit')->middleware('myAuth');;

Route::put('/galeria/update/{galeria}',[GaleriaController::class,'update'])->name('galeria.update');

Route::get('/galeria/new',[GaleriaController::class,'new'])->name('galeria.new')->middleware('myAuth');;

Route::post('/galeria/create',[GaleriaController::class,'create'])->name('galeria.create');

?>