<?php
use App\Http\Controllers\ProveedorController;

Route::get('/proveedores', [ProveedorController::class,'index'])->name('proveedor.index');

Route::get('/proveedores/eliminar/{proveedor}',[ProveedorController::class,'delete'])->name('proveedor.delete');

Route::get('/proveedor/editar/{proveedor}',[ProveedorController::class,'edit'])->name('proveedor.edit');

?>