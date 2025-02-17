<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }

    public function teacher()
{
    return $this->belongsTo(Teacher::class);
}

}
