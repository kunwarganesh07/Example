<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'address', 'contact'];


    public function student()
    {
        return $this->belongsToMany(Student::class);
    }
}
