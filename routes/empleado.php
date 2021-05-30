<?php

use App\Http\Controllers\EmpleadoController;

//Listar
Route::get('/empleados', [EmpleadoController::class,'index'])->name('empleado.index');

Route::get('/empleados/delete/{empleado}', [EmpleadoController::class,'delete'])->name('empleado.delete');

Route::get('/empleados/edit/{empleado}',[EmpleadoController::class,'edit'])->name('empleado.edit');

Route::put('/empleados/update/{empleado}',[EmpleadoController::class,'update'])->name('empleado.update');

Route::get('/empleado/new',[EmpleadoController::class,'new'])->name('empleado.new');

Route::post('/empleado/save',[EmpleadoController::class,'save'])->name('empleado.save');

?>