<?php
use App\Http\Controllers\UsRolController;

Route::get('/usRol', [UsRolController::class,'index'])->name('usRol.index')->middleware('myAuth');

Route::get('/usRol/eliminar/{usRol}',[UsRolController::class,'delete'])->name('usRol.delete');

Route::get('/usRol/editar/{usRol}',[UsRolController::class,'edit'])->name('usRol.edit')->middleware('myAuth');

Route::put('/usRol/update/{usRol}',[UsRolController::class,'update'])->name('usRol.update');

Route::get('/usRol/new',[UsRolController::class,'new'])->name('usRol.new')->middleware('myAuth');

Route::post('/usRol/save',[UsRolController::class,'save'])->name('usRol.save');

?>