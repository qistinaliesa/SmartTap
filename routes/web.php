<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('admin.home');
})->name('home');

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/basic-table', function () {
    return view('pages.basic-table');
})->name('basic.table');

Route::get('/chartjs', function () {
    return view('pages.chartjs');
})->name('chartjs');

Route::get('/basic_elements', function () {
    return view('pages.basic_elements');
})->name('form.elements');
Route::get('/mdi', function () {
    return view('pages.mdi');
})->name('mdi');
Route::get('/buttons', function () {
    return view('pages.buttons');
})->name('buttons');

Route::get('/typography', function () {
    return view('pages.typography');
})->name('typography');




