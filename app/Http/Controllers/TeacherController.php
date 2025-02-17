<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with(['subject', 'user'])->get();
        return response()->json($teachers, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
        ]);

        $teacher = Teacher::create($validated);
        return response()->json($teacher, 201);
    }

    public function show($id)
    {
        $teacher = Teacher::find($id);

        if (!$teacher) {
            return response()->json(['message' => 'Teacher not found'], 404);
        }

        return response()->json($teacher, 200);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);

        if (!$teacher) {
            return response()->json(['message' => 'Teacher not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $id,
        ]);

        $teacher->update($validated);
        return response()->json($teacher, 200);
    }

    public function destroy($id)
    {
        $teacher = Teacher::find($id);

        if (!$teacher) {
            return response()->json(['message' => 'Teacher not found'], 404);
        }

        $teacher->delete();
        return response()->json(['message' => 'Teacher deleted'], 200);
    }
}
