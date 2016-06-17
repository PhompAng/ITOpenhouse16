<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guest';

    protected $fillable = ['prefix', 'name', 'surname', 'gender', 'age',
        'career', 'province', 'phone', 'email', 'facebook', 'twitter', 'news'];
}