<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';

    protected $fillable = ['status',
        'status_des',
        'know',
        'know_des',
        'reason',
        'reason_des',
        'interest',
        'interest_des',
        'interest_fac',
        'interest_uni',
        'news',
        'news_addr',
        'news_email',
        'activity',
        't1',
        't2',
        't3',
        't4',
        't5',
        't6',
        't7',
        't8',
        't9',
        't10',
        't11',
        't12',
        't13',
        't14',
        't15',
        't16',
        't17',
        't18',
        't19',
        't20',
        't21',
        't22',
        'comment',
        'code',
        'know_web',
        'gift'];

    public function getReasonAttribute($value) {
        return json_decode($value, true);
    }

    public function getActivityAttribute($value) {
        return json_decode($value, true);
    }

    public function getKnowAttribute($value) {
        return json_decode($value, true);
    }
}
