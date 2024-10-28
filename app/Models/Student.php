<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'email'
    ];

    public function exam()
    {
        return $this->hasMany(Exam::class);
    }
}
