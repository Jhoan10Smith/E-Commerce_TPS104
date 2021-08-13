<?php
use App\Http\Controllers\RolesController;

Route::get('/roles', [RolesController::class,'index'])->name('roles.index')->middleware('myAuth');

Route::get('/roles/eliminar/{roles}',[RolesController::class,'delete'])->name('roles.delete');

Route::get('/roles/editar/{roles}',[RolesController::class,'edit'])->name('roles.edit')->middleware('myAuth');

Route::put('/roles/update/{roles}',[RolesController::class,'update'])->name('roles.update');

Route::get('/roles/new',[RolesController::class,'new'])->name('roles.new')->middleware('myAuth');

Route::post('/roles/save',[RolesController::class,'save'])->name('roles.save');

?>