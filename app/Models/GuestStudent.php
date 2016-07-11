<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestStudent extends Model
{
    protected $table = 'guest_student';

    protected $fillable = ['prefix', 'name', 'surname', 'gender', 'age', 'major',
        'branch', 'degree', 'province', 'phone', 'email', 'facebook', 'twitter', 'news'];

}