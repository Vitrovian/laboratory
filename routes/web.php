<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/practices', [PracticesController::class, 'show']);
