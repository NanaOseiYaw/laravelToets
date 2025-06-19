<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/subjects', [ViewController::class, 'subjects']);
Route::get('/teachers', [ViewController::class, 'teachers']);

