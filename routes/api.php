<?php

use App\Http\Controllers\Api\FormSubmissionController;
use Illuminate\Support\Facades\Route;

Route::get('/form-submissions', [FormSubmissionController::class, 'index']);
Route::get('/form-submissions/{id}', [FormSubmissionController::class, 'show']);
Route::post('/form-submissions', [FormSubmissionController::class, 'store']);
Route::put('/form-submissions/{id}', [FormSubmissionController::class, 'update']);
Route::delete('/form-submissions/{id}', [FormSubmissionController::class, 'destroy']);
