<?php
use App\Http\Controllers\ClienteController;

Route::get('/clientes', [ClienteController::class,'index'])->name('cliente.index');

?>