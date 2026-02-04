<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormSubmissionController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submissions', [FormSubmissionController::class, 'store'])->name('submissions.store');
