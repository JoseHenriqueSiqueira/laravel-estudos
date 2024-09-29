<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMain;
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', [ControllerMain::class, 'chat']);
