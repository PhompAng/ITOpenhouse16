<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestSchool extends Model
{
    protected $table = 'guest_school';

    protected $fillable = ['prefix', 'name', 'surname', 'gender', 'age', 'school',
        'follower', 'province', 'phone', 'email', 'facebook', 'twitter', 'news'];
}