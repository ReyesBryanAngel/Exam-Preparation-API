<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExamResource;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExamController extends Controller
{
    public function createExam(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string'
        ]);

        Exam::create($validated);

        return response()->json([
            'code' => Response::HTTP_CREATED,
            'status' => 'success',
            'message' => 'Exam Created Successully',

        ], Response::HTTP_CREATED);
    }

    public function updateExam(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string'
        ]);

        $exam = Exam::findOrFail($id);

        $exam->update($validated);

        return response()->json([
            'code' => Response::HTTP_OK,
            'status' => 'success',
            'message' => 'Exam Updated Successully',

        ],Response::HTTP_OK);
    }

    public function deleteExam($id)
    {
        Exam::where('id', $id)->delete();
 
        return response()->json([
            'status' => Response::HTTP_OK,
            'message' => 'Sample has been deleted'
        ], Response::HTTP_OK);
    }

    public function getExam($id)
    {
        $exam = Exam::where('id', $id)->get();
        
        return ExamResource::collection($exam);
    }

    public function getExams()
    {
        return ExamResource::collection(Exam::all());
    }
}
