<?php

namespace App\Course_Rep;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'phone_number',
        'added_by',
    ];
}
