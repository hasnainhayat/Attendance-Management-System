<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leaves extends Model
{
	protected $primaryKey = 'leave_id';
     protected $fillable = [
        'leave_id','student_id','reason','status','from','to',
    ];
}
