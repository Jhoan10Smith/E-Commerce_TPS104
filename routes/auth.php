<?php
use App\Http\Controllers\AuthController; 

Route::get('/auth', [AuthController::class,'index'])->name('auth.index');

Route::post('/login', [AuthController::class,'login'])->name('auth.login');

Route::get('/logout', [AuthController::class,'logout'])->name('auth.logout');


?>