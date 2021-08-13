<?php
use App\Http\Controllers\UsuarioController;

Route::get('/usuario', [UsuarioController::class,'index'])->name('usuario.index')->middleware('myAuth');

Route::get('/usuario/delete/{usuario}',[UsuarioController::class,'delete'])->name('usuario.delete');

Route::get('/usuario/edit/{usuario}',[UsuarioController::class,'edit'])->name('usuario.edit');

Route::put('/usuario/update/{usuario}',[UsuarioController::class,'update'])->name('usuario.update');

Route::get('/usuario/new',[UsuarioController::class,'new'])->name('usuario.new');

Route::post('/usuario/create',[UsuarioController::class,'create'])->name('usuario.create');

// Rutas cliente

Route::post('/usuario/newClient',[UsuarioController::class,'newClient'])->name('usuario.newClient');

Route::get('/usuario/account',[UsuarioController::class,'account'])->name('usuario.account');

Route::get('/usuario/accountEdit/{usuario}',[UsuarioController::class,'accountEdit'])->name('usuario.accountEdit');

Route::put('/usuario/accountUpdate/{usuario}',[UsuarioController::class,'accountUpdate'])->name('usuario.accountUpdate');

?>