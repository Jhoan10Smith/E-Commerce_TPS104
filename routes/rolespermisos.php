<?php
use App\Http\Controllers\rolespermisosController;

Route::get('/rolespermiso', [rolespermisosController::class,'index'])->name('rolespermisos.index');

Route::get('/rolespermisos/delete/{rolespermisos}',[rolespermisosController::class,'delete'])->name('rolespermisos.delete');

Route::get('/rolespermisos/edit/{rolespermisos}',[rolespermisosController::class,'edit'])->name('rolespermisos.edit');

Route::put('/rolespermisos/update/{rolespermisos}',[rolespermisosController::class,'update'])->name('rolespermisos.update');

Route::get('/rolespermisos/new',[rolespermisosController::class,'new'])->name('rolespermisos.new');

Route::post('/rolespermisos/create',[rolespermisosController::class,'create'])->name('rolespermisos.create');


