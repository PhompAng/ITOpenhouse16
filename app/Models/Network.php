<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    protected $table = 'network';

    protected $fillable = ['team_name', 'rank', 'member', 'school', 'school_addr', 'school_province', 'teacher_prefix',
        'teacher_name', 'teacher_surname', 'teacher_email', 'teacher_phone'];
}
