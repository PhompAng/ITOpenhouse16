<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ITQuiz extends Model
{
    protected $table = 'itquiz';

    protected $fillable = ['team_name', 'member', 'school', 'school_addr', 'school_province',
                            'teacher_name', 'teacher_surname', 'teacher_email', 'teacher_phone'];
}
