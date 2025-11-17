<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
     protected $fillable = ['name', 'address', 'contact'];
}
