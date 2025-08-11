<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\TesteController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})
// ->middleware('auth:sanctum')
;

Route::post('/login', [AuthController::class, 'login']);
Route::post('forget-password', [ForgotPasswordController::class, 'sendEmail']);
Route::post('valid-token', [ForgotPasswordController::class, 'validToken']);
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword']);

Route::get('/get_users', [TesteController::class, 'getAllUsers']);
Route::get('/list_users', [UserController::class, 'listUsers']);

Route::group(['middleware' => ['auth:sanctum', 'refreshTokenSanctum']], function () {
    Route::get('/auth/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->middleware(['abilities:list_usuario']);
        // Route::get('/list_users', [UserController::class, 'listUsers'])->middleware(['abilities:list_usuario']);
        Route::get('/list_profile/{profile_id}', [UserController::class, 'listProfileId'])->middleware(['abilities:list_usuario']);
        Route::get('/list_unity_profile/{unity_id}/{profile_id}', [UserController::class, 'listUnityProfileId'])->middleware(['abilities:list_usuario']);
        Route::get('/{id}', [UserController::class, 'show'])->middleware(['abilities:list_usuario']);
        Route::post('/', [UserController::class, 'beforeStore'])->middleware(['abilities:cad_usuario']);
        Route::patch('/{id}', [UserController::class, 'beforeUpdate'])->middleware(['abilities:cad_usuario']);
        Route::delete('/{id}', [UserController::class, 'destroy'])->middleware(['abilities:del_usuario']);
        Route::put('/restore/{id}', [UserController::class, 'restore'])->middleware(['abilities:del_usuario']);
        Route::patch('/link/userUnityProfile/{id}', [UserController::class, 'linkUserUnityProfile'])->middleware(['abilities:cad_usuario'])->name('users.linkUserUnityProfile');
        Route::get('/get/userUnityProfile/{id}', [UserController::class, 'getLinksUserUnityProfile'])->middleware(['abilities:cad_usuario'])->name('users.getLinksUserUnityProfile');
        Route::delete('/remove/userUnity/{id}', [UserController::class, 'removeLinkUserUnity'])->middleware(['abilities:cad_usuario'])->name('users.removeLinkUserUnity');
        Route::delete('/remove/userUnityProfile/{id}', [UserController::class, 'removeLinkUserUnityProfile'])->middleware(['abilities:cad_usuario'])->name('users.removeLinkUserUnityProfile');
    });
});