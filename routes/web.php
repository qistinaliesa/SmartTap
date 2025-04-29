<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('admin.home');
});

Route::get('/admin', [AdminController::class, 'dashboard']);
