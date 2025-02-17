<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule',
        'classroom_id',
        'subject_id',
        'teacher_id',
        'room',
        'day',
        'start_time',
        'end_time',
    ];
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

     public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}