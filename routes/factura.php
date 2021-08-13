<?php

use App\Http\Controllers\facturaController;

Route::get('/facturas',[facturaController::class,'index'])->name('factura.index')->middleware('myAuth');;

Route::get('/factura/edit/{factura}',[facturaController::class,'edit'])->name('factura.edit')->middleware('myAuth');;


?>