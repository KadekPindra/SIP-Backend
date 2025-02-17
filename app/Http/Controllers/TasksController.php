<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    public function index()
    {
        $tasks = Tasks::with(['student', 'subject'])->get();
        return response()->json($tasks);
    }
    public function store(Request $request)
    {
        $user = auth()->user();

        if ($user->role !== 'student' || !$user->student) {
            return response()->json(['error' => 'Only students can create tasks'], 403);
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'subject_id' => 'required|exists:subjects,id',
            'due_date' => 'required|date',
        ]);

        $validated['student_id'] = $user->student->id;

        $task = Tasks::create($validated);

        return response()->json([
            'message' => 'Task created successfully',
            'task' => $task->load('subject'),
        ]);
    }

    public function show ($id)
    {
        $task = Tasks::with(['student', 'subject', 'subject.teacher'])->find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        return response()->json($task, 200);
    }

    public function update(Request $request, Tasks $task)
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'subject_id' => 'sometimes|exists:subjects,id',
            'due_date' => 'sometimes|date',
        ]);

        $task->update($validated);
        return response()->json([
            'message' => 'Task created successfully',
            'task' => $task->load('subject'),
        ]);
    }

    public function destroy(Tasks $task)
    {
        $task->delete();
        return response()->json(['message' => 'Task deleted successfully']);
    }
}