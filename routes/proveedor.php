<?php
use App\Http\Controllers\ProveedorController;

Route::get('/proveedores', [ProveedorController::class,'index'])->name('proveedor.index');

Route::get('/proveedores/eliminar/{proveedor}',[ProveedorController::class,'delete'])->name('proveedor.delete');

Route::get('/proveedor/editar/{proveedor}',[ProveedorController::class,'edit'])->name('proveedor.edit');

Route::put('/proveedor/update/{proveedor}',[ProveedorController::class,'update'])->name('proveedor.update');

Route::get('/proveedor/new',[ProveedorController::class,'new'])->name('proveedor.new');

Route::post('/proveedor/save',[ProveedorController::class,'save'])->name('proveedor.save');
?>