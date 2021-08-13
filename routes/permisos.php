<?php
use App\Http\Controllers\PermisosController;

Route::get('/permisos', [PermisosController::class,'index'])->name('permisos.index')->middleware('myAuth');

Route::get('/permisos/eliminar/{permisos}',[PermisosController::class,'delete'])->name('permisos.delete');

Route::get('/permisos/editar/{permisos}',[PermisosController::class,'edit'])->name('permisos.edit')->middleware('myAuth');

Route::put('/permisos/update/{permisos}',[PermisosController::class,'update'])->name('permisos.update');

Route::get('/permisos/new',[PermisosController::class,'new'])->name('permisos.new')->middleware('myAuth');

Route::post('/permisos/save',[PermisosController::class,'save'])->name('permisos.save');

?>