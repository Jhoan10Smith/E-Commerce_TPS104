<?php

use App\Http\Controllers\FacturaController;

Route::get('/facturas',[FacturaController::class,'index'])->name('factura.index');

Route::get('/factura/edit/{factura}',[FacturaController::class,'edit'])->name('factura.edit');

Route::put('/factura/update/{factura}',[FacturaController::class,'update'])->name('factura.update');

Route::get('/factura/delete/{factura}',[FacturaController::class,'delete'])->name('factura.delete');

Route::get('/factura/new',[FacturaController::class,'new'])->name('factura.new');

Route::post('/factura/save',[FacturaController::class,'save'])->name('factura.save');

?>