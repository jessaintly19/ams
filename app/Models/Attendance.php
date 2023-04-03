<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function student()
    {
        return $this->hasOne(student::class, 'id_student', 'student_id');
    }
}
