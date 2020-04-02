<?php

namespace App\Course_Rep\Message;

use Illuminate\Database\Eloquent\Model;

class PersonalMessage extends Model
{
    //

    protected $fillable = [
        'message',
        'sent_by',
    ];
}
