<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
