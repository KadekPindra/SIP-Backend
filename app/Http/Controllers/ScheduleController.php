<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    // Get all schedules with related data
    public function index()
    {
        $schedules = Schedule::with(['classroom', 'subject', 'teacher'])->get(); // Eager loading relasi
        return response()->json($schedules, 200);
    }

    // Store a new schedule
    public function store(Request $request)
    {
        $validated = $request->validate([
            'classroom_id' => 'required|exists:classrooms,id',
            'subject_id' => 'required|exists:subjects,id',
            'teacher_id' => 'required|exists:teachers,id',
            'day' => 'required|string|max:20',
            'time_start' => 'required|date_format:H:i',
            'time_end' => 'required|date_format:H:i|after:time_start',
        ]);

        $schedule = Schedule::create($validated);
        return response()->json($schedule->load(['classroom', 'subject', 'teacher']), 201); // Load relasi setelah penyimpanan
    }

    // Show a single schedule with related data
    public function show($id)
    {
        $schedule = Schedule::with(['classroom', 'subject', 'teacher'])->find($id); // Eager loading relasi

        if (!$schedule) {
            return response()->json(['message' => 'Schedule not found'], 404);
        }

        return response()->json($schedule, 200);
    }

    // Update a schedule
    public function update(Request $request, $id)
    {
        $schedule = Schedule::find($id);

        if (!$schedule) {
            return response()->json(['message' => 'Schedule not found'], 404);
        }

        $validated = $request->validate([
            'classroom_id' => 'required|exists:classrooms,id',
            'subject_id' => 'required|exists:subjects,id',
            'teacher_id' => 'required|exists:teachers,id',
            'day' => 'required|string|max:20',
            'time_start' => 'required|date_format:H:i',
            'time_end' => 'required|date_format:H:i|after:time_start',
        ]);

        $schedule->update($validated);
        return response()->json($schedule->load(['classroom', 'subject', 'teacher']), 200); // Load relasi setelah update
    }

    // Delete a schedule
    public function destroy($id)
    {
        $schedule = Schedule::find($id);

        if (!$schedule) {
            return response()->json(['message' => 'Schedule not found'], 404);
        }

        $schedule->delete();
        return response()->json(['message' => 'Schedule deleted'], 200);
    }
}
