<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FormSubmission;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FormSubmissionController extends Controller
{
    public function index(): JsonResponse
    {
        $submissions = FormSubmission::latest()->get();

        return response()->json([
            'data' => $submissions,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'mobile' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:150'],
            'city' => ['required', 'string', 'max:100'],
            'country' => ['required', 'string', 'max:100'],
            'state' => ['required', 'string', 'max:100'],
        ]);

        $submission = FormSubmission::create($validated);

        return response()->json([
            'message' => 'Form submitted successfully.',
            'data' => $submission,
        ], 201);
    }
}
