<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response()->json($students, 200);
    }

    public function show($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        return response()->json($student, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'nis' => 'required|unique:students|numeric',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $student = Student::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'classroom_id' => $request->classroom_id,
        ]);

        return response()->json(['message' => 'Student created successfully', 'student' => $student], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'nis' => 'required|numeric',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $student->name = $request->name;
        $student->nis = $request->nis;
        $student->classroom_id = $request->classroom_id;
        $student->phone_number = $request->phone_number;
        $student->description = $request->description;
        $student->save();

        return response()->json(['message' => 'Student updated successfully', 'student' => $student], 200);
    }

    public function destroy($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $student->delete();

        return response()->json(['message' => 'Student deleted successfully'], 200);
    }
}
