<?php

use App\Http\Controllers\EmpleadoController;

//Listar
Route::get('/empleados', [EmpleadoController::class,'index'])->name('empleado.index');

// Route::get('/empleados/editar/',[EmpleadoController::class,'editar'])->name('empleado.editar');

Route::get('/empleados/delete/{empleado}', [EmpleadoController::class,'delete'])->name('empleado.delete');


?>