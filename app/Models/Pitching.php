<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pitching extends Model
{
    protected $table = 'pitching';

    protected $fillable = ['team_name', 'school', 'teacher_prefix',  'teacher_name', 'teacher_surname',
                            'teacher_phone', 'idea', 'idea_desc', 'bizcanvas', 'storyboard'];
}
