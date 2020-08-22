<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
	protected $primaryKey = 'attendance_id';
     protected $fillable = [
        'attendance_id', 'status', 'student_id',
    ];
}
