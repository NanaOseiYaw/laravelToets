<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TeacherController;
use App\Http\Controllers\API\SubjectController;

Route::apiResource('teachers', TeacherController::class);
Route::apiResource('subjects', SubjectController::class);
