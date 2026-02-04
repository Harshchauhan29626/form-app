<?php

use App\Http\Controllers\Api\FormSubmissionController;
use Illuminate\Support\Facades\Route;

Route::get('/submissions', [FormSubmissionController::class, 'index'])->name('api.submissions.index');
Route::post('/submissions', [FormSubmissionController::class, 'store'])->name('api.submissions.store');
