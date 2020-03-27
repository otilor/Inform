<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalMessage extends Model
{
    //
    protected $fillable = ['sent_by', 'message'];
}
