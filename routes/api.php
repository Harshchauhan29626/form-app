<?php

use App\Http\Controllers\Api\FormSubmissionController;
use Illuminate\Support\Facades\Route;

Route::post('/submissions', [FormSubmissionController::class, 'store'])->name('api.submissions.store');
