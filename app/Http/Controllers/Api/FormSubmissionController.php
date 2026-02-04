<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FormSubmission;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class FormSubmissionController extends Controller
{
    public function index(): JsonResponse
    {
        $submissions = FormSubmission::all();

        return response()->json([
            'status' => true,
            'message' => 'Form submissions retrieved successfully.',
            'data' => $submissions,
        ]);
    }

    public function show(int $id): JsonResponse
    {
        $submission = FormSubmission::find($id);

        if (! $submission) {
            return response()->json([
                'status' => false,
                'message' => 'Form submission not found.',
                'data' => null,
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Form submission retrieved successfully.',
            'data' => $submission,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'mobile' => ['required', 'string'],
            'email' => ['required', 'email'],
            'city' => ['required', 'string'],
            'country' => ['required', 'string'],
            'state' => ['required', 'string'],
        ]);

        $submission = FormSubmission::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Form submission created successfully.',
            'data' => $submission,
        ], 201);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $submission = FormSubmission::find($id);

        if (! $submission) {
            return response()->json([
                'status' => false,
                'message' => 'Form submission not found.',
                'data' => null,
            ], 404);
        }

        $validated = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'mobile' => ['required', 'string'],
            'email' => ['required', 'email'],
            'city' => ['required', 'string'],
            'country' => ['required', 'string'],
            'state' => ['required', 'string'],
        ]);

        $submission->update($validated);

        return response()->json([
            'status' => true,
            'message' => 'Form submission updated successfully.',
            'data' => $submission,
        ]);
    }

    public function destroy(int $id): JsonResponse
    {
        $submission = FormSubmission::find($id);

        if (! $submission) {
            return response()->json([
                'status' => false,
                'message' => 'Form submission not found.',
                'data' => null,
            ], 404);
        }

        $submission->delete();

        return response()->json([
            'status' => true,
            'message' => 'Form submission deleted successfully.',
            'data' => null,
        ]);
    }
}
