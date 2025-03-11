<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceRecordController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('teste-api', function(){
    return ['message' => 'new API Laravel 11'];
});

// Rotas para service-records
Route::apiResource('service-records', ServiceRecordController::class);

// Rotas manuais (opcional, apenas se necessário)
Route::get('/service-records', [ServiceRecordController::class, 'index']);
Route::post('/service-records', [ServiceRecordController::class, 'store']);
Route::get('/service-records/{id}', [ServiceRecordController::class, 'show']);
Route::put('/service-records/{id}', [ServiceRecordController::class, 'update']);
Route::patch('/service-records/{id}', [ServiceRecordController::class, 'update']);
Route::delete('/service-records/{id}', [ServiceRecordController::class, 'destroy']);
