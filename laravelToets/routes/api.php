<?php
use App\Http\Controllers\API\TeacherController;
use App\Http\Controllers\API\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => '',
        'password' => ''
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['De inloggegevens kloppen niet.'],
        ]);
    }

    return ['token' => $user->createToken('api-token')->plainTextToken];
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('teachers', TeacherController::class);
    Route::apiResource('subjects', SubjectController::class);
});