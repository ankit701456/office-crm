<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
         protected $fillable = [
        'date',
        'user_id',
        'check_in',
        'status',
    ];

        public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
