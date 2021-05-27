<?php
use App\Http\Controllers\ProveedorController;

Route::get('/proveedores', [ProveedorController::class,'index'])->name('proveedor.index');

?>