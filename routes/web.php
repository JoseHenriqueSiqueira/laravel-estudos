<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMain;
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', [ControllerMain::class, 'chat']);

Route::prefix('emails')->group(function () {
    Route::get('/', [ControllerMain::class, 'emails']);
    Route::post('/enviar', [ControllerMain::class, 'emailsQueue'])->name('emailsQueue');
});
